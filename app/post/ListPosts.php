<?php
namespace App\Post;

class ListPosts
{
    private $posts;

    public function __construct()
    {
        $this->posts = array();
    }

    public function add(Post $post)
    {
        array_push($this->posts, $post);
    }

    public function getPosts()
    {
        $array = array();
        foreach($this->posts as $post) {
            array_push($array, $post);
        }
        return $array;
    }

    public function toArray(): Array
    {
        $array = array();
        foreach ($this->posts as $post) {
            array_push($array, $post->toArray());
        }
        return $array;
    }
}