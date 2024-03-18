<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;

class MainController extends Controller
{

    public function homepage()
    {
        $template = $this->twig->load('main/homepage.twig');
        $homepageData = [
            'title' => 'Homepage Title',
        ];

        echo $template->render($homepageData);
    }

    public function notFound() {
        //todo create a 404 twig template in app/public/assets/views
        $template = $this->twig->load('users/error.twig');
        echo $template->render($errorData);
        echo http_response_code(404);
        //an example is in app/controllers/UsersController
        //and return it from this method
    }



}
