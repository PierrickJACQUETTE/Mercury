<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c99111548e77491e715c816feb25f6871f79c32030eb3de84b378995dcdb15d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_675fb8b894f352ce9aa32c88e25d186ded7aecbc325a6c7ab352cf975892e86a = $this->env->getExtension("native_profiler");
        $__internal_675fb8b894f352ce9aa32c88e25d186ded7aecbc325a6c7ab352cf975892e86a->enter($__internal_675fb8b894f352ce9aa32c88e25d186ded7aecbc325a6c7ab352cf975892e86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_675fb8b894f352ce9aa32c88e25d186ded7aecbc325a6c7ab352cf975892e86a->leave($__internal_675fb8b894f352ce9aa32c88e25d186ded7aecbc325a6c7ab352cf975892e86a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c7cd88f37c741102d4987b536e1b680ace59fdcd224010b72533bf0ff0230c3b = $this->env->getExtension("native_profiler");
        $__internal_c7cd88f37c741102d4987b536e1b680ace59fdcd224010b72533bf0ff0230c3b->enter($__internal_c7cd88f37c741102d4987b536e1b680ace59fdcd224010b72533bf0ff0230c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c7cd88f37c741102d4987b536e1b680ace59fdcd224010b72533bf0ff0230c3b->leave($__internal_c7cd88f37c741102d4987b536e1b680ace59fdcd224010b72533bf0ff0230c3b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_be245f417be33562de5fb44c644c9ba69fba83726387350fdb5dfcd8924d3495 = $this->env->getExtension("native_profiler");
        $__internal_be245f417be33562de5fb44c644c9ba69fba83726387350fdb5dfcd8924d3495->enter($__internal_be245f417be33562de5fb44c644c9ba69fba83726387350fdb5dfcd8924d3495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_be245f417be33562de5fb44c644c9ba69fba83726387350fdb5dfcd8924d3495->leave($__internal_be245f417be33562de5fb44c644c9ba69fba83726387350fdb5dfcd8924d3495_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6c048a7b6fbc052e10d68838eeb02e3af68e35a7fc43da68f6650b4af4867fb = $this->env->getExtension("native_profiler");
        $__internal_d6c048a7b6fbc052e10d68838eeb02e3af68e35a7fc43da68f6650b4af4867fb->enter($__internal_d6c048a7b6fbc052e10d68838eeb02e3af68e35a7fc43da68f6650b4af4867fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d6c048a7b6fbc052e10d68838eeb02e3af68e35a7fc43da68f6650b4af4867fb->leave($__internal_d6c048a7b6fbc052e10d68838eeb02e3af68e35a7fc43da68f6650b4af4867fb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
