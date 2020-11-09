<?php


use App\Commands\PostCreateCommand;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Tester\CommandTester;

final class CommandTest extends TestCase
{
    public function testPostCreateCommand()
    {
        $application = new Application();
        $application->add(new PostCreateCommand());
        $command = $application->find('post:create');

        $commandTester = new CommandTester($command);
        $commandTester->execute(array(
            'command' => $command->getName()
        ));

        $output = $commandTester->getDisplay();

        $this->assertContains($output,['Post Created']);


    }

}
