<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21/03/2018
 * Time: 22:19
 */

namespace App\DataFixtures;

use App\Entity\Genero;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class GeneroFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dados = [
            'Ação',
            'Comédia',
            'Drama',
            'Suspense',
        ];

        for ($i = 0; $i < 4; $i++) {
            $genero = new Genero();
            $genero->setGeneNome($dados[$i]);
            $manager->persist($genero);
        }
        $manager->flush();
    }
}