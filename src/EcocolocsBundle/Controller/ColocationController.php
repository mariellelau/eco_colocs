<?php

namespace EcocolocsBundle\Controller;

use EcocolocsBundle\Entity\Colocation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Colocation controller.
 *
 */
class ColocationController extends Controller
{
    /**
     * Lists all colocation entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colocations = $em->getRepository('EcocolocsBundle:Colocation')->findAll();

        return $this->render('@Ecocolocs/colocation/index.html.twig', array(
            'colocations' => $colocations,
        ));
    }

    /**
     * Creates a new colocation entity.
     *
     */
    public function newAction(Request $request)
    {
        $colocation = new Colocation();
        $form = $this->createForm('EcocolocsBundle\Form\ColocationType', $colocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($colocation);
            $em->flush($colocation);

            return $this->redirectToRoute('colocation_show', array('id' => $colocation->getId()));
        }

        return $this->render('@Ecocolocs/colocation/new.html.twig', array(
            'colocation' => $colocation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a colocation entity.
     *
     */
    public function showAction(Colocation $colocation)
    {
        $deleteForm = $this->createDeleteForm($colocation);

        return $this->render('@Mvt/colocation/show.html.twig', array(
            'colocation' => $colocation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing colocation entity.
     *
     */
    public function editAction(Request $request, Colocation $colocation)
    {
        $deleteForm = $this->createDeleteForm($colocation);
        $editForm = $this->createForm('EcocolocsBundle\Form\ColocationType', $colocation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('colocation_edit', array('id' => $colocation->getId()));
        }

        return $this->render('@Mvt/colocation/edit.html.twig', array(
            'colocation' => $colocation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a colocation entity.
     *
     */
    public function deleteAction(Request $request, Colocation $colocation)
    {
        $form = $this->createDeleteForm($colocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($colocation);
            $em->flush($colocation);
        }

        return $this->redirectToRoute('colocation_index');
    }

    /**
     * Creates a form to delete a colocation entity.
     *
     * @param Colocation $colocation The colocation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Colocation $colocation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('colocation_delete', array('id' => $colocation->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
