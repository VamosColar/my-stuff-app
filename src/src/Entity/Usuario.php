<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
{
    private $idUsuario;

    protected $usuaNome;

    protected $usuaEmail;

    protected $usuaSenha;

    protected $createdAt;

    protected $updatedAt;
}
