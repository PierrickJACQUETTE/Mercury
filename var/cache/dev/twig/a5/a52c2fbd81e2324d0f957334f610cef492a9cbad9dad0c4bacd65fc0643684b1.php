<?php

/* PW6FormationBundle:Advert:view.html.twig */
class __TwigTemplate_56afd26ba6ca11d0f2cd7038bc73ecbdfb75b73e3d170851a7ce507c6690ef5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6FormationBundle::layout.html.twig", "PW6FormationBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'pw6formation_body' => array($this, 'block_pw6formation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6FormationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93ffa654082d68b6d407a0bc4022f26ba59147ee920444b1f01337f1421d1a6c = $this->env->getExtension("native_profiler");
        $__internal_93ffa654082d68b6d407a0bc4022f26ba59147ee920444b1f01337f1421d1a6c->enter($__internal_93ffa654082d68b6d407a0bc4022f26ba59147ee920444b1f01337f1421d1a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93ffa654082d68b6d407a0bc4022f26ba59147ee920444b1f01337f1421d1a6c->leave($__internal_93ffa654082d68b6d407a0bc4022f26ba59147ee920444b1f01337f1421d1a6c_prof);

    }

    // line 3
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_c09b090fa4a59b7a8f8e92d139d801fd6a4965baa907d3a0e7d965d4c8c65de2 = $this->env->getExtension("native_profiler");
        $__internal_c09b090fa4a59b7a8f8e92d139d801fd6a4965baa907d3a0e7d965d4c8c65de2->enter($__internal_c09b090fa4a59b7a8f8e92d139d801fd6a4965baa907d3a0e7d965d4c8c65de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y H:i:s"), "html", null, true);
        echo "
        ";
        // line 6
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "updatedAt", array()))) {
            echo ", modifiée le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
        }
        echo "</i>
    <div class=\"well well-lg\">
        <p>
            Contenu : <br><br> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
        </p>
        <br>
        <p>
            Responsable : ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "responsable", array()), "html", null, true);
        echo "
        </p>
        <p>
            Lieu : ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "at", array()), "html", null, true);
        echo "
        </p>
        <p>
            Conditions : ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "requirements", array()), "html", null, true);
        echo "
        </p>
        <p>
            Temps (jours) : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "time", array()), "html", null, true);
        echo "
        </p>
    </div>

    <p>
        <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i> Retour à la liste
        </a>
        ";
        // line 30
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 31
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">
                <i class=\"glyphicon glyphicon-edit\"></i> Modifier cette formation
            </a>
        ";
        }
        // line 35
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 36
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_apply", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">
                <i class=\"glyphicon glyphicon-chevron-right\"></i> Appliquer à cette formation
            </a>
        ";
        }
        // line 40
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("ROLE_AUTEUR")) {
            // line 41
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">
                <i class=\"glyphicon glyphicon-trash\"></i> Supprimer cette formation
            </a>
        ";
        }
        // line 45
        echo "    </p>
";
        
        $__internal_c09b090fa4a59b7a8f8e92d139d801fd6a4965baa907d3a0e7d965d4c8c65de2->leave($__internal_c09b090fa4a59b7a8f8e92d139d801fd6a4965baa907d3a0e7d965d4c8c65de2_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 45,  123 => 41,  120 => 40,  112 => 36,  109 => 35,  101 => 31,  99 => 30,  93 => 27,  85 => 22,  79 => 19,  73 => 16,  67 => 13,  60 => 9,  51 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block pw6formation_body %}*/
/*     <h2>{{ advert.title }}</h2>*/
/*     <i>{{ advert.author }}, le {{ advert.date|date('d/m/Y H:i:s') }}*/
/*         {% if advert.updatedAt is not null %}, modifiée le {{ advert.updatedAt|date('d/m/Y H:i:s') }}{% endif %}</i>*/
/*     <div class="well well-lg">*/
/*         <p>*/
/*             Contenu : <br><br> {{ advert.content }}*/
/*         </p>*/
/*         <br>*/
/*         <p>*/
/*             Responsable : {{ advert.responsable }}*/
/*         </p>*/
/*         <p>*/
/*             Lieu : {{ advert.at }}*/
/*         </p>*/
/*         <p>*/
/*             Conditions : {{ advert.requirements }}*/
/*         </p>*/
/*         <p>*/
/*             Temps (jours) : {{ advert.time }}*/
/*         </p>*/
/*     </div>*/
/* */
/*     <p>*/
/*         <a href="{{ path('pw6_formation_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i> Retour à la liste*/
/*         </a>*/
/*         {% if is_granted('ROLE_AUTEUR') %}*/
/*             <a href="{{ path('pw6_formation_edit', {'id': advert.id }) }}" class="btn btn-warning">*/
/*                 <i class="glyphicon glyphicon-edit"></i> Modifier cette formation*/
/*             </a>*/
/*         {% endif %}*/
/*         {% if is_granted('ROLE_USER') %}*/
/*             <a href="{{ path('pw6_formation_apply', {'id': advert.id }) }}" class="btn btn-success">*/
/*                 <i class="glyphicon glyphicon-chevron-right"></i> Appliquer à cette formation*/
/*             </a>*/
/*         {% endif %}*/
/*         {% if is_granted('ROLE_AUTEUR') %}*/
/*             <a href="{{ path('pw6_formation_delete', {'id': advert.id }) }}" class="btn btn-danger">*/
/*                 <i class="glyphicon glyphicon-trash"></i> Supprimer cette formation*/
/*             </a>*/
/*         {% endif %}*/
/*     </p>*/
/* {% endblock %}*/
/* */
