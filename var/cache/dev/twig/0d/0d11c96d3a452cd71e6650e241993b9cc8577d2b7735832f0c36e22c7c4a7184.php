<?php

/* ::layout.html.twig */
class __TwigTemplate_342556c6fb477faf297744259747e1f8f9e9db8ceb7104428cbca95bfd3a2e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e338a44deceb544c4422eeb0caf2936de10bb4a73691bd6c9a0e1c314420409 = $this->env->getExtension("native_profiler");
        $__internal_5e338a44deceb544c4422eeb0caf2936de10bb4a73691bd6c9a0e1c314420409->enter($__internal_5e338a44deceb544c4422eeb0caf2936de10bb4a73691bd6c9a0e1c314420409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "    </head>
    <body>

\t";
        // line 15
        $this->displayBlock('nav', $context, $blocks);
        // line 40
        echo "

        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                ";
        // line 44
        $this->displayBlock('header', $context, $blocks);
        // line 45
        echo "            </div>
            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">
                    ";
        // line 48
        $this->displayBlock('menu', $context, $blocks);
        // line 49
        echo "                </div>
                <div id=\"content\" class=\"col-md-9\">
                    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "                </div>
            </div>
        </div>

        <hr>

        ";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
        
        $__internal_5e338a44deceb544c4422eeb0caf2936de10bb4a73691bd6c9a0e1c314420409->leave($__internal_5e338a44deceb544c4422eeb0caf2936de10bb4a73691bd6c9a0e1c314420409_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4332600534f04c2db96d43783fabe672d86ca97e9ca38d37b37f4c0de3e798e = $this->env->getExtension("native_profiler");
        $__internal_c4332600534f04c2db96d43783fabe672d86ca97e9ca38d37b37f4c0de3e798e->enter($__internal_c4332600534f04c2db96d43783fabe672d86ca97e9ca38d37b37f4c0de3e798e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_c4332600534f04c2db96d43783fabe672d86ca97e9ca38d37b37f4c0de3e798e->leave($__internal_c4332600534f04c2db96d43783fabe672d86ca97e9ca38d37b37f4c0de3e798e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_952f1478906c0f25114011272b1b3b058e35e50cd436b223fb16035ac14b21c1 = $this->env->getExtension("native_profiler");
        $__internal_952f1478906c0f25114011272b1b3b058e35e50cd436b223fb16035ac14b21c1->enter($__internal_952f1478906c0f25114011272b1b3b058e35e50cd436b223fb16035ac14b21c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_952f1478906c0f25114011272b1b3b058e35e50cd436b223fb16035ac14b21c1->leave($__internal_952f1478906c0f25114011272b1b3b058e35e50cd436b223fb16035ac14b21c1_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b7aadb20708d14ef851a32d28d0af00538c6f7e5f03c2495322090fa95352483 = $this->env->getExtension("native_profiler");
        $__internal_b7aadb20708d14ef851a32d28d0af00538c6f7e5f03c2495322090fa95352483->enter($__internal_b7aadb20708d14ef851a32d28d0af00538c6f7e5f03c2495322090fa95352483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 16
        echo "      <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Mercury</a>

          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("signin");
        echo "\">
                <span class=\"glyphicon glyphicon-user\"></span>Inscription
              </a>
            </li>
            <li>
              <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
                <span class=\"glyphicon glyphicon-log-in\"></span> Connexion
              </a>
            </li>
            <li>
              <a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                <span class=\"glyphicon glyphicon-log-out\"></span> Deconnexion
              </a>
            </li>
          </ul>
        </div>
      </nav>
\t";
        
        $__internal_b7aadb20708d14ef851a32d28d0af00538c6f7e5f03c2495322090fa95352483->leave($__internal_b7aadb20708d14ef851a32d28d0af00538c6f7e5f03c2495322090fa95352483_prof);

    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        $__internal_7bb24973bf73c1cd5c299fa971b45e260fc74787b42cd367930264a6331f341e = $this->env->getExtension("native_profiler");
        $__internal_7bb24973bf73c1cd5c299fa971b45e260fc74787b42cd367930264a6331f341e->enter($__internal_7bb24973bf73c1cd5c299fa971b45e260fc74787b42cd367930264a6331f341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_7bb24973bf73c1cd5c299fa971b45e260fc74787b42cd367930264a6331f341e->leave($__internal_7bb24973bf73c1cd5c299fa971b45e260fc74787b42cd367930264a6331f341e_prof);

    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4660acfd2225b85901081feb69345ad872bac7b7fd71a8e4964f8ca97dc8acd = $this->env->getExtension("native_profiler");
        $__internal_f4660acfd2225b85901081feb69345ad872bac7b7fd71a8e4964f8ca97dc8acd->enter($__internal_f4660acfd2225b85901081feb69345ad872bac7b7fd71a8e4964f8ca97dc8acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_f4660acfd2225b85901081feb69345ad872bac7b7fd71a8e4964f8ca97dc8acd->leave($__internal_f4660acfd2225b85901081feb69345ad872bac7b7fd71a8e4964f8ca97dc8acd_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_39bc701a4f8ee14f8976ec615d48859a8d55a99fcba36394e644c68b9740db0a = $this->env->getExtension("native_profiler");
        $__internal_39bc701a4f8ee14f8976ec615d48859a8d55a99fcba36394e644c68b9740db0a->enter($__internal_39bc701a4f8ee14f8976ec615d48859a8d55a99fcba36394e644c68b9740db0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39bc701a4f8ee14f8976ec615d48859a8d55a99fcba36394e644c68b9740db0a->leave($__internal_39bc701a4f8ee14f8976ec615d48859a8d55a99fcba36394e644c68b9740db0a_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f508848593de48b502801126debf3c3c1746d1371c703730a500d1d0ecaf3a93 = $this->env->getExtension("native_profiler");
        $__internal_f508848593de48b502801126debf3c3c1746d1371c703730a500d1d0ecaf3a93->enter($__internal_f508848593de48b502801126debf3c3c1746d1371c703730a500d1d0ecaf3a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_f508848593de48b502801126debf3c3c1746d1371c703730a500d1d0ecaf3a93->leave($__internal_f508848593de48b502801126debf3c3c1746d1371c703730a500d1d0ecaf3a93_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  204 => 59,  198 => 58,  187 => 51,  176 => 48,  165 => 44,  150 => 32,  142 => 27,  134 => 22,  127 => 18,  123 => 16,  117 => 15,  109 => 10,  103 => 9,  91 => 7,  82 => 62,  80 => 58,  72 => 52,  70 => 51,  66 => 49,  64 => 48,  59 => 45,  57 => 44,  51 => 40,  49 => 15,  44 => 12,  42 => 9,  37 => 7,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <title>{% block title %}Mercury{% endblock %}</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/* 	{% block nav %}*/
/*       <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*           <a class="navbar-brand" href="{{ path('homepage') }}">Mercury</a>*/
/* */
/*           <ul class="nav navbar-nav navbar-right">*/
/*             <li>*/
/*               <a href="{{ path('signin') }}">*/
/*                 <span class="glyphicon glyphicon-user"></span>Inscription*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('login') }}">*/
/*                 <span class="glyphicon glyphicon-log-in"></span> Connexion*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('logout') }}">*/
/*                 <span class="glyphicon glyphicon-log-out"></span> Deconnexion*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </nav>*/
/* 	{% endblock %}*/
/* */
/* */
/*         <div class="container">*/
/*             <div id="header" class="jumbotron">*/
/*                 {% block header %}{% endblock %}*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div id="menu" class="col-md-3">*/
/*                     {% block menu %}{% endblock %}*/
/*                 </div>*/
/*                 <div id="content" class="col-md-9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*             <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
