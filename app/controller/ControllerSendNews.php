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

        $_SESSION['postsChosen'] = $list->toArray();

        $twigArr = array('postsChosen' => $list->toArray());

        return $this->view->render($response, 'sendnews-preview.twig', $twigArr);
    }

    public function send(Request $request, Response $response, Array $args)
    {
        $body = $request->getParsedBody();

        $html = '<h1>Newsletter da Semana</h1>';
        $html .= '<p>Sua newsletter semanal!</p>';
        foreach($_SESSION['postsChosen'] as $post) {
            $html .= '<p><b>' . $post['created_at'] . ' - ' . $post['title'] . '</b><br />' . $post['description'];
        }

        $message = (new \Swift_Message('Newsletter da Semana'))
            ->setFrom(['support@renansgomes.com.br' => 'Renan Santos Gomes'])
            ->setTo([$body['email']])
            ->setBody($html, 'text/html');

        $result = $this->mailer->send($message);

        $path = $this->router->pathFor('home');
        return $response->withRedirect($path);
    }
}