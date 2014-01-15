<?php
namespace Saba\FarmaciaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Salida
 *
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="salidas_por_receta") 
 */
class SalidaPorReceta {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="NONE")
     */
    protected $numero;
    
    /**
     * @ORM\OneToOne(targetEntity="Receta", cascade={"persist"})
     * @ORM\JoinColumn(name="receta_id", referencedColumnName="id")
     */
    protected $receta;
    
    /**
     * @ORM\ManyToMany(targetEntity="Movimiento", cascade={"persist"})
     * @ORM\JoinTable(name="SalidaPorRecetaTieneMovimientos",
     *     joinColumns={@ORM\JoinColumn(name="salidas_por_receta_id",
     *         referencedColumnName="numero")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="movimientos_id",
     *         referencedColumnName="id",
     *         unique=true)}
     *     )
     */
    protected $movimientos;
    
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movimientos = new \Doctrine\Common\Collections\ArrayCollection();


    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set receta
     *
     * @param \Saba\FarmaciaBundle\Entity\Receta $receta
     * @return SalidaPorReceta
     */
    public function setReceta(\Saba\FarmaciaBundle\Entity\Receta $receta = null)
    {
        $this->receta = $receta;
        foreach ($this->receta->getLineasDeReceta() as $lineasEnReceta){
            $linea = $lineasEnReceta->getLineaDeReceta();
            $movimiento = new Movimiento();
            $movimiento->setAlmacenOrigen("1");
            $movimiento->setAlmacenDestino("1");
            $movimiento->setArticulo($linea->getMedicamento());
            $movimiento->setCantidad($linea->getCantidad());
            $movimiento->setFechaDeEjecucion(new \DateTime());
            $movimiento->setFechaDeRegistro(new \DateTime());
            $movimiento->setFechaDeRegistro(new \DateTime());
            $movimiento->setPreciounitario(0);
            $this->getMovimientos()->add($movimiento);
        }
    }

    /**
     * Get receta
     *
     * @return \Saba\FarmaciaBundle\Entity\Receta 
     */
    public function getReceta()
    {
        return $this->receta;
    }

    /**
     * Add movimientos
     *
     * @param \Saba\FarmaciaBundle\Entity\Movimiento $movimientos
     * @return SalidaPorReceta
     */
    public function addMovimientos(\Saba\FarmaciaBundle\Entity\Movimiento $movimientos)
    {
        $this->movimientos[] = $movimientos;

        return $this;
    }

    /**
     * Remove movimientos
     *
     * @param \Saba\FarmaciaBundle\Entity\Movimiento $movimientos
     */
    public function removeMovimiento(\Saba\FarmaciaBundle\Entity\Movimiento $movimientos)
    {
        if (null === $movimientos ) return;
        if ($this->movimientos>-contains($movimientos)) return;
        $this->movimientos->removeElement($movimientos);
    }

    /**
     * Get movimientos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovimientos()
    {
        return $this->movimientos;
    }

    /**
     * Add movimientos
     *
     * @param \Saba\FarmaciaBundle\Entity\Movimiento $movimientos
     * @return SalidaPorReceta
     */
    public function addMovimiento(\Saba\FarmaciaBundle\Entity\Movimiento $movimientos)
    {
        $this->movimientos[] = $movimientos;

        return $this;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return SalidaPorReceta
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }
    
    /**
     * @ORM\PrePersist
     */
    public function prePersist(){
    }

    /**
     * @ORM\PreUpdate
     */
    public function preUpdate(){
        

    }
    
}
