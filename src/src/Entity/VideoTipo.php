<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoTipoRepository")
 */
class VideoTipo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id_video_tipo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $vide_tip_nome;
}
