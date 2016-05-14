<?php

/* default/index.html.twig */
class __TwigTemplate_0bc74f0a6f587441b71769e9d30c7cbf37dcf64c653d94faf0b006230737c734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_406b8c85ffe1d766894a09b4153715a4cd1119b6318f27c09667bfb071441749 = $this->env->getExtension("native_profiler");
        $__internal_406b8c85ffe1d766894a09b4153715a4cd1119b6318f27c09667bfb071441749->enter($__internal_406b8c85ffe1d766894a09b4153715a4cd1119b6318f27c09667bfb071441749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_406b8c85ffe1d766894a09b4153715a4cd1119b6318f27c09667bfb071441749->leave($__internal_406b8c85ffe1d766894a09b4153715a4cd1119b6318f27c09667bfb071441749_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e75bbb7552aba1ec3f35e4d474704b10d0cd0a337ce11bb7ef643dd9ab1a4726 = $this->env->getExtension("native_profiler");
        $__internal_e75bbb7552aba1ec3f35e4d474704b10d0cd0a337ce11bb7ef643dd9ab1a4726->enter($__internal_e75bbb7552aba1ec3f35e4d474704b10d0cd0a337ce11bb7ef643dd9ab1a4726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
  <div class=\"container\">
    <a class=\"navbar-brand\" href=\"#\">Mercury</a>
  </div>
</nav>


<div class=\"jumbotron\">
  <div class=\"container\">
    <h1>Bienvenue !</h1>
    <p>Ceci permet de gerer une partie des ressources humaines</p>
  </div>
</div>

<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-md-3\">
      <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\">
        <h2>Gestion des formations</h2>
        <p>
          Ce module propose un catalogue de formations. La salarié demandé une formation.
          Le supérieur hierarchique crée les formations, valide l'inscription du salarié.
        </p>
      </a>
    </div>
    <div class=\"col-md-3\">
      <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
        <h2>Generation de statistiques</h2>
        <p>
          Ce module permet de voir des statisques sur la base de données par exemple
          connaître la porprotion homme-femme, combien de nouveau employés,
          le nombre de départ à la retraite ....
        </p>
      </a>
    </div>
    <div class=\"col-md-3\">
      <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
        <h2>Gestion des recrutements</h2>
        <p>
          Ce module permet de voir les annonces de postes où l'on recherche quelqu'un.
          Les candidts peuvent poser une candidateur. Les gestionnaires pourrant quant
          à eux voir les candidatures par postes et accepter, refuser ou proposer un entretien
          à chaque candidature.
        </p>
      </a>
    </div>
    <div class=\"col-md-3\">
      <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
        <h2>Chat de discussion</h2>
        <p>
          Ce module permet de generer une discussion et inviter certaines personnes
          pour pouvoir discuter en direct avec certaines personnes de la société.
          Cela vient en substitution au téléphone.
        </p>
      </a>
    </div>
  </div>

</div>

";
        
        $__internal_e75bbb7552aba1ec3f35e4d474704b10d0cd0a337ce11bb7ef643dd9ab1a4726->leave($__internal_e75bbb7552aba1ec3f35e4d474704b10d0cd0a337ce11bb7ef643dd9ab1a4726_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 52,  85 => 41,  72 => 31,  60 => 22,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*   <div class="container">*/
/*     <a class="navbar-brand" href="#">Mercury</a>*/
/*   </div>*/
/* </nav>*/
/* */
/* */
/* <div class="jumbotron">*/
/*   <div class="container">*/
/*     <h1>Bienvenue !</h1>*/
/*     <p>Ceci permet de gerer une partie des ressources humaines</p>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-md-3">*/
/*       <a href="{{ path('pw6_formation_home') }}">*/
/*         <h2>Gestion des formations</h2>*/
/*         <p>*/
/*           Ce module propose un catalogue de formations. La salarié demandé une formation.*/
/*           Le supérieur hierarchique crée les formations, valide l'inscription du salarié.*/
/*         </p>*/
/*       </a>*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*       <a href="{{ path('homepage') }}">*/
/*         <h2>Generation de statistiques</h2>*/
/*         <p>*/
/*           Ce module permet de voir des statisques sur la base de données par exemple*/
/*           connaître la porprotion homme-femme, combien de nouveau employés,*/
/*           le nombre de départ à la retraite ....*/
/*         </p>*/
/*       </a>*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*       <a href="{{ path('homepage') }}">*/
/*         <h2>Gestion des recrutements</h2>*/
/*         <p>*/
/*           Ce module permet de voir les annonces de postes où l'on recherche quelqu'un.*/
/*           Les candidts peuvent poser une candidateur. Les gestionnaires pourrant quant*/
/*           à eux voir les candidatures par postes et accepter, refuser ou proposer un entretien*/
/*           à chaque candidature.*/
/*         </p>*/
/*       </a>*/
/*     </div>*/
/*     <div class="col-md-3">*/
/*       <a href="{{ path('homepage') }}">*/
/*         <h2>Chat de discussion</h2>*/
/*         <p>*/
/*           Ce module permet de generer une discussion et inviter certaines personnes*/
/*           pour pouvoir discuter en direct avec certaines personnes de la société.*/
/*           Cela vient en substitution au téléphone.*/
/*         </p>*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
