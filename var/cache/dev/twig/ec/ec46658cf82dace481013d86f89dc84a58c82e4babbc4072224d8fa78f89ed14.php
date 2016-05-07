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
        $__internal_951ed455c43c33dd77f7c5297629ecb74a6651f6609f3dc3d84e2f31b8923c9a = $this->env->getExtension("native_profiler");
        $__internal_951ed455c43c33dd77f7c5297629ecb74a6651f6609f3dc3d84e2f31b8923c9a->enter($__internal_951ed455c43c33dd77f7c5297629ecb74a6651f6609f3dc3d84e2f31b8923c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_951ed455c43c33dd77f7c5297629ecb74a6651f6609f3dc3d84e2f31b8923c9a->leave($__internal_951ed455c43c33dd77f7c5297629ecb74a6651f6609f3dc3d84e2f31b8923c9a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f69bf4695aaddee11f47f038cb6791f694e85fe8f50bb35c6c8e0442717cdac3 = $this->env->getExtension("native_profiler");
        $__internal_f69bf4695aaddee11f47f038cb6791f694e85fe8f50bb35c6c8e0442717cdac3->enter($__internal_f69bf4695aaddee11f47f038cb6791f694e85fe8f50bb35c6c8e0442717cdac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f69bf4695aaddee11f47f038cb6791f694e85fe8f50bb35c6c8e0442717cdac3->leave($__internal_f69bf4695aaddee11f47f038cb6791f694e85fe8f50bb35c6c8e0442717cdac3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f49577144190912ba2b550e93ef455dcf2a0163fb5e07d6c2ba06d2ad41b49e4 = $this->env->getExtension("native_profiler");
        $__internal_f49577144190912ba2b550e93ef455dcf2a0163fb5e07d6c2ba06d2ad41b49e4->enter($__internal_f49577144190912ba2b550e93ef455dcf2a0163fb5e07d6c2ba06d2ad41b49e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f49577144190912ba2b550e93ef455dcf2a0163fb5e07d6c2ba06d2ad41b49e4->leave($__internal_f49577144190912ba2b550e93ef455dcf2a0163fb5e07d6c2ba06d2ad41b49e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_63aa049d1dc9307d0049bb322046a170208b385f6f138a50e26a65bae7109aa9 = $this->env->getExtension("native_profiler");
        $__internal_63aa049d1dc9307d0049bb322046a170208b385f6f138a50e26a65bae7109aa9->enter($__internal_63aa049d1dc9307d0049bb322046a170208b385f6f138a50e26a65bae7109aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_63aa049d1dc9307d0049bb322046a170208b385f6f138a50e26a65bae7109aa9->leave($__internal_63aa049d1dc9307d0049bb322046a170208b385f6f138a50e26a65bae7109aa9_prof);

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
