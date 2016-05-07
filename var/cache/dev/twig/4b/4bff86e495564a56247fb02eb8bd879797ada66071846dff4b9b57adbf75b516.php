<?php

/* ::layout.html.twig */
class __TwigTemplate_ad1a2d9f87ee7d5b8e75817e05441db71fee24e7fca5f1201567b79fd192fd38 extends Twig_Template
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
        $__internal_4215bc4da6f5ccf73977690519d3207c956aed0e2e89ed8802b4d1d450d92e56 = $this->env->getExtension("native_profiler");
        $__internal_4215bc4da6f5ccf73977690519d3207c956aed0e2e89ed8802b4d1d450d92e56->enter($__internal_4215bc4da6f5ccf73977690519d3207c956aed0e2e89ed8802b4d1d450d92e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <div class=\"container\">
            <div id=\"header\" class=\"jumbotron\">
                <h1>Plateforme des Formations</h1>
            </div>
            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">
                    <h3>Les formations disponibles</h3>
                    <ul>
                        <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\">Accueil</a></li>
                        <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("pw6_formation_add");
        echo "\">Ajouter une formation</a></li>
                    </ul>
                    <h4>Dernières formations</h4>
                    ";
        // line 26
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PW6FormationBundle:Advert:menu", array("limit" => 5)));
        echo "
                </div>
                <div id=\"content\" class=\"col-md-9\">
                    ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "                </div>
            </div>
        </div>

        <hr>

        <footer><p>
            Nous sommes le ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
        </p></footer>

        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "    </body>
</html>
";
        
        $__internal_4215bc4da6f5ccf73977690519d3207c956aed0e2e89ed8802b4d1d450d92e56->leave($__internal_4215bc4da6f5ccf73977690519d3207c956aed0e2e89ed8802b4d1d450d92e56_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b31cab90404c93724b051d579413d83dbf6e5e8d8755182e988b849f61b2cb38 = $this->env->getExtension("native_profiler");
        $__internal_b31cab90404c93724b051d579413d83dbf6e5e8d8755182e988b849f61b2cb38->enter($__internal_b31cab90404c93724b051d579413d83dbf6e5e8d8755182e988b849f61b2cb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_b31cab90404c93724b051d579413d83dbf6e5e8d8755182e988b849f61b2cb38->leave($__internal_b31cab90404c93724b051d579413d83dbf6e5e8d8755182e988b849f61b2cb38_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f13d6c9f3b595529d5bf7e877ed5f90743e692cca5bab509c798caaabefe61f = $this->env->getExtension("native_profiler");
        $__internal_3f13d6c9f3b595529d5bf7e877ed5f90743e692cca5bab509c798caaabefe61f->enter($__internal_3f13d6c9f3b595529d5bf7e877ed5f90743e692cca5bab509c798caaabefe61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_3f13d6c9f3b595529d5bf7e877ed5f90743e692cca5bab509c798caaabefe61f->leave($__internal_3f13d6c9f3b595529d5bf7e877ed5f90743e692cca5bab509c798caaabefe61f_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a1da9bffff94b603fef001abb36ef8f1c8b9b4c231869dd3d8a168e8e01f475 = $this->env->getExtension("native_profiler");
        $__internal_5a1da9bffff94b603fef001abb36ef8f1c8b9b4c231869dd3d8a168e8e01f475->enter($__internal_5a1da9bffff94b603fef001abb36ef8f1c8b9b4c231869dd3d8a168e8e01f475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a1da9bffff94b603fef001abb36ef8f1c8b9b4c231869dd3d8a168e8e01f475->leave($__internal_5a1da9bffff94b603fef001abb36ef8f1c8b9b4c231869dd3d8a168e8e01f475_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a17307168737f9509434565b781c01fb43f3131e869456e1c1bb3df51ff4da56 = $this->env->getExtension("native_profiler");
        $__internal_a17307168737f9509434565b781c01fb43f3131e869456e1c1bb3df51ff4da56->enter($__internal_a17307168737f9509434565b781c01fb43f3131e869456e1c1bb3df51ff4da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_a17307168737f9509434565b781c01fb43f3131e869456e1c1bb3df51ff4da56->leave($__internal_a17307168737f9509434565b781c01fb43f3131e869456e1c1bb3df51ff4da56_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 41,  134 => 40,  123 => 29,  115 => 10,  109 => 9,  97 => 7,  88 => 44,  86 => 40,  80 => 37,  71 => 30,  69 => 29,  63 => 26,  57 => 23,  53 => 22,  41 => 12,  39 => 9,  34 => 7,  26 => 1,);
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
/*         <div class="container">*/
/*             <div id="header" class="jumbotron">*/
/*                 <h1>Plateforme des Formations</h1>*/
/*             </div>*/
/*             <div class="row">*/
/*                 <div id="menu" class="col-md-3">*/
/*                     <h3>Les formations disponibles</h3>*/
/*                     <ul>*/
/*                         <li><a href="{{ path('pw6_formation_home') }}">Accueil</a></li>*/
/*                         <li><a href="{{ path('pw6_formation_add') }}">Ajouter une formation</a></li>*/
/*                     </ul>*/
/*                     <h4>Dernières formations</h4>*/
/*                     {{ render(controller('PW6FormationBundle:Advert:menu', {'limit': 5})) }}*/
/*                 </div>*/
/*                 <div id="content" class="col-md-9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <hr>*/
/* */
/*         <footer><p>*/
/*             Nous sommes le {{ 'now'|date('d/m/Y') }}*/
/*         </p></footer>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*             <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
