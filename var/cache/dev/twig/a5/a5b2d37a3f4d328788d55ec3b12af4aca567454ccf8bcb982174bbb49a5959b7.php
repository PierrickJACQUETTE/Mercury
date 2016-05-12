<?php

/* PW6UserBundle::layout.html.twig */
class __TwigTemplate_3eced661aa974b638a095f3e2e0b428b762a404ef5d5bed4a03bc511696f30a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0397ea2f927d62881fdd89aeaad40d0a95ccdc2a0a513a28677a24340becaaf3 = $this->env->getExtension("native_profiler");
        $__internal_0397ea2f927d62881fdd89aeaad40d0a95ccdc2a0a513a28677a24340becaaf3->enter($__internal_0397ea2f927d62881fdd89aeaad40d0a95ccdc2a0a513a28677a24340becaaf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6UserBundle::layout.html.twig"));

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
        // line 13
        echo "</head>

<body>
    <div class=\"container\">
        <div id=\"header\" class=\"jumbotron\">
            <h1>Ma plateforme d'annonces</h1>
            <p>
                Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
            </p>
            <p>
                <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                    Participer au MOOC »
                </a>
            </p>
        </div>

        <div class=\"row\">
            <div id=\"menu\" class=\"col-md-3\">
                <h3>Les annonces</h3>
                <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
                </ul>

                <h4>Dernières annonces</h4>
                ";
        // line 38
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
            </div>
            <div id=\"content\" class=\"col-md-9\">
                ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            </div>
        </div>

        <hr>

        <footer>
            <p>The sky's the limit © ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
        </footer>
    </div>

    ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
</body>
</html>
";
        
        $__internal_0397ea2f927d62881fdd89aeaad40d0a95ccdc2a0a513a28677a24340becaaf3->leave($__internal_0397ea2f927d62881fdd89aeaad40d0a95ccdc2a0a513a28677a24340becaaf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e8368e43318ea3dca843a70e3bf2890f7813b59a75d2c76621ecfa6e1198a56f = $this->env->getExtension("native_profiler");
        $__internal_e8368e43318ea3dca843a70e3bf2890f7813b59a75d2c76621ecfa6e1198a56f->enter($__internal_e8368e43318ea3dca843a70e3bf2890f7813b59a75d2c76621ecfa6e1198a56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_e8368e43318ea3dca843a70e3bf2890f7813b59a75d2c76621ecfa6e1198a56f->leave($__internal_e8368e43318ea3dca843a70e3bf2890f7813b59a75d2c76621ecfa6e1198a56f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6bfbd84f5b22e82113e4e3850fa6fe02b03248c0be6cbbb25f584ffc7d3a3598 = $this->env->getExtension("native_profiler");
        $__internal_6bfbd84f5b22e82113e4e3850fa6fe02b03248c0be6cbbb25f584ffc7d3a3598->enter($__internal_6bfbd84f5b22e82113e4e3850fa6fe02b03248c0be6cbbb25f584ffc7d3a3598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        // line 11
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_6bfbd84f5b22e82113e4e3850fa6fe02b03248c0be6cbbb25f584ffc7d3a3598->leave($__internal_6bfbd84f5b22e82113e4e3850fa6fe02b03248c0be6cbbb25f584ffc7d3a3598_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d89bfdea4d89a31b6392e85e4c3314d67c0a45dd976eb388a34d51f188049eb = $this->env->getExtension("native_profiler");
        $__internal_2d89bfdea4d89a31b6392e85e4c3314d67c0a45dd976eb388a34d51f188049eb->enter($__internal_2d89bfdea4d89a31b6392e85e4c3314d67c0a45dd976eb388a34d51f188049eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "                ";
        
        $__internal_2d89bfdea4d89a31b6392e85e4c3314d67c0a45dd976eb388a34d51f188049eb->leave($__internal_2d89bfdea4d89a31b6392e85e4c3314d67c0a45dd976eb388a34d51f188049eb_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_77b0ed97269da2986d1743f355c52f6f264a270011d0ffdd50761445379d92d5 = $this->env->getExtension("native_profiler");
        $__internal_77b0ed97269da2986d1743f355c52f6f264a270011d0ffdd50761445379d92d5->enter($__internal_77b0ed97269da2986d1743f355c52f6f264a270011d0ffdd50761445379d92d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    ";
        // line 55
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    ";
        
        $__internal_77b0ed97269da2986d1743f355c52f6f264a270011d0ffdd50761445379d92d5->leave($__internal_77b0ed97269da2986d1743f355c52f6f264a270011d0ffdd50761445379d92d5_prof);

    }

    public function getTemplateName()
    {
        return "PW6UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 55,  156 => 54,  150 => 53,  143 => 42,  137 => 41,  129 => 11,  127 => 10,  121 => 9,  109 => 7,  99 => 58,  97 => 53,  90 => 49,  82 => 43,  80 => 41,  74 => 38,  67 => 34,  63 => 33,  41 => 13,  39 => 9,  34 => 7,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*     <div class="container">*/
/*         <div id="header" class="jumbotron">*/
/*             <h1>Ma plateforme d'annonces</h1>*/
/*             <p>*/
/*                 Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*             </p>*/
/*             <p>*/
/*                 <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*                     Participer au MOOC »*/
/*                 </a>*/
/*             </p>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div id="menu" class="col-md-3">*/
/*                 <h3>Les annonces</h3>*/
/*                 <ul class="nav nav-pills nav-stacked">*/
/*                     <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*                     <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*                 </ul>*/
/* */
/*                 <h4>Dernières annonces</h4>*/
/*                 {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*             </div>*/
/*             <div id="content" class="col-md-9">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <footer>*/
/*             <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*         </footer>*/
/*     </div>*/
/* */
/*     {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
/* */
