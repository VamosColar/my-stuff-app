<?php

namespace MyStuff\Videos\Repositorios;

use App\Entity\Videos;
use App\Entity\VideoFormato;
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

        $videoFormato = $this->entity->find(VideoFormato::class, $input['cod_video_formato']);

        if ($videoFormato == null) {
            throw new \Exception('O Formato de Video não foi encontrado.');
        }

        $videos = new Videos();
        $videos->setVideTitulo($input['vide_titulo']);
        $videos->setVideDescricao($input['vide_descricao']);
        $videos->setVideAno($input['vide_ano']);
        $videos->setVideDuracao($input['vide_duracao']);
        $videos->setCodVideoFormato($videoFormato);
        $videos->setVideImagemDiretorio($input['vide_imagem_diretorio']);
        $videos->setCreatedAt($date);
        $videos->setCreatedBy(1);
        $this->entity->persist($videos);
        $this->entity->flush();

        return $videos;
    }

    public function all(array $input = null)
    {
        $videos = Videos::class;

        if ($input != null) {

            $query = $this->entity->createQuery("SELECT v FROM {$videos} v WHERE v.videTitulo LIKE :vide_titulo ORDER BY v.videTitulo");
            $query->setParameter('vide_titulo', '%' . $input['vide_titulo'] . '%');

            return $query->getResult();
        }

        $query = $this->entity->createQuery("SELECT v FROM {$videos} v");

        return $query->getResult();
    }

    public function find(int $id)
    {
        if (!$id) {
            throw new \Exception('Não foi encontrado o ID: ' . $id);
        }

        $videos = Videos::class;

        $videoTipo = "JOIN v.codVideoFormato vf";

        $query = $this->entity->createQuery("SELECT v, vf FROM {$videos} v {$videoTipo} WHERE v.idVideos = $id AND v.deletedAt IS NULL");

        return $query->getArrayResult();
    }

    public function update(array $input, int $id)
    {
        $date = new \DateTime();

        $videos = $this->entity->getRepository(Videos::class)->find($id);
        $videoFormato = $this->entity->find(VideoFormato::class, $input['cod_video_formato']);

        $videos->setVideTitulo($input['vide_titulo']);
        $videos->setVideDescricao($input['vide_descricao']);
        $videos->setVideAno($input['vide_ano']);
        $videos->setVideDuracao($input['vide_duracao']);
        $videos->setCodVideoFormato($videoFormato);
        $videos->setVideImagemDiretorio($input['vide_imagem_diretorio']);
        $videos->setUpdatedAt($date);
        $videos->setUpdatedBy(1);

        $this->entity->merge($videos);
        $this->entity->flush();

        return $videos;
    }

    public function delete($id)
    {
        $date = new \DateTime();

        $videos = $this->entity->getRepository(Videos::class)->find($id);

        $videos->setDeletedAt($date);
        $videos->setDeletedBy(1);

        $this->entity->merge($videos);
        $this->entity->flush();

        return true;
    }
}
