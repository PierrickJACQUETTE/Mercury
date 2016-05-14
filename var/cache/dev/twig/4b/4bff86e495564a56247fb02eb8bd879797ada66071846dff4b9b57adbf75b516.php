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
        $__internal_b2d53dfbea6fca92a46e641b410532e7031a7e397905c01297fa35da21fce477 = $this->env->getExtension("native_profiler");
        $__internal_b2d53dfbea6fca92a46e641b410532e7031a7e397905c01297fa35da21fce477->enter($__internal_b2d53dfbea6fca92a46e641b410532e7031a7e397905c01297fa35da21fce477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_b2d53dfbea6fca92a46e641b410532e7031a7e397905c01297fa35da21fce477->leave($__internal_b2d53dfbea6fca92a46e641b410532e7031a7e397905c01297fa35da21fce477_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6e3593bc53c48e8eb19a41280ef6e8317c46c3e0d3d82d834bfc9cb2b8f0374e = $this->env->getExtension("native_profiler");
        $__internal_6e3593bc53c48e8eb19a41280ef6e8317c46c3e0d3d82d834bfc9cb2b8f0374e->enter($__internal_6e3593bc53c48e8eb19a41280ef6e8317c46c3e0d3d82d834bfc9cb2b8f0374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_6e3593bc53c48e8eb19a41280ef6e8317c46c3e0d3d82d834bfc9cb2b8f0374e->leave($__internal_6e3593bc53c48e8eb19a41280ef6e8317c46c3e0d3d82d834bfc9cb2b8f0374e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54183462e619120f57cd481b8528c591dd8530c311d16a71c53c9f03c012e971 = $this->env->getExtension("native_profiler");
        $__internal_54183462e619120f57cd481b8528c591dd8530c311d16a71c53c9f03c012e971->enter($__internal_54183462e619120f57cd481b8528c591dd8530c311d16a71c53c9f03c012e971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_54183462e619120f57cd481b8528c591dd8530c311d16a71c53c9f03c012e971->leave($__internal_54183462e619120f57cd481b8528c591dd8530c311d16a71c53c9f03c012e971_prof);

    }

    // line 16
    public function block_header($context, array $blocks = array())
    {
        $__internal_95add043bf40f2a4eb58fe55de4fd00e85bb619f94aab54fb674cacf466d8f4b = $this->env->getExtension("native_profiler");
        $__internal_95add043bf40f2a4eb58fe55de4fd00e85bb619f94aab54fb674cacf466d8f4b->enter($__internal_95add043bf40f2a4eb58fe55de4fd00e85bb619f94aab54fb674cacf466d8f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_95add043bf40f2a4eb58fe55de4fd00e85bb619f94aab54fb674cacf466d8f4b->leave($__internal_95add043bf40f2a4eb58fe55de4fd00e85bb619f94aab54fb674cacf466d8f4b_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ca2510e63a42882ed8801d47467d5095286ff8aa3e25cd10a3d420481d9e54ab = $this->env->getExtension("native_profiler");
        $__internal_ca2510e63a42882ed8801d47467d5095286ff8aa3e25cd10a3d420481d9e54ab->enter($__internal_ca2510e63a42882ed8801d47467d5095286ff8aa3e25cd10a3d420481d9e54ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_ca2510e63a42882ed8801d47467d5095286ff8aa3e25cd10a3d420481d9e54ab->leave($__internal_ca2510e63a42882ed8801d47467d5095286ff8aa3e25cd10a3d420481d9e54ab_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_d280d2dac285a3c0263d57d92072e0aff1956fd27ac45c4233a7c5f9ee54a5a8 = $this->env->getExtension("native_profiler");
        $__internal_d280d2dac285a3c0263d57d92072e0aff1956fd27ac45c4233a7c5f9ee54a5a8->enter($__internal_d280d2dac285a3c0263d57d92072e0aff1956fd27ac45c4233a7c5f9ee54a5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d280d2dac285a3c0263d57d92072e0aff1956fd27ac45c4233a7c5f9ee54a5a8->leave($__internal_d280d2dac285a3c0263d57d92072e0aff1956fd27ac45c4233a7c5f9ee54a5a8_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b12e23f27d2a8e0843d49e74d8a128b9d0910d357c6e08e6ca2ff84214342718 = $this->env->getExtension("native_profiler");
        $__internal_b12e23f27d2a8e0843d49e74d8a128b9d0910d357c6e08e6ca2ff84214342718->enter($__internal_b12e23f27d2a8e0843d49e74d8a128b9d0910d357c6e08e6ca2ff84214342718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b12e23f27d2a8e0843d49e74d8a128b9d0910d357c6e08e6ca2ff84214342718->leave($__internal_b12e23f27d2a8e0843d49e74d8a128b9d0910d357c6e08e6ca2ff84214342718_prof);

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
