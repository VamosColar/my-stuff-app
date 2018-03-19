<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EpisodiosRepository")
 */
class Episodios
{
    private $idEpisodios;

    protected $episNomeTraduzido;

    protected $episNomeOriginal;

    protected $episDuracao;

    protected $episDescricao;

    protected $codVideos;

}
