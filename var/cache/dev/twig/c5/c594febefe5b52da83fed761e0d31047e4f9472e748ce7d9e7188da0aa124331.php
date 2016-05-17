<?php

/* PW6RecrutementBundle::layout.html.twig */
class __TwigTemplate_151fbfb4b69f92e2f13d16a674db7f9b63800fab5c00348de6337e8b9c987b59 extends Twig_Template
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
        $__internal_e291f24b1b609803120da846922bada834f6d0f6c3e6b2ff88dfbeeb630277b1 = $this->env->getExtension("native_profiler");
        $__internal_e291f24b1b609803120da846922bada834f6d0f6c3e6b2ff88dfbeeb630277b1->enter($__internal_e291f24b1b609803120da846922bada834f6d0f6c3e6b2ff88dfbeeb630277b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e291f24b1b609803120da846922bada834f6d0f6c3e6b2ff88dfbeeb630277b1->leave($__internal_e291f24b1b609803120da846922bada834f6d0f6c3e6b2ff88dfbeeb630277b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f95d783cf71668ade78e17ac7d17147fba1e50d063ae28a16f741b7753129a54 = $this->env->getExtension("native_profiler");
        $__internal_f95d783cf71668ade78e17ac7d17147fba1e50d063ae28a16f741b7753129a54->enter($__internal_f95d783cf71668ade78e17ac7d17147fba1e50d063ae28a16f741b7753129a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Recrutement - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_f95d783cf71668ade78e17ac7d17147fba1e50d063ae28a16f741b7753129a54->leave($__internal_f95d783cf71668ade78e17ac7d17147fba1e50d063ae28a16f741b7753129a54_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_26dc52904f3988eddf8fe9791f586b37029f45a2868cb858310a548e556036c9 = $this->env->getExtension("native_profiler");
        $__internal_26dc52904f3988eddf8fe9791f586b37029f45a2868cb858310a548e556036c9->enter($__internal_26dc52904f3988eddf8fe9791f586b37029f45a2868cb858310a548e556036c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <h1>Plateforme des Recrutements</h1>
";
        
        $__internal_26dc52904f3988eddf8fe9791f586b37029f45a2868cb858310a548e556036c9->leave($__internal_26dc52904f3988eddf8fe9791f586b37029f45a2868cb858310a548e556036c9_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5ac0ef5a55a959681cc0f0f25f93bd59cf763b3ecc8862df140f2e4ec2c24343 = $this->env->getExtension("native_profiler");
        $__internal_5ac0ef5a55a959681cc0f0f25f93bd59cf763b3ecc8862df140f2e4ec2c24343->enter($__internal_5ac0ef5a55a959681cc0f0f25f93bd59cf763b3ecc8862df140f2e4ec2c24343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        echo "
    <h3>Les recrutements disponibles</h3>
    <ul>
        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_home");
        echo "\">Accueil</a></li>
        ";
        // line 20
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 21
            echo "          ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getRole", array(), "method") == "ROLE_ADMIN")) {
                // line 22
                echo "              <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("pw6_recrutement_add");
                echo "\">Ajouter un poste</a></li>
          ";
            }
            // line 24
            echo "        ";
        }
        // line 25
        echo "    </ul>
    <h4>Dernières annonces</h4>
    ";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PW6RecrutementBundle:Recrutement:menu"));
        echo "
";
        
        $__internal_5ac0ef5a55a959681cc0f0f25f93bd59cf763b3ecc8862df140f2e4ec2c24343->leave($__internal_5ac0ef5a55a959681cc0f0f25f93bd59cf763b3ecc8862df140f2e4ec2c24343_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_562e5b8ef71563fc93062b4acdbc25888058c531721218a828dd15df4263054f = $this->env->getExtension("native_profiler");
        $__internal_562e5b8ef71563fc93062b4acdbc25888058c531721218a828dd15df4263054f->enter($__internal_562e5b8ef71563fc93062b4acdbc25888058c531721218a828dd15df4263054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "
    <h1>Recrutement</h1>
    <h5>Nous sommes le ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h5>
    <hr>
    ";
        // line 36
        $this->displayBlock('pw6recrutement_body', $context, $blocks);
        // line 37
        echo "    ";
        $this->displayBlock('pw6gestionnaire_body', $context, $blocks);
        // line 38
        echo "
";
        
        $__internal_562e5b8ef71563fc93062b4acdbc25888058c531721218a828dd15df4263054f->leave($__internal_562e5b8ef71563fc93062b4acdbc25888058c531721218a828dd15df4263054f_prof);

    }

    // line 36
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_868b40143624a16df9439fd5e154fabf9816f0cde4b159e5283723c34859855b = $this->env->getExtension("native_profiler");
        $__internal_868b40143624a16df9439fd5e154fabf9816f0cde4b159e5283723c34859855b->enter($__internal_868b40143624a16df9439fd5e154fabf9816f0cde4b159e5283723c34859855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

        
        $__internal_868b40143624a16df9439fd5e154fabf9816f0cde4b159e5283723c34859855b->leave($__internal_868b40143624a16df9439fd5e154fabf9816f0cde4b159e5283723c34859855b_prof);

    }

    // line 37
    public function block_pw6gestionnaire_body($context, array $blocks = array())
    {
        $__internal_58b649938e6952608dc477ec23a7c2da9751cba72e47e66efdeeb5e596d7015b = $this->env->getExtension("native_profiler");
        $__internal_58b649938e6952608dc477ec23a7c2da9751cba72e47e66efdeeb5e596d7015b->enter($__internal_58b649938e6952608dc477ec23a7c2da9751cba72e47e66efdeeb5e596d7015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6gestionnaire_body"));

        
        $__internal_58b649938e6952608dc477ec23a7c2da9751cba72e47e66efdeeb5e596d7015b->leave($__internal_58b649938e6952608dc477ec23a7c2da9751cba72e47e66efdeeb5e596d7015b_prof);

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
        return array (  162 => 37,  151 => 36,  143 => 38,  140 => 37,  138 => 36,  133 => 34,  129 => 32,  123 => 31,  114 => 27,  110 => 25,  107 => 24,  101 => 22,  98 => 21,  96 => 20,  92 => 19,  87 => 16,  80 => 13,  77 => 12,  75 => 11,  72 => 10,  66 => 9,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
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
