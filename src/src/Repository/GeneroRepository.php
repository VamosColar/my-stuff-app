<?php

namespace App\Repository;

use App\Entity\Genero;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Genero|null find($id, $lockMode = null, $lockVersion = null)
 * @method Genero|null findOneBy(array $criteria, array $orderBy = null)
 * @method Genero[]    findAll()
 * @method Genero[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeneroRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Genero::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('g')
            ->where('g.something = :value')->setParameter('value', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
