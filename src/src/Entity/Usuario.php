<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario
{
    private $id_usuario;

    protected $usua_nome;

    protected $usua_email;

    protected $usua_senha;

    protected $created_at;

    protected $updated_at;
}
