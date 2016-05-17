<?php

/* PW6StatistiqueBundle:Graph:index.html.twig */
class __TwigTemplate_e369ed47c847ea6b4c698b25dddbd81e54e5d7abbc3ca4276ab76e3aaead1651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6StatistiqueBundle::layout.html.twig", "PW6StatistiqueBundle:Graph:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'PW6statistique_body' => array($this, 'block_PW6statistique_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6StatistiqueBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9855538f5eaea5d656c09530ca4f7e7ce2bbb6c4775590636c5f2f517e7eaafa = $this->env->getExtension("native_profiler");
        $__internal_9855538f5eaea5d656c09530ca4f7e7ce2bbb6c4775590636c5f2f517e7eaafa->enter($__internal_9855538f5eaea5d656c09530ca4f7e7ce2bbb6c4775590636c5f2f517e7eaafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6StatistiqueBundle:Graph:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9855538f5eaea5d656c09530ca4f7e7ce2bbb6c4775590636c5f2f517e7eaafa->leave($__internal_9855538f5eaea5d656c09530ca4f7e7ce2bbb6c4775590636c5f2f517e7eaafa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6938b958f4a0d2d9597ae335e501134e8581eddedbdf8be5b2dde121d2bc1a52 = $this->env->getExtension("native_profiler");
        $__internal_6938b958f4a0d2d9597ae335e501134e8581eddedbdf8be5b2dde121d2bc1a52->enter($__internal_6938b958f4a0d2d9597ae335e501134e8581eddedbdf8be5b2dde121d2bc1a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6938b958f4a0d2d9597ae335e501134e8581eddedbdf8be5b2dde121d2bc1a52->leave($__internal_6938b958f4a0d2d9597ae335e501134e8581eddedbdf8be5b2dde121d2bc1a52_prof);

    }

    // line 5
    public function block_PW6statistique_body($context, array $blocks = array())
    {
        $__internal_e9298083ba3b960889404a1bb6c306d8687e9a7fc8a58b7265fe1ed6598dc983 = $this->env->getExtension("native_profiler");
        $__internal_e9298083ba3b960889404a1bb6c306d8687e9a7fc8a58b7265fe1ed6598dc983->enter($__internal_e9298083ba3b960889404a1bb6c306d8687e9a7fc8a58b7265fe1ed6598dc983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PW6statistique_body"));

        // line 6
        echo "    <h2>Listes des Statistique</h2>
    <ul>
      <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_sexe");
        echo "\">Sexe</a></li>
      <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_contrat");
        echo "\">Contrat</a></li>
      <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_age");
        echo "\">Age</a></li>
      <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_salaire");
        echo "\">Salaire</a></li>
    </ul>
";
        
        $__internal_e9298083ba3b960889404a1bb6c306d8687e9a7fc8a58b7265fe1ed6598dc983->leave($__internal_e9298083ba3b960889404a1bb6c306d8687e9a7fc8a58b7265fe1ed6598dc983_prof);

    }

    public function getTemplateName()
    {
        return "PW6StatistiqueBundle:Graph:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  66 => 10,  62 => 9,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6StatistiqueBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Accueil - {{ parent() }}{% endblock %}*/
/* */
/* {% block PW6statistique_body %}*/
/*     <h2>Listes des Statistique</h2>*/
/*     <ul>*/
/*       <li><a href="{{ path('pw6_recrutement_sexe') }}">Sexe</a></li>*/
/*       <li><a href="{{ path('pw6_recrutement_contrat') }}">Contrat</a></li>*/
/*       <li><a href="{{ path('pw6_recrutement_age') }}">Age</a></li>*/
/*       <li><a href="{{ path('pw6_recrutement_salaire') }}">Salaire</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
