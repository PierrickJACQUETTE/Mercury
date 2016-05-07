<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e5f65c1dd7c19e49a6fbe94a56fecbc47e3875b5dbdd449fb2f92e81e0b17fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00db22357eec9658fbc2ccfd3a93cc0f9136bec77588d79ebef5b34289cffaaf = $this->env->getExtension("native_profiler");
        $__internal_00db22357eec9658fbc2ccfd3a93cc0f9136bec77588d79ebef5b34289cffaaf->enter($__internal_00db22357eec9658fbc2ccfd3a93cc0f9136bec77588d79ebef5b34289cffaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00db22357eec9658fbc2ccfd3a93cc0f9136bec77588d79ebef5b34289cffaaf->leave($__internal_00db22357eec9658fbc2ccfd3a93cc0f9136bec77588d79ebef5b34289cffaaf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3ed17fd933556e4c6907aba998db00e30f773cd10b4c14bcd4b96d510c98a985 = $this->env->getExtension("native_profiler");
        $__internal_3ed17fd933556e4c6907aba998db00e30f773cd10b4c14bcd4b96d510c98a985->enter($__internal_3ed17fd933556e4c6907aba998db00e30f773cd10b4c14bcd4b96d510c98a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3ed17fd933556e4c6907aba998db00e30f773cd10b4c14bcd4b96d510c98a985->leave($__internal_3ed17fd933556e4c6907aba998db00e30f773cd10b4c14bcd4b96d510c98a985_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ff42efad00a89a44cbf5862e45b0ec1ff81be137af1306628bed462850cacd29 = $this->env->getExtension("native_profiler");
        $__internal_ff42efad00a89a44cbf5862e45b0ec1ff81be137af1306628bed462850cacd29->enter($__internal_ff42efad00a89a44cbf5862e45b0ec1ff81be137af1306628bed462850cacd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ff42efad00a89a44cbf5862e45b0ec1ff81be137af1306628bed462850cacd29->leave($__internal_ff42efad00a89a44cbf5862e45b0ec1ff81be137af1306628bed462850cacd29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ef5538d72851a91a76d8386af983b0aa31da37629e560305f6f97d772b2d606 = $this->env->getExtension("native_profiler");
        $__internal_2ef5538d72851a91a76d8386af983b0aa31da37629e560305f6f97d772b2d606->enter($__internal_2ef5538d72851a91a76d8386af983b0aa31da37629e560305f6f97d772b2d606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ef5538d72851a91a76d8386af983b0aa31da37629e560305f6f97d772b2d606->leave($__internal_2ef5538d72851a91a76d8386af983b0aa31da37629e560305f6f97d772b2d606_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
