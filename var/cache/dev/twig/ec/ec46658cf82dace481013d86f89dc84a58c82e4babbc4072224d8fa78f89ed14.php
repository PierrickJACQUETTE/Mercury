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
        $__internal_117fe2c57ea60d1de84585ff82bbaf52be1a90abb52a1d24a3d602e1bf949d6b = $this->env->getExtension("native_profiler");
        $__internal_117fe2c57ea60d1de84585ff82bbaf52be1a90abb52a1d24a3d602e1bf949d6b->enter($__internal_117fe2c57ea60d1de84585ff82bbaf52be1a90abb52a1d24a3d602e1bf949d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_117fe2c57ea60d1de84585ff82bbaf52be1a90abb52a1d24a3d602e1bf949d6b->leave($__internal_117fe2c57ea60d1de84585ff82bbaf52be1a90abb52a1d24a3d602e1bf949d6b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_28c286b773f89297b3ad689b578d5ffe49532d62cbed524c10f07d3b4dc9703b = $this->env->getExtension("native_profiler");
        $__internal_28c286b773f89297b3ad689b578d5ffe49532d62cbed524c10f07d3b4dc9703b->enter($__internal_28c286b773f89297b3ad689b578d5ffe49532d62cbed524c10f07d3b4dc9703b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28c286b773f89297b3ad689b578d5ffe49532d62cbed524c10f07d3b4dc9703b->leave($__internal_28c286b773f89297b3ad689b578d5ffe49532d62cbed524c10f07d3b4dc9703b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d20190ae57bd1274b68146a8aa928786a801516ab4ee4650187a96fb9f376460 = $this->env->getExtension("native_profiler");
        $__internal_d20190ae57bd1274b68146a8aa928786a801516ab4ee4650187a96fb9f376460->enter($__internal_d20190ae57bd1274b68146a8aa928786a801516ab4ee4650187a96fb9f376460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d20190ae57bd1274b68146a8aa928786a801516ab4ee4650187a96fb9f376460->leave($__internal_d20190ae57bd1274b68146a8aa928786a801516ab4ee4650187a96fb9f376460_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2265df34085107e656aee743934c99a3f14cd4b370414747653bc49e4268a89 = $this->env->getExtension("native_profiler");
        $__internal_b2265df34085107e656aee743934c99a3f14cd4b370414747653bc49e4268a89->enter($__internal_b2265df34085107e656aee743934c99a3f14cd4b370414747653bc49e4268a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b2265df34085107e656aee743934c99a3f14cd4b370414747653bc49e4268a89->leave($__internal_b2265df34085107e656aee743934c99a3f14cd4b370414747653bc49e4268a89_prof);

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
