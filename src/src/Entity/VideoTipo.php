<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoTipoRepository")
 */
class VideoTipo
{
    private $id_video_tipo;

    protected $vide_tip_nome;
}
