<?php

/* PW6FormationBundle:Advert:menu.html.twig */
class __TwigTemplate_9a8a0897db6b4c5053bcf0ea2c7caba597aaeec1f618e995cea7d4aab87b33cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b2b3f2402c975a23c0cf03f0494ae78c3c7b6722e8c20e64d71391b52d47734 = $this->env->getExtension("native_profiler");
        $__internal_5b2b3f2402c975a23c0cf03f0494ae78c3c7b6722e8c20e64d71391b52d47734->enter($__internal_5b2b3f2402c975a23c0cf03f0494ae78c3c7b6722e8c20e64d71391b52d47734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:menu.html.twig"));

        // line 1
        echo "<ul class='nav nav-pills nav-stacked'>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 3
            echo "        <li>
            <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>
";
        
        $__internal_5b2b3f2402c975a23c0cf03f0494ae78c3c7b6722e8c20e64d71391b52d47734->leave($__internal_5b2b3f2402c975a23c0cf03f0494ae78c3c7b6722e8c20e64d71391b52d47734_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 9,  36 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <ul class='nav nav-pills nav-stacked'>*/
/*     {% for advert in listAdverts %}*/
/*         <li>*/
/*             <a href="{{ path('pw6_formation_view', {'id': advert.id}) }}">*/
/*                 {{ advert.title }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
