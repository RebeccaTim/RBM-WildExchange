<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function editprofileAction()
    {
        return $this->render('WCSWildExchangeBundle:User:editprofile.html.twig');


    }

    public function viewprofileAction()
    {
        return $this->render('WCSWildExchangeBundle:User:viewprofile.html.twig');

    }
}

