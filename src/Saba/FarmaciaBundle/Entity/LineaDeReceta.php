<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Saba\FarmaciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of LineaDeReceta
 *
 * @ORM\Entity
 * @ORM\Table(name="lineas_de_receta")
 */
class LineaDeReceta {
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /*
     *
     * @ORM\OneToOne(targetEntity="Medicamento")
     * 
     */
    /**
     * @ORM\OneToOne(targetEntity="Medicamento")
     * @ORM\Joincolumn(name="medicamento_id", unique=false)
     */
    protected $medicamento;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $cantidad;
    
    /**
     *
     * @ORM\Column(type="string")
     */
    protected $unidad;
 
    
    /**
     * Set id
     *
     * @param integer $id
     * @return LineasDeReceta
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     * @return LineasDeReceta
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set unidad
     *
     * @param string $unidad
     * @return LineasDeReceta
     */
    public function setUnidad($unidad)
    {
        $this->unidad = $unidad;

        return $this;
    }

    /**
     * Get unidad
     *
     * @return string 
     */
    public function getUnidad()
    {
        return $this->unidad;
    }

    /**
     * Set medicamento
     *
     * @param \Saba\FarmaciaBundle\Entity\Medicamento $medicamento
     * @return LineasDeReceta
     */
    public function setMedicamento( $medicamento = null)
    {
        $this->medicamento = $medicamento;

        return $this;
    }

    /**
     * Get medicamento
     *
     * @return \Saba\FarmaciaBundle\Entity\Medicamento 
     */
    public function getMedicamento()
    {
        return $this->medicamento;
    }

}