<?php
namespace App\Post;

use Mock\MockPost;

class GetPosts
{
    private $list;

    public function __construct()
    {
        $this->list = new ListPosts();
        $this->list->add(MockPost::idOne());
        $this->list->add(MockPost::idTwo());
    }

    public function getListToArray(): Array
    {
        return ($this->list)->toArray();
    }

    public function findByIDs(Array $arrID): Array
    {
        $array = array();
        $posts = $this->list->getPosts();
        foreach ($posts as $post) {
            if (in_array($post->getID(), $arrID)) {
                array_push($array, $post);
            }
        }
        return $array;
    }
}