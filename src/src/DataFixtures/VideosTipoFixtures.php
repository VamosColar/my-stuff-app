<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21/03/2018
 * Time: 23:13
 */

namespace App\DataFixtures;

use App\Entity\VideoTipo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class VideosTipoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dados = [
            'Série',
            'Filme'
        ];

        for ($i = 0; $i < 2; $i++) {

            $videoTipo = new VideoTipo();
            $videoTipo->setVideTipNome($dados[$i]);
            $manager->persist($videoTipo);
        }

        $manager->flush();
    }
}