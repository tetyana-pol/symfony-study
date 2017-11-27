<?php

namespace SoftGroup\CompaniesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CompanyAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('adress')
            ->add('site')
            ->add('description')
            ->add('category')
            ->add('updatedAt')
            ->add('createdAt')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('adress')
            ->add('site')
            ->add('description')
            ->add('category')
            ->add('updatedAt')
            ->add('createdAt')
            ->add('_action', null, array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->add('name')
            ->add('adress')
            ->add('site')
            ->add('description')
            ->add('category')

        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('adress')
            ->add('site')
            ->add('description')
            ->add('category')
            ->add('updatedAt')
            ->add('createdAt')
        ;
    }
    public function preUpdate($object)
    {
        $now = new \DateTime();
	$object->setUpdatedAt($now);
    }

    public function prePersist($object)
    {
        $now = new \DateTime();
	$object->setCreatedAt($now);
    }

}
