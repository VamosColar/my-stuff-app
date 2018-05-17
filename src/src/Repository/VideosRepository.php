<?php

namespace App\Repository;

use App\Entity\Videos;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\RegistryInterface;

class VideosRepository extends ServiceEntityRepository
{
    protected $entity;

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Videos::class);
    }

    public function save(array $input)
    {
//        $videos = new Videos();
//        $videos->setVideTitulo($input);
//        $this->entity = $this->getEntityManager();
//        $this->entity->persist($videos);
//        $this->entity->flush();
//
//        return $input;
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
