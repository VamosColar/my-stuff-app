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
        $inputRepo = $this->inputRepo();
        $outputRepo = $this->outputRepo();
        $input = $this->input();
        $output = $this->output();

        $this->repositorio->save($inputRepo)->willReturn($outputRepo)->shouldBeCalled();

        $save = $this->negocio->save($input);
        $this->assertEquals($output, $save);
    }

    protected function input()
    {
        return [
            'titulo' => 'Um titulo',
            'descricao' => 'Um empresário.',
            'ano' => '2017',
            'duracao' => '1h 56m',
            'genero' => 1,
            'videoTipo' => 9,
            'imagemDiretorio' => null,
        ];
    }

    protected function output()
    {
        return [
            'titulo' => 'Um titulo',
            'descricao' => 'Um empresário.',
            'ano' => '2017',
            'duracao' => '1h 56m',
            'genero' => 1,
            'videoTipo' => 9,
            'imagemDiretorio' => null,

        ];
    }

    protected function inputRepo()
    {
        return [
            'vide_titulo' => 'Um titulo',
            'vide_descricao' => 'Um empresário.',
            'vide_ano' => '2017',
            'vide_duracao' => '1h 56m',
            'cod_genero' => 1,
            'cod_video_tipo' => 9,
            'vide_imagem_diretorio' => null,
        ];
    }

    protected function outputRepo()
    {
        return [
            'vide_titulo' => 'Um titulo',
            'vide_descricao' => 'Um empresário.',
            'vide_ano' => '2017',
            'vide_duracao' => '1h 56m',
            'cod_genero' => 1,
            'cod_video_tipo' => 9,
            'vide_imagem_diretorio' => null,
        ];
    }
}