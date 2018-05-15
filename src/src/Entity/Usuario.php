<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
{
    private $idUsuario;

    private $usuaNome;

    private $usuaEmail;

    private $usuaSenha;

    private $createdAt;

    private $updatedAt;

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @return mixed
     */
    public function getUsuaNome()
    {
        return $this->usuaNome;
    }

    /**
     * @param mixed $usuaNome
     */
    public function setUsuaNome($usuaNome)
    {
        $this->usuaNome = $usuaNome;
    }

    /**
     * @return mixed
     */
    public function getUsuaEmail()
    {
        return $this->usuaEmail;
    }

    /**
     * @param mixed $usuaEmail
     */
    public function setUsuaEmail($usuaEmail)
    {
        $this->usuaEmail = $usuaEmail;
    }

    /**
     * @return mixed
     */
    public function getUsuaSenha()
    {
        return $this->usuaSenha;
    }

    /**
     * @param mixed $usuaSenha
     */
    public function setUsuaSenha($usuaSenha)
    {
        $this->usuaSenha = $usuaSenha;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}
