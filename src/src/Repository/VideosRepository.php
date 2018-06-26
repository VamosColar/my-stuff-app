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

        $videos = new Videos();
        $videos->setVideTitulo($input['vide_titulo']);
        $videos->setVideDescricao($input['vide_descricao']);
        $videos->setVideAno($input['vide_ano']);
        $videos->setVideDuracao($input['vide_duracao']);
        $videos->setCodGenero($genero);
        $videos->setCodVideoTipo($videoTipo);
        $videos->setVideImagemDiretorio($this->fileManager($input['vide_imagem_diretorio']));
        $videos->setCreatedAt($date);
        $videos->setCreatedBy(1);
        $this->entity->persist($videos);
        $this->entity->flush();

        return true;
    }

    protected function fileManager($file)
    {
        if ($file == null) {
            return $file;
        }

        //Pegando extensão da imagem
        $extension = pathinfo($file, PATHINFO_EXTENSION);

        //Verificando a extensão permitida
        if (!$extension == 'jpg' or !$extension == 'png') {
            throw new \Exception('É permitido apenas imagens do tipo jpg ou png.');
        }

        //Definindo um nome para o arquivo
        $destiny = "/application/public/images/" . md5(time()) . "." . $extension;

        $fileSystem = new Filesystem();

        //Copiando a imagem de local e enviado para pasta images
        $fileSystem->copy($file, $destiny);

        //Definindo a permissão para as imagens
        $fileSystem->chmod('/application/public/images/', 0777, 0000, true);

        return $destiny;
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
