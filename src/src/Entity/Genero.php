<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeneroRepository")
 */
class Genero
{
    private $id_genero;

    protected $gene_nome;
}
