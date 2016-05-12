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
        $__internal_0a512957aaa1390ef56a455a3150dcaf267317ce802b608b537586eaee6dd6d2 = $this->env->getExtension("native_profiler");
        $__internal_0a512957aaa1390ef56a455a3150dcaf267317ce802b608b537586eaee6dd6d2->enter($__internal_0a512957aaa1390ef56a455a3150dcaf267317ce802b608b537586eaee6dd6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a512957aaa1390ef56a455a3150dcaf267317ce802b608b537586eaee6dd6d2->leave($__internal_0a512957aaa1390ef56a455a3150dcaf267317ce802b608b537586eaee6dd6d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f12d1d1633f91bbdf7ed89f791bc6f1f9b192d46dd274998da1480fd75e1f179 = $this->env->getExtension("native_profiler");
        $__internal_f12d1d1633f91bbdf7ed89f791bc6f1f9b192d46dd274998da1480fd75e1f179->enter($__internal_f12d1d1633f91bbdf7ed89f791bc6f1f9b192d46dd274998da1480fd75e1f179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f12d1d1633f91bbdf7ed89f791bc6f1f9b192d46dd274998da1480fd75e1f179->leave($__internal_f12d1d1633f91bbdf7ed89f791bc6f1f9b192d46dd274998da1480fd75e1f179_prof);

    }

    // line 7
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_1311c28812deaff87ab0236b49747b63d7447f91fd4b34c44477ce88489acaa7 = $this->env->getExtension("native_profiler");
        $__internal_1311c28812deaff87ab0236b49747b63d7447f91fd4b34c44477ce88489acaa7->enter($__internal_1311c28812deaff87ab0236b49747b63d7447f91fd4b34c44477ce88489acaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

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
        
        $__internal_1311c28812deaff87ab0236b49747b63d7447f91fd4b34c44477ce88489acaa7->leave($__internal_1311c28812deaff87ab0236b49747b63d7447f91fd4b34c44477ce88489acaa7_prof);

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
