<?php

/* PW6RecrutementBundle:Advert:add.html.twig */
class __TwigTemplate_3fbaaec725df83c2c0d6f900ee51e8976a088bf854d34b260561a9b7c9322fb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6RecrutementBundle::layout.html.twig", "PW6RecrutementBundle:Advert:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pw6recrutement_body' => array($this, 'block_pw6recrutement_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6RecrutementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28cb50489f416cbbc49cecacbe684bcd51e4d7fdf3b3ae7b1da5d6fe905af9d4 = $this->env->getExtension("native_profiler");
        $__internal_28cb50489f416cbbc49cecacbe684bcd51e4d7fdf3b3ae7b1da5d6fe905af9d4->enter($__internal_28cb50489f416cbbc49cecacbe684bcd51e4d7fdf3b3ae7b1da5d6fe905af9d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28cb50489f416cbbc49cecacbe684bcd51e4d7fdf3b3ae7b1da5d6fe905af9d4->leave($__internal_28cb50489f416cbbc49cecacbe684bcd51e4d7fdf3b3ae7b1da5d6fe905af9d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a48c124df88a0c7b27bc0232792bbd73472676d5a64e4a012a7a2136c4e4149 = $this->env->getExtension("native_profiler");
        $__internal_6a48c124df88a0c7b27bc0232792bbd73472676d5a64e4a012a7a2136c4e4149->enter($__internal_6a48c124df88a0c7b27bc0232792bbd73472676d5a64e4a012a7a2136c4e4149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un poste - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6a48c124df88a0c7b27bc0232792bbd73472676d5a64e4a012a7a2136c4e4149->leave($__internal_6a48c124df88a0c7b27bc0232792bbd73472676d5a64e4a012a7a2136c4e4149_prof);

    }

    // line 5
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_9b5cfe5364d1f089eb7f65eb7ebf1df8c95614c6e9b83a1b32eebf463813aebb = $this->env->getExtension("native_profiler");
        $__internal_9b5cfe5364d1f089eb7f65eb7ebf1df8c95614c6e9b83a1b32eebf463813aebb->enter($__internal_9b5cfe5364d1f089eb7f65eb7ebf1df8c95614c6e9b83a1b32eebf463813aebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

        // line 6
        echo "    <h2>Ajouter un poste</h2>

    ";
        // line 8
        echo twig_include($this->env, $context, "PW6RecrutementBundle:Advert:form.html.twig");
        echo "

    <p>
        Vous êtes sur le point d'ajouter un poste, vérifier qu'un poste similaire n'existe pas déjà.
    </p>
";
        
        $__internal_9b5cfe5364d1f089eb7f65eb7ebf1df8c95614c6e9b83a1b32eebf463813aebb->leave($__internal_9b5cfe5364d1f089eb7f65eb7ebf1df8c95614c6e9b83a1b32eebf463813aebb_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:add.html.twig";
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
/* {% extends 'PW6RecrutementBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Ajouter un poste - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6recrutement_body %}*/
/*     <h2>Ajouter un poste</h2>*/
/* */
/*     {{ include('PW6RecrutementBundle:Advert:form.html.twig') }}*/
/* */
/*     <p>*/
/*         Vous êtes sur le point d'ajouter un poste, vérifier qu'un poste similaire n'existe pas déjà.*/
/*     </p>*/
/* {% endblock %}*/
/* */
