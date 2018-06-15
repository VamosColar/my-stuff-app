<?php
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 17/05/18
 * Time: 17:17
 */

namespace tests\Repository;

use App\Repository\VideosRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class VideosRepositoryTest extends KernelTestCase
{
    protected $repository;

    protected $em;

    static $kernel;

    protected function setUp()
    {
        self::$kernel = self::bootKernel();

        $this->em = self::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testInserindoDados()
    {
        $input = [
            'titulo' => 'Um dia'
        ];

        $repository = new VideosRepository($this->em);
        $repository->save($input);
    }
}