<?php

namespace Yoda\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $em = $this->getDoctrine()->getManager();

        $repo = $em->getRepository('EventBundle:Event');

        $event = $repo->findOneBy(array(
            'name' => 'Darth\'s surprise birthday party'
        ));

        return $this->render('EventBundle:Default:index.html.twig', array(
            'name' => $name,
            'count' => 5,
            'event' => $event,
        ));

    }
}
