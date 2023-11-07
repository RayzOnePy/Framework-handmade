<?php

namespace Controllers;

use Models\Post;
use Src\Request;
use Src\View;

class ApiController
{
    public function index(): void
    {
        $posts = Post::all()->toArray();

        (new View())->toJSON($posts);
    }

    public function echo(Request $request): void
    {
        (new View())->toJSON($request->all());
    }
}
