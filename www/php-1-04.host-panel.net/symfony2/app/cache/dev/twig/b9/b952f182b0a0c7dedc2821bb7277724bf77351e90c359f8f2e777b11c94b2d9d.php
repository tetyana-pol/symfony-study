<?php

/* base.html.twig */
class __TwigTemplate_144e71a6ef7973d32f8f6e549522b3ca5ce3f5bc95ac7e56f0e4dc5755c36d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef9bcc9de80a960501d448d29dfe8df38cf03ce41853ee8d44d497a8c7439de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9bcc9de80a960501d448d29dfe8df38cf03ce41853ee8d44d497a8c7439de4->enter($__internal_ef9bcc9de80a960501d448d29dfe8df38cf03ce41853ee8d44d497a8c7439de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    
\t<title></title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <!-- Bootstrap -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
<ul>
<li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("company_index");
        echo "\">Компанії</a></li>
<li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("offices_index");
        echo "\">Офіси</a></li>
<li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("persons_index");
        echo "\">Персони</a></li>
<li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category_index");
        echo "\">Галузі/Категорії</a></li>
<li><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("soft_group_companies_about");
        echo "\">Про нас</a></li>
<li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("soft_group_companies_contact");
        echo "\">Контакти</a></li>
<li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("soft_group_companies_news");
        echo "\">Новини</a></li>

</ul>
</div>
</nav>
<div id=\"bodyblock\">
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "</div>
</body>
</html>";
        
        $__internal_ef9bcc9de80a960501d448d29dfe8df38cf03ce41853ee8d44d497a8c7439de4->leave($__internal_ef9bcc9de80a960501d448d29dfe8df38cf03ce41853ee8d44d497a8c7439de4_prof);

    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
        $__internal_53a7c52e5fb5e5bec337d2023277062d9c32b5e47123092b7fe1e54e2d98863b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a7c52e5fb5e5bec337d2023277062d9c32b5e47123092b7fe1e54e2d98863b->enter($__internal_53a7c52e5fb5e5bec337d2023277062d9c32b5e47123092b7fe1e54e2d98863b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53a7c52e5fb5e5bec337d2023277062d9c32b5e47123092b7fe1e54e2d98863b->leave($__internal_53a7c52e5fb5e5bec337d2023277062d9c32b5e47123092b7fe1e54e2d98863b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  98 => 43,  96 => 42,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  67 => 31,  63 => 30,  56 => 26,  40 => 13,  36 => 12,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    
\t<title></title>
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <!-- Bootstrap -->
    <link href=\"{{asset('bootstrap/css/bootstrap.css')}}\" rel=\"stylesheet\">
\t<link href=\"{{asset('css/style.css')}}\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"{{asset('bootstrap/js/bootstrap.js')}}\"></script>
<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
<ul>
<li><a href=\"{{path('company_index')}}\">Компанії</a></li>
<li><a href=\"{{path('offices_index')}}\">Офіси</a></li>
<li><a href=\"{{path('persons_index')}}\">Персони</a></li>
<li><a href=\"{{path('category_index')}}\">Галузі/Категорії</a></li>
<li><a href=\"{{path('soft_group_companies_about')}}\">Про нас</a></li>
<li><a href=\"{{path('soft_group_companies_contact')}}\">Контакти</a></li>
<li><a href=\"{{path('soft_group_companies_news')}}\">Новини</a></li>

</ul>
</div>
</nav>
<div id=\"bodyblock\">
{% block body %}{% endblock %}
</div>
</body>
</html>", "base.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/app/Resources/views/base.html.twig");
    }
}
