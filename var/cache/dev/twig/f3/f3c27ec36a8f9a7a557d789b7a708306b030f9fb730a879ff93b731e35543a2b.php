<?php

/* PW6FormationBundle:Advert:edit.html.twig */
class __TwigTemplate_3acd68ccf82dcb3ee434bd4005e9e363d6ca3cb043c913f5d09af43a4de8ad43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6FormationBundle::layout.html.twig", "PW6FormationBundle:Advert:edit.html.twig", 1);
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
        $__internal_181df97d39b4a94fcf5d6d1e546dca72d0735e61dcb9fe11e6d2539e885e5447 = $this->env->getExtension("native_profiler");
        $__internal_181df97d39b4a94fcf5d6d1e546dca72d0735e61dcb9fe11e6d2539e885e5447->enter($__internal_181df97d39b4a94fcf5d6d1e546dca72d0735e61dcb9fe11e6d2539e885e5447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_181df97d39b4a94fcf5d6d1e546dca72d0735e61dcb9fe11e6d2539e885e5447->leave($__internal_181df97d39b4a94fcf5d6d1e546dca72d0735e61dcb9fe11e6d2539e885e5447_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_50713bf03f9e9e2c23a52d1d3f7a0bc858fe23a0f918500afc1f8a227c431251 = $this->env->getExtension("native_profiler");
        $__internal_50713bf03f9e9e2c23a52d1d3f7a0bc858fe23a0f918500afc1f8a227c431251->enter($__internal_50713bf03f9e9e2c23a52d1d3f7a0bc858fe23a0f918500afc1f8a227c431251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_50713bf03f9e9e2c23a52d1d3f7a0bc858fe23a0f918500afc1f8a227c431251->leave($__internal_50713bf03f9e9e2c23a52d1d3f7a0bc858fe23a0f918500afc1f8a227c431251_prof);

    }

    // line 7
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_66e0a713e6bc5566ec7e79d93774e45e39d51171a9246ffda29394b134477961 = $this->env->getExtension("native_profiler");
        $__internal_66e0a713e6bc5566ec7e79d93774e45e39d51171a9246ffda29394b134477961->enter($__internal_66e0a713e6bc5566ec7e79d93774e45e39d51171a9246ffda29394b134477961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 8
        echo "
<h2>Modifier une annonce</h2>

";
        // line 11
        echo twig_include($this->env, $context, "PW6FormationBundle:Advert:form.html.twig");
        echo "

<p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
</p>

<p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i>
        Retour à l'annonce
    </a>
</p>

";
        
        $__internal_66e0a713e6bc5566ec7e79d93774e45e39d51171a9246ffda29394b134477961->leave($__internal_66e0a713e6bc5566ec7e79d93774e45e39d51171a9246ffda29394b134477961_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "PW6FormationBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/* Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block pw6formation_body %}*/
/* */
/* <h2>Modifier une annonce</h2>*/
/* */
/* {{ include("PW6FormationBundle:Advert:form.html.twig") }}*/
/* */
/* <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/* </p>*/
/* */
/* <p>*/
/*     <a href="{{ path('pw6_formation_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i>*/
/*         Retour à l'annonce*/
/*     </a>*/
/* </p>*/
/* */
/* {% endblock %}*/
/* */
