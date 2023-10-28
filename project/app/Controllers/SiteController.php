<?php

namespace Controllers;

use Exception;
use Src\View;

class SiteController
{
    /**
     * @throws Exception
     */
    public function index(): string
    {
        $view = new View();
        return $view->render('site.hello', ['message' => 'index working']);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
}
