<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1f9193fc30b7fb2c86a39546017e877f0e8651f3972c697c14f3a22e860a881f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_08ab15db7bce2fdc8a902f5790e1614710d4b2099ef8020056c3f52d80b04cab = $this->env->getExtension("native_profiler");
        $__internal_08ab15db7bce2fdc8a902f5790e1614710d4b2099ef8020056c3f52d80b04cab->enter($__internal_08ab15db7bce2fdc8a902f5790e1614710d4b2099ef8020056c3f52d80b04cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08ab15db7bce2fdc8a902f5790e1614710d4b2099ef8020056c3f52d80b04cab->leave($__internal_08ab15db7bce2fdc8a902f5790e1614710d4b2099ef8020056c3f52d80b04cab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a856173d093104e36b01021866c02cceddabff8e14ed384182e1220d7af53851 = $this->env->getExtension("native_profiler");
        $__internal_a856173d093104e36b01021866c02cceddabff8e14ed384182e1220d7af53851->enter($__internal_a856173d093104e36b01021866c02cceddabff8e14ed384182e1220d7af53851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a856173d093104e36b01021866c02cceddabff8e14ed384182e1220d7af53851->leave($__internal_a856173d093104e36b01021866c02cceddabff8e14ed384182e1220d7af53851_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5a3b8bca050abe7784d3e724938ab2a8ae1161f37ce4ca010df37afb9f011df5 = $this->env->getExtension("native_profiler");
        $__internal_5a3b8bca050abe7784d3e724938ab2a8ae1161f37ce4ca010df37afb9f011df5->enter($__internal_5a3b8bca050abe7784d3e724938ab2a8ae1161f37ce4ca010df37afb9f011df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5a3b8bca050abe7784d3e724938ab2a8ae1161f37ce4ca010df37afb9f011df5->leave($__internal_5a3b8bca050abe7784d3e724938ab2a8ae1161f37ce4ca010df37afb9f011df5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99ee6477aa8bbf260da2817a25f74545c654c06d69c588573c1001fc6763a0d1 = $this->env->getExtension("native_profiler");
        $__internal_99ee6477aa8bbf260da2817a25f74545c654c06d69c588573c1001fc6763a0d1->enter($__internal_99ee6477aa8bbf260da2817a25f74545c654c06d69c588573c1001fc6763a0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_99ee6477aa8bbf260da2817a25f74545c654c06d69c588573c1001fc6763a0d1->leave($__internal_99ee6477aa8bbf260da2817a25f74545c654c06d69c588573c1001fc6763a0d1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
