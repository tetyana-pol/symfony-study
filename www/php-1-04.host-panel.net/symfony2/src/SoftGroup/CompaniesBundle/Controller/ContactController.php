<?php

namespace SoftGroup\CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoftGroupCompaniesBundle:Default:contact.html.twig');
    }
}