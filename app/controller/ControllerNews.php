<?php
namespace App\Controller;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Utils\Controller\Controller;

use App\Post\GetPosts;

final class ControllerNews extends Controller
{
    public function list(Request $request, Response $response, Array $args)
    {
        $posts = new GetPosts();
        $twigArr = array('posts' => $posts->getListToArray());

        return $this->view->render($response, 'news-list.twig', $twigArr);
    }
}