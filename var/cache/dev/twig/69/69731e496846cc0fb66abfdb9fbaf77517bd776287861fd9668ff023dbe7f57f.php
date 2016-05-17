<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe2dfc75b3caa378618ef0c824e0d2b38b1a5a458f1f9b6b4b6d6b4bddf77017 extends Twig_Template
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
        $__internal_fdc63039b30806683f1c87f8e6c120466f9899a2e167629b2c6513b3b0bbc87f = $this->env->getExtension("native_profiler");
        $__internal_fdc63039b30806683f1c87f8e6c120466f9899a2e167629b2c6513b3b0bbc87f->enter($__internal_fdc63039b30806683f1c87f8e6c120466f9899a2e167629b2c6513b3b0bbc87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdc63039b30806683f1c87f8e6c120466f9899a2e167629b2c6513b3b0bbc87f->leave($__internal_fdc63039b30806683f1c87f8e6c120466f9899a2e167629b2c6513b3b0bbc87f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a832f2d16f28d73dcc682a6a5c6832460f635abfe5037ec748693b92db9e60b5 = $this->env->getExtension("native_profiler");
        $__internal_a832f2d16f28d73dcc682a6a5c6832460f635abfe5037ec748693b92db9e60b5->enter($__internal_a832f2d16f28d73dcc682a6a5c6832460f635abfe5037ec748693b92db9e60b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a832f2d16f28d73dcc682a6a5c6832460f635abfe5037ec748693b92db9e60b5->leave($__internal_a832f2d16f28d73dcc682a6a5c6832460f635abfe5037ec748693b92db9e60b5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b045c62ab6294da0d9da384065ccbc58dd42561934ae8c8c640af5c80f452952 = $this->env->getExtension("native_profiler");
        $__internal_b045c62ab6294da0d9da384065ccbc58dd42561934ae8c8c640af5c80f452952->enter($__internal_b045c62ab6294da0d9da384065ccbc58dd42561934ae8c8c640af5c80f452952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b045c62ab6294da0d9da384065ccbc58dd42561934ae8c8c640af5c80f452952->leave($__internal_b045c62ab6294da0d9da384065ccbc58dd42561934ae8c8c640af5c80f452952_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_119707fbbcb5380f10b5d8bed0d3881a509e4ea7627f50d501275e6608f850f9 = $this->env->getExtension("native_profiler");
        $__internal_119707fbbcb5380f10b5d8bed0d3881a509e4ea7627f50d501275e6608f850f9->enter($__internal_119707fbbcb5380f10b5d8bed0d3881a509e4ea7627f50d501275e6608f850f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_119707fbbcb5380f10b5d8bed0d3881a509e4ea7627f50d501275e6608f850f9->leave($__internal_119707fbbcb5380f10b5d8bed0d3881a509e4ea7627f50d501275e6608f850f9_prof);

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
