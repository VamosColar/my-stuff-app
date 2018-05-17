<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VideosRepository")
 */
class Videos
{
    private $idVideos;

    protected $videTitulo;

    protected $videDescricao;

    protected $videAno;

    protected $videDuracao;

    protected $videImagemDiretorio;

    protected $videTemporadaNumero;

    protected $codGenero;

    protected $codVideoTipo;

    protected $createdAt;

    protected $updatedAt;

    protected $deletedAt;

    protected $createdBy;

    protected $updatedBy;

    protected $deletedBy;

    protected $elencos;

    /**
     * @return mixed
     */
    public function getIdVideos()
    {
        return $this->idVideos;
    }

    /**
     * @return mixed
     */
    public function getVideTitulo()
    {
        return $this->videTitulo;
    }

    /**
     * @param mixed $videTitulo
     */
    public function setVideTitulo($videTitulo)
    {
        $this->videTitulo = $videTitulo;
    }

    /**
     * @return mixed
     */
    public function getVideDescricao()
    {
        return $this->videDescricao;
    }

    /**
     * @param mixed $videDescricao
     */
    public function setVideDescricao($videDescricao)
    {
        $this->videDescricao = $videDescricao;
    }

    /**
     * @return mixed
     */
    public function getVideAno()
    {
        return $this->videAno;
    }

    /**
     * @param mixed $videAno
     */
    public function setVideAno($videAno)
    {
        $this->videAno = $videAno;
    }

    /**
     * @return mixed
     */
    public function getVideDuracao()
    {
        return $this->videDuracao;
    }

    /**
     * @param mixed $videDuracao
     */
    public function setVideDuracao($videDuracao)
    {
        $this->videDuracao = $videDuracao;
    }

    /**
     * @return mixed
     */
    public function getVideImagemDiretorio()
    {
        return $this->videImagemDiretorio;
    }

    /**
     * @param mixed $videImagemDiretorio
     */
    public function setVideImagemDiretorio($videImagemDiretorio)
    {
        $this->videImagemDiretorio = $videImagemDiretorio;
    }

    /**
     * @return mixed
     */
    public function getVideTemporadaNumero()
    {
        return $this->videTemporadaNumero;
    }

    /**
     * @param mixed $videTemporadaNumero
     */
    public function setVideTemporadaNumero($videTemporadaNumero)
    {
        $this->videTemporadaNumero = $videTemporadaNumero;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param mixed $deletedAt
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param mixed $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return mixed
     */
    public function getDeletedBy()
    {
        return $this->deletedBy;
    }

    /**
     * @param mixed $deletedBy
     */
    public function setDeletedBy($deletedBy)
    {
        $this->deletedBy = $deletedBy;
    }

}
