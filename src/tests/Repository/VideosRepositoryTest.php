<?php
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 17/05/18
 * Time: 17:17
 */

namespace tests\Repository;

use App\Repository\VideosRepository;
use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class VideosRepositoryTest extends KernelTestCase
{
    protected $repository;

    protected $em;

    protected function setUp()
    {
        $kernel = self::bootKernel();

        $this->em = $kernel->getContainer()
            ->get('doctrine')
            ->getManager();
    }

    public function testInserindoDados()
    {
        $input = ['dados'];

        $repository = new VideosRepository($this->em);

        $videos =$repository->save($input);

        var_dump($videos);
    }

}