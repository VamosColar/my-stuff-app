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
            'vide_imagem_diretorio' => '/application/public/upload/my-stuff.jpg',
            'cod_video_formato' => 1,
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
        $this->assertNotNull($all);
        $this->assertInternalType('array', $all);
    }

    public function testObtendoDadosPorNomeDoTitulo()
    {
        $repository = new VideosRepositorios($this->em);

        $input = [
            'vide_titulo' => 'Est',
        ];

        $all = $repository->all($input);

        $this->assertInternalType('array', $all);
    }

    public function testObtendoApenasUmDado()
    {
        $repository = new VideosRepositorios($this->em);

        $id = 1;

        $find = $repository->find($id);

        $this->assertInternalType('array', $find);
    }

    public function testAlterandoUmDadoPeloId()
    {
        $repository = new VideosRepositorios($this->em);

        $id = 1;

        $input = [
            'vide_titulo' => 'O Estrangeiro editado!',
            'vide_descricao' => 'Um empresário editado.',
            'vide_ano' => '2018',
            'vide_duracao' => '2h 35m',
            'vide_imagem_diretorio' => '/application/public/upload/my-stuff.jpg',
            'cod_video_formato' => 2,
        ];

        $repository->update($input, $id);
    }
}