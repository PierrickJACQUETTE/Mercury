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
        $__internal_04f42f6519ea9319011110d850a1371c2c2428efbbebea7579ab5b859b05f9d1 = $this->env->getExtension("native_profiler");
        $__internal_04f42f6519ea9319011110d850a1371c2c2428efbbebea7579ab5b859b05f9d1->enter($__internal_04f42f6519ea9319011110d850a1371c2c2428efbbebea7579ab5b859b05f9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04f42f6519ea9319011110d850a1371c2c2428efbbebea7579ab5b859b05f9d1->leave($__internal_04f42f6519ea9319011110d850a1371c2c2428efbbebea7579ab5b859b05f9d1_prof);

    }

    // line 3
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_7d318ca2c241d7397cf71bbd59846b6017efb123e455c37ed496b76c9e83c213 = $this->env->getExtension("native_profiler");
        $__internal_7d318ca2c241d7397cf71bbd59846b6017efb123e455c37ed496b76c9e83c213->enter($__internal_7d318ca2c241d7397cf71bbd59846b6017efb123e455c37ed496b76c9e83c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

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
    <div class=\"well well-lg\">
        <p>
            Contenu : <br><br> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
        </p>
        <br>
        <p>
            Lieu : ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "at", array()), "html", null, true);
        echo "
        </p>
        <p>
            Conditions : ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "requirements", array()), "html", null, true);
        echo "
        </p>
    </div>

    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "        <i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()), "html", null, true);
            echo ", le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</i>
        <div class=\"well well-sm\">
            <p>
                ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "
            </p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "
    <p>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i> Retour à la liste
        </a>
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-edit\"></i> Modifier cette formation
        </a>
        <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
            <i class=\"glyphicon glyphicon-trash\"></i> Supprimer cette formation
        </a>
    </p>
";
        
        $__internal_7d318ca2c241d7397cf71bbd59846b6017efb123e455c37ed496b76c9e83c213->leave($__internal_7d318ca2c241d7397cf71bbd59846b6017efb123e455c37ed496b76c9e83c213_prof);

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
        return array (  112 => 35,  106 => 32,  100 => 29,  96 => 27,  86 => 23,  77 => 20,  73 => 19,  66 => 15,  60 => 12,  53 => 8,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block pw6formation_body %}*/
/*     <h2>{{ advert.title }}</h2>*/
/*     <i>{{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/*     <div class="well well-lg">*/
/*         <p>*/
/*             Contenu : <br><br> {{ advert.content }}*/
/*         </p>*/
/*         <br>*/
/*         <p>*/
/*             Lieu : {{ advert.at }}*/
/*         </p>*/
/*         <p>*/
/*             Conditions : {{ advert.requirements }}*/
/*         </p>*/
/*     </div>*/
/* */
/*     {% for item in listApplications %}*/
/*         <i>{{ item.author }}, le {{ item.date|date('d/m/Y') }}</i>*/
/*         <div class="well well-sm">*/
/*             <p>*/
/*                 {{ item.content }}*/
/*             </p>*/
/*         </div>*/
/*     {% endfor %}*/
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
