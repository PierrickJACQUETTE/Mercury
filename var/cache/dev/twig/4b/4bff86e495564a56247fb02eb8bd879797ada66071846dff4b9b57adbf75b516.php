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
        $__internal_9783606df94a75238b0bbe37447c32762e1048db3c3b59c20836e69882758602 = $this->env->getExtension("native_profiler");
        $__internal_9783606df94a75238b0bbe37447c32762e1048db3c3b59c20836e69882758602->enter($__internal_9783606df94a75238b0bbe37447c32762e1048db3c3b59c20836e69882758602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_9783606df94a75238b0bbe37447c32762e1048db3c3b59c20836e69882758602->leave($__internal_9783606df94a75238b0bbe37447c32762e1048db3c3b59c20836e69882758602_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_825d2c151acf52278a1020194f48ccb5daa9b7abd19d2778dd8cb02c2458537b = $this->env->getExtension("native_profiler");
        $__internal_825d2c151acf52278a1020194f48ccb5daa9b7abd19d2778dd8cb02c2458537b->enter($__internal_825d2c151acf52278a1020194f48ccb5daa9b7abd19d2778dd8cb02c2458537b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_825d2c151acf52278a1020194f48ccb5daa9b7abd19d2778dd8cb02c2458537b->leave($__internal_825d2c151acf52278a1020194f48ccb5daa9b7abd19d2778dd8cb02c2458537b_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_206fecb58e7e2984eda8f80988b57e99bd6bdec41a638eee8ebcb0f1921cfbb7 = $this->env->getExtension("native_profiler");
        $__internal_206fecb58e7e2984eda8f80988b57e99bd6bdec41a638eee8ebcb0f1921cfbb7->enter($__internal_206fecb58e7e2984eda8f80988b57e99bd6bdec41a638eee8ebcb0f1921cfbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_206fecb58e7e2984eda8f80988b57e99bd6bdec41a638eee8ebcb0f1921cfbb7->leave($__internal_206fecb58e7e2984eda8f80988b57e99bd6bdec41a638eee8ebcb0f1921cfbb7_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b6715bc342fd10af56f1317e293cc6915b364758382f564a48c9d1cabb11a94 = $this->env->getExtension("native_profiler");
        $__internal_3b6715bc342fd10af56f1317e293cc6915b364758382f564a48c9d1cabb11a94->enter($__internal_3b6715bc342fd10af56f1317e293cc6915b364758382f564a48c9d1cabb11a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3b6715bc342fd10af56f1317e293cc6915b364758382f564a48c9d1cabb11a94->leave($__internal_3b6715bc342fd10af56f1317e293cc6915b364758382f564a48c9d1cabb11a94_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_14ec3a272d542869402a549041852f3f18516e489442ad0053df335943b0eb5d = $this->env->getExtension("native_profiler");
        $__internal_14ec3a272d542869402a549041852f3f18516e489442ad0053df335943b0eb5d->enter($__internal_14ec3a272d542869402a549041852f3f18516e489442ad0053df335943b0eb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_14ec3a272d542869402a549041852f3f18516e489442ad0053df335943b0eb5d->leave($__internal_14ec3a272d542869402a549041852f3f18516e489442ad0053df335943b0eb5d_prof);

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
