<?php

/* default/index.html.twig */
class __TwigTemplate_0bc74f0a6f587441b71769e9d30c7cbf37dcf64c653d94faf0b006230737c734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10524c74fa98df1be9db6e7e1f6cb1f6eb3a7ce96d7775877dacc578b1c2b04e = $this->env->getExtension("native_profiler");
        $__internal_10524c74fa98df1be9db6e7e1f6cb1f6eb3a7ce96d7775877dacc578b1c2b04e->enter($__internal_10524c74fa98df1be9db6e7e1f6cb1f6eb3a7ce96d7775877dacc578b1c2b04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10524c74fa98df1be9db6e7e1f6cb1f6eb3a7ce96d7775877dacc578b1c2b04e->leave($__internal_10524c74fa98df1be9db6e7e1f6cb1f6eb3a7ce96d7775877dacc578b1c2b04e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5be048676f79d3343a3189c85e3e2d8842ee5f60f1a15b6e30b1527336395d59 = $this->env->getExtension("native_profiler");
        $__internal_5be048676f79d3343a3189c85e3e2d8842ee5f60f1a15b6e30b1527336395d59->enter($__internal_5be048676f79d3343a3189c85e3e2d8842ee5f60f1a15b6e30b1527336395d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        
        $__internal_5be048676f79d3343a3189c85e3e2d8842ee5f60f1a15b6e30b1527336395d59->leave($__internal_5be048676f79d3343a3189c85e3e2d8842ee5f60f1a15b6e30b1527336395d59_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* {% endblock %}*/
/* */
