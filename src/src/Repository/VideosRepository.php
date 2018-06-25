<?php

namespace App\Repository;

use App\Entity\Genero;
use App\Entity\Videos;
use App\Entity\VideoTipo;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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

        $genero = $this->entity->find(Genero::class, $input['cod_genero']);

        $videoTipo = $this->entity->find(VideoTipo::class, $input['cod_video_tipo']);

        $fileSystem = new Filesystem();
        $destiny = "/application/public/images/" . md5(time()) . ".jpg";
        $fileSystem->copy($input['vide_imagem_diretorio'], $destiny);
        $fileSystem->chmod('/application/public/images/', 0777, 0000, true);

        $videos = new Videos();
        $videos->setVideTitulo($input['vide_titulo']);
        $videos->setVideDescricao($input['vide_descricao']);
        $videos->setVideAno($input['vide_ano']);
        $videos->setVideDuracao($input['vide_duracao']);
        $videos->setCodGenero($genero);
        $videos->setCodVideoTipo($videoTipo);
        $videos->setVideImagemDiretorio($destiny);
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
