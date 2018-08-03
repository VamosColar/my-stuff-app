<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EpisodiosRepository")
 */
class Episodios
{
    private $idEpisodios;

    protected $episTitulo;

    protected $episTituloOriginal;

    protected $episTemporada;

    protected $episDuracao;

    protected $episDescricao;

    protected $codVideos;

}
