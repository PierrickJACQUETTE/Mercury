<?php

/* PW6RecrutementBundle:Advert:addCandidat.html.twig */
class __TwigTemplate_6680368df563e2779e7458228aa3f11f6f0c7f55024e8236d4491f09770dc9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6RecrutementBundle::layout.html.twig", "PW6RecrutementBundle:Advert:addCandidat.html.twig", 1);
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
        $__internal_d41d83c84258bbd33390e6605ef79b85d3e1d3e56a49bb89990d9944572dba61 = $this->env->getExtension("native_profiler");
        $__internal_d41d83c84258bbd33390e6605ef79b85d3e1d3e56a49bb89990d9944572dba61->enter($__internal_d41d83c84258bbd33390e6605ef79b85d3e1d3e56a49bb89990d9944572dba61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:addCandidat.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41d83c84258bbd33390e6605ef79b85d3e1d3e56a49bb89990d9944572dba61->leave($__internal_d41d83c84258bbd33390e6605ef79b85d3e1d3e56a49bb89990d9944572dba61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d186e1a83c539eaffc02eeb048fc22fa32802e662f7936d41b17ef1a9cf079f = $this->env->getExtension("native_profiler");
        $__internal_6d186e1a83c539eaffc02eeb048fc22fa32802e662f7936d41b17ef1a9cf079f->enter($__internal_6d186e1a83c539eaffc02eeb048fc22fa32802e662f7936d41b17ef1a9cf079f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une candidature - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_6d186e1a83c539eaffc02eeb048fc22fa32802e662f7936d41b17ef1a9cf079f->leave($__internal_6d186e1a83c539eaffc02eeb048fc22fa32802e662f7936d41b17ef1a9cf079f_prof);

    }

    // line 5
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_78e6c4d0c9d4e8309705ba78b891943edeaafc6945f19bc70d91b76dd33bef02 = $this->env->getExtension("native_profiler");
        $__internal_78e6c4d0c9d4e8309705ba78b891943edeaafc6945f19bc70d91b76dd33bef02->enter($__internal_78e6c4d0c9d4e8309705ba78b891943edeaafc6945f19bc70d91b76dd33bef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

        // line 6
        echo "    <h2>Ajouter une candidature</h2>

    ";
        // line 8
        echo twig_include($this->env, $context, "PW6RecrutementBundle:Advert:formAddCandidature.html.twig");
        echo "

    <p>
        Vous êtes sur le point d'ajouter une candidature.
    </p>
";
        
        $__internal_78e6c4d0c9d4e8309705ba78b891943edeaafc6945f19bc70d91b76dd33bef02->leave($__internal_78e6c4d0c9d4e8309705ba78b891943edeaafc6945f19bc70d91b76dd33bef02_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:addCandidat.html.twig";
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
/* {% block title %}Ajouter une candidature - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6recrutement_body %}*/
/*     <h2>Ajouter une candidature</h2>*/
/* */
/*     {{ include('PW6RecrutementBundle:Advert:formAddCandidature.html.twig') }}*/
/* */
/*     <p>*/
/*         Vous êtes sur le point d'ajouter une candidature.*/
/*     </p>*/
/* {% endblock %}*/
/* */
