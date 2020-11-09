<?php

use App\Repos\Post;
use Faker\Factory;
use PHPUnit\Framework\TestCase;

final class PostTest extends TestCase
{

    public function testInsertPost(): void
    {
        $faker = Factory::create();
        $post = new  Post();
        $post->setContent($faker->paragraph(4))
            ->setTitle($faker->sentence(5))
            ->setSlug($faker->slug())
            ->setUserId($faker->numberBetween(1, 999999999))
            ->setIsHeadline(rand(0, 1))
            ->setUpdatedAt(date('Y-m-d H:i:s'))
            ->setCreatedAt(date('Y-m-d H:i:s'));

        $this->assertTrue($post->savePost());

    }

}
