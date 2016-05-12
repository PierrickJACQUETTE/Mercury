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
        $__internal_dff5040c52e7884735f2815d41750b9becee9f6396f64497d3fe80b5cdf08ec9 = $this->env->getExtension("native_profiler");
        $__internal_dff5040c52e7884735f2815d41750b9becee9f6396f64497d3fe80b5cdf08ec9->enter($__internal_dff5040c52e7884735f2815d41750b9becee9f6396f64497d3fe80b5cdf08ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_dff5040c52e7884735f2815d41750b9becee9f6396f64497d3fe80b5cdf08ec9->leave($__internal_dff5040c52e7884735f2815d41750b9becee9f6396f64497d3fe80b5cdf08ec9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff119a4fff72700218733cf9f24a213308e5ba773b31bad6bdfcc9d2a490f744 = $this->env->getExtension("native_profiler");
        $__internal_ff119a4fff72700218733cf9f24a213308e5ba773b31bad6bdfcc9d2a490f744->enter($__internal_ff119a4fff72700218733cf9f24a213308e5ba773b31bad6bdfcc9d2a490f744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff119a4fff72700218733cf9f24a213308e5ba773b31bad6bdfcc9d2a490f744->leave($__internal_ff119a4fff72700218733cf9f24a213308e5ba773b31bad6bdfcc9d2a490f744_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_896dfbb4e726f9615e61e6d61a5f6d3b0e0e5fc342579d0a0a9a8b571f24e433 = $this->env->getExtension("native_profiler");
        $__internal_896dfbb4e726f9615e61e6d61a5f6d3b0e0e5fc342579d0a0a9a8b571f24e433->enter($__internal_896dfbb4e726f9615e61e6d61a5f6d3b0e0e5fc342579d0a0a9a8b571f24e433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_896dfbb4e726f9615e61e6d61a5f6d3b0e0e5fc342579d0a0a9a8b571f24e433->leave($__internal_896dfbb4e726f9615e61e6d61a5f6d3b0e0e5fc342579d0a0a9a8b571f24e433_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_712170697f8ee5a86e82356e86a19bc6794ab9c36d0b9019b5d39fed6db69109 = $this->env->getExtension("native_profiler");
        $__internal_712170697f8ee5a86e82356e86a19bc6794ab9c36d0b9019b5d39fed6db69109->enter($__internal_712170697f8ee5a86e82356e86a19bc6794ab9c36d0b9019b5d39fed6db69109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_712170697f8ee5a86e82356e86a19bc6794ab9c36d0b9019b5d39fed6db69109->leave($__internal_712170697f8ee5a86e82356e86a19bc6794ab9c36d0b9019b5d39fed6db69109_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_76936f2cd3e1ce05ea1dd7a22ec5e39ff3bd7be83c7ec2f96da0528e437d3de5 = $this->env->getExtension("native_profiler");
        $__internal_76936f2cd3e1ce05ea1dd7a22ec5e39ff3bd7be83c7ec2f96da0528e437d3de5->enter($__internal_76936f2cd3e1ce05ea1dd7a22ec5e39ff3bd7be83c7ec2f96da0528e437d3de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_76936f2cd3e1ce05ea1dd7a22ec5e39ff3bd7be83c7ec2f96da0528e437d3de5->leave($__internal_76936f2cd3e1ce05ea1dd7a22ec5e39ff3bd7be83c7ec2f96da0528e437d3de5_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
