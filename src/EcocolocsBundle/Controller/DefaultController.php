<?php

namespace EcocolocsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colocations = $em->getRepository('EcocolocsBundle:Colocation')->findAll();

        return $this->render('@Ecocolocs/default/index.html.twig', array(
            'colocations' => $colocations,
        ));
    }

    public function contactAction()
    {
        return $this->render('@Ecocolocs/contact.html.twig');
    }

    public function manifesteAction()
    {
        return $this->render('@Ecocolocs/manifeste.html.twig');
    }
}
