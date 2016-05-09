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
        $__internal_fe349689328d3c782f962e0d3e2c79b4c3b48b992cb0befdeb2ffb4ae4ae657b = $this->env->getExtension("native_profiler");
        $__internal_fe349689328d3c782f962e0d3e2c79b4c3b48b992cb0befdeb2ffb4ae4ae657b->enter($__internal_fe349689328d3c782f962e0d3e2c79b4c3b48b992cb0befdeb2ffb4ae4ae657b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe349689328d3c782f962e0d3e2c79b4c3b48b992cb0befdeb2ffb4ae4ae657b->leave($__internal_fe349689328d3c782f962e0d3e2c79b4c3b48b992cb0befdeb2ffb4ae4ae657b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f86822092375a8dfeb2f7d4522891daac72285562f74eefed3cf78c702652893 = $this->env->getExtension("native_profiler");
        $__internal_f86822092375a8dfeb2f7d4522891daac72285562f74eefed3cf78c702652893->enter($__internal_f86822092375a8dfeb2f7d4522891daac72285562f74eefed3cf78c702652893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f86822092375a8dfeb2f7d4522891daac72285562f74eefed3cf78c702652893->leave($__internal_f86822092375a8dfeb2f7d4522891daac72285562f74eefed3cf78c702652893_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5abd1c284ec7768f20e2b720bad9be25e1c270a06ae0e0ef67e13548b5eb16a = $this->env->getExtension("native_profiler");
        $__internal_d5abd1c284ec7768f20e2b720bad9be25e1c270a06ae0e0ef67e13548b5eb16a->enter($__internal_d5abd1c284ec7768f20e2b720bad9be25e1c270a06ae0e0ef67e13548b5eb16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d5abd1c284ec7768f20e2b720bad9be25e1c270a06ae0e0ef67e13548b5eb16a->leave($__internal_d5abd1c284ec7768f20e2b720bad9be25e1c270a06ae0e0ef67e13548b5eb16a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c9e1d1fbf950c2ddc6347b2998003d54460e78aa9fa71b821541d36d21c5030 = $this->env->getExtension("native_profiler");
        $__internal_7c9e1d1fbf950c2ddc6347b2998003d54460e78aa9fa71b821541d36d21c5030->enter($__internal_7c9e1d1fbf950c2ddc6347b2998003d54460e78aa9fa71b821541d36d21c5030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7c9e1d1fbf950c2ddc6347b2998003d54460e78aa9fa71b821541d36d21c5030->leave($__internal_7c9e1d1fbf950c2ddc6347b2998003d54460e78aa9fa71b821541d36d21c5030_prof);

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
