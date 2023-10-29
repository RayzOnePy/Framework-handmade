<?php

namespace Controllers;

use Exception;
use Src\View;
use Src\Request;
use Models\Post;

class SiteController
{

    /**
     * @throws Exception
     */
    public function index(Request $request): string
    {
//        $posts = Post::all();
        echo("<pre>");
        var_dump($request);
        echo("</pre>");
//        $posts = Post::where('id', $request->id)->get();

        $posts = Post::where('id', 1)->get();
        return (new View())->render('site.post', ['posts' => $posts]);
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }
}
