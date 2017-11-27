<?php

/* company/show.html.twig */
class __TwigTemplate_592ea0b563be0287c0b38c4fed38560eade96dde8e637e70898e681d59dfde4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/show.html.twig", 1);
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
        $__internal_fb35d52319aa720a0a51d1b1c4cda060ce892473787af9c5b00f9ad8faad74e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb35d52319aa720a0a51d1b1c4cda060ce892473787af9c5b00f9ad8faad74e1->enter($__internal_fb35d52319aa720a0a51d1b1c4cda060ce892473787af9c5b00f9ad8faad74e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb35d52319aa720a0a51d1b1c4cda060ce892473787af9c5b00f9ad8faad74e1->leave($__internal_fb35d52319aa720a0a51d1b1c4cda060ce892473787af9c5b00f9ad8faad74e1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1968791d7f0c5f94aaf21ef99d3d863c386ffe1a62287044551f50a669777246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1968791d7f0c5f94aaf21ef99d3d863c386ffe1a62287044551f50a669777246->enter($__internal_1968791d7f0c5f94aaf21ef99d3d863c386ffe1a62287044551f50a669777246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Company</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "adress", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Site</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "site", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "createdAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "createdAt", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
\t<tr>
                <th>Updatedat</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "updatedAt", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "updatedAt", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_edit", array("id" => $this->getAttribute((isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_1968791d7f0c5f94aaf21ef99d3d863c386ffe1a62287044551f50a669777246->leave($__internal_1968791d7f0c5f94aaf21ef99d3d863c386ffe1a62287044551f50a669777246_prof);

    }

    public function getTemplateName()
    {
        return "company/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 49,  116 => 47,  110 => 44,  104 => 41,  92 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Company</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ company.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ company.name }}</td>
            </tr>
            <tr>
                <th>Adress</th>
                <td>{{ company.adress }}</td>
            </tr>
            <tr>
                <th>Site</th>
                <td>{{ company.site }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ company.description }}</td>
            </tr>
            <tr>
                <th>Createdat</th>
                <td>{% if company.createdAt %}{{ company.createdAt|date('Y-m-d') }}{% endif %}</td>
            </tr>
\t<tr>
                <th>Updatedat</th>
                <td>{% if company.updatedAt %}{{ company.updatedAt|date('Y-m-d') }}{% endif %}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('company_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('company_edit', { 'id': company.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "company/show.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/company/show.html.twig");
    }
}
