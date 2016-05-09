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
        $__internal_cfd7c722637069b2003fd9bb7030f187405ff01258203a4982f232060b3eda3b = $this->env->getExtension("native_profiler");
        $__internal_cfd7c722637069b2003fd9bb7030f187405ff01258203a4982f232060b3eda3b->enter($__internal_cfd7c722637069b2003fd9bb7030f187405ff01258203a4982f232060b3eda3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfd7c722637069b2003fd9bb7030f187405ff01258203a4982f232060b3eda3b->leave($__internal_cfd7c722637069b2003fd9bb7030f187405ff01258203a4982f232060b3eda3b_prof);

    }

    // line 3
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_f86f8a5850c46079fd11ee4a9004a15d63d744a64c3d02d293dd9c1c9a3c45e5 = $this->env->getExtension("native_profiler");
        $__internal_f86f8a5850c46079fd11ee4a9004a15d63d744a64c3d02d293dd9c1c9a3c45e5->enter($__internal_f86f8a5850c46079fd11ee4a9004a15d63d744a64c3d02d293dd9c1c9a3c45e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 4
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
    <i>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>
    <div class=\"well\">
        <p>
            ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
        </p>
        <p>
            Requirements : ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "requirements", array()), "html", null, true);
        echo "
        </p>
    </div>

    <p>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i> Modifier cette formation
        </a>
        <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i> Supprimer cette formation
        </a>
    </p>
";
        
        $__internal_f86f8a5850c46079fd11ee4a9004a15d63d744a64c3d02d293dd9c1c9a3c45e5->leave($__internal_f86f8a5850c46079fd11ee4a9004a15d63d744a64c3d02d293dd9c1c9a3c45e5_prof);

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
        return array (  79 => 22,  73 => 19,  67 => 16,  59 => 11,  53 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block pw6formation_body %}*/
/*     <h2>{{ advert.title }}</h2>*/
/*     <i>{{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/*     <div class="well">*/
/*         <p>*/
/*             {{ advert.content }}*/
/*         </p>*/
/*         <p>*/
/*             Requirements : {{ advert.requirements }}*/
/*         </p>*/
/*     </div>*/
/* */
/*     <p>*/
/*         <a href="{{ path('pw6_formation_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i> Retour à la liste*/
/*         </a>*/
/*         <a href="{{ path('pw6_formation_edit', {'id': advert.id }) }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-edit"></i> Modifier cette formation*/
/*         </a>*/
/*         <a href="{{ path('pw6_formation_delete', {'id': advert.id }) }}" class="btn btn-danger">*/
/*             <i class="glyphicon glyphicon-trash"></i> Supprimer cette formation*/
/*         </a>*/
/*     </p>*/
/* {% endblock %}*/
/* */
