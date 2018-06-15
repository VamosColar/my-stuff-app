<?php

namespace App\Repository;

use App\Entity\Videos;
use Doctrine\ORM\EntityManager;

class VideosRepository
{
    protected $entity;

    public function __construct(EntityManager $entityRepository)
    {
        $this->entity = $entityRepository;
    }

    public function save(array $input)
    {
        $videos = new Videos();
        $videos->setVideTitulo($input['titulo']);
        $this->entity->persist($videos);
        $this->entity->flush();

        return $input;
    }

}
