<?php

/* SoftGroupCompaniesBundle:Default:index.html.twig */
class __TwigTemplate_978ea29b50051644eadc1ecf31083ae060733d9f0d6cabbc22bb2c83d1bf88b9 extends Twig_Template
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
        $__internal_bb69678fd37d940d7554783e14ae2bc5c9f5343d8cd097d79ab23d5d24877dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb69678fd37d940d7554783e14ae2bc5c9f5343d8cd097d79ab23d5d24877dd8->enter($__internal_bb69678fd37d940d7554783e14ae2bc5c9f5343d8cd097d79ab23d5d24877dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SoftGroupCompaniesBundle:Default:index.html.twig"));

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
";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "</body>
</html>";
        
        $__internal_bb69678fd37d940d7554783e14ae2bc5c9f5343d8cd097d79ab23d5d24877dd8->leave($__internal_bb69678fd37d940d7554783e14ae2bc5c9f5343d8cd097d79ab23d5d24877dd8_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_675789ea9273053221824a504d416f93a93df1ccdb38d46bd9cb1edb475bf944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675789ea9273053221824a504d416f93a93df1ccdb38d46bd9cb1edb475bf944->enter($__internal_675789ea9273053221824a504d416f93a93df1ccdb38d46bd9cb1edb475bf944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_675789ea9273053221824a504d416f93a93df1ccdb38d46bd9cb1edb475bf944->leave($__internal_675789ea9273053221824a504d416f93a93df1ccdb38d46bd9cb1edb475bf944_prof);

    }

    public function getTemplateName()
    {
        return "SoftGroupCompaniesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  97 => 42,  95 => 41,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  67 => 31,  63 => 30,  56 => 26,  40 => 13,  36 => 12,  23 => 1,);
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
{% block body %}{% endblock %}
</body>
</html>", "SoftGroupCompaniesBundle:Default:index.html.twig", "/var/www/php-1-04/data/www/php-1-04.host-panel.net/symfony2/src/SoftGroup/CompaniesBundle/Resources/views/Default/index.html.twig");
    }
}
