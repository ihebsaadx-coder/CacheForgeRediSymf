<?php
namespace App\Service;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Predis\Client;

class PostService
{
    private EntityManagerInterface $entityManager;
    private Client $redis;

    public function __construct(EntityManagerInterface $entityManager, Client $redis)
    {
        $this->entityManager = $entityManager;
        $this->redis = $redis;
    }

    public function createPost(string $content): Post
    {
        // 1. Tokenization (simulating a simple split)
        $keywords = explode(" ", strtolower($content));

        // 2. Save Post in MySQL
        $post = new Post();
        $post->setContent($content);
        $post->setKeywords($keywords);
        $this->entityManager->persist($post);
        $this->entityManager->flush();

        // 3. Store Post ID in Redis by Keywords
        foreach ($keywords as $keyword) {
            $this->redis->rpush("partition_$keyword", $post->getId());
        }

        return $post;
    }

    public function searchByKeyword(string $keyword): array
    {
        $postIds = $this->redis->lrange("partition_$keyword", 0, -1);

        return $this->entityManager
            ->getRepository(Post::class)
            ->findBy(['id' => $postIds]);
    }
}
