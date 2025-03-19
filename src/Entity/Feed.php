<?php
// src/Entity/Feed.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeedRepository")
 */
class Feed
{
    // Primary key for the Feed entity
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    // The user ID that this feed belongs to
    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Post")
     * @ORM\JoinTable(name="feed_posts",
     *      joinColumns={@ORM\JoinColumn(name="feed_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="post_id", referencedColumnName="id")}
     * )
     */
    private $posts;

    public function __construct()
    {
        $this->posts = new ArrayCollection(); // Initialize the posts collection
    }

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function setPosts(Collection $posts): self
    {
        $this->posts = $posts;
        return $this;
    }

    // Method to add a post to the feed
    public function addPostToFeed(Post $post): void
    {
        // Add the post to the feed
        $this->posts[] = $post;

        // Evict the oldest posts if the feed exceeds 200 posts
        if (count($this->posts) > 200) {
            // Remove the oldest post (first post in the collection)
            $this->posts->remove(0); // Remove the first post (oldest)
        }
    }

    // Method to remove a post from the feed
    public function removePostFromFeed(int $postId): void
    {
        // Find the post in the feed
        foreach ($this->posts as $key => $post) {
            if ($post->getId() === $postId) {
                // Remove the post from the collection
                $this->posts->remove($key);
                break;
            }
        }
    }
}
