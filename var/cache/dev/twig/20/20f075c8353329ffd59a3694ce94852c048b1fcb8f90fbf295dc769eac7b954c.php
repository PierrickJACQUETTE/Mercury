<?php

/* PW6FormationBundle::layout.html.twig */
class __TwigTemplate_dc547cd5a407e141346d03a358a86175a30714a47e69471ad6552b950cbaf172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6FormationBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'pw6formation_body' => array($this, 'block_pw6formation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e16d6c9a4181864eb677349cb9d1cabab11fe8c01a881628f047b67fc863f31 = $this->env->getExtension("native_profiler");
        $__internal_6e16d6c9a4181864eb677349cb9d1cabab11fe8c01a881628f047b67fc863f31->enter($__internal_6e16d6c9a4181864eb677349cb9d1cabab11fe8c01a881628f047b67fc863f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e16d6c9a4181864eb677349cb9d1cabab11fe8c01a881628f047b67fc863f31->leave($__internal_6e16d6c9a4181864eb677349cb9d1cabab11fe8c01a881628f047b67fc863f31_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5285b80828109287d184c71218cf9ea34f839cf16bdb31b7af25cbe0ab8f9e3d = $this->env->getExtension("native_profiler");
        $__internal_5285b80828109287d184c71218cf9ea34f839cf16bdb31b7af25cbe0ab8f9e3d->enter($__internal_5285b80828109287d184c71218cf9ea34f839cf16bdb31b7af25cbe0ab8f9e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formations - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_5285b80828109287d184c71218cf9ea34f839cf16bdb31b7af25cbe0ab8f9e3d->leave($__internal_5285b80828109287d184c71218cf9ea34f839cf16bdb31b7af25cbe0ab8f9e3d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_5d9021d0bab2cb81f838683f9a8ceac2113a9d71d2a4c882f3d22eb4bf8baf91 = $this->env->getExtension("native_profiler");
        $__internal_5d9021d0bab2cb81f838683f9a8ceac2113a9d71d2a4c882f3d22eb4bf8baf91->enter($__internal_5d9021d0bab2cb81f838683f9a8ceac2113a9d71d2a4c882f3d22eb4bf8baf91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <h1>Plateforme des Formations</h1>
";
        
        $__internal_5d9021d0bab2cb81f838683f9a8ceac2113a9d71d2a4c882f3d22eb4bf8baf91->leave($__internal_5d9021d0bab2cb81f838683f9a8ceac2113a9d71d2a4c882f3d22eb4bf8baf91_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f8685e2775f812412d02ce6211d2d91b37c7c0505aa90d48443cda6a4469d0b4 = $this->env->getExtension("native_profiler");
        $__internal_f8685e2775f812412d02ce6211d2d91b37c7c0505aa90d48443cda6a4469d0b4->enter($__internal_f8685e2775f812412d02ce6211d2d91b37c7c0505aa90d48443cda6a4469d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "    <h3>Les formations disponibles</h3>
    <ul>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\">Accueil</a></li>
        ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 14
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("pw6_formation_add");
            echo "\">Ajouter une formation</a></li>
        ";
        }
        // line 16
        echo "
    </ul>
    <h4>Dernières formations</h4>
    ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PW6FormationBundle:Advert:menu"));
        echo "
";
        
        $__internal_f8685e2775f812412d02ce6211d2d91b37c7c0505aa90d48443cda6a4469d0b4->leave($__internal_f8685e2775f812412d02ce6211d2d91b37c7c0505aa90d48443cda6a4469d0b4_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_2767ce17c01b8190af451d63cdf1a93c3cff7fdc3bd193c10ff3d823d2a6296d = $this->env->getExtension("native_profiler");
        $__internal_2767ce17c01b8190af451d63cdf1a93c3cff7fdc3bd193c10ff3d823d2a6296d->enter($__internal_2767ce17c01b8190af451d63cdf1a93c3cff7fdc3bd193c10ff3d823d2a6296d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "
    <h1>Formations</h1>
    <h5>Nous sommes le ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h5>
    <hr>
    ";
        // line 28
        $this->displayBlock('pw6formation_body', $context, $blocks);
        // line 29
        echo "
";
        
        $__internal_2767ce17c01b8190af451d63cdf1a93c3cff7fdc3bd193c10ff3d823d2a6296d->leave($__internal_2767ce17c01b8190af451d63cdf1a93c3cff7fdc3bd193c10ff3d823d2a6296d_prof);

    }

    // line 28
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_2aed5fa4c4eb4a88417d2b122f851fd6205c492de36decb5b5528bfa616cb62d = $this->env->getExtension("native_profiler");
        $__internal_2aed5fa4c4eb4a88417d2b122f851fd6205c492de36decb5b5528bfa616cb62d->enter($__internal_2aed5fa4c4eb4a88417d2b122f851fd6205c492de36decb5b5528bfa616cb62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        
        $__internal_2aed5fa4c4eb4a88417d2b122f851fd6205c492de36decb5b5528bfa616cb62d->leave($__internal_2aed5fa4c4eb4a88417d2b122f851fd6205c492de36decb5b5528bfa616cb62d_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 28,  118 => 29,  116 => 28,  111 => 26,  107 => 24,  101 => 23,  92 => 19,  87 => 16,  81 => 14,  79 => 13,  75 => 12,  71 => 10,  65 => 9,  57 => 6,  51 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Formations - {{ parent() }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <h1>Plateforme des Formations</h1>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <h3>Les formations disponibles</h3>*/
/*     <ul>*/
/*         <li><a href="{{ path('pw6_formation_home') }}">Accueil</a></li>*/
/*         {% if is_granted('ROLE_AUTEUR') %}*/
/*             <li><a href="{{ path('pw6_formation_add') }}">Ajouter une formation</a></li>*/
/*         {% endif %}*/
/* */
/*     </ul>*/
/*     <h4>Dernières formations</h4>*/
/*     {{ render(controller('PW6FormationBundle:Advert:menu')) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <h1>Formations</h1>*/
/*     <h5>Nous sommes le {{ 'now'|date('d/m/Y') }}</h5>*/
/*     <hr>*/
/*     {% block pw6formation_body %}{% endblock %}*/
/* */
/* {% endblock %}*/
/* */
