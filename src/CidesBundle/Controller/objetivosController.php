<?php

namespace CidesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CidesBundle\Entity\ObjetivoProyecto;
use CidesBundle\Form\ObjetivoProyectoType;

class objetivosController extends Controller
{
    public function agregarObjetivoAction()
    {
      $objetivo = new ObjetivoProyecto();

    $form = $this->createForm(ObjetivoProyectoType::class, $objetivo);

      return $this->render('CidesBundle:proyecto:agregar_proyecto.html.twig', array(
          'form' => $form->createView(),
      ));

    }

}
