<?php

/* persons/index.html.twig */
class __TwigTemplate_da1a8813d3d04e06bbce48dd4c1d097266694366a4fb4f61f6826a8554724e44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "persons/index.html.twig", 1);
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
        $__internal_01f2849af565e75eba8a2ba9ef13ca88e5f30b4112c199398ed0f9ec8b8e4927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01f2849af565e75eba8a2ba9ef13ca88e5f30b4112c199398ed0f9ec8b8e4927->enter($__internal_01f2849af565e75eba8a2ba9ef13ca88e5f30b4112c199398ed0f9ec8b8e4927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "persons/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01f2849af565e75eba8a2ba9ef13ca88e5f30b4112c199398ed0f9ec8b8e4927->leave($__internal_01f2849af565e75eba8a2ba9ef13ca88e5f30b4112c199398ed0f9ec8b8e4927_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c18f342fd1fb6f5bcd0d71799a3c8d7cf258b2f29bcc99ca39107f79007c45eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c18f342fd1fb6f5bcd0d71799a3c8d7cf258b2f29bcc99ca39107f79007c45eb->enter($__internal_c18f342fd1fb6f5bcd0d71799a3c8d7cf258b2f29bcc99ca39107f79007c45eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Persons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Id_offices</th>
                <th>Name</th>
                <th>Telefon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persons_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "idoffices", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "telefon", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persons_show", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persons_edit", array("id" => $this->getAttribute($context["person"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persons_new");
        echo "\">Create a new person</a>
        </li>
    </ul>
";
        
        $__internal_c18f342fd1fb6f5bcd0d71799a3c8d7cf258b2f29bcc99ca39107f79007c45eb->leave($__internal_c18f342fd1fb6f5bcd0d71799a3c8d7cf258b2f29bcc99ca39107f79007c45eb_prof);

    }

    public function getTemplateName()
    {
        return "persons/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Persons list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Id_offices</th>
                <th>Name</th>
                <th>Telefon</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for person in persons %}
            <tr>
                <td><a href=\"{{ path('persons_show', { 'id': person.id }) }}\">{{ person.id }}</a></td>
                <td>{{ person.idoffices }}</td>
                <td>{{ person.name }}</td>
                <td>{{ person.telefon }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('persons_show', { 'id': person.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('persons_edit', { 'id': person.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('persons_new') }}\">Create a new person</a>
        </li>
    </ul>
{% endblock %}
", "persons/index.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/persons/index.html.twig");
    }
}
