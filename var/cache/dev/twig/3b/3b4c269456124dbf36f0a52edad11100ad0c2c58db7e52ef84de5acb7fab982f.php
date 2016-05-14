<?php

/* ::layout.html.twig */
class __TwigTemplate_d94352c938cadb3b627049e12b9dabbab45454facaeb9ed36280c7e07b6362d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bbe6bc3e2fe28784af041976171c3787966ada248e50ec8add131abea20cfb6 = $this->env->getExtension("native_profiler");
        $__internal_0bbe6bc3e2fe28784af041976171c3787966ada248e50ec8add131abea20cfb6->enter($__internal_0bbe6bc3e2fe28784af041976171c3787966ada248e50ec8add131abea20cfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
                ";
        // line 16
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "            </div>
            <div class=\"row\">
                <div id=\"menu\" class=\"col-md-3\">
                    ";
        // line 20
        $this->displayBlock('menu', $context, $blocks);
        // line 21
        echo "                </div>
                <div id=\"content\" class=\"col-md-9\">
                    ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "                </div>
            </div>
        </div>

        <hr>

        ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
        
        $__internal_0bbe6bc3e2fe28784af041976171c3787966ada248e50ec8add131abea20cfb6->leave($__internal_0bbe6bc3e2fe28784af041976171c3787966ada248e50ec8add131abea20cfb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_00e4f3ddc03ca1485f3edf62be30b1920f8d6dd10c73864c96874e0480fa3ac7 = $this->env->getExtension("native_profiler");
        $__internal_00e4f3ddc03ca1485f3edf62be30b1920f8d6dd10c73864c96874e0480fa3ac7->enter($__internal_00e4f3ddc03ca1485f3edf62be30b1920f8d6dd10c73864c96874e0480fa3ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_00e4f3ddc03ca1485f3edf62be30b1920f8d6dd10c73864c96874e0480fa3ac7->leave($__internal_00e4f3ddc03ca1485f3edf62be30b1920f8d6dd10c73864c96874e0480fa3ac7_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c74a1f7e9a705fcd0c417664d30643a0ea3a2c07f3c1fcd8d0abe0ade220753e = $this->env->getExtension("native_profiler");
        $__internal_c74a1f7e9a705fcd0c417664d30643a0ea3a2c07f3c1fcd8d0abe0ade220753e->enter($__internal_c74a1f7e9a705fcd0c417664d30643a0ea3a2c07f3c1fcd8d0abe0ade220753e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_c74a1f7e9a705fcd0c417664d30643a0ea3a2c07f3c1fcd8d0abe0ade220753e->leave($__internal_c74a1f7e9a705fcd0c417664d30643a0ea3a2c07f3c1fcd8d0abe0ade220753e_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_364c9dcdc9f4a26703aad7994f23698f74cd7d16817dc776a56e19c729314a45 = $this->env->getExtension("native_profiler");
        $__internal_364c9dcdc9f4a26703aad7994f23698f74cd7d16817dc776a56e19c729314a45->enter($__internal_364c9dcdc9f4a26703aad7994f23698f74cd7d16817dc776a56e19c729314a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_364c9dcdc9f4a26703aad7994f23698f74cd7d16817dc776a56e19c729314a45->leave($__internal_364c9dcdc9f4a26703aad7994f23698f74cd7d16817dc776a56e19c729314a45_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6f5980242d290c0ad4de470d10b555de6a5186495862a2c71c88fa5810d9194d = $this->env->getExtension("native_profiler");
        $__internal_6f5980242d290c0ad4de470d10b555de6a5186495862a2c71c88fa5810d9194d->enter($__internal_6f5980242d290c0ad4de470d10b555de6a5186495862a2c71c88fa5810d9194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_6f5980242d290c0ad4de470d10b555de6a5186495862a2c71c88fa5810d9194d->leave($__internal_6f5980242d290c0ad4de470d10b555de6a5186495862a2c71c88fa5810d9194d_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d57191f49221f11c27024a61ee93f90e5e3e0090b70f77fcb2f2df32636401b = $this->env->getExtension("native_profiler");
        $__internal_2d57191f49221f11c27024a61ee93f90e5e3e0090b70f77fcb2f2df32636401b->enter($__internal_2d57191f49221f11c27024a61ee93f90e5e3e0090b70f77fcb2f2df32636401b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d57191f49221f11c27024a61ee93f90e5e3e0090b70f77fcb2f2df32636401b->leave($__internal_2d57191f49221f11c27024a61ee93f90e5e3e0090b70f77fcb2f2df32636401b_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f443a660587ff86e484e4b65cd92cee4e66333530482c1002c89999bdcf0a459 = $this->env->getExtension("native_profiler");
        $__internal_f443a660587ff86e484e4b65cd92cee4e66333530482c1002c89999bdcf0a459->enter($__internal_f443a660587ff86e484e4b65cd92cee4e66333530482c1002c89999bdcf0a459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_f443a660587ff86e484e4b65cd92cee4e66333530482c1002c89999bdcf0a459->leave($__internal_f443a660587ff86e484e4b65cd92cee4e66333530482c1002c89999bdcf0a459_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  148 => 31,  142 => 30,  131 => 23,  120 => 20,  109 => 16,  101 => 10,  95 => 9,  83 => 7,  74 => 34,  72 => 30,  64 => 24,  62 => 23,  58 => 21,  56 => 20,  51 => 17,  49 => 16,  43 => 12,  41 => 9,  36 => 7,  28 => 1,);
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
