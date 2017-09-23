<?php

namespace CidesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CidesBundle\Entity\EstadoProyecto;
use CidesBundle\Form\EstadoProyectoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EstadoProyectoController extends Controller
{
  public function addAction()
    {
        $estadoProyecto = new EstadoProyecto();
        $form = $this->createCreateForm($estadoProyecto);
        return $this->render('CidesBundle:Proyecto:nuevoProyecto.html.twig', array('form' => $form->createView())); //vista que tendra el formulario
    }
    private function createCreateForm(EstadoProyecto $entity)
  {
      $form = $this->createForm(new EstadoProyectoType(), $entity, array(
              'action' => $this->generateUrl('cides_homepage_estadoP'),
              'method' => 'POST'
          ));
      return $form;
  }
}
