<?php

namespace Controllers;

use Exception;
use Models\User;
use Src\Auth\Auth;
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
        if (isset($_GET['id'])) {
            $posts = Post::where('id', $request->id)->get();
            return (new View())->render('site.post', ['posts' => $posts]);
        }

        return (new View())->render('site.post');
    }

    public function hello(): string
    {
        return new View('site.hello', ['message' => 'hello working']);
    }

    public function signup(Request $request): string
    {
        if ($request->method === 'POST' && User::create($request->all())) {
            app()->route->redirect('/go');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/hello');
        }
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/hello');
    }


}
