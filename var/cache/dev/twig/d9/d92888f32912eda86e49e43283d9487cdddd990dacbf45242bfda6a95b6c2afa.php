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
        $__internal_486553581f94ba2c2eaf37b5a0330e69cbf57c6be10dc7625460f0939146e18c = $this->env->getExtension("native_profiler");
        $__internal_486553581f94ba2c2eaf37b5a0330e69cbf57c6be10dc7625460f0939146e18c->enter($__internal_486553581f94ba2c2eaf37b5a0330e69cbf57c6be10dc7625460f0939146e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486553581f94ba2c2eaf37b5a0330e69cbf57c6be10dc7625460f0939146e18c->leave($__internal_486553581f94ba2c2eaf37b5a0330e69cbf57c6be10dc7625460f0939146e18c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c2d668040373e4cf114c36e5d3c05d37971488fb5f0bd74f1615c026ccab937c = $this->env->getExtension("native_profiler");
        $__internal_c2d668040373e4cf114c36e5d3c05d37971488fb5f0bd74f1615c026ccab937c->enter($__internal_c2d668040373e4cf114c36e5d3c05d37971488fb5f0bd74f1615c026ccab937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c2d668040373e4cf114c36e5d3c05d37971488fb5f0bd74f1615c026ccab937c->leave($__internal_c2d668040373e4cf114c36e5d3c05d37971488fb5f0bd74f1615c026ccab937c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_634e1050f90d0540dfaf5ee7a5fb574f16ca1f2bfe8797f357dfe2090db50c70 = $this->env->getExtension("native_profiler");
        $__internal_634e1050f90d0540dfaf5ee7a5fb574f16ca1f2bfe8797f357dfe2090db50c70->enter($__internal_634e1050f90d0540dfaf5ee7a5fb574f16ca1f2bfe8797f357dfe2090db50c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_634e1050f90d0540dfaf5ee7a5fb574f16ca1f2bfe8797f357dfe2090db50c70->leave($__internal_634e1050f90d0540dfaf5ee7a5fb574f16ca1f2bfe8797f357dfe2090db50c70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1cb203c7578f37614b41843912b6fd86beea6a67ea81de2f512bd8d7661d8e82 = $this->env->getExtension("native_profiler");
        $__internal_1cb203c7578f37614b41843912b6fd86beea6a67ea81de2f512bd8d7661d8e82->enter($__internal_1cb203c7578f37614b41843912b6fd86beea6a67ea81de2f512bd8d7661d8e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1cb203c7578f37614b41843912b6fd86beea6a67ea81de2f512bd8d7661d8e82->leave($__internal_1cb203c7578f37614b41843912b6fd86beea6a67ea81de2f512bd8d7661d8e82_prof);

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
