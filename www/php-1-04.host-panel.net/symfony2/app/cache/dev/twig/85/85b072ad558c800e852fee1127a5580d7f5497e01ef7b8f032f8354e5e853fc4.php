<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_93b9eae37ffb5757edb72660b4fec4881c6ec8ca9b7ee6e7c0cec8a0774579f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1a2aacec3e100d02dce20e6bc523919645d5505e956856478fa52f09f3d1589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a2aacec3e100d02dce20e6bc523919645d5505e956856478fa52f09f3d1589->enter($__internal_e1a2aacec3e100d02dce20e6bc523919645d5505e956856478fa52f09f3d1589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a2aacec3e100d02dce20e6bc523919645d5505e956856478fa52f09f3d1589->leave($__internal_e1a2aacec3e100d02dce20e6bc523919645d5505e956856478fa52f09f3d1589_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ef08c1e20d2a48ade0c815a6b0dc50f237d964807321a32c249469c3df2113b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef08c1e20d2a48ade0c815a6b0dc50f237d964807321a32c249469c3df2113b->enter($__internal_5ef08c1e20d2a48ade0c815a6b0dc50f237d964807321a32c249469c3df2113b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5ef08c1e20d2a48ade0c815a6b0dc50f237d964807321a32c249469c3df2113b->leave($__internal_5ef08c1e20d2a48ade0c815a6b0dc50f237d964807321a32c249469c3df2113b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e71c40bddb3f63bd352d3b3dddfb83fcc0459506ce71c628f5ead0bdfcb9f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e71c40bddb3f63bd352d3b3dddfb83fcc0459506ce71c628f5ead0bdfcb9f40->enter($__internal_6e71c40bddb3f63bd352d3b3dddfb83fcc0459506ce71c628f5ead0bdfcb9f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6e71c40bddb3f63bd352d3b3dddfb83fcc0459506ce71c628f5ead0bdfcb9f40->leave($__internal_6e71c40bddb3f63bd352d3b3dddfb83fcc0459506ce71c628f5ead0bdfcb9f40_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb58c811208c8687202a9ba308c14801b799c2f8b68452131b4eb30dde879837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb58c811208c8687202a9ba308c14801b799c2f8b68452131b4eb30dde879837->enter($__internal_cb58c811208c8687202a9ba308c14801b799c2f8b68452131b4eb30dde879837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb58c811208c8687202a9ba308c14801b799c2f8b68452131b4eb30dde879837->leave($__internal_cb58c811208c8687202a9ba308c14801b799c2f8b68452131b4eb30dde879837_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
