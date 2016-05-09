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
        $__internal_3401f142581156318d71e89fddcedf0ba1dd1cb262eb59ca2906201fa5fc28cd = $this->env->getExtension("native_profiler");
        $__internal_3401f142581156318d71e89fddcedf0ba1dd1cb262eb59ca2906201fa5fc28cd->enter($__internal_3401f142581156318d71e89fddcedf0ba1dd1cb262eb59ca2906201fa5fc28cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3401f142581156318d71e89fddcedf0ba1dd1cb262eb59ca2906201fa5fc28cd->leave($__internal_3401f142581156318d71e89fddcedf0ba1dd1cb262eb59ca2906201fa5fc28cd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4cea0f263c2dc5d6d9bc85a039cec88d6428557709a0c735d7d92ee5633e1663 = $this->env->getExtension("native_profiler");
        $__internal_4cea0f263c2dc5d6d9bc85a039cec88d6428557709a0c735d7d92ee5633e1663->enter($__internal_4cea0f263c2dc5d6d9bc85a039cec88d6428557709a0c735d7d92ee5633e1663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4cea0f263c2dc5d6d9bc85a039cec88d6428557709a0c735d7d92ee5633e1663->leave($__internal_4cea0f263c2dc5d6d9bc85a039cec88d6428557709a0c735d7d92ee5633e1663_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f342e4876e460d26aa0a194a2ea9cd8166ac98605c965bce7f84462070009c99 = $this->env->getExtension("native_profiler");
        $__internal_f342e4876e460d26aa0a194a2ea9cd8166ac98605c965bce7f84462070009c99->enter($__internal_f342e4876e460d26aa0a194a2ea9cd8166ac98605c965bce7f84462070009c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f342e4876e460d26aa0a194a2ea9cd8166ac98605c965bce7f84462070009c99->leave($__internal_f342e4876e460d26aa0a194a2ea9cd8166ac98605c965bce7f84462070009c99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_39bb86a741e532e22fe26625bd58e59a7308a103297503d4ac3e4a70d3adb811 = $this->env->getExtension("native_profiler");
        $__internal_39bb86a741e532e22fe26625bd58e59a7308a103297503d4ac3e4a70d3adb811->enter($__internal_39bb86a741e532e22fe26625bd58e59a7308a103297503d4ac3e4a70d3adb811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_39bb86a741e532e22fe26625bd58e59a7308a103297503d4ac3e4a70d3adb811->leave($__internal_39bb86a741e532e22fe26625bd58e59a7308a103297503d4ac3e4a70d3adb811_prof);

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
