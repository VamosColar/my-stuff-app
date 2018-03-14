<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideosRepository")
 */
class Videos
{
    private $id_video;

    protected $vide_titulo;

    protected $vide_descricao;

    protected $vide_ano;

    protected $vide_duracao;

    protected $vide_imagem_diretorio;

    protected $temporada_numero;

    protected $cod_genero;

    protected $cod_video_tipo;

    protected $created_at;

    protected $updated_at;

    protected $deleted_at;

    protected $created_by;

    protected $updated_by;

    protected $deleted_by;
}
