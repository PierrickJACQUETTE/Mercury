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
        $__internal_0aeb2a7bad8a923ec60fa835f125d9512651d489a5927ef93e048165a4e0e0eb = $this->env->getExtension("native_profiler");
        $__internal_0aeb2a7bad8a923ec60fa835f125d9512651d489a5927ef93e048165a4e0e0eb->enter($__internal_0aeb2a7bad8a923ec60fa835f125d9512651d489a5927ef93e048165a4e0e0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aeb2a7bad8a923ec60fa835f125d9512651d489a5927ef93e048165a4e0e0eb->leave($__internal_0aeb2a7bad8a923ec60fa835f125d9512651d489a5927ef93e048165a4e0e0eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_405f99ed844fa1fb86607552875e6ff5fb66e506b358361762aa576432655b86 = $this->env->getExtension("native_profiler");
        $__internal_405f99ed844fa1fb86607552875e6ff5fb66e506b358361762aa576432655b86->enter($__internal_405f99ed844fa1fb86607552875e6ff5fb66e506b358361762aa576432655b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une formation - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_405f99ed844fa1fb86607552875e6ff5fb66e506b358361762aa576432655b86->leave($__internal_405f99ed844fa1fb86607552875e6ff5fb66e506b358361762aa576432655b86_prof);

    }

    // line 5
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_3a8d40c746fc7b26309d66ee372eac8d6b787ca736b518883ede39a3a067fd4f = $this->env->getExtension("native_profiler");
        $__internal_3a8d40c746fc7b26309d66ee372eac8d6b787ca736b518883ede39a3a067fd4f->enter($__internal_3a8d40c746fc7b26309d66ee372eac8d6b787ca736b518883ede39a3a067fd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 6
        echo "    <h2>Ajouter une formation</h2>

    ";
        // line 8
        echo twig_include($this->env, $context, "PW6FormationBundle:Advert:form.html.view");
        echo "

    <p>
        Vous êtes sur le point d'ajouter une formation, vérifier qu'une formation similaire n'existe pas déjà.
    </p>

    <p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
    </p>
";
        
        $__internal_3a8d40c746fc7b26309d66ee372eac8d6b787ca736b518883ede39a3a067fd4f->leave($__internal_3a8d40c746fc7b26309d66ee372eac8d6b787ca736b518883ede39a3a067fd4f_prof);

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
        return array (  68 => 15,  58 => 8,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Ajouter une formation - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6formation_body %}*/
/*     <h2>Ajouter une formation</h2>*/
/* */
/*     {{ include('PW6FormationBundle:Advert:form.html.view') }}*/
/* */
/*     <p>*/
/*         Vous êtes sur le point d'ajouter une formation, vérifier qu'une formation similaire n'existe pas déjà.*/
/*     </p>*/
/* */
/*     <p>*/
/*         <a href="{{ path('pw6_formation_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à l'annonce*/
/*         </a>*/
/*     </p>*/
/* {% endblock %}*/
/* */
