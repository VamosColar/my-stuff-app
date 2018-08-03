<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class VideoFormato
{
    private $idVideoFormato;

    private $videForNome;

    /**
     * @return mixed
     */
    public function getIdVideoFormato()
    {
        return $this->idVideoFormato;
    }

    /**
     * @return mixed
     */
    public function getVideForNome()
    {
        return $this->videForNome;
    }

    /**
     * @param mixed $videForNome
     */
    public function setVideForNome($videForNome)
    {
        $this->videForNome = $videForNome;
    }

}
