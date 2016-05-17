<?php

/* PW6RecrutementBundle:Advert:gestionCandidat.html.twig */
class __TwigTemplate_1e6a83d1057c47769874e3fa42396b1b85fb231aff314c4cd3190a0494119c25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6RecrutementBundle::layout.html.twig", "PW6RecrutementBundle:Advert:gestionCandidat.html.twig", 1);
        $this->blocks = array(
            'pw6gestionnaire_body' => array($this, 'block_pw6gestionnaire_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6RecrutementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1fc09efa00444291dd039aad148eeb6f2573317a508cebcf017df6be9aaa8f9 = $this->env->getExtension("native_profiler");
        $__internal_e1fc09efa00444291dd039aad148eeb6f2573317a508cebcf017df6be9aaa8f9->enter($__internal_e1fc09efa00444291dd039aad148eeb6f2573317a508cebcf017df6be9aaa8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:gestionCandidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1fc09efa00444291dd039aad148eeb6f2573317a508cebcf017df6be9aaa8f9->leave($__internal_e1fc09efa00444291dd039aad148eeb6f2573317a508cebcf017df6be9aaa8f9_prof);

    }

    // line 3
    public function block_pw6gestionnaire_body($context, array $blocks = array())
    {
        $__internal_3c4218bd66b62f1e9374abf0e9d51669227ac797af0611742e8ec6cf39e1a2ef = $this->env->getExtension("native_profiler");
        $__internal_3c4218bd66b62f1e9374abf0e9d51669227ac797af0611742e8ec6cf39e1a2ef->enter($__internal_3c4218bd66b62f1e9374abf0e9d51669227ac797af0611742e8ec6cf39e1a2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6gestionnaire_body"));

        // line 4
        echo "
<h2>Listes des mes Recrutement</h2>
<ul>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 8
            echo "        <li>
            <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_recrutement_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
            </a>
            par ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
            le ";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            ";
            // line 14
            if ( !(null === $this->getAttribute($context["advert"], "updatedAt", array()))) {
                echo ", modifiée le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            // line 15
            echo "        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <li>Pas d'annonces de postes en tant que gestionnaire</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "</ul>

";
        
        $__internal_3c4218bd66b62f1e9374abf0e9d51669227ac797af0611742e8ec6cf39e1a2ef->leave($__internal_3c4218bd66b62f1e9374abf0e9d51669227ac797af0611742e8ec6cf39e1a2ef_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:gestionCandidat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  81 => 17,  75 => 15,  70 => 14,  66 => 13,  62 => 12,  57 => 10,  53 => 9,  50 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6RecrutementBundle::layout.html.twig' %}*/
/* */
/* {% block pw6gestionnaire_body %}*/
/* */
/* <h2>Listes des mes Recrutement</h2>*/
/* <ul>*/
/*     {% for advert in listAdverts %}*/
/*         <li>*/
/*             <a href="{{ path('pw6_recrutement_view', {'id': advert.id}) }}">*/
/*                 {{ advert.title }}*/
/*             </a>*/
/*             par {{ advert.author }},*/
/*             le {{ advert.date|date('d/m/Y') }}*/
/*             {% if advert.updatedAt is not null %}, modifiée le {{ advert.updatedAt|date('d/m/Y H:i:s') }}{% endif %}*/
/*         </li>*/
/*     {% else %}*/
/*         <li>Pas d'annonces de postes en tant que gestionnaire</li>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
