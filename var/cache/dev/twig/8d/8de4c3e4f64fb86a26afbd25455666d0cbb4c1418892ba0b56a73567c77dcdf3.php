<?php

/* PW6RecrutementBundle:Advert:view.html.twig */
class __TwigTemplate_a7de2ba84ecacf2231c1c8b72cb689a48bb6861059294a6dadc525414a077bc9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6RecrutementBundle::layout.html.twig", "PW6RecrutementBundle:Advert:view.html.twig", 1);
        $this->blocks = array(
            'pw6recrutement_body' => array($this, 'block_pw6recrutement_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6RecrutementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2437bf1ae6a07855df04c30f66fab55fd982f098a0d6a3690ba7bb738aafb840 = $this->env->getExtension("native_profiler");
        $__internal_2437bf1ae6a07855df04c30f66fab55fd982f098a0d6a3690ba7bb738aafb840->enter($__internal_2437bf1ae6a07855df04c30f66fab55fd982f098a0d6a3690ba7bb738aafb840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2437bf1ae6a07855df04c30f66fab55fd982f098a0d6a3690ba7bb738aafb840->leave($__internal_2437bf1ae6a07855df04c30f66fab55fd982f098a0d6a3690ba7bb738aafb840_prof);

    }

    // line 3
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_d2ea03417afcfd3e8396702736f5b6b85654836c9137d165079ace88cd3d1e22 = $this->env->getExtension("native_profiler");
        $__internal_d2ea03417afcfd3e8396702736f5b6b85654836c9137d165079ace88cd3d1e22->enter($__internal_d2ea03417afcfd3e8396702736f5b6b85654836c9137d165079ace88cd3d1e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

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
        echo $this->env->getExtension('routing')->getPath("pw6_recrutement_home");
        echo "\" class=\"btn btn-default\">
            <i class=\"glyphicon glyphicon-chevron-left\"></i> Retour à la liste
        </a>
        ";
        // line 30
        if ( !(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 31
            echo "          ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRole", array(), "method") == "ROLE_USER")) {
                // line 32
                echo "          <ul>
              ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications")));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
                    // line 34
                    echo "                  <li>
                      par ";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["candidat"], "author", array()), "html", null, true);
                    echo ",
                      le ";
                    // line 36
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["candidat"], "date", array()), "d/m/Y"), "html", null, true);
                    echo "
                      <a href=\"";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/CV/" . $this->getAttribute($context["candidat"], "cv", array()))), "html", null, true);
                    echo "\">View CV</a>
                      <a href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/LDM/" . $this->getAttribute($context["candidat"], "lDM", array()))), "html", null, true);
                    echo "\">View LDM</a>
                  </li>
              ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 41
                    echo "                  <li>Pas de Candidature disponibles</li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          </ul>
          ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if ( !(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 48
            echo "          ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRole", array(), "method") == "ROLE_ADMIN")) {
                // line 49
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_recrutement_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">
                  <i class=\"glyphicon glyphicon-edit\"></i> Modifier ce recrutement
                </a>
                ";
            }
            // line 53
            echo "        ";
        }
        // line 54
        echo "
        ";
        // line 55
        if ((null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 56
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_recrutement_addAnonyme", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-success\">
                <i class=\"glyphicon glyphicon-chevron-right\"></i> Postuler à ce poste
            </a>
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if ( !(null === (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))) {
            // line 62
            echo "          ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getRole", array(), "method") == "ROLE_ADMIN")) {
                // line 63
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_recrutement_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
                  <i class=\"glyphicon glyphicon-trash\"></i> Supprimer  ce recrutement
                </a>
          ";
            }
            // line 67
            echo "        ";
        }
        // line 68
        echo "
    </p>
";
        
        $__internal_d2ea03417afcfd3e8396702736f5b6b85654836c9137d165079ace88cd3d1e22->leave($__internal_d2ea03417afcfd3e8396702736f5b6b85654836c9137d165079ace88cd3d1e22_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 68,  197 => 67,  189 => 63,  186 => 62,  184 => 61,  181 => 60,  173 => 56,  171 => 55,  168 => 54,  165 => 53,  157 => 49,  154 => 48,  152 => 47,  149 => 46,  146 => 45,  142 => 43,  135 => 41,  127 => 38,  123 => 37,  119 => 36,  115 => 35,  112 => 34,  107 => 33,  104 => 32,  101 => 31,  99 => 30,  93 => 27,  85 => 22,  79 => 19,  73 => 16,  67 => 13,  60 => 9,  51 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6RecrutementBundle::layout.html.twig' %}*/
/* */
/* {% block pw6recrutement_body %}*/
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
/*         <a href="{{ path('pw6_recrutement_home') }}" class="btn btn-default">*/
/*             <i class="glyphicon glyphicon-chevron-left"></i> Retour à la liste*/
/*         </a>*/
/*         {% if user is not null %}*/
/*           {% if user.getRole() == 'ROLE_USER' %}*/
/*           <ul>*/
/*               {% for candidat in listApplications %}*/
/*                   <li>*/
/*                       par {{ candidat.author }},*/
/*                       le {{ candidat.date|date('d/m/Y') }}*/
/*                       <a href="{{ asset('uploads/CV/' ~ candidat.cv) }}">View CV</a>*/
/*                       <a href="{{ asset('uploads/LDM/' ~ candidat.lDM) }}">View LDM</a>*/
/*                   </li>*/
/*               {% else %}*/
/*                   <li>Pas de Candidature disponibles</li>*/
/*               {% endfor %}*/
/*           </ul>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if user is not null %}*/
/*           {% if user.getRole() == 'ROLE_ADMIN' %}*/
/*               <a href="{{ path('pw6_recrutement_edit', {'id': advert.id }) }}" class="btn btn-warning">*/
/*                   <i class="glyphicon glyphicon-edit"></i> Modifier ce recrutement*/
/*                 </a>*/
/*                 {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if user is null %}*/
/*             <a href="{{ path('pw6_recrutement_addAnonyme', {'id': advert.id }) }}" class="btn btn-success">*/
/*                 <i class="glyphicon glyphicon-chevron-right"></i> Postuler à ce poste*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         {% if user is not null %}*/
/*           {% if user.getRole() == 'ROLE_ADMIN' %}*/
/*               <a href="{{ path('pw6_recrutement_delete', {'id': advert.id }) }}" class="btn btn-danger">*/
/*                   <i class="glyphicon glyphicon-trash"></i> Supprimer  ce recrutement*/
/*                 </a>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*     </p>*/
/* {% endblock %}*/
/* */
