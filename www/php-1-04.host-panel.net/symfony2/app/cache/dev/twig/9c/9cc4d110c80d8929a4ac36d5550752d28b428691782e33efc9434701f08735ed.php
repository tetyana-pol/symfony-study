<?php

/* offices/show.html.twig */
class __TwigTemplate_44093d16b32c3ac2c9f4ef0e66a8948065b4d788f53965ea3d53df603c335fae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offices/show.html.twig", 1);
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
        $__internal_37593c5adbeac97915e53ef72dd7f7ed3609c882cf55fdba532b1d3ee39d71d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37593c5adbeac97915e53ef72dd7f7ed3609c882cf55fdba532b1d3ee39d71d4->enter($__internal_37593c5adbeac97915e53ef72dd7f7ed3609c882cf55fdba532b1d3ee39d71d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offices/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37593c5adbeac97915e53ef72dd7f7ed3609c882cf55fdba532b1d3ee39d71d4->leave($__internal_37593c5adbeac97915e53ef72dd7f7ed3609c882cf55fdba532b1d3ee39d71d4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_587c082c0b6d7b129b8c6c4df5ae7fe2f8b6f180c15c8cd676ba639c7c666972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587c082c0b6d7b129b8c6c4df5ae7fe2f8b6f180c15c8cd676ba639c7c666972->enter($__internal_587c082c0b6d7b129b8c6c4df5ae7fe2f8b6f180c15c8cd676ba639c7c666972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Office</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["office"]) ? $context["office"] : $this->getContext($context, "office")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["office"]) ? $context["office"] : $this->getContext($context, "office")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["office"]) ? $context["office"] : $this->getContext($context, "office")), "address", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_edit", array("id" => $this->getAttribute((isset($context["office"]) ? $context["office"] : $this->getContext($context, "office")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_587c082c0b6d7b129b8c6c4df5ae7fe2f8b6f180c15c8cd676ba639c7c666972->leave($__internal_587c082c0b6d7b129b8c6c4df5ae7fe2f8b6f180c15c8cd676ba639c7c666972_prof);

    }

    public function getTemplateName()
    {
        return "offices/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Office</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ office.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ office.name }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ office.address }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('offices_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('offices_edit', { 'id': office.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "offices/show.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/offices/show.html.twig");
    }
}
