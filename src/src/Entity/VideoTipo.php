<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideoTipoRepository")
 */
class VideoTipo
{
    private $idVideoTipo;

    private $videTipNome;

    /**
     * @return mixed
     */
    public function getIdVideoTipo()
    {
        return $this->idVideoTipo;
    }

    /**
     * @return mixed
     */
    public function getVideTipNome()
    {
        return $this->videTipNome;
    }

    /**
     * @param mixed $videTipNome
     */
    public function setVideTipNome($videTipNome)
    {
        $this->videTipNome = $videTipNome;
    }
}
