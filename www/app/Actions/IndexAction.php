<?php

namespace App\Actions;

use App\Repos\Post;

class IndexAction extends Action
{

    public function index()
    {
        $posts = new  Post();
        var_dump($posts->getPosts());

    }

}