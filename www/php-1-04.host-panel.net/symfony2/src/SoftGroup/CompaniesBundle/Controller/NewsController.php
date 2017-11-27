<?php

namespace SoftGroup\CompaniesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NewsController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoftGroupCompaniesBundle:Default:news.html.twig');
    }
}