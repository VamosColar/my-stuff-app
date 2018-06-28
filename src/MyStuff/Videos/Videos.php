<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 26/06/18
 * Time: 15:07
 */

namespace MyStuff\Videos;

use MyStuff\Videos\Repositorios\VideosRepositorios;
use Symfony\Component\Filesystem\Filesystem;

class Videos
{
    protected $repositorio;

    public function __construct(VideosRepositorios $videosRepositorios)
    {
        $this->repositorio = $videosRepositorios;
    }

    public function save(array $input)
    {
        $tratarEntrada = $this->tratarEntrada($input);

        $save = $this->repositorio->save($tratarEntrada);

        return $this->tratarSaida($save);
    }

    /**
     * @param $file
     * @return string
     * @throws \Exception
     *
     * Tratando o envio de imagem
     */
    protected function fileManager($file)
    {
        $date = new \DateTime();

        if ($file == null) {
            return $file;
        }

        //Obtendo o tamanho da imagem
        $size = filesize($file);

        //Definindo o tamanho máximo da imagem
        if ($size > 2097152) {
            throw new \Exception('O tamanho máximo da imagem permitido é de 2mb.');
        }

        //Pegando extensão da imagem
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        //Verificando a extensão permitida
        if (!$extension == 'jpg' or !$extension == 'png') {
            throw new \Exception('É permitido apenas imagens do tipo jpg ou png.');
        }
        $dateFormat = $date->format('Y-m-d\TH:i:s.u');

        //Definindo o caminho de destino, nome da imagem e extensão
        $destiny = "/application/public/images/" . md5($dateFormat) . "." . $extension;
        $fileSystem = new Filesystem();

        //Copiando a imagem local e enviado para pasta images
        $fileSystem->copy($file, $destiny);

        //Definindo permissão para a pasta images
        $fileSystem->chmod('/application/public/images/', 0777, 0000, true);

        return $destiny;
    }

    /**
     * @param $tratar
     * @return array
     *
     * Tratando entrada de dados
     */
    protected function tratarEntrada($tratar)
    {
        return [
            'vide_titulo' => $tratar['titulo'],
            'vide_descricao' => $tratar['descricao'],
            'vide_ano' => $tratar['ano'],
            'vide_duracao' => $tratar['duracao'],
            'cod_genero' => $tratar['genero'],
            'cod_video_tipo' => $tratar['videoTipo'],
            'vide_imagem_diretorio' => $this->fileManager($tratar['imagemDiretorio']),
        ];
    }

    /**
     * @param $tratar
     * @return array
     *
     * Tratando saída de dados
     */
    protected function tratarSaida($tratar)
    {
        return [
            'titulo' => $tratar['vide_titulo'],
            'descricao' => $tratar['vide_descricao'],
            'ano' => $tratar['vide_ano'],
            'duracao' => $tratar['vide_duracao'],
            'genero' => $tratar['cod_genero'],
            'videoTipo' => $tratar['cod_video_tipo'],
            'imagemDiretorio' => $tratar['vide_imagem_diretorio'],
        ];
    }
}