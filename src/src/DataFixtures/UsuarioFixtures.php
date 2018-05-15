<?php
/**
 * Created by PhpStorm.
 * User: rafaelconceicao@conder.intranet
 * Date: 15/05/18
 * Time: 15:56
 */

namespace App\DataFixtures;


use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UsuarioFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 1; $i++){
            $usuario = new Usuario();
            $usuario->setUsuaNome('admin');
            $usuario->setUsuaEmail('admin@email.com');
            $usuario->setUsuaSenha(md5('123456'));
            $usuario->setCreatedAt(new \Datetime());
            $manager->persist($usuario);
        }

        $manager->flush();
    }

}