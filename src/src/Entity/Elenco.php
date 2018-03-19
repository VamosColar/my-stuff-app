<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ElencoRepository")
 */
class Elenco
{
    private $idElenco;

    protected $elenNome;

    protected $codFuncao;

}
