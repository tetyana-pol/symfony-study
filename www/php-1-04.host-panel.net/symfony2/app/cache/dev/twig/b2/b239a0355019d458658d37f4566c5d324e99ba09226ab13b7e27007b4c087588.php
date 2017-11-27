<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_685b6d443dce997e80b4a9d71e82b32214a3f6a07c1f4c3278b728950b257782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a65bfb3be258ee5501301ef4ac9ab40e4eb6efa5d6176251b6d7bbed93b621e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a65bfb3be258ee5501301ef4ac9ab40e4eb6efa5d6176251b6d7bbed93b621e->enter($__internal_7a65bfb3be258ee5501301ef4ac9ab40e4eb6efa5d6176251b6d7bbed93b621e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_7a65bfb3be258ee5501301ef4ac9ab40e4eb6efa5d6176251b6d7bbed93b621e->leave($__internal_7a65bfb3be258ee5501301ef4ac9ab40e4eb6efa5d6176251b6d7bbed93b621e_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_629575da4cf430107f554916792528f80851f25e4089b117d8f0814d529a217d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629575da4cf430107f554916792528f80851f25e4089b117d8f0814d529a217d->enter($__internal_629575da4cf430107f554916792528f80851f25e4089b117d8f0814d529a217d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_629575da4cf430107f554916792528f80851f25e4089b117d8f0814d529a217d->leave($__internal_629575da4cf430107f554916792528f80851f25e4089b117d8f0814d529a217d_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
