<?php

/* PW6RecrutementBundle:Advert:menu.html.twig */
class __TwigTemplate_75dd2798213ae4d3859aa0e877115faf8451ef2cda0a07762c237cacbbbe6c2d extends Twig_Template
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
        $__internal_17d6f47f1b34c72bb6263edf33d188b887cfe2dc8a407d4344160d058783813e = $this->env->getExtension("native_profiler");
        $__internal_17d6f47f1b34c72bb6263edf33d188b887cfe2dc8a407d4344160d058783813e->enter($__internal_17d6f47f1b34c72bb6263edf33d188b887cfe2dc8a407d4344160d058783813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:menu.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_recrutement_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
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
        
        $__internal_17d6f47f1b34c72bb6263edf33d188b887cfe2dc8a407d4344160d058783813e->leave($__internal_17d6f47f1b34c72bb6263edf33d188b887cfe2dc8a407d4344160d058783813e_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:menu.html.twig";
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
/*             <a href="{{ path('pw6_recrutement_view', {'id': advert.id}) }}">*/
/*                 {{ advert.title }}*/
/*             </a>*/
/*         </li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
