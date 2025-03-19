<?php
// src/Message/CreatePostMessage.php
namespace App\Message;

class CreatePostMessage
{
    private $postId;
    private $userId;

    public function __construct(int $postId, int $userId)
    {
        $this->postId = $postId;
        $this->userId = $userId;
    }

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}
