<?php

namespace App\Actions;

use App\Repos\Post;

class IndexAction extends Action
{

    /**
     *
     */
    public function index()
    {
        $post = new  Post();
        $params = [
            'posts' => $post->getPosts()
        ];
        $this->display('index_index',$params);

    }

}