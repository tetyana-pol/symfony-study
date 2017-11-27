<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_bf60c0fa6f6f95faf1126973734cf89a21c38f0c92df635917b2f7fc4285de3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5f8ab2d1072f40d972cc2dbc787e9b92af21903f1566cc95fe94996ab4caee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f8ab2d1072f40d972cc2dbc787e9b92af21903f1566cc95fe94996ab4caee5->enter($__internal_c5f8ab2d1072f40d972cc2dbc787e9b92af21903f1566cc95fe94996ab4caee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:Pager:base_results.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
        
        $__internal_c5f8ab2d1072f40d972cc2dbc787e9b92af21903f1566cc95fe94996ab4caee5->leave($__internal_c5f8ab2d1072f40d972cc2dbc787e9b92af21903f1566cc95fe94996ab4caee5_prof);

    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_f9f4f4be3877a0d3b51b5842607d42a58738213c891422734f4ee1ffc45a19f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f4f4be3877a0d3b51b5842607d42a58738213c891422734f4ee1ffc45a19f4->enter($__internal_f9f4f4be3877a0d3b51b5842607d42a58738213c891422734f4ee1ffc45a19f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
        
        $__internal_f9f4f4be3877a0d3b51b5842607d42a58738213c891422734f4ee1ffc45a19f4->leave($__internal_f9f4f4be3877a0d3b51b5842607d42a58738213c891422734f4ee1ffc45a19f4_prof);

    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_bb715cbc9c7cdf20a483f45686b369ad5bf49aa205235c9f343608ba896c5dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb715cbc9c7cdf20a483f45686b369ad5bf49aa205235c9f343608ba896c5dba->enter($__internal_bb715cbc9c7cdf20a483f45686b369ad5bf49aa205235c9f343608ba896c5dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_bb715cbc9c7cdf20a483f45686b369ad5bf49aa205235c9f343608ba896c5dba->leave($__internal_bb715cbc9c7cdf20a483f45686b369ad5bf49aa205235c9f343608ba896c5dba_prof);

    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        $__internal_3a699fa51726dafe1ab7d6ede130a2e51bba9cb5a53213ca34661b0c69e5915c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a699fa51726dafe1ab7d6ede130a2e51bba9cb5a53213ca34661b0c69e5915c->enter($__internal_3a699fa51726dafe1ab7d6ede130a2e51bba9cb5a53213ca34661b0c69e5915c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "max_per_page"));

        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small form-control\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_per_page\" style=\"width: auto\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (($context["per_page"] == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "maxperpage", array()))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "values", array()), array("_page" => 1, "_per_page" => $context["per_page"])))), "method"), "html", null, true);
            echo "\">";
            // line 27
            echo twig_escape_filter($this->env, $context["per_page"], "html", null, true);
            // line 28
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
        
        $__internal_3a699fa51726dafe1ab7d6ede130a2e51bba9cb5a53213ca34661b0c69e5915c->leave($__internal_3a699fa51726dafe1ab7d6ede130a2e51bba9cb5a53213ca34661b0c69e5915c_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 30,  112 => 28,  110 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 23,  81 => 22,  73 => 19,  70 => 18,  64 => 17,  51 => 13,  45 => 12,  38 => 22,  35 => 21,  33 => 17,  30 => 16,  28 => 12,  25 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% block num_pages %}
    {{ admin.datagrid.pager.page }} / {{ admin.datagrid.pager.lastpage }}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_results %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block max_per_page %}
    <label class=\"control-label\" for=\"{{ admin.uniqid }}_per_page\">{% trans from 'SonataAdminBundle' %}label_per_page{% endtrans %}</label>
    <select class=\"per-page small form-control\" id=\"{{ admin.uniqid }}_per_page\" style=\"width: auto\">
        {% for per_page in admin.getperpageoptions %}
            <option {% if per_page == admin.datagrid.pager.maxperpage %}selected=\"selected\"{% endif %} value=\"{{ admin.generateUrl('list', {'filter': admin.datagrid.values|merge({'_page': 1, '_per_page': per_page})}) }}\">
                {{- per_page -}}
            </option>
        {% endfor %}
    </select>
{% endblock %}
", "SonataAdminBundle:Pager:base_results.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/sonata-project/admin-bundle/Resources/views/Pager/base_results.html.twig");
    }
}
