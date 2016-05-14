<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ed0da5be11c18758565db907a9a0a29c813aa273b51c660460bcbb695534575d extends Twig_Template
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
        $__internal_6897d74b5ec72fc027272a6070469c8c3f880c0f98864c9df787de34d8d029ef = $this->env->getExtension("native_profiler");
        $__internal_6897d74b5ec72fc027272a6070469c8c3f880c0f98864c9df787de34d8d029ef->enter($__internal_6897d74b5ec72fc027272a6070469c8c3f880c0f98864c9df787de34d8d029ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6897d74b5ec72fc027272a6070469c8c3f880c0f98864c9df787de34d8d029ef->leave($__internal_6897d74b5ec72fc027272a6070469c8c3f880c0f98864c9df787de34d8d029ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f084e9d69208e316ae4b8b349d7ccee9d9f52053625c0953112eba9c74bf09a = $this->env->getExtension("native_profiler");
        $__internal_7f084e9d69208e316ae4b8b349d7ccee9d9f52053625c0953112eba9c74bf09a->enter($__internal_7f084e9d69208e316ae4b8b349d7ccee9d9f52053625c0953112eba9c74bf09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7f084e9d69208e316ae4b8b349d7ccee9d9f52053625c0953112eba9c74bf09a->leave($__internal_7f084e9d69208e316ae4b8b349d7ccee9d9f52053625c0953112eba9c74bf09a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_92ef0a0a89264ca1d4a06d5b24ff8a1c6ec9a8bd16ca143af7e65014b0e72e4d = $this->env->getExtension("native_profiler");
        $__internal_92ef0a0a89264ca1d4a06d5b24ff8a1c6ec9a8bd16ca143af7e65014b0e72e4d->enter($__internal_92ef0a0a89264ca1d4a06d5b24ff8a1c6ec9a8bd16ca143af7e65014b0e72e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_92ef0a0a89264ca1d4a06d5b24ff8a1c6ec9a8bd16ca143af7e65014b0e72e4d->leave($__internal_92ef0a0a89264ca1d4a06d5b24ff8a1c6ec9a8bd16ca143af7e65014b0e72e4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a2dd45dba8a6fbe79b09a64d6ae36ef4ba5346b39ccc5428c53ca9e8b16ba3c0 = $this->env->getExtension("native_profiler");
        $__internal_a2dd45dba8a6fbe79b09a64d6ae36ef4ba5346b39ccc5428c53ca9e8b16ba3c0->enter($__internal_a2dd45dba8a6fbe79b09a64d6ae36ef4ba5346b39ccc5428c53ca9e8b16ba3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a2dd45dba8a6fbe79b09a64d6ae36ef4ba5346b39ccc5428c53ca9e8b16ba3c0->leave($__internal_a2dd45dba8a6fbe79b09a64d6ae36ef4ba5346b39ccc5428c53ca9e8b16ba3c0_prof);

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
