<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GeneroRepository")
 */
class Genero
{
    private $idGenero;

    private $geneNome;

    /**
     * @return mixed
     */
    public function getIdGenero()
    {
        return $this->idGenero;
    }

    /**
     * @return mixed
     */
    public function getGeneNome()
    {
        return $this->geneNome;
    }

    /**
     * @param mixed $geneNome
     */
    public function setGeneNome($geneNome)
    {
        $this->geneNome = $geneNome;
    }

}
