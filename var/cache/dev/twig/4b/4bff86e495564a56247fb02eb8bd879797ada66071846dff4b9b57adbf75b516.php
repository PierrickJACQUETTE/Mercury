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
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dabd6a4a74049049ba670dfa74754683e78ab03b6e0b99ae0a4936f178bbc01 = $this->env->getExtension("native_profiler");
        $__internal_0dabd6a4a74049049ba670dfa74754683e78ab03b6e0b99ae0a4936f178bbc01->enter($__internal_0dabd6a4a74049049ba670dfa74754683e78ab03b6e0b99ae0a4936f178bbc01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_0dabd6a4a74049049ba670dfa74754683e78ab03b6e0b99ae0a4936f178bbc01->leave($__internal_0dabd6a4a74049049ba670dfa74754683e78ab03b6e0b99ae0a4936f178bbc01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c357fe42accafbce0408ddff352b1a3466597aee42344ca196a69ae8d673ebca = $this->env->getExtension("native_profiler");
        $__internal_c357fe42accafbce0408ddff352b1a3466597aee42344ca196a69ae8d673ebca->enter($__internal_c357fe42accafbce0408ddff352b1a3466597aee42344ca196a69ae8d673ebca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_c357fe42accafbce0408ddff352b1a3466597aee42344ca196a69ae8d673ebca->leave($__internal_c357fe42accafbce0408ddff352b1a3466597aee42344ca196a69ae8d673ebca_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62a3fcab2e10216dacfb36830c5a14b878fc6ccb6ebe83ba206d20bf5b3c82ae = $this->env->getExtension("native_profiler");
        $__internal_62a3fcab2e10216dacfb36830c5a14b878fc6ccb6ebe83ba206d20bf5b3c82ae->enter($__internal_62a3fcab2e10216dacfb36830c5a14b878fc6ccb6ebe83ba206d20bf5b3c82ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_62a3fcab2e10216dacfb36830c5a14b878fc6ccb6ebe83ba206d20bf5b3c82ae->leave($__internal_62a3fcab2e10216dacfb36830c5a14b878fc6ccb6ebe83ba206d20bf5b3c82ae_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_d9167aa43d8757a032f60b74df54d99f1bed49e475f4fde51799f0a3aa0962d1 = $this->env->getExtension("native_profiler");
        $__internal_d9167aa43d8757a032f60b74df54d99f1bed49e475f4fde51799f0a3aa0962d1->enter($__internal_d9167aa43d8757a032f60b74df54d99f1bed49e475f4fde51799f0a3aa0962d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_d9167aa43d8757a032f60b74df54d99f1bed49e475f4fde51799f0a3aa0962d1->leave($__internal_d9167aa43d8757a032f60b74df54d99f1bed49e475f4fde51799f0a3aa0962d1_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_692266d50f9c204670d295dd470fe897eef17e953d41dd169e04eb5af9e8fa70 = $this->env->getExtension("native_profiler");
        $__internal_692266d50f9c204670d295dd470fe897eef17e953d41dd169e04eb5af9e8fa70->enter($__internal_692266d50f9c204670d295dd470fe897eef17e953d41dd169e04eb5af9e8fa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_692266d50f9c204670d295dd470fe897eef17e953d41dd169e04eb5af9e8fa70->leave($__internal_692266d50f9c204670d295dd470fe897eef17e953d41dd169e04eb5af9e8fa70_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b708b8a221260276381ba42d1f3fdfddc9d376df14975ad47c1e358f44542c = $this->env->getExtension("native_profiler");
        $__internal_e5b708b8a221260276381ba42d1f3fdfddc9d376df14975ad47c1e358f44542c->enter($__internal_e5b708b8a221260276381ba42d1f3fdfddc9d376df14975ad47c1e358f44542c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e5b708b8a221260276381ba42d1f3fdfddc9d376df14975ad47c1e358f44542c->leave($__internal_e5b708b8a221260276381ba42d1f3fdfddc9d376df14975ad47c1e358f44542c_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_67bac89d3ec2a0b878399e9b0eacab86ecb76787337ab02e306caa8da1982a7f = $this->env->getExtension("native_profiler");
        $__internal_67bac89d3ec2a0b878399e9b0eacab86ecb76787337ab02e306caa8da1982a7f->enter($__internal_67bac89d3ec2a0b878399e9b0eacab86ecb76787337ab02e306caa8da1982a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_67bac89d3ec2a0b878399e9b0eacab86ecb76787337ab02e306caa8da1982a7f->leave($__internal_67bac89d3ec2a0b878399e9b0eacab86ecb76787337ab02e306caa8da1982a7f_prof);

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
