<?php

/* default/index.html.twig */
class __TwigTemplate_3b18b18aaaea34ae1cd0291cd40519a846ab8dfba778e7ea891e4f5684477f03 extends Twig_Template
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
        $__internal_82f4f7c9201633af1d0e3af8c8ac9b0522034101887b8fb549a36b3cc4f8c9cd = $this->env->getExtension("native_profiler");
        $__internal_82f4f7c9201633af1d0e3af8c8ac9b0522034101887b8fb549a36b3cc4f8c9cd->enter($__internal_82f4f7c9201633af1d0e3af8c8ac9b0522034101887b8fb549a36b3cc4f8c9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f4f7c9201633af1d0e3af8c8ac9b0522034101887b8fb549a36b3cc4f8c9cd->leave($__internal_82f4f7c9201633af1d0e3af8c8ac9b0522034101887b8fb549a36b3cc4f8c9cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3be8c28bcf3a2ffda4a2e6f4a8177922172bb7118634ac408e4ba79672aa4ca0 = $this->env->getExtension("native_profiler");
        $__internal_3be8c28bcf3a2ffda4a2e6f4a8177922172bb7118634ac408e4ba79672aa4ca0->enter($__internal_3be8c28bcf3a2ffda4a2e6f4a8177922172bb7118634ac408e4ba79672aa4ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



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
        // line 18
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
        // line 27
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
        // line 37
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_home");
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
        <h2>Chat de discussion (indisponible)</h2>
        <p>
          Ce module permet de generer une discussion et inviter certaines personnes
          pour pouvoir discuter en direct avec certaines personnes de la société.
          Cela vient en substitution au téléphone.

          <br><br>

          Ce module n'est pas disponible directement, veuillez vous placer dans le répertoire Tchat,
          lancer la commande 'node serveur.js' puis allez sur la page index.html .
          Ceci est dut au fait qu'il nous a été impossible de charger ce tchat NodeJS sur Symfony.
          Désolé du dérangement.
        </p>
      </a>
    </div>
  </div>

</div>

";
        
        $__internal_3be8c28bcf3a2ffda4a2e6f4a8177922172bb7118634ac408e4ba79672aa4ca0->leave($__internal_3be8c28bcf3a2ffda4a2e6f4a8177922172bb7118634ac408e4ba79672aa4ca0_prof);

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
        return array (  95 => 48,  81 => 37,  68 => 27,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
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
/*       <a href="{{ path('pw6_recrutement_home') }}">*/
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
/*         <h2>Chat de discussion (indisponible)</h2>*/
/*         <p>*/
/*           Ce module permet de generer une discussion et inviter certaines personnes*/
/*           pour pouvoir discuter en direct avec certaines personnes de la société.*/
/*           Cela vient en substitution au téléphone.*/
/* */
/*           <br><br>*/
/* */
/*           Ce module n'est pas disponible directement, veuillez vous placer dans le répertoire Tchat,*/
/*           lancer la commande 'node serveur.js' puis allez sur la page index.html .*/
/*           Ceci est dut au fait qu'il nous a été impossible de charger ce tchat NodeJS sur Symfony.*/
/*           Désolé du dérangement.*/
/*         </p>*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
