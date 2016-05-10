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
        $__internal_91504e68d0b037f48d77b8524406d997d8ea3a55e222d8e6881c51520d2ba30e = $this->env->getExtension("native_profiler");
        $__internal_91504e68d0b037f48d77b8524406d997d8ea3a55e222d8e6881c51520d2ba30e->enter($__internal_91504e68d0b037f48d77b8524406d997d8ea3a55e222d8e6881c51520d2ba30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_91504e68d0b037f48d77b8524406d997d8ea3a55e222d8e6881c51520d2ba30e->leave($__internal_91504e68d0b037f48d77b8524406d997d8ea3a55e222d8e6881c51520d2ba30e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59491e98373f5b1e96ef1c33e97c8d77e63a950efa7167aad4a3f124f2d018f1 = $this->env->getExtension("native_profiler");
        $__internal_59491e98373f5b1e96ef1c33e97c8d77e63a950efa7167aad4a3f124f2d018f1->enter($__internal_59491e98373f5b1e96ef1c33e97c8d77e63a950efa7167aad4a3f124f2d018f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_59491e98373f5b1e96ef1c33e97c8d77e63a950efa7167aad4a3f124f2d018f1->leave($__internal_59491e98373f5b1e96ef1c33e97c8d77e63a950efa7167aad4a3f124f2d018f1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32fbfdc3cbba4b7dab6b40202d2a5ba1c553a64e9606f336d57dae1e11eccbfb = $this->env->getExtension("native_profiler");
        $__internal_32fbfdc3cbba4b7dab6b40202d2a5ba1c553a64e9606f336d57dae1e11eccbfb->enter($__internal_32fbfdc3cbba4b7dab6b40202d2a5ba1c553a64e9606f336d57dae1e11eccbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_32fbfdc3cbba4b7dab6b40202d2a5ba1c553a64e9606f336d57dae1e11eccbfb->leave($__internal_32fbfdc3cbba4b7dab6b40202d2a5ba1c553a64e9606f336d57dae1e11eccbfb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2914a20a285c594b93c653106f4acf79173f3b7550595c71ce698e49eafd027 = $this->env->getExtension("native_profiler");
        $__internal_b2914a20a285c594b93c653106f4acf79173f3b7550595c71ce698e49eafd027->enter($__internal_b2914a20a285c594b93c653106f4acf79173f3b7550595c71ce698e49eafd027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2914a20a285c594b93c653106f4acf79173f3b7550595c71ce698e49eafd027->leave($__internal_b2914a20a285c594b93c653106f4acf79173f3b7550595c71ce698e49eafd027_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d4480b132aaf33d4f8219d716912475b95b9324eff9fedbace2f20cfb9d82be2 = $this->env->getExtension("native_profiler");
        $__internal_d4480b132aaf33d4f8219d716912475b95b9324eff9fedbace2f20cfb9d82be2->enter($__internal_d4480b132aaf33d4f8219d716912475b95b9324eff9fedbace2f20cfb9d82be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d4480b132aaf33d4f8219d716912475b95b9324eff9fedbace2f20cfb9d82be2->leave($__internal_d4480b132aaf33d4f8219d716912475b95b9324eff9fedbace2f20cfb9d82be2_prof);

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
