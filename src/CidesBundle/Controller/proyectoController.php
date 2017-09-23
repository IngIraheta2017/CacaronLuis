<?php

namespace CidesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CidesBundle\Form\ProyectoType;
use CidesBundle\Form\ObjetivoProyectoType;
use CidesBundle\Entity\Proyecto;
use CidesBundle\Entity\ObjetivoProyecto;


class proyectoController extends Controller
{
    public function agregarProyectoAction()
    {
      $proyecto = new Proyecto();
      $form = $this->createForm(ProyectoType::class, $proyecto);
      $objetivos=new ObjetivoProyecto();
      $form_obj=$this->createForm(ObjetivoProyectoType::class, $objetivos);

      return $this->render('CidesBundle:proyecto:agregar_proyecto.html.twig', array(
          'form' => $form->createView(),
          'form_obj'=>$form_obj->createView(),
      ));

    }

}
