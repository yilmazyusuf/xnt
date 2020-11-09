<?php

namespace App\Actions;

use App\Repos\Post;

class PostAction extends Action
{

    public function show()
    {
        $postRepo = new  Post();

        $postSlug = ltrim($_SERVER['REQUEST_URI'], '/');
        $postSlug = $this->sanitizeString($postSlug);
        $post = $postRepo->getPost($postSlug);

        if ($post === false) {
            http_response_code(404);
            return $this->display('error_404');
        }

        $params = [
            'post' => $postRepo->getPost($postSlug)
        ];

        $this->display('post_show', $params);

    }


}