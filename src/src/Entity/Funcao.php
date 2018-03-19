<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FuncaoRepository")
 */
class Funcao
{
    private $idFuncao;

    protected $funcNome;
}
