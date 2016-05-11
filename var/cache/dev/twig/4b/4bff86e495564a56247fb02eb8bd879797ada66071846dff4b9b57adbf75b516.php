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
        $__internal_12ddda5974cf271d7ed7340377501b560d919368b31d4ea4c08996c5abd3226e = $this->env->getExtension("native_profiler");
        $__internal_12ddda5974cf271d7ed7340377501b560d919368b31d4ea4c08996c5abd3226e->enter($__internal_12ddda5974cf271d7ed7340377501b560d919368b31d4ea4c08996c5abd3226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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

        ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_12ddda5974cf271d7ed7340377501b560d919368b31d4ea4c08996c5abd3226e->leave($__internal_12ddda5974cf271d7ed7340377501b560d919368b31d4ea4c08996c5abd3226e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d21dd84ccc9f31724cb0c6b04ab0bcdcd12cb110f7b062a32b67ef037b47dd3 = $this->env->getExtension("native_profiler");
        $__internal_2d21dd84ccc9f31724cb0c6b04ab0bcdcd12cb110f7b062a32b67ef037b47dd3->enter($__internal_2d21dd84ccc9f31724cb0c6b04ab0bcdcd12cb110f7b062a32b67ef037b47dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_2d21dd84ccc9f31724cb0c6b04ab0bcdcd12cb110f7b062a32b67ef037b47dd3->leave($__internal_2d21dd84ccc9f31724cb0c6b04ab0bcdcd12cb110f7b062a32b67ef037b47dd3_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_679c74279f83de0aa9f6559b256fa5da01977b8b28fee6d8f1140994d5efe6d2 = $this->env->getExtension("native_profiler");
        $__internal_679c74279f83de0aa9f6559b256fa5da01977b8b28fee6d8f1140994d5efe6d2->enter($__internal_679c74279f83de0aa9f6559b256fa5da01977b8b28fee6d8f1140994d5efe6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_679c74279f83de0aa9f6559b256fa5da01977b8b28fee6d8f1140994d5efe6d2->leave($__internal_679c74279f83de0aa9f6559b256fa5da01977b8b28fee6d8f1140994d5efe6d2_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_47e5069a3bb4e66632875a2a08129b2de80b0995117229a627ba33f92d4e838f = $this->env->getExtension("native_profiler");
        $__internal_47e5069a3bb4e66632875a2a08129b2de80b0995117229a627ba33f92d4e838f->enter($__internal_47e5069a3bb4e66632875a2a08129b2de80b0995117229a627ba33f92d4e838f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_47e5069a3bb4e66632875a2a08129b2de80b0995117229a627ba33f92d4e838f->leave($__internal_47e5069a3bb4e66632875a2a08129b2de80b0995117229a627ba33f92d4e838f_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d80fd8caa0ce99e45b411be608635f5c05a68f9c2f528f8f589e5301dffa26a = $this->env->getExtension("native_profiler");
        $__internal_2d80fd8caa0ce99e45b411be608635f5c05a68f9c2f528f8f589e5301dffa26a->enter($__internal_2d80fd8caa0ce99e45b411be608635f5c05a68f9c2f528f8f589e5301dffa26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 37
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_2d80fd8caa0ce99e45b411be608635f5c05a68f9c2f528f8f589e5301dffa26a->leave($__internal_2d80fd8caa0ce99e45b411be608635f5c05a68f9c2f528f8f589e5301dffa26a_prof);

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
        return array (  133 => 37,  127 => 36,  116 => 29,  108 => 10,  102 => 9,  90 => 7,  81 => 40,  79 => 36,  71 => 30,  69 => 29,  63 => 26,  57 => 23,  53 => 22,  41 => 12,  39 => 9,  34 => 7,  26 => 1,);
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
/*                 <div id="content" class="col-md-9">                    */
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
