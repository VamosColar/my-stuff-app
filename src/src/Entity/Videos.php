<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideosRepository")
 */
class Videos
{
    private $idVideos;

    protected $videTitulo;

    protected $videDescricao;

    protected $videAno;

    protected $videDuracao;

    protected $videImagemDiretorio;

    protected $videTemporadaNumero;

    protected $codGenero;

    protected $codVideoTipo;

    protected $createdAt;

    protected $updatedAt;

    protected $deletedAt;

    protected $createdBy;

    protected $updatedBy;

    protected $deletedBy;
}
