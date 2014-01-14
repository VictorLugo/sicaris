<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Saba\FarmaciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Saba\FarmaciaBundle\Entity\SalidaPorReceta;
use Saba\FarmaciaBundle\Entity\Movimiento;

use Saba\FarmaciaBundle\Form\Type\SalidaPorRecetaType;

/**
 * Description of SalidasPorReceta
 *
 * @author victor
 */
class SalidasPorRecetaController extends Controller {
    
    public function crearAction(Request $request) {
        $salidaPorReceta = new SalidaPorReceta();
        
        $movimiento = new Movimiento();
        //$movimiento->setFechaDeEjecucion(new \DateTime('1983-01-01'));
        //$movimiento->setFechaDeRegistro(new \DateTime('2000-01-01'));
        
        $salidaPorReceta->getMovimientos()->add($movimiento);
                
        $formulario = $this->createForm(new SalidaPorRecetaType(), $salidaPorReceta);
        //$request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $formulario->handleRequest($request);
            if ($formulario->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($salidaPorReceta);
                $em->flush();
                return $this->redirect($this->generateUrl('saba_farmacia_salidas_por_receta_crear'));
            }
        }
        return $this->render("SabaFarmaciaBundle:SalidaPorReceta:crear.html.twig",
            array("form" => $formulario->createView()));
        
    }
    
    public function eliminarAction($id) {
        
    }
    
    public function actualizarAction($id) {
        
    }
    
    public function buscarAction() {
        
    }
}
