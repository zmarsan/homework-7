<?php

namespace app\controllers;
use app\core\Controller;


class PostController extends Controller
{
    public function returnPosts()
    {
        $template = $this->twig->load('models/Post.php');
        return $this->posts;

    }
//todo make a method to return some posts, post objects should come from the post model class
//also need to make a twig template to show the post
//an example is in app/controllers/UsersController

}

//validate data in post controller

if ($name) {
    
    $name = htmlspecialchars($name, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

    //validate text length
    if (strlen($name) < 2) {
        $errors['nameShort'] = 'name is too short';
        http_response_code(400);

    }
} else {
    $errors['requiredName'] = 'name is required';
    http_response_code(400);

}



if ($description) {
    
    $description = htmlspecialchars($description, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);

    if (strlen($description) < 2) {
        $errors['descriptionShort'] = 'description is too short';
        http_response_code(400);
    }
} else {
    $errors['requiredDescription'] = 'description is required';
    http_response_code(400);
}

echo http_response_code(200); //success
