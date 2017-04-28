<?php

namespace WCS\WildExchangeBundle\Controller;

use WCS\WildExchangeBundle\Entity\Reponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Reponse controller.
 *
 */
class ReponseController extends Controller
{
    /**
     * Lists all reponse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reponses = $em->getRepository('WCSWildExchangeBundle:Reponse')->findAll();

        return $this->render('reponse/index.html.twig', array(
            'reponses' => $reponses,
        ));
    }

    /**
     * Creates a new reponse entity.
     *
     */
    public function newAction(Request $request,$id_question)
    {

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  //Recupere l'utilisateur ?
        $em = $this->getDoctrine()->getManager();
        $question=$em->getRepository('WCSWildExchangeBundle:Question')->find($id_question);

//
        $reponse = new Reponse();
        $form = $this->createForm('WCS\WildExchangeBundle\Form\ReponseType', $reponse);
        $form->handleRequest($request);

 //     id de question ou objet question?!!!!!!!!!!!!!!!!!!
        $reponse->setQuestion($id_question);
 //       

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $reponse->setQuestion($question);
            $em->persist($reponse);
            $em->flush();

            return $this->redirectToRoute('question_show', array('id' => $reponse->getQuestion()->getId()));
        }

        return $this->render('reponse/new.html.twig', array(
            'form' => $form->createView(),
            'question'=> $question,
        ));
    }

    /**
     * Finds and displays a reponse entity.
     *
     */
    public function showAction(Reponse $reponse)
    {
        $deleteForm = $this->createDeleteForm($reponse);

        return $this->render('reponse/show.html.twig', array(
            'reponse' => $reponse,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reponse entity.
     *
     */
    public function editAction(Request $request, Reponse $reponse)
    {
        $deleteForm = $this->createDeleteForm($reponse);
        $editForm = $this->createForm('WCS\WildExchangeBundle\Form\ReponseType', $reponse);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reponse_edit', array('id' => $reponse->getId()));
        }

        return $this->render('reponse/edit.html.twig', array(
            'reponse' => $reponse,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a reponse entity.
     *
     */
    public function deleteAction(Request $request, Reponse $reponse)
    {
        $form = $this->createDeleteForm($reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reponse);
            $em->flush();
        }

        return $this->redirectToRoute('reponse_index');
    }

    /**
     * Creates a form to delete a reponse entity.
     *
     * @param Reponse $reponse The reponse entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reponse $reponse)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reponse_delete', array('id' => $reponse->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
