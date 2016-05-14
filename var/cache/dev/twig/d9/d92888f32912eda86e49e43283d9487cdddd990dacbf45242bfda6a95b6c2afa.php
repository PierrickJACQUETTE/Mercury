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
        $__internal_90284461e05c4c89cbfd304e41dd67b22b3bfba26075778dfa3625ab2a1b4704 = $this->env->getExtension("native_profiler");
        $__internal_90284461e05c4c89cbfd304e41dd67b22b3bfba26075778dfa3625ab2a1b4704->enter($__internal_90284461e05c4c89cbfd304e41dd67b22b3bfba26075778dfa3625ab2a1b4704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90284461e05c4c89cbfd304e41dd67b22b3bfba26075778dfa3625ab2a1b4704->leave($__internal_90284461e05c4c89cbfd304e41dd67b22b3bfba26075778dfa3625ab2a1b4704_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6299feb31bb89c1f0e0fe356a732cff2692acf4d9e08bd51c275ae7ccf7281ba = $this->env->getExtension("native_profiler");
        $__internal_6299feb31bb89c1f0e0fe356a732cff2692acf4d9e08bd51c275ae7ccf7281ba->enter($__internal_6299feb31bb89c1f0e0fe356a732cff2692acf4d9e08bd51c275ae7ccf7281ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6299feb31bb89c1f0e0fe356a732cff2692acf4d9e08bd51c275ae7ccf7281ba->leave($__internal_6299feb31bb89c1f0e0fe356a732cff2692acf4d9e08bd51c275ae7ccf7281ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfa19490e25e93e78ffb933e25238cdeccd44e274c04815618a168bd9aa00ce5 = $this->env->getExtension("native_profiler");
        $__internal_bfa19490e25e93e78ffb933e25238cdeccd44e274c04815618a168bd9aa00ce5->enter($__internal_bfa19490e25e93e78ffb933e25238cdeccd44e274c04815618a168bd9aa00ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bfa19490e25e93e78ffb933e25238cdeccd44e274c04815618a168bd9aa00ce5->leave($__internal_bfa19490e25e93e78ffb933e25238cdeccd44e274c04815618a168bd9aa00ce5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1069e6b2bbc389ee0a5a86dd38a0fccd2d947cacf62f907ecffcbe8c32f763d6 = $this->env->getExtension("native_profiler");
        $__internal_1069e6b2bbc389ee0a5a86dd38a0fccd2d947cacf62f907ecffcbe8c32f763d6->enter($__internal_1069e6b2bbc389ee0a5a86dd38a0fccd2d947cacf62f907ecffcbe8c32f763d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1069e6b2bbc389ee0a5a86dd38a0fccd2d947cacf62f907ecffcbe8c32f763d6->leave($__internal_1069e6b2bbc389ee0a5a86dd38a0fccd2d947cacf62f907ecffcbe8c32f763d6_prof);

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
