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

            return $this->render('WCSWildExchangeBundle:HomePage:HomePage.html.twig');


    }
}
