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
        $date = new \DateTime();

        $videos = new Videos();
        $videos->setVideTitulo($input['vide_titulo']);
        $videos->setVideDescricao($input['vide_descricao']);
        $videos->setVideAno($input['vide_ano']);
        $videos->setVideDuracao($input['vide_duracao']);
        $videos->setCreatedAt($date);
        $videos->setCreatedBy(1);
        $this->entity->persist($videos);
        $this->entity->flush();

        return true;
    }

    public function all()
    {
        
    }
}
