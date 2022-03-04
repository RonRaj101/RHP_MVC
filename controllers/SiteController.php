<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{
    public function handleIndex(){
        $params = [
            'name' => 'Linda',
            'u_gender' => 'Female'
        ];

        return Application::$app->router->renderView('home',$params);
    }

    public function handleContactSubmit(){
        return "Contact Form Submitted";
    }

    public function displayContactForm(){
        //view page from controller, used when params needed for the pages
        return Application::$app->router->renderView('contact');
    }


}