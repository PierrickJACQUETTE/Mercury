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
            'boby' => array($this, 'block_boby'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6FormationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80c80457795f0ba8e535811016e1220dc373d4fdae3b6997413fd2666061649f = $this->env->getExtension("native_profiler");
        $__internal_80c80457795f0ba8e535811016e1220dc373d4fdae3b6997413fd2666061649f->enter($__internal_80c80457795f0ba8e535811016e1220dc373d4fdae3b6997413fd2666061649f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c80457795f0ba8e535811016e1220dc373d4fdae3b6997413fd2666061649f->leave($__internal_80c80457795f0ba8e535811016e1220dc373d4fdae3b6997413fd2666061649f_prof);

    }

    // line 3
    public function block_boby($context, array $blocks = array())
    {
        $__internal_8daac2652c00b4b85cdd980260d74d431fe6b7302547fd5401198105ad57edf8 = $this->env->getExtension("native_profiler");
        $__internal_8daac2652c00b4b85cdd980260d74d431fe6b7302547fd5401198105ad57edf8->enter($__internal_8daac2652c00b4b85cdd980260d74d431fe6b7302547fd5401198105ad57edf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boby"));

        // line 4
        echo "    <h2>Ajouter une Formation</h2>

    ";
        // line 6
        echo twig_include($this->env, $context, "PW6FormationBundle:Advert;form.html.twig");
        echo "

    <p>
        Attention : cette formation sera ajoutée directement sur la page d'accueil
        après validation du formulaire.
    </p>

";
        
        $__internal_8daac2652c00b4b85cdd980260d74d431fe6b7302547fd5401198105ad57edf8->leave($__internal_8daac2652c00b4b85cdd980260d74d431fe6b7302547fd5401198105ad57edf8_prof);

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
        return array (  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block boby %}*/
/*     <h2>Ajouter une Formation</h2>*/
/* */
/*     {{ include('PW6FormationBundle:Advert;form.html.twig') }}*/
/* */
/*     <p>*/
/*         Attention : cette formation sera ajoutée directement sur la page d'accueil*/
/*         après validation du formulaire.*/
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
