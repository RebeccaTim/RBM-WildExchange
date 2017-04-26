<?php

namespace WCS\WildExchangeBundle\Controller;
use WCS\WildExchangeBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
/**
 * User controller.
 *
 */
class UserController extends Controller
{

    public function editAction(Request $request)
    {

        if (!empty($_POST)) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $user->setUsername($_POST['username']);


            $em->flush();
            return $this->redirectToRoute('homepage');
        }

        return $this->render('WCSWildExchangeBundle:User:edit.html.twig');
    }
}
