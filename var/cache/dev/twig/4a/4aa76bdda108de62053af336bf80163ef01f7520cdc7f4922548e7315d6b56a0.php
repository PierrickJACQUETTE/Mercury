<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7059f514b07133389b4d695678b5dac353b2d691f6513af9a6db1dc39ab81d49 extends Twig_Template
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
        $__internal_3b8eed36ac9228e9a9369a0ea1803999df86a79f8288a90fed4890f1754f71d5 = $this->env->getExtension("native_profiler");
        $__internal_3b8eed36ac9228e9a9369a0ea1803999df86a79f8288a90fed4890f1754f71d5->enter($__internal_3b8eed36ac9228e9a9369a0ea1803999df86a79f8288a90fed4890f1754f71d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8eed36ac9228e9a9369a0ea1803999df86a79f8288a90fed4890f1754f71d5->leave($__internal_3b8eed36ac9228e9a9369a0ea1803999df86a79f8288a90fed4890f1754f71d5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53b6b338365de90c012cc5f8dced769f5be673b139d318bd813f6b46bf3f76fc = $this->env->getExtension("native_profiler");
        $__internal_53b6b338365de90c012cc5f8dced769f5be673b139d318bd813f6b46bf3f76fc->enter($__internal_53b6b338365de90c012cc5f8dced769f5be673b139d318bd813f6b46bf3f76fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53b6b338365de90c012cc5f8dced769f5be673b139d318bd813f6b46bf3f76fc->leave($__internal_53b6b338365de90c012cc5f8dced769f5be673b139d318bd813f6b46bf3f76fc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd3cd7aa268407f8d2dcb5a2ed867c467069c7b2b19ea84d9ad0c74d730a5d4e = $this->env->getExtension("native_profiler");
        $__internal_fd3cd7aa268407f8d2dcb5a2ed867c467069c7b2b19ea84d9ad0c74d730a5d4e->enter($__internal_fd3cd7aa268407f8d2dcb5a2ed867c467069c7b2b19ea84d9ad0c74d730a5d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd3cd7aa268407f8d2dcb5a2ed867c467069c7b2b19ea84d9ad0c74d730a5d4e->leave($__internal_fd3cd7aa268407f8d2dcb5a2ed867c467069c7b2b19ea84d9ad0c74d730a5d4e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd6d5f6c0e2f693cdfa8b565ce58c399197f5577895abed14940336fd218a420 = $this->env->getExtension("native_profiler");
        $__internal_cd6d5f6c0e2f693cdfa8b565ce58c399197f5577895abed14940336fd218a420->enter($__internal_cd6d5f6c0e2f693cdfa8b565ce58c399197f5577895abed14940336fd218a420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cd6d5f6c0e2f693cdfa8b565ce58c399197f5577895abed14940336fd218a420->leave($__internal_cd6d5f6c0e2f693cdfa8b565ce58c399197f5577895abed14940336fd218a420_prof);

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
