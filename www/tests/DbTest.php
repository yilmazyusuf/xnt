<?php


use PHPUnit\Framework\TestCase;

final class DbTest extends TestCase
{

    public function testDbConnection(): void
    {

        $repo = new App\Repos\Repository();

        $this->assertInstanceOf(PDO::class, $repo->db());
    }
}
