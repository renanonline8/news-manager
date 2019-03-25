<?php
namespace App\Post;

use Mock\MockPost;

class GetPosts
{
    private $list;

    public function __construct()
    {
        $xml = \App\External\GetPostsExt::request();
        
        $this->list = new ListPosts();
        foreach($xml->channel as $XMLpost){
            $news = \Model\News::find_by_title($XMLpost->title);
            if (empty($news)) {
                $news = new \Model\News();
                $news->title = $XMLpost->title;
                $news->description = $XMLpost->description;
                $news->save();
                $news = \Model\News::find_by_title($XMLpost->title);
            }
            $this->list->add(new Post($news->id, $news->title, $news->description, $news->created_at));
        }
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