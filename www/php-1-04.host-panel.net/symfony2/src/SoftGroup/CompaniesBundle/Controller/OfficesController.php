<?php

namespace SoftGroup\CompaniesBundle\Controller;

use SoftGroup\CompaniesBundle\Entity\Offices;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Office controller.
 *
 */
class OfficesController extends Controller
{
    /**
     * Lists all office entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $offices = $em->getRepository('SoftGroupCompaniesBundle:Offices')->findAll();

        return $this->render('offices/index.html.twig', array(
            'offices' => $offices,
        ));
    }

    /**
     * Creates a new office entity.
     *
     */
    public function newAction(Request $request)
    {
        $office = new Offices();
        $form = $this->createForm('SoftGroup\CompaniesBundle\Form\OfficesType', $office);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($office);
            $em->flush($office);

            return $this->redirectToRoute('offices_show', array('id' => $office->getId()));
        }

        return $this->render('offices/new.html.twig', array(
            'office' => $office,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a office entity.
     *
     */
    public function showAction(Offices $office)
    {
        $deleteForm = $this->createDeleteForm($office);

        return $this->render('offices/show.html.twig', array(
            'office' => $office,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing office entity.
     *
     */
    public function editAction(Request $request, Offices $office)
    {
        $deleteForm = $this->createDeleteForm($office);
        $editForm = $this->createForm('SoftGroup\CompaniesBundle\Form\OfficesType', $office);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('offices_edit', array('id' => $office->getId()));
        }

        return $this->render('offices/edit.html.twig', array(
            'office' => $office,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a office entity.
     *
     */
    public function deleteAction(Request $request, Offices $office)
    {
        $form = $this->createDeleteForm($office);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($office);
            $em->flush();
        }

        return $this->redirectToRoute('offices_index');
    }

    /**
     * Creates a form to delete a office entity.
     *
     * @param Offices $office The office entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Offices $office)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('offices_delete', array('id' => $office->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
