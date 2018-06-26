<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 26/06/18
 * Time: 15:45
 */

namespace tests\Videos;

use MyStuff\Videos\Repositorios\VideosRepositorios;
use MyStuff\Videos\Videos;
use PHPUnit\Framework\TestCase;

class VideosTest extends TestCase
{
    protected $repositorio;

    protected $negocio;

    public function setUp()
    {
        $this->repositorio = $this->prophesize(VideosRepositorios::class);

        $this->negocio = new Videos($this->repositorio->reveal());

    }

    public function testInserindoDados()
    {
        $input = [
            'titulo' => 'Um titulo',
            'descricao' => 'Um empresário.',
            'ano' => '2017',
            'duracao' => '1h 56m',
            'genero' => 1,
            'videoTipo' => 9,
            'imagemDiretorio' => '/application/public/upload/my-stuff.jpg',
        ];

        $output = [
            'titulo' => 'Um titulo',
            'descricao' => 'Um empresário.',
            'ano' => '2017',
            'duracao' => '1h 56m',
            'genero' => 1,
            'videoTipo' => 9,
            'imagemDiretorio' => '/application/public/upload/my-stuff.jpg',
        ];

        $this->repositorio->save($input)->willReturn($output)->shouldBeCalled();

        $save = $this->negocio->save($input);

        $this->assertEquals($output, $save);
    }
}