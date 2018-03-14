<?php

namespace App\Repository;

use App\Entity\VideoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class VideoTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VideoTipo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('v')
            ->where('v.something = :value')->setParameter('value', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
