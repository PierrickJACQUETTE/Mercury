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
        $__internal_8b483f8bc6c1189f37fa9c708b7bb261bbde25f6c5fe59ab9ab922e0a89d9237 = $this->env->getExtension("native_profiler");
        $__internal_8b483f8bc6c1189f37fa9c708b7bb261bbde25f6c5fe59ab9ab922e0a89d9237->enter($__internal_8b483f8bc6c1189f37fa9c708b7bb261bbde25f6c5fe59ab9ab922e0a89d9237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b483f8bc6c1189f37fa9c708b7bb261bbde25f6c5fe59ab9ab922e0a89d9237->leave($__internal_8b483f8bc6c1189f37fa9c708b7bb261bbde25f6c5fe59ab9ab922e0a89d9237_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_11d0ec5ec9c0ea58b85a43df358a3cd105ddb699858dc56ce98ada0bed3c0e08 = $this->env->getExtension("native_profiler");
        $__internal_11d0ec5ec9c0ea58b85a43df358a3cd105ddb699858dc56ce98ada0bed3c0e08->enter($__internal_11d0ec5ec9c0ea58b85a43df358a3cd105ddb699858dc56ce98ada0bed3c0e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter une formation - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_11d0ec5ec9c0ea58b85a43df358a3cd105ddb699858dc56ce98ada0bed3c0e08->leave($__internal_11d0ec5ec9c0ea58b85a43df358a3cd105ddb699858dc56ce98ada0bed3c0e08_prof);

    }

    // line 5
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_2fd3f033e299bdd3d1fa5ab7eab99a17df03e0b658ede5eca1b0d95aba2f814a = $this->env->getExtension("native_profiler");
        $__internal_2fd3f033e299bdd3d1fa5ab7eab99a17df03e0b658ede5eca1b0d95aba2f814a->enter($__internal_2fd3f033e299bdd3d1fa5ab7eab99a17df03e0b658ede5eca1b0d95aba2f814a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

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
        
        $__internal_2fd3f033e299bdd3d1fa5ab7eab99a17df03e0b658ede5eca1b0d95aba2f814a->leave($__internal_2fd3f033e299bdd3d1fa5ab7eab99a17df03e0b658ede5eca1b0d95aba2f814a_prof);

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
