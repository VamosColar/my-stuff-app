<?php

namespace MyStuff\Videos\Repositorios;

use App\Entity\Genero;
use App\Entity\Videos;
use App\Entity\VideoTipo;
use Doctrine\ORM\EntityManager;

class VideosRepositorios
{
    protected $entity;

    public function __construct(EntityManager $entityRepository)
    {
        $this->entity = $entityRepository;
    }

    public function save(array $input)
    {
        $date = new \DateTime();

        $genero = $this->entity->find(Genero::class, $input['cod_genero']);

        $videoTipo = $this->entity->find(VideoTipo::class, $input['cod_video_tipo']);

        $videos = new Videos();
        $videos->setVideTitulo($input['vide_titulo']);
        $videos->setVideDescricao($input['vide_descricao']);
        $videos->setVideAno($input['vide_ano']);
        $videos->setVideDuracao($input['vide_duracao']);
        $videos->setCodGenero($genero);
        $videos->setCodVideoTipo($videoTipo);
        $videos->setVideImagemDiretorio($input['vide_imagem_diretorio']);
        $videos->setCreatedAt($date);
        $videos->setCreatedBy(1);
        $this->entity->persist($videos);
        $this->entity->flush();

        return true;
    }

    public function all(array $input = null)
    {
        $videos = Videos::class;

        $query = $this->entity->createQuery("SELECT v FROM {$videos} v");

        return $query->getResult();
    }

    public function find(int $id)
    {
        $videos = Videos::class;

//        $query = $this->entity->
    }


}
