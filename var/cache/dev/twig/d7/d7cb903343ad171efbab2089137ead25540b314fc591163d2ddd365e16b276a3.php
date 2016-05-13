<?php

/* PW6FormationBundle:Advert:index.html.twig */
class __TwigTemplate_a957b2507fcbb4d87becb8345a6af6084f8e93e0464337f30ee1daa7d93de2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6FormationBundle::layout.html.twig", "PW6FormationBundle:Advert:index.html.twig", 1);
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
        $__internal_b5057bbdd0fe79729e6e1fdb59241e8f9e258cab4c1bf43e17403dc2591f1cd4 = $this->env->getExtension("native_profiler");
        $__internal_b5057bbdd0fe79729e6e1fdb59241e8f9e258cab4c1bf43e17403dc2591f1cd4->enter($__internal_b5057bbdd0fe79729e6e1fdb59241e8f9e258cab4c1bf43e17403dc2591f1cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5057bbdd0fe79729e6e1fdb59241e8f9e258cab4c1bf43e17403dc2591f1cd4->leave($__internal_b5057bbdd0fe79729e6e1fdb59241e8f9e258cab4c1bf43e17403dc2591f1cd4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_27c39573cfcf1f5ada0f207e8735cad2a20ae2f0ec0759d9a6dcdc6791f1ed6a = $this->env->getExtension("native_profiler");
        $__internal_27c39573cfcf1f5ada0f207e8735cad2a20ae2f0ec0759d9a6dcdc6791f1ed6a->enter($__internal_27c39573cfcf1f5ada0f207e8735cad2a20ae2f0ec0759d9a6dcdc6791f1ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_27c39573cfcf1f5ada0f207e8735cad2a20ae2f0ec0759d9a6dcdc6791f1ed6a->leave($__internal_27c39573cfcf1f5ada0f207e8735cad2a20ae2f0ec0759d9a6dcdc6791f1ed6a_prof);

    }

    // line 5
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_0d1408dbe11e2547b639d76ef980a9a7c8f5694c281f09dc52acc29451b57419 = $this->env->getExtension("native_profiler");
        $__internal_0d1408dbe11e2547b639d76ef980a9a7c8f5694c281f09dc52acc29451b57419->enter($__internal_0d1408dbe11e2547b639d76ef980a9a7c8f5694c281f09dc52acc29451b57419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 6
        echo "    <h2>Listes des formations</h2>

    <ul>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 10
            echo "            <li>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_formation_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
                ";
            // line 16
            if ( !(null === $this->getAttribute($context["advert"], "updatedAt", array()))) {
                echo ", modifiée le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "updatedAt", array()), "d/m/Y H:i:s"), "html", null, true);
            }
            // line 17
            echo "            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "            <li>Pas de formations disponibles</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
";
        
        $__internal_0d1408dbe11e2547b639d76ef980a9a7c8f5694c281f09dc52acc29451b57419->leave($__internal_0d1408dbe11e2547b639d76ef980a9a7c8f5694c281f09dc52acc29451b57419_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  95 => 19,  89 => 17,  84 => 16,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  64 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Accueil - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6formation_body %}*/
/*     <h2>Listes des formations</h2>*/
/* */
/*     <ul>*/
/*         {% for advert in listAdverts %}*/
/*             <li>*/
/*                 <a href="{{ path('pw6_formation_view', {'id': advert.id}) }}">*/
/*                     {{ advert.title }}*/
/*                 </a>*/
/*                 par {{ advert.author }},*/
/*                 le {{ advert.date|date('d/m/Y') }}*/
/*                 {% if advert.updatedAt is not null %}, modifiée le {{ advert.updatedAt|date('d/m/Y H:i:s') }}{% endif %}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>Pas de formations disponibles</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
