<?php

/* PW6RecrutementBundle::layout.html.twig */
class __TwigTemplate_a57cf558acae60c1283955f8cb3220182964f65074fbcd53ff392a909dd721ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6RecrutementBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'pw6recrutement_body' => array($this, 'block_pw6recrutement_body'),
            'pw6gestionnaire_body' => array($this, 'block_pw6gestionnaire_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61a109dab6bbd92ccca8adcf8be6c2133b83f3a4602568bd5096e340034759f6 = $this->env->getExtension("native_profiler");
        $__internal_61a109dab6bbd92ccca8adcf8be6c2133b83f3a4602568bd5096e340034759f6->enter($__internal_61a109dab6bbd92ccca8adcf8be6c2133b83f3a4602568bd5096e340034759f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61a109dab6bbd92ccca8adcf8be6c2133b83f3a4602568bd5096e340034759f6->leave($__internal_61a109dab6bbd92ccca8adcf8be6c2133b83f3a4602568bd5096e340034759f6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a7744ec66724880fa4d3ec0eec9469a976e14c70028fd0e7b66390559fdc57f = $this->env->getExtension("native_profiler");
        $__internal_8a7744ec66724880fa4d3ec0eec9469a976e14c70028fd0e7b66390559fdc57f->enter($__internal_8a7744ec66724880fa4d3ec0eec9469a976e14c70028fd0e7b66390559fdc57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recrutement - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_8a7744ec66724880fa4d3ec0eec9469a976e14c70028fd0e7b66390559fdc57f->leave($__internal_8a7744ec66724880fa4d3ec0eec9469a976e14c70028fd0e7b66390559fdc57f_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_3414710ff5c9e0db8e687ef2f61f7e73bf240847c7564d7d20df9c174ebf7d59 = $this->env->getExtension("native_profiler");
        $__internal_3414710ff5c9e0db8e687ef2f61f7e73bf240847c7564d7d20df9c174ebf7d59->enter($__internal_3414710ff5c9e0db8e687ef2f61f7e73bf240847c7564d7d20df9c174ebf7d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <h1>Plateforme des Recrutements</h1>
";
        
        $__internal_3414710ff5c9e0db8e687ef2f61f7e73bf240847c7564d7d20df9c174ebf7d59->leave($__internal_3414710ff5c9e0db8e687ef2f61f7e73bf240847c7564d7d20df9c174ebf7d59_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_289a957a080b383b9ae374f6e515690603a23fc1e4d2dcda10312648e252b291 = $this->env->getExtension("native_profiler");
        $__internal_289a957a080b383b9ae374f6e515690603a23fc1e4d2dcda10312648e252b291->enter($__internal_289a957a080b383b9ae374f6e515690603a23fc1e4d2dcda10312648e252b291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "
";
        // line 11
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 12
            echo "  ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getRole", array(), "method") == "ROLE_USER")) {
                // line 13
                echo "      <a href=\"";
                echo $this->env->getExtension('routing')->getPath("pw6_recrutement_gestionCandidat");
                echo "\">Voir ses annonces de gestionnaire</a>
    ";
            }
        }
        // line 16
        echo " <a href=\"";
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_graph");
        echo "\">GRAPH</a>

    <h3>Les recrutements disponibles</h3>
    <ul>
        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_home");
        echo "\">Accueil</a></li>
        ";
        // line 21
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 22
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getRole", array(), "method") == "ROLE_ADMIN")) {
                // line 23
                echo "              <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("pw6_recrutement_add");
                echo "\">Ajouter un poste</a></li>
          ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "    </ul>
    <h4>Dernières annonces</h4>
    ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PW6RecrutementBundle:Recrutement:menu"));
        echo "
";
        
        $__internal_289a957a080b383b9ae374f6e515690603a23fc1e4d2dcda10312648e252b291->leave($__internal_289a957a080b383b9ae374f6e515690603a23fc1e4d2dcda10312648e252b291_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8daa8780ceebad9138f5c743cbce1e6438fb341b2f5f12c175cbf851c8837f4 = $this->env->getExtension("native_profiler");
        $__internal_c8daa8780ceebad9138f5c743cbce1e6438fb341b2f5f12c175cbf851c8837f4->enter($__internal_c8daa8780ceebad9138f5c743cbce1e6438fb341b2f5f12c175cbf851c8837f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "
    <h1>Recrutement</h1>
    <h5>Nous sommes le ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h5>
    <hr>
    ";
        // line 37
        $this->displayBlock('pw6recrutement_body', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('pw6gestionnaire_body', $context, $blocks);
        // line 39
        echo "
";
        
        $__internal_c8daa8780ceebad9138f5c743cbce1e6438fb341b2f5f12c175cbf851c8837f4->leave($__internal_c8daa8780ceebad9138f5c743cbce1e6438fb341b2f5f12c175cbf851c8837f4_prof);

    }

    // line 37
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_f6af346efba8fba5bd24322bd771eded9de49d6fb083146bd899ca4dcacd011f = $this->env->getExtension("native_profiler");
        $__internal_f6af346efba8fba5bd24322bd771eded9de49d6fb083146bd899ca4dcacd011f->enter($__internal_f6af346efba8fba5bd24322bd771eded9de49d6fb083146bd899ca4dcacd011f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

        
        $__internal_f6af346efba8fba5bd24322bd771eded9de49d6fb083146bd899ca4dcacd011f->leave($__internal_f6af346efba8fba5bd24322bd771eded9de49d6fb083146bd899ca4dcacd011f_prof);

    }

    // line 38
    public function block_pw6gestionnaire_body($context, array $blocks = array())
    {
        $__internal_74af8f49f9966d86ea5e9cc70e49f786cb554d34d875ba971ca634e729727f82 = $this->env->getExtension("native_profiler");
        $__internal_74af8f49f9966d86ea5e9cc70e49f786cb554d34d875ba971ca634e729727f82->enter($__internal_74af8f49f9966d86ea5e9cc70e49f786cb554d34d875ba971ca634e729727f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6gestionnaire_body"));

        
        $__internal_74af8f49f9966d86ea5e9cc70e49f786cb554d34d875ba971ca634e729727f82->leave($__internal_74af8f49f9966d86ea5e9cc70e49f786cb554d34d875ba971ca634e729727f82_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 38,  154 => 37,  146 => 39,  143 => 38,  141 => 37,  136 => 35,  132 => 33,  126 => 32,  117 => 28,  113 => 26,  110 => 25,  104 => 23,  101 => 22,  99 => 21,  95 => 20,  87 => 16,  80 => 13,  77 => 12,  75 => 11,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Recrutement - {{ parent() }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <h1>Plateforme des Recrutements</h1>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* */
/* {% if app.user is not null %}*/
/*   {% if app.user.getRole() == 'ROLE_USER' %}*/
/*       <a href="{{ path('pw6_recrutement_gestionCandidat') }}">Voir ses annonces de gestionnaire</a>*/
/*     {% endif %}*/
/* {% endif %}*/
/*  <a href="{{ path('pw6_recrutement_graph') }}">GRAPH</a>*/
/* */
/*     <h3>Les recrutements disponibles</h3>*/
/*     <ul>*/
/*         <li><a href="{{ path('pw6_recrutement_home') }}">Accueil</a></li>*/
/*         {% if app.user is not null %}*/
/*           {% if app.user.getRole() == 'ROLE_ADMIN' %}*/
/*               <li><a href="{{ path('pw6_recrutement_add') }}">Ajouter un poste</a></li>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*     </ul>*/
/*     <h4>Dernières annonces</h4>*/
/*     {{ render(controller('PW6RecrutementBundle:Recrutement:menu')) }}*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*     <h1>Recrutement</h1>*/
/*     <h5>Nous sommes le {{ 'now'|date('d/m/Y') }}</h5>*/
/*     <hr>*/
/*     {% block pw6recrutement_body %}{% endblock %}*/
/*     {% block pw6gestionnaire_body %}{% endblock %}*/
/* */
/* {% endblock %}*/
/* */
