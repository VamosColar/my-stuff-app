<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 21/03/2018
 * Time: 23:13
 */

namespace App\DataFixtures;

use App\Entity\VideoFormato;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class VideoFormatoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $dados = [
            'AVI',
            'BRRip',
            'CAM',
            'DivX',
            'DivX HD',
            'DVDRip',
            'DVDScr',
            'FLV',
            'H.264',
            'HDDVDRip',
            'KVCD',
            'MKV',
            'MOV',
            'MPEG-1',
            'MPEG-2',
            'OGM',
            'R5',
            'RMVB',
            'SVCD',
            'TC',
            'TS',
            'VCD',
            'VOB',
            'WMV',
            'Workprint',
            'XviD',
        ];

        $count = count($dados);

        for ($i = 0; $i < $count; $i++) {

            $videoTipo = new VideoFormato();
            $videoTipo->setVideForNome($dados[$i]);
            $manager->persist($videoTipo);
        }

        $manager->flush();
    }
}