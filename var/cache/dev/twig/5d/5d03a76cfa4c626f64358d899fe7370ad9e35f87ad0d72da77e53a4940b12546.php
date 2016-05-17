<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c599e59ac9585df8cae4be9fa5386cfe2cbee96a78fd7d55d9bb6b0dc1cd703e extends Twig_Template
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
        $__internal_13aef265a4b60f3608ff169afd3d7aa55aff79382989bf46f4c606bc17d99838 = $this->env->getExtension("native_profiler");
        $__internal_13aef265a4b60f3608ff169afd3d7aa55aff79382989bf46f4c606bc17d99838->enter($__internal_13aef265a4b60f3608ff169afd3d7aa55aff79382989bf46f4c606bc17d99838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13aef265a4b60f3608ff169afd3d7aa55aff79382989bf46f4c606bc17d99838->leave($__internal_13aef265a4b60f3608ff169afd3d7aa55aff79382989bf46f4c606bc17d99838_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_208782699ff828c98a6366088014ec9b986b7e157b8d1470193ad9d37ab2b17d = $this->env->getExtension("native_profiler");
        $__internal_208782699ff828c98a6366088014ec9b986b7e157b8d1470193ad9d37ab2b17d->enter($__internal_208782699ff828c98a6366088014ec9b986b7e157b8d1470193ad9d37ab2b17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_208782699ff828c98a6366088014ec9b986b7e157b8d1470193ad9d37ab2b17d->leave($__internal_208782699ff828c98a6366088014ec9b986b7e157b8d1470193ad9d37ab2b17d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a2df2c068042638598763a07b1e1c794ea4ed2e3a88085b8f9b52c66451f333 = $this->env->getExtension("native_profiler");
        $__internal_7a2df2c068042638598763a07b1e1c794ea4ed2e3a88085b8f9b52c66451f333->enter($__internal_7a2df2c068042638598763a07b1e1c794ea4ed2e3a88085b8f9b52c66451f333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7a2df2c068042638598763a07b1e1c794ea4ed2e3a88085b8f9b52c66451f333->leave($__internal_7a2df2c068042638598763a07b1e1c794ea4ed2e3a88085b8f9b52c66451f333_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc4f05300947f6bffbb076ebf277d0520d9560d2d4be9a9f086c2f612099dd6d = $this->env->getExtension("native_profiler");
        $__internal_cc4f05300947f6bffbb076ebf277d0520d9560d2d4be9a9f086c2f612099dd6d->enter($__internal_cc4f05300947f6bffbb076ebf277d0520d9560d2d4be9a9f086c2f612099dd6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cc4f05300947f6bffbb076ebf277d0520d9560d2d4be9a9f086c2f612099dd6d->leave($__internal_cc4f05300947f6bffbb076ebf277d0520d9560d2d4be9a9f086c2f612099dd6d_prof);

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
