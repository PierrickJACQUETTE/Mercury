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
        $__internal_f172f6d7e68ce4b4fa07a4cafddacf6c1aa7c50584c86a9f53ba8b32cc5499bd = $this->env->getExtension("native_profiler");
        $__internal_f172f6d7e68ce4b4fa07a4cafddacf6c1aa7c50584c86a9f53ba8b32cc5499bd->enter($__internal_f172f6d7e68ce4b4fa07a4cafddacf6c1aa7c50584c86a9f53ba8b32cc5499bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f172f6d7e68ce4b4fa07a4cafddacf6c1aa7c50584c86a9f53ba8b32cc5499bd->leave($__internal_f172f6d7e68ce4b4fa07a4cafddacf6c1aa7c50584c86a9f53ba8b32cc5499bd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a54cad227db2d723760d5be86f297dd8769bb249008e0f2d9d8d4d73768d671 = $this->env->getExtension("native_profiler");
        $__internal_1a54cad227db2d723760d5be86f297dd8769bb249008e0f2d9d8d4d73768d671->enter($__internal_1a54cad227db2d723760d5be86f297dd8769bb249008e0f2d9d8d4d73768d671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_1a54cad227db2d723760d5be86f297dd8769bb249008e0f2d9d8d4d73768d671->leave($__internal_1a54cad227db2d723760d5be86f297dd8769bb249008e0f2d9d8d4d73768d671_prof);

    }

    // line 5
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_e5e0015e9a59c073fb14858ef769a33634080838cebb2dc71f37465ebd1e8044 = $this->env->getExtension("native_profiler");
        $__internal_e5e0015e9a59c073fb14858ef769a33634080838cebb2dc71f37465ebd1e8044->enter($__internal_e5e0015e9a59c073fb14858ef769a33634080838cebb2dc71f37465ebd1e8044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

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
            echo "
                le ";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 18
            echo "            <li>Pas de formations disponibles</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </ul>
";
        
        $__internal_e5e0015e9a59c073fb14858ef769a33634080838cebb2dc71f37465ebd1e8044->leave($__internal_e5e0015e9a59c073fb14858ef769a33634080838cebb2dc71f37465ebd1e8044_prof);

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
        return array (  95 => 20,  88 => 18,  80 => 15,  76 => 14,  71 => 12,  67 => 11,  64 => 10,  59 => 9,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
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
/*                 par {{ advert.author }}*/
/*                 le {{ advert.date|date('d/m/Y') }}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>Pas de formations disponibles</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
