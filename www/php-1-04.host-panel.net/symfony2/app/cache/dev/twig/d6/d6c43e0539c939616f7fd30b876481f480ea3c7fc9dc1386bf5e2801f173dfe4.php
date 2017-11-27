<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_95aec6a6cb6b495467671f4d85fb433d024bc3ba2f0bb7290f46d77bbdf3f23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d74598019d37ea3586d87ea373053c8e7f492cb5c75592053c0e72fdc4f2f330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74598019d37ea3586d87ea373053c8e7f492cb5c75592053c0e72fdc4f2f330->enter($__internal_d74598019d37ea3586d87ea373053c8e7f492cb5c75592053c0e72fdc4f2f330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d74598019d37ea3586d87ea373053c8e7f492cb5c75592053c0e72fdc4f2f330->leave($__internal_d74598019d37ea3586d87ea373053c8e7f492cb5c75592053c0e72fdc4f2f330_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
