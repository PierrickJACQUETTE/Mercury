<?php

/* PW6FormationBundle:Advert:delete.html.twig */
class __TwigTemplate_eed73b88b190b35cec1e87f8dda13cc443eba956919aa809bc73ef87d2c5bdc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6FormationBundle::layout.html.twig", "PW6FormationBundle:Advert:delete.html.twig", 1);
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
        $__internal_e9c464564d3c5b379096f22ae1a7017d309771bd116ec4e810da6051a0d1eec1 = $this->env->getExtension("native_profiler");
        $__internal_e9c464564d3c5b379096f22ae1a7017d309771bd116ec4e810da6051a0d1eec1->enter($__internal_e9c464564d3c5b379096f22ae1a7017d309771bd116ec4e810da6051a0d1eec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c464564d3c5b379096f22ae1a7017d309771bd116ec4e810da6051a0d1eec1->leave($__internal_e9c464564d3c5b379096f22ae1a7017d309771bd116ec4e810da6051a0d1eec1_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c974268b8f3b67aa7d4e1b8af8a47d3864df937b4278e8905f50fe9fb7fba74 = $this->env->getExtension("native_profiler");
        $__internal_7c974268b8f3b67aa7d4e1b8af8a47d3864df937b4278e8905f50fe9fb7fba74->enter($__internal_7c974268b8f3b67aa7d4e1b8af8a47d3864df937b4278e8905f50fe9fb7fba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Supprimer une formation -";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_7c974268b8f3b67aa7d4e1b8af8a47d3864df937b4278e8905f50fe9fb7fba74->leave($__internal_7c974268b8f3b67aa7d4e1b8af8a47d3864df937b4278e8905f50fe9fb7fba74_prof);

    }

    // line 3
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_f01e387ad3a15a6f9ac0de6270acc48c76796c2d60490b343b880e8c07814c79 = $this->env->getExtension("native_profiler");
        $__internal_f01e387ad3a15a6f9ac0de6270acc48c76796c2d60490b343b880e8c07814c79->enter($__internal_f01e387ad3a15a6f9ac0de6270acc48c76796c2d60490b343b880e8c07814c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 4
        echo "    <h2>Supprimer une formation</h2>
    <h5>
        Êtes-vous certain de vouloir supprimer l'annnonce suivante ?
    </h5>
    <div class=\"well well-lg\">
        <p>
            Titre : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "
        </p>
        <p>
            Contenu : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
        </p>
    </div>
    <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i>
            Retour à l'annonce
        </a>
        <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\"/>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_f01e387ad3a15a6f9ac0de6270acc48c76796c2d60490b343b880e8c07814c79->leave($__internal_f01e387ad3a15a6f9ac0de6270acc48c76796c2d60490b343b880e8c07814c79_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 22,  78 => 17,  74 => 16,  68 => 13,  62 => 10,  54 => 4,  48 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* {% block title %}Supprimer une formation -{{ parent() }}{% endblock %}*/
/* {% block pw6formation_body %}*/
/*     <h2>Supprimer une formation</h2>*/
/*     <h5>*/
/*         Êtes-vous certain de vouloir supprimer l'annnonce suivante ?*/
/*     </h5>*/
/*     <div class="well well-lg">*/
/*         <p>*/
/*             Titre : {{ advert.title }}*/
/*         </p>*/
/*         <p>*/
/*             Contenu : {{ advert.content }}*/
/*         </p>*/
/*     </div>*/
/*     <form action="{{ path('pw6_formation_delete', {'id': advert.id}) }}" method="post">*/
/*         <a href="{{ path('pw6_formation_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i>*/
/*             Retour à l'annonce*/
/*         </a>*/
/*         <input type="submit" value="Supprimer" class="btn btn-danger"/>*/
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* {% endblock %}*/
/* */
