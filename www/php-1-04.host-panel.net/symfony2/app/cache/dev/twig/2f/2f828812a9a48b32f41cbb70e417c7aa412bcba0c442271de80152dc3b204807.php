<?php

/* SoftGroupCompaniesBundle:Default:about.html.twig */
class __TwigTemplate_71e2e79dc06202ef15e227c8e0af86fd9e228af5855c479162d3c2507ed1f15d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "SoftGroupCompaniesBundle:Default:about.html.twig", 1);
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
        $__internal_a5da8607e3118fc5b131cfa119728bdb7e3f4427b52fbb38d5411478974d1d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5da8607e3118fc5b131cfa119728bdb7e3f4427b52fbb38d5411478974d1d83->enter($__internal_a5da8607e3118fc5b131cfa119728bdb7e3f4427b52fbb38d5411478974d1d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoftGroupCompaniesBundle:Default:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5da8607e3118fc5b131cfa119728bdb7e3f4427b52fbb38d5411478974d1d83->leave($__internal_a5da8607e3118fc5b131cfa119728bdb7e3f4427b52fbb38d5411478974d1d83_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_add667ef9a30788bbfdd2738707f18279239edfec244f3411b45b27cc6ce1a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add667ef9a30788bbfdd2738707f18279239edfec244f3411b45b27cc6ce1a23->enter($__internal_add667ef9a30788bbfdd2738707f18279239edfec244f3411b45b27cc6ce1a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"block\">about</div>
";
        
        $__internal_add667ef9a30788bbfdd2738707f18279239edfec244f3411b45b27cc6ce1a23->leave($__internal_add667ef9a30788bbfdd2738707f18279239edfec244f3411b45b27cc6ce1a23_prof);

    }

    public function getTemplateName()
    {
        return "SoftGroupCompaniesBundle:Default:about.html.twig";
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
<div id=\"block\">about</div>
{% endblock %}
", "SoftGroupCompaniesBundle:Default:about.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/src/SoftGroup/CompaniesBundle/Resources/views/Default/about.html.twig");
    }
}
