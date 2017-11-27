<?php

/* company/index.html.twig */
class __TwigTemplate_0ae3762af9c1ea1cddd533506c999bf61817cce4e09f78b710a1a1653f76ac86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "company/index.html.twig", 1);
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
        $__internal_d94f925ff06aea25ca213ca4baec1bd5efcf07bb71e8da8a402ba5d9da76b5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94f925ff06aea25ca213ca4baec1bd5efcf07bb71e8da8a402ba5d9da76b5b4->enter($__internal_d94f925ff06aea25ca213ca4baec1bd5efcf07bb71e8da8a402ba5d9da76b5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "company/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d94f925ff06aea25ca213ca4baec1bd5efcf07bb71e8da8a402ba5d9da76b5b4->leave($__internal_d94f925ff06aea25ca213ca4baec1bd5efcf07bb71e8da8a402ba5d9da76b5b4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5de1cacf4659a35a44016e6d4931b80000689b81f0feb68fc6ef38a997d8380d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de1cacf4659a35a44016e6d4931b80000689b81f0feb68fc6ef38a997d8380d->enter($__internal_5de1cacf4659a35a44016e6d4931b80000689b81f0feb68fc6ef38a997d8380d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Companies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Site</th>
                <th>Description</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "adress", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "site", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            if ($this->getAttribute($context["company"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["company"], "createdAt", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
\t\t<td>";
            // line 27
            if ($this->getAttribute($context["company"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["company"], "updatedAt", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_show", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_edit", array("id" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_new");
        echo "\">Create a new company</a>
        </li>
    </ul>
";
        
        $__internal_5de1cacf4659a35a44016e6d4931b80000689b81f0feb68fc6ef38a997d8380d->leave($__internal_5de1cacf4659a35a44016e6d4931b80000689b81f0feb68fc6ef38a997d8380d_prof);

    }

    public function getTemplateName()
    {
        return "company/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  119 => 40,  107 => 34,  101 => 31,  92 => 27,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Companies list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Adress</th>
                <th>Site</th>
                <th>Description</th>
                <th>Createdat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for company in companies %}
            <tr>
                <td><a href=\"{{ path('company_show', { 'id': company.id }) }}\">{{ company.id }}</a></td>
                <td>{{ company.name }}</td>
                <td>{{ company.adress }}</td>
                <td>{{ company.site }}</td>
                <td>{{ company.description }}</td>
                <td>{% if company.createdAt %}{{ company.createdAt|date('Y-m-d') }}{% endif %}</td>
\t\t<td>{% if company.updatedAt %}{{ company.updatedAt|date('Y-m-d') }}{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('company_show', { 'id': company.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('company_edit', { 'id': company.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('company_new') }}\">Create a new company</a>
        </li>
    </ul>
{% endblock %}
", "company/index.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/company/index.html.twig");
    }
}
