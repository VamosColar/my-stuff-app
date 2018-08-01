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

        if ($genero == null) {
            throw new \Exception('O Gênero não foi encontrado.');
        }

        $videoTipo = $this->entity->find(VideoTipo::class, $input['cod_video_tipo']);

        if ($videoTipo == null) {
            throw new \Exception('O Video Tipo não foi encontrado.');
        }

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

        if ($input != null) {

            $query = $this->entity->createQuery("SELECT v FROM {$videos} v WHERE v.videTitulo LIKE :vide_titulo ORDER BY v.videTitulo");
            $query->setParameter('vide_titulo', '%'.$input['vide_titulo'].'%');

            return $query->getResult();
        }

        $query = $this->entity->createQuery("SELECT v FROM {$videos} v");

        return $query->getResult();
    }

    public function find(int $id)
    {
        $videos = Videos::class;

        $genero = "JOIN v.codGenero g";
        $videoTipo = "JOIN v.codVideoTipo vt";

        $query = $this->entity->createQuery("SELECT v, g, vt FROM {$videos} v {$genero} {$videoTipo} WHERE v.idVideos = $id");

        return $query->getArrayResult();
    }


}
