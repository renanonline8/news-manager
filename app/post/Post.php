<?php
namespace App\Post;

class Post
{
    private $id;
    private $title;
    private $description;
    private $createdAt;

    public function __construct(Int $id, String $title, String $description, String $createdAt)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->createdAt = $createdAt;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function toArray() {
        return [
            'id' => $this->getID(),
            'title' => $this->getTitle(),
            'description' => $this->getDescription(),
            'created_at' => $this->getCreatedAt()
        ];
    }
}