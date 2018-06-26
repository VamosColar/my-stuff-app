<?php
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 17/05/18
 * Time: 17:17
 */

namespace tests\Videos\Repositorios;

use MyStuff\Videos\Repositorios\VideosRepositorios;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class VideosRepositorTest extends KernelTestCase
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
            'vide_titulo' => 'O Estrangeiro',
            'vide_descricao' => 'Um empresário.',
            'vide_ano' => '2017',
            'vide_duracao' => '1h 56m',
            'cod_genero' => 1,
            'cod_video_tipo' => 9,
            'vide_imagem_diretorio' => '/application/public/upload/my-stuff.jpg',
        ];

        $repository = new VideosRepositorios($this->em);

        $save = $repository->save($input);

        $this->assertTrue($save);
    }

    public function testObtendotodosOsDados()
    {
        $repository = new VideosRepositorios($this->em);

        $all = $repository->all();

        $this->assertNotEmpty($all);
    }
}