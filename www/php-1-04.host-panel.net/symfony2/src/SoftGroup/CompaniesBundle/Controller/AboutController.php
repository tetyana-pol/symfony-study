<?php

namespace SoftGroup\CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoftGroupCompaniesBundle:Default:about.html.twig');
    }
}