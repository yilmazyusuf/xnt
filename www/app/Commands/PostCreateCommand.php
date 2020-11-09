<?php


namespace App\Commands;

use App\Repos\Post;
use Faker\Factory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class PostCreateCommand extends Command
{
    protected static $defaultName = 'post:create';

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $faker = Factory::create();
        $post = new  Post();
        $post->setContent($faker->paragraph(4))
            ->setTitle($faker->sentence(5))
            ->setSlug($faker->slug())
            ->setUserId($faker->numberBetween(1,999999999))
            ->setIsHeadline(rand(0,1))
            ->setUpdatedAt(date('Y-m-d H:i:s'))
            ->setCreatedAt(date('Y-m-d H:i:s'));

        try {
            $post->savePost();
            $output->write("Post Created");
            return Command::SUCCESS;

        }catch (\PDOException $exception){
            $output->write($exception->getMessage()."\n");
            return Command::FAILURE;
        }

    }
}