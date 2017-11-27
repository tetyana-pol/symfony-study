<?php

/* offices/new.html.twig */
class __TwigTemplate_df500486de9c4e89de5cda3230549cbc1be7ee3873cabbb5120bcc3cfb96bb92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offices/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dab36008f6e1a828f341834a8aed59fe0c8e58592857497d847c2a9c4a2e9cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab36008f6e1a828f341834a8aed59fe0c8e58592857497d847c2a9c4a2e9cf0->enter($__internal_dab36008f6e1a828f341834a8aed59fe0c8e58592857497d847c2a9c4a2e9cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offices/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dab36008f6e1a828f341834a8aed59fe0c8e58592857497d847c2a9c4a2e9cf0->leave($__internal_dab36008f6e1a828f341834a8aed59fe0c8e58592857497d847c2a9c4a2e9cf0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_13d229093d10c625d1f9dae3f3219694d2733f378dadc26caa55d793e2462aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d229093d10c625d1f9dae3f3219694d2733f378dadc26caa55d793e2462aa5->enter($__internal_13d229093d10c625d1f9dae3f3219694d2733f378dadc26caa55d793e2462aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Office creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_13d229093d10c625d1f9dae3f3219694d2733f378dadc26caa55d793e2462aa5->leave($__internal_13d229093d10c625d1f9dae3f3219694d2733f378dadc26caa55d793e2462aa5_prof);

    }

    public function getTemplateName()
    {
        return "offices/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Office creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('offices_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "offices/new.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/offices/new.html.twig");
    }
}
