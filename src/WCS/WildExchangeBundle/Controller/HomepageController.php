<?php

namespace WCS\WildExchangeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends Controller
{

    public function indexAction()
    {
        // replace this example code with whatever you need

        $em = $this->getDoctrine()->getManager();

        $questions = $em->getRepository('WCSWildExchangeBundle:Question')->findAll();

        //return $this->render('homeBase.html.twig', array(
        return $this->render('WCSWildExchangeBundle:HomePage:HomePage.html.twig', array(
            "questions" => $questions,
        ));

    }
}
