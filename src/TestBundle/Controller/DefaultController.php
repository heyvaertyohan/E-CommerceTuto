<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $nom = "heyvaert";
        $prenom = "yohan";
        return $this->render('TestBundle:Default:index.html.twig', array(
            'nom' => $nom,
            'prenom' => $prenom
        ));
    }

    public function page2Action()
    {
        return $this->render('TestBundle:Default:page2.html.twig');
    }

    public function page3Action()
    {
        return $this->render('TestBundle:Default:page3.html');
    }
}
