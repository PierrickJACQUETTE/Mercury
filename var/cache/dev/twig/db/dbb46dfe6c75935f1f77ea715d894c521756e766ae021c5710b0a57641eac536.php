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
        $__internal_715103643c65969ed891ca0a91a5a5efd9f84f858ca84a9c2f1fbcee9eaa2048 = $this->env->getExtension("native_profiler");
        $__internal_715103643c65969ed891ca0a91a5a5efd9f84f858ca84a9c2f1fbcee9eaa2048->enter($__internal_715103643c65969ed891ca0a91a5a5efd9f84f858ca84a9c2f1fbcee9eaa2048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_715103643c65969ed891ca0a91a5a5efd9f84f858ca84a9c2f1fbcee9eaa2048->leave($__internal_715103643c65969ed891ca0a91a5a5efd9f84f858ca84a9c2f1fbcee9eaa2048_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a39982502b9a19a63edb11e6845c5598719874d96d0d77f082e14ca3e2d99fa0 = $this->env->getExtension("native_profiler");
        $__internal_a39982502b9a19a63edb11e6845c5598719874d96d0d77f082e14ca3e2d99fa0->enter($__internal_a39982502b9a19a63edb11e6845c5598719874d96d0d77f082e14ca3e2d99fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a39982502b9a19a63edb11e6845c5598719874d96d0d77f082e14ca3e2d99fa0->leave($__internal_a39982502b9a19a63edb11e6845c5598719874d96d0d77f082e14ca3e2d99fa0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a35addb3abbbfbf4af9086729f34e348188c8a5e35fa4371781d573b03f6846b = $this->env->getExtension("native_profiler");
        $__internal_a35addb3abbbfbf4af9086729f34e348188c8a5e35fa4371781d573b03f6846b->enter($__internal_a35addb3abbbfbf4af9086729f34e348188c8a5e35fa4371781d573b03f6846b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a35addb3abbbfbf4af9086729f34e348188c8a5e35fa4371781d573b03f6846b->leave($__internal_a35addb3abbbfbf4af9086729f34e348188c8a5e35fa4371781d573b03f6846b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e0b7a2f6a89dd06c97432faa52b2216bcbe1c472ec13bc532309bba52c5c012 = $this->env->getExtension("native_profiler");
        $__internal_9e0b7a2f6a89dd06c97432faa52b2216bcbe1c472ec13bc532309bba52c5c012->enter($__internal_9e0b7a2f6a89dd06c97432faa52b2216bcbe1c472ec13bc532309bba52c5c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e0b7a2f6a89dd06c97432faa52b2216bcbe1c472ec13bc532309bba52c5c012->leave($__internal_9e0b7a2f6a89dd06c97432faa52b2216bcbe1c472ec13bc532309bba52c5c012_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_95cc929617764abdfa81085c0a5298b4a35260ca58c88d265c7ef1334f7d4bf8 = $this->env->getExtension("native_profiler");
        $__internal_95cc929617764abdfa81085c0a5298b4a35260ca58c88d265c7ef1334f7d4bf8->enter($__internal_95cc929617764abdfa81085c0a5298b4a35260ca58c88d265c7ef1334f7d4bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_95cc929617764abdfa81085c0a5298b4a35260ca58c88d265c7ef1334f7d4bf8->leave($__internal_95cc929617764abdfa81085c0a5298b4a35260ca58c88d265c7ef1334f7d4bf8_prof);

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
