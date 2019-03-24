<?php
namespace App\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Utils\Controller\Controller;

use App\Post\GetPosts;
use App\Post\ListPosts;

final class ControllerSendNews extends Controller
{
    public function choose(Request $request, Response $response, Array $args)
    {
        $posts = new GetPosts();
        $twigArr = array('posts' => $posts->getListToArray());

        return $this->view->render($response, 'sendnews-choose.twig', $twigArr);
    }

    public function preview(Request $request, Response $response, Array $args)
    {
        $body = $request->getParsedBody();
        $arrIDs = array();
        foreach ($body as $key => $value) {
            array_push($arrIDs, $key);
        }
        
        $posts = new GetPosts();
        $postsList = $posts->findByIDs($arrIDs);

        $list = new ListPosts();
        foreach ($postsList as $post) {
            $list->add($post);
        }

        $twigArr = array('postsChosen' => $list->toArray());

        return $this->view->render($response, 'sendnews-preview.twig', $twigArr);
    }
}