<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_72271c24291abb602c298efaca08908349c600e6f1d0137408bffe554ece7581 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ba392d60c9edbb2783300310bc4aa313baf0d2ab09f83d7571048089f2f8fa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba392d60c9edbb2783300310bc4aa313baf0d2ab09f83d7571048089f2f8fa2->enter($__internal_4ba392d60c9edbb2783300310bc4aa313baf0d2ab09f83d7571048089f2f8fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ba392d60c9edbb2783300310bc4aa313baf0d2ab09f83d7571048089f2f8fa2->leave($__internal_4ba392d60c9edbb2783300310bc4aa313baf0d2ab09f83d7571048089f2f8fa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1aaf1d128af7850ef7bd5db1eb4dde07c3de646c8c9ef6d7c783fd99121646f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aaf1d128af7850ef7bd5db1eb4dde07c3de646c8c9ef6d7c783fd99121646f7->enter($__internal_1aaf1d128af7850ef7bd5db1eb4dde07c3de646c8c9ef6d7c783fd99121646f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1aaf1d128af7850ef7bd5db1eb4dde07c3de646c8c9ef6d7c783fd99121646f7->leave($__internal_1aaf1d128af7850ef7bd5db1eb4dde07c3de646c8c9ef6d7c783fd99121646f7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_631eba755ba4d123f253bebf95e51eeaad064e2fb98e55242c6fc040aa592c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_631eba755ba4d123f253bebf95e51eeaad064e2fb98e55242c6fc040aa592c62->enter($__internal_631eba755ba4d123f253bebf95e51eeaad064e2fb98e55242c6fc040aa592c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_631eba755ba4d123f253bebf95e51eeaad064e2fb98e55242c6fc040aa592c62->leave($__internal_631eba755ba4d123f253bebf95e51eeaad064e2fb98e55242c6fc040aa592c62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e00c0e70c994d5bef3bbb4c8df6be8ca42d687265dff9bb84ac62b1af66f61c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00c0e70c994d5bef3bbb4c8df6be8ca42d687265dff9bb84ac62b1af66f61c0->enter($__internal_e00c0e70c994d5bef3bbb4c8df6be8ca42d687265dff9bb84ac62b1af66f61c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e00c0e70c994d5bef3bbb4c8df6be8ca42d687265dff9bb84ac62b1af66f61c0->leave($__internal_e00c0e70c994d5bef3bbb4c8df6be8ca42d687265dff9bb84ac62b1af66f61c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
