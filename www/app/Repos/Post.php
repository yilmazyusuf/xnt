<?php


namespace App\Repos;

use App\Repos\Repository;

class Post extends Repository
{

    public function getPosts()
    {
        return $this->db()->query('select * from posts')->fetchAll();

    }


}