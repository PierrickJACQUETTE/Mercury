<?php

/* ::layout.html.twig */
class __TwigTemplate_b2b927c70484177811257c1416834aec807954dbb25ec68abf655d03120c69d8 extends Twig_Template
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
        $__internal_23fdfe1736ff1a7b07179b9384ba6d8e475839f9c9c269a1ced249f384171452 = $this->env->getExtension("native_profiler");
        $__internal_23fdfe1736ff1a7b07179b9384ba6d8e475839f9c9c269a1ced249f384171452->enter($__internal_23fdfe1736ff1a7b07179b9384ba6d8e475839f9c9c269a1ced249f384171452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_23fdfe1736ff1a7b07179b9384ba6d8e475839f9c9c269a1ced249f384171452->leave($__internal_23fdfe1736ff1a7b07179b9384ba6d8e475839f9c9c269a1ced249f384171452_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3b7496ecda539558e627a1013b4eed788d58e758af13044ce3f0e32d386a43c = $this->env->getExtension("native_profiler");
        $__internal_b3b7496ecda539558e627a1013b4eed788d58e758af13044ce3f0e32d386a43c->enter($__internal_b3b7496ecda539558e627a1013b4eed788d58e758af13044ce3f0e32d386a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_b3b7496ecda539558e627a1013b4eed788d58e758af13044ce3f0e32d386a43c->leave($__internal_b3b7496ecda539558e627a1013b4eed788d58e758af13044ce3f0e32d386a43c_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f70d74024786b20c74a6103ebf37715ce9caaa5d7128d8cdd54f998c3f347d7 = $this->env->getExtension("native_profiler");
        $__internal_5f70d74024786b20c74a6103ebf37715ce9caaa5d7128d8cdd54f998c3f347d7->enter($__internal_5f70d74024786b20c74a6103ebf37715ce9caaa5d7128d8cdd54f998c3f347d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_5f70d74024786b20c74a6103ebf37715ce9caaa5d7128d8cdd54f998c3f347d7->leave($__internal_5f70d74024786b20c74a6103ebf37715ce9caaa5d7128d8cdd54f998c3f347d7_prof);

    }

    // line 15
    public function block_nav($context, array $blocks = array())
    {
        $__internal_e2c23edc3b6a6c95b48e5ee73b794c63d2fd9f7e5e7b753731198efe3b0886ff = $this->env->getExtension("native_profiler");
        $__internal_e2c23edc3b6a6c95b48e5ee73b794c63d2fd9f7e5e7b753731198efe3b0886ff->enter($__internal_e2c23edc3b6a6c95b48e5ee73b794c63d2fd9f7e5e7b753731198efe3b0886ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_e2c23edc3b6a6c95b48e5ee73b794c63d2fd9f7e5e7b753731198efe3b0886ff->leave($__internal_e2c23edc3b6a6c95b48e5ee73b794c63d2fd9f7e5e7b753731198efe3b0886ff_prof);

    }

    // line 44
    public function block_header($context, array $blocks = array())
    {
        $__internal_3dfbd2ddc86ddd8c7b7268a0ea0a20f945015d0b2e417116ce436d42be9e7dd2 = $this->env->getExtension("native_profiler");
        $__internal_3dfbd2ddc86ddd8c7b7268a0ea0a20f945015d0b2e417116ce436d42be9e7dd2->enter($__internal_3dfbd2ddc86ddd8c7b7268a0ea0a20f945015d0b2e417116ce436d42be9e7dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_3dfbd2ddc86ddd8c7b7268a0ea0a20f945015d0b2e417116ce436d42be9e7dd2->leave($__internal_3dfbd2ddc86ddd8c7b7268a0ea0a20f945015d0b2e417116ce436d42be9e7dd2_prof);

    }

    // line 48
    public function block_menu($context, array $blocks = array())
    {
        $__internal_071abe4af6b0756be458ff272a3e95197d9b53770e9206b90d534a4c8461ffde = $this->env->getExtension("native_profiler");
        $__internal_071abe4af6b0756be458ff272a3e95197d9b53770e9206b90d534a4c8461ffde->enter($__internal_071abe4af6b0756be458ff272a3e95197d9b53770e9206b90d534a4c8461ffde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_071abe4af6b0756be458ff272a3e95197d9b53770e9206b90d534a4c8461ffde->leave($__internal_071abe4af6b0756be458ff272a3e95197d9b53770e9206b90d534a4c8461ffde_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_d49c0a90ca324aa7bb8d959f1766fec9a64d50b57c2943b52e548296dbac920b = $this->env->getExtension("native_profiler");
        $__internal_d49c0a90ca324aa7bb8d959f1766fec9a64d50b57c2943b52e548296dbac920b->enter($__internal_d49c0a90ca324aa7bb8d959f1766fec9a64d50b57c2943b52e548296dbac920b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d49c0a90ca324aa7bb8d959f1766fec9a64d50b57c2943b52e548296dbac920b->leave($__internal_d49c0a90ca324aa7bb8d959f1766fec9a64d50b57c2943b52e548296dbac920b_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72f99d4c7a442d461d47001cf1cc2637ed412a6236ad5dcf2d7429fb22791bfc = $this->env->getExtension("native_profiler");
        $__internal_72f99d4c7a442d461d47001cf1cc2637ed412a6236ad5dcf2d7429fb22791bfc->enter($__internal_72f99d4c7a442d461d47001cf1cc2637ed412a6236ad5dcf2d7429fb22791bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_72f99d4c7a442d461d47001cf1cc2637ed412a6236ad5dcf2d7429fb22791bfc->leave($__internal_72f99d4c7a442d461d47001cf1cc2637ed412a6236ad5dcf2d7429fb22791bfc_prof);

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
