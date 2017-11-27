<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_399f98a8796dd6d0446b9f8ee86896ae804076ff1855ab78544a0e9ae3a91d58 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_010094611c9d743be9ed494adcdeba69707c7f40df9e0d4d25d4783a36fc2c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010094611c9d743be9ed494adcdeba69707c7f40df9e0d4d25d4783a36fc2c4d->enter($__internal_010094611c9d743be9ed494adcdeba69707c7f40df9e0d4d25d4783a36fc2c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_010094611c9d743be9ed494adcdeba69707c7f40df9e0d4d25d4783a36fc2c4d->leave($__internal_010094611c9d743be9ed494adcdeba69707c7f40df9e0d4d25d4783a36fc2c4d_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/knplabs/knp-menu/src/Knp/Menu/Resources/views/knp_menu_base.html.twig");
    }
}
