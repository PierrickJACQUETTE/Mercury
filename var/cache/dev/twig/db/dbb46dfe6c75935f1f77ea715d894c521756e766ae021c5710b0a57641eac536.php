<?php

/* base.html.twig */
class __TwigTemplate_1fc644fc28b6ab53015f331dbb16e7e343bed794a25daf0e83c2222d2bbc3095 extends Twig_Template
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
        $__internal_3ef6bc2022b35d78126cd462cf8ab65e1b9c84f09b3f2e874d545fceb74dd37f = $this->env->getExtension("native_profiler");
        $__internal_3ef6bc2022b35d78126cd462cf8ab65e1b9c84f09b3f2e874d545fceb74dd37f->enter($__internal_3ef6bc2022b35d78126cd462cf8ab65e1b9c84f09b3f2e874d545fceb74dd37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>

        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    </body>
</html>
";
        
        $__internal_3ef6bc2022b35d78126cd462cf8ab65e1b9c84f09b3f2e874d545fceb74dd37f->leave($__internal_3ef6bc2022b35d78126cd462cf8ab65e1b9c84f09b3f2e874d545fceb74dd37f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_182e3dd8d02f0948082256937acf1159bde2e8cf2e8ef5428f0ffe14ac4a7f29 = $this->env->getExtension("native_profiler");
        $__internal_182e3dd8d02f0948082256937acf1159bde2e8cf2e8ef5428f0ffe14ac4a7f29->enter($__internal_182e3dd8d02f0948082256937acf1159bde2e8cf2e8ef5428f0ffe14ac4a7f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_182e3dd8d02f0948082256937acf1159bde2e8cf2e8ef5428f0ffe14ac4a7f29->leave($__internal_182e3dd8d02f0948082256937acf1159bde2e8cf2e8ef5428f0ffe14ac4a7f29_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db4a652e1d000d736904e66a720d1bd22ff5c7ef242d5fc6f196cb5810d2e3dd = $this->env->getExtension("native_profiler");
        $__internal_db4a652e1d000d736904e66a720d1bd22ff5c7ef242d5fc6f196cb5810d2e3dd->enter($__internal_db4a652e1d000d736904e66a720d1bd22ff5c7ef242d5fc6f196cb5810d2e3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_db4a652e1d000d736904e66a720d1bd22ff5c7ef242d5fc6f196cb5810d2e3dd->leave($__internal_db4a652e1d000d736904e66a720d1bd22ff5c7ef242d5fc6f196cb5810d2e3dd_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_e329d00d0d11ee3f6fe0952261afe4dd2621eda7606429d806d2e611f180e9d3 = $this->env->getExtension("native_profiler");
        $__internal_e329d00d0d11ee3f6fe0952261afe4dd2621eda7606429d806d2e611f180e9d3->enter($__internal_e329d00d0d11ee3f6fe0952261afe4dd2621eda7606429d806d2e611f180e9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e329d00d0d11ee3f6fe0952261afe4dd2621eda7606429d806d2e611f180e9d3->leave($__internal_e329d00d0d11ee3f6fe0952261afe4dd2621eda7606429d806d2e611f180e9d3_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fe8024ffb279ab9db7c60391d1fcd201df29398d4e6849e41222b2e14fa651a = $this->env->getExtension("native_profiler");
        $__internal_4fe8024ffb279ab9db7c60391d1fcd201df29398d4e6849e41222b2e14fa651a->enter($__internal_4fe8024ffb279ab9db7c60391d1fcd201df29398d4e6849e41222b2e14fa651a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4fe8024ffb279ab9db7c60391d1fcd201df29398d4e6849e41222b2e14fa651a->leave($__internal_4fe8024ffb279ab9db7c60391d1fcd201df29398d4e6849e41222b2e14fa651a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 14,  87 => 13,  79 => 8,  73 => 7,  61 => 5,  52 => 15,  49 => 14,  47 => 13,  42 => 10,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Mercury{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		{% block stylesheets %}*/
/*             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/* */
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
