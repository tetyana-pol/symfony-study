<?php

/* offices/index.html.twig */
class __TwigTemplate_b057ad67f92a00e74fd2a4f4b5f19fec6eecf60433d872e0b935c86af12a0f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "offices/index.html.twig", 1);
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
        $__internal_251b82cca3675654839997bda6dd3f5ad97f2acff44007fc004d1a78503014e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251b82cca3675654839997bda6dd3f5ad97f2acff44007fc004d1a78503014e5->enter($__internal_251b82cca3675654839997bda6dd3f5ad97f2acff44007fc004d1a78503014e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "offices/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_251b82cca3675654839997bda6dd3f5ad97f2acff44007fc004d1a78503014e5->leave($__internal_251b82cca3675654839997bda6dd3f5ad97f2acff44007fc004d1a78503014e5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8fca3e16331757324e8505d4016d9a1f60864190d8063ac196783ea1c5cd5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8fca3e16331757324e8505d4016d9a1f60864190d8063ac196783ea1c5cd5e7->enter($__internal_e8fca3e16331757324e8505d4016d9a1f60864190d8063ac196783ea1c5cd5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Offices list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offices"]) ? $context["offices"] : $this->getContext($context, "offices")));
        foreach ($context['_seq'] as $context["_key"] => $context["office"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_show", array("id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["office"], "address", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_show", array("id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_edit", array("id" => $this->getAttribute($context["office"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['office'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_new");
        echo "\">Create a new office</a>
        </li>
    </ul>
";
        
        $__internal_e8fca3e16331757324e8505d4016d9a1f60864190d8063ac196783ea1c5cd5e7->leave($__internal_e8fca3e16331757324e8505d4016d9a1f60864190d8063ac196783ea1c5cd5e7_prof);

    }

    public function getTemplateName()
    {
        return "offices/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Offices list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for office in offices %}
            <tr>
                <td><a href=\"{{ path('offices_show', { 'id': office.id }) }}\">{{ office.id }}</a></td>
                <td>{{ office.name }}</td>
                <td>{{ office.address }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('offices_show', { 'id': office.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('offices_edit', { 'id': office.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('offices_new') }}\">Create a new office</a>
        </li>
    </ul>
{% endblock %}
", "offices/index.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/offices/index.html.twig");
    }
}
