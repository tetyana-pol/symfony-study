<?php

/* SonataAdminBundle:CRUD:edit.html.twig */
class __TwigTemplate_03336e0ece82f707661190391b69d7640ddc46e8bb7bba7b081ccd06c2f466fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "SonataAdminBundle:CRUD:edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40fb02fb69d03a8ec7d17de88bf19d71754627ea18b2612aef66ca9e107892fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb02fb69d03a8ec7d17de88bf19d71754627ea18b2612aef66ca9e107892fa->enter($__internal_40fb02fb69d03a8ec7d17de88bf19d71754627ea18b2612aef66ca9e107892fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40fb02fb69d03a8ec7d17de88bf19d71754627ea18b2612aef66ca9e107892fa->leave($__internal_40fb02fb69d03a8ec7d17de88bf19d71754627ea18b2612aef66ca9e107892fa_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "SonataAdminBundle:CRUD:edit.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
