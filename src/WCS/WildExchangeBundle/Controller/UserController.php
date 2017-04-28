<?php

namespace WCS\WildExchangeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use WCS\WildExchangeBundle\Entity\User;
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
    public function showAction()
    {
        $user = $this->getUser();

        return $this->render('WCSWildExchangeBundle:User:show.html.twig', array(
            'user' => $user,
        ));
    }


    public function editAction(Request $request)
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        if (!empty($_POST)) {
            $em = $this->getDoctrine()->getManager();
            $user->setUsername($_POST['username']);
            $user->setFirstname($_POST['firstname']);
            $user->setLastname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPhone($_POST['phone']);
            $user->setDescription($_POST['description']);


            $em->flush();
            return $this->redirectToRoute('wcs_wild_exchange_user_edit');
        }

        return $this->render('WCSWildExchangeBundle:User:edit.html.twig');
    }

    /*public function deleteAction ($user){
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager() ->deleteUser($user);
        return $this->redirect($this->generateUrl('wcs_wild_exchange_homepage'));

    }

}*/
}
