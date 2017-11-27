<?php

namespace SoftGroup\CompaniesBundle\Controller;

use SoftGroup\CompaniesBundle\Entity\Persons;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Person controller.
 *
 */
class PersonsController extends Controller
{
    /**
     * Lists all person entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $persons = $em->getRepository('SoftGroupCompaniesBundle:Persons')->findAll();

        return $this->render('persons/index.html.twig', array(
            'persons' => $persons,
        ));
    }

    /**
     * Creates a new person entity.
     *
     */
    public function newAction(Request $request)
    {
        $person = new Persons();
        $form = $this->createForm('SoftGroup\CompaniesBundle\Form\PersonsType', $person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($person);
            $em->flush($person);

            return $this->redirectToRoute('persons_show', array('id' => $person->getId()));
        }

        return $this->render('persons/new.html.twig', array(
            'person' => $person,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a person entity.
     *
     */
    public function showAction(Persons $person)
    {
        $deleteForm = $this->createDeleteForm($person);

        return $this->render('persons/show.html.twig', array(
            'person' => $person,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing person entity.
     *
     */
    public function editAction(Request $request, Persons $person)
    {
        $deleteForm = $this->createDeleteForm($person);
        $editForm = $this->createForm('SoftGroup\CompaniesBundle\Form\PersonsType', $person);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('persons_edit', array('id' => $person->getId()));
        }

        return $this->render('persons/edit.html.twig', array(
            'person' => $person,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a person entity.
     *
     */
    public function deleteAction(Request $request, Persons $person)
    {
        $form = $this->createDeleteForm($person);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($person);
            $em->flush();
        }

        return $this->redirectToRoute('persons_index');
    }

    /**
     * Creates a form to delete a person entity.
     *
     * @param Persons $person The person entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Persons $person)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('persons_delete', array('id' => $person->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
