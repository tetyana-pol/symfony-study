<?php

/* SonataAdminBundle:CRUD:list__batch.html.twig */
class __TwigTemplate_023c99eed8ce5ae7ea4c1623ef58fa857eff4c0fa7277f5e0eb2f35a74c9ca33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f75210a3a45e104449d17721f110fdd9d0b134755c9f4ab6ff69c50e5dd97e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75210a3a45e104449d17721f110fdd9d0b134755c9f4ab6ff69c50e5dd97e01->enter($__internal_f75210a3a45e104449d17721f110fdd9d0b134755c9f4ab6ff69c50e5dd97e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75210a3a45e104449d17721f110fdd9d0b134755c9f4ab6ff69c50e5dd97e01->leave($__internal_f75210a3a45e104449d17721f110fdd9d0b134755c9f4ab6ff69c50e5dd97e01_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_81dfe4b853ed257cc1e21acd7f5b62b914dcf31412c8d2783f8bd8481400d6ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81dfe4b853ed257cc1e21acd7f5b62b914dcf31412c8d2783f8bd8481400d6ad->enter($__internal_81dfe4b853ed257cc1e21acd7f5b62b914dcf31412c8d2783f8bd8481400d6ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_81dfe4b853ed257cc1e21acd7f5b62b914dcf31412c8d2783f8bd8481400d6ad->leave($__internal_81dfe4b853ed257cc1e21acd7f5b62b914dcf31412c8d2783f8bd8481400d6ad_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "SonataAdminBundle:CRUD:list__batch.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
