<?php

/* PW6FormationBundle:Advert:add.html.twig */
class __TwigTemplate_a4aeb311f1f4cc5cfe6654f451743b83f08645a7fca5280e743e2f13e9079a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6FormationBundle::layout.html.twig", "PW6FormationBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pw6formation_body' => array($this, 'block_pw6formation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6FormationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebb35d55e5bbbb8b57b6f327617a6b1660fc67023f8eb43361cdc6d41397a399 = $this->env->getExtension("native_profiler");
        $__internal_ebb35d55e5bbbb8b57b6f327617a6b1660fc67023f8eb43361cdc6d41397a399->enter($__internal_ebb35d55e5bbbb8b57b6f327617a6b1660fc67023f8eb43361cdc6d41397a399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb35d55e5bbbb8b57b6f327617a6b1660fc67023f8eb43361cdc6d41397a399->leave($__internal_ebb35d55e5bbbb8b57b6f327617a6b1660fc67023f8eb43361cdc6d41397a399_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d6cd39e735684cc43161c03365f60aa043237aeec865e049d2db2a4b770da41 = $this->env->getExtension("native_profiler");
        $__internal_4d6cd39e735684cc43161c03365f60aa043237aeec865e049d2db2a4b770da41->enter($__internal_4d6cd39e735684cc43161c03365f60aa043237aeec865e049d2db2a4b770da41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une formation - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_4d6cd39e735684cc43161c03365f60aa043237aeec865e049d2db2a4b770da41->leave($__internal_4d6cd39e735684cc43161c03365f60aa043237aeec865e049d2db2a4b770da41_prof);

    }

    // line 5
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_8165f2bb8caab8d8c7fb1c352523d4075a0b406a428cb1d571796d4e91584ecd = $this->env->getExtension("native_profiler");
        $__internal_8165f2bb8caab8d8c7fb1c352523d4075a0b406a428cb1d571796d4e91584ecd->enter($__internal_8165f2bb8caab8d8c7fb1c352523d4075a0b406a428cb1d571796d4e91584ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 6
        echo "    <h2>Ajouter une formation</h2>

    ";
        // line 8
        echo twig_include($this->env, $context, "PW6FormationBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous êtes sur le point d'ajouter une formation, vérifier qu'une formation similaire n'existe pas déjà.
    </p>
";
        
        $__internal_8165f2bb8caab8d8c7fb1c352523d4075a0b406a428cb1d571796d4e91584ecd->leave($__internal_8165f2bb8caab8d8c7fb1c352523d4075a0b406a428cb1d571796d4e91584ecd_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Ajouter une formation - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6formation_body %}*/
/*     <h2>Ajouter une formation</h2>*/
/* */
/*     {{ include('PW6FormationBundle:Advert:form.html.twig') }}*/
/* */
/*     <p>*/
/*         Vous êtes sur le point d'ajouter une formation, vérifier qu'une formation similaire n'existe pas déjà.*/
/*     </p>*/
/* {% endblock %}*/
/* */
