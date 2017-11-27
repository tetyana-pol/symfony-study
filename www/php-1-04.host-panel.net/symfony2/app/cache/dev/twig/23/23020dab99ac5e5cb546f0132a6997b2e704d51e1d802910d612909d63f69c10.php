<?php

/* SoftGroupCompaniesBundle:Default:news.html.twig */
class __TwigTemplate_beede7c59dbdc7a01b76de3db6d747df16db5b36d18ad2ea81a0dfad7128d647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html.twig", "SoftGroupCompaniesBundle:Default:news.html.twig", 1);
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
        $__internal_f0f9d86880771000698b4e7eae6e0c6526e51742760ff56858fb1a7e9586ff65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0f9d86880771000698b4e7eae6e0c6526e51742760ff56858fb1a7e9586ff65->enter($__internal_f0f9d86880771000698b4e7eae6e0c6526e51742760ff56858fb1a7e9586ff65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoftGroupCompaniesBundle:Default:news.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0f9d86880771000698b4e7eae6e0c6526e51742760ff56858fb1a7e9586ff65->leave($__internal_f0f9d86880771000698b4e7eae6e0c6526e51742760ff56858fb1a7e9586ff65_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_87db2d8c876923bd0d7801b9ac483a8191e0f35599f1a826d1d9a94e0f53b979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87db2d8c876923bd0d7801b9ac483a8191e0f35599f1a826d1d9a94e0f53b979->enter($__internal_87db2d8c876923bd0d7801b9ac483a8191e0f35599f1a826d1d9a94e0f53b979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div id=\"block\">news</div>
";
        
        $__internal_87db2d8c876923bd0d7801b9ac483a8191e0f35599f1a826d1d9a94e0f53b979->leave($__internal_87db2d8c876923bd0d7801b9ac483a8191e0f35599f1a826d1d9a94e0f53b979_prof);

    }

    public function getTemplateName()
    {
        return "SoftGroupCompaniesBundle:Default:news.html.twig";
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
<div id=\"block\">news</div>
{% endblock %}
", "SoftGroupCompaniesBundle:Default:news.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/src/SoftGroup/CompaniesBundle/Resources/views/Default/news.html.twig");
    }
}
