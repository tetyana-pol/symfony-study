<?php

/* SoftGroupCompaniesBundle:Default:contact.html.twig */
class __TwigTemplate_71c13cf8baf25c4fb50ff0dfd6d4ef2acca84f883c35f13bd5a5c8ba2c3076d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "SoftGroupCompaniesBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2a74f99d225837335602b3dfc93bc902c5b46a96800a0bd9fa530057deed70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a74f99d225837335602b3dfc93bc902c5b46a96800a0bd9fa530057deed70a->enter($__internal_a2a74f99d225837335602b3dfc93bc902c5b46a96800a0bd9fa530057deed70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoftGroupCompaniesBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a74f99d225837335602b3dfc93bc902c5b46a96800a0bd9fa530057deed70a->leave($__internal_a2a74f99d225837335602b3dfc93bc902c5b46a96800a0bd9fa530057deed70a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_56bfa60b7f3864e715ffac56d685c6a83673f64c5c3c6c582cdb8c2342776704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bfa60b7f3864e715ffac56d685c6a83673f64c5c3c6c582cdb8c2342776704->enter($__internal_56bfa60b7f3864e715ffac56d685c6a83673f64c5c3c6c582cdb8c2342776704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"block\">contact</div>
";
        
        $__internal_56bfa60b7f3864e715ffac56d685c6a83673f64c5c3c6c582cdb8c2342776704->leave($__internal_56bfa60b7f3864e715ffac56d685c6a83673f64c5c3c6c582cdb8c2342776704_prof);

    }

    public function getTemplateName()
    {
        return "SoftGroupCompaniesBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'index.html.twig' %}
{% block body %}
<div id=\"block\">contact</div>
{% endblock %}
", "SoftGroupCompaniesBundle:Default:contact.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/src/SoftGroup/CompaniesBundle/Resources/views/Default/contact.html.twig");
    }
}
