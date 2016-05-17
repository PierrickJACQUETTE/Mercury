<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fff8b9871b902bc9e7823ad782bc8fc1102a684fd0d89dfe9421ac55eb5e771d extends Twig_Template
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
        $__internal_2a1fa2e0eded72278896eb964ec954dfae03218adceaffe0089cbd0ea49f7f69 = $this->env->getExtension("native_profiler");
        $__internal_2a1fa2e0eded72278896eb964ec954dfae03218adceaffe0089cbd0ea49f7f69->enter($__internal_2a1fa2e0eded72278896eb964ec954dfae03218adceaffe0089cbd0ea49f7f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a1fa2e0eded72278896eb964ec954dfae03218adceaffe0089cbd0ea49f7f69->leave($__internal_2a1fa2e0eded72278896eb964ec954dfae03218adceaffe0089cbd0ea49f7f69_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bde4e98cd8fb2545f6d50523dcb6fe57b69c7d131810e2aa3b328567742ed58 = $this->env->getExtension("native_profiler");
        $__internal_6bde4e98cd8fb2545f6d50523dcb6fe57b69c7d131810e2aa3b328567742ed58->enter($__internal_6bde4e98cd8fb2545f6d50523dcb6fe57b69c7d131810e2aa3b328567742ed58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bde4e98cd8fb2545f6d50523dcb6fe57b69c7d131810e2aa3b328567742ed58->leave($__internal_6bde4e98cd8fb2545f6d50523dcb6fe57b69c7d131810e2aa3b328567742ed58_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4955861c4e9c6db3bdffca190bd0a146d61560df36ebf844ae622c715bb60061 = $this->env->getExtension("native_profiler");
        $__internal_4955861c4e9c6db3bdffca190bd0a146d61560df36ebf844ae622c715bb60061->enter($__internal_4955861c4e9c6db3bdffca190bd0a146d61560df36ebf844ae622c715bb60061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4955861c4e9c6db3bdffca190bd0a146d61560df36ebf844ae622c715bb60061->leave($__internal_4955861c4e9c6db3bdffca190bd0a146d61560df36ebf844ae622c715bb60061_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73b735723725adee7f71b0a7b0afb56a7e7093de5926daa374d4e812bae9f194 = $this->env->getExtension("native_profiler");
        $__internal_73b735723725adee7f71b0a7b0afb56a7e7093de5926daa374d4e812bae9f194->enter($__internal_73b735723725adee7f71b0a7b0afb56a7e7093de5926daa374d4e812bae9f194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_73b735723725adee7f71b0a7b0afb56a7e7093de5926daa374d4e812bae9f194->leave($__internal_73b735723725adee7f71b0a7b0afb56a7e7093de5926daa374d4e812bae9f194_prof);

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
