<?php

/* PW6RecrutementBundle:Advert:index.html.twig */
class __TwigTemplate_08df6c0d32c24250d9ba9e2d977a5137f6f106ded4123c2b6a57a5861855090a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6RecrutementBundle::layout.html.twig", "PW6RecrutementBundle:Advert:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pw6recrutement_body' => array($this, 'block_pw6recrutement_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6RecrutementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0eb598729ed911321f45e453d884a9b327e57f9c8b26e6b76e5dace1f6bc47e = $this->env->getExtension("native_profiler");
        $__internal_b0eb598729ed911321f45e453d884a9b327e57f9c8b26e6b76e5dace1f6bc47e->enter($__internal_b0eb598729ed911321f45e453d884a9b327e57f9c8b26e6b76e5dace1f6bc47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0eb598729ed911321f45e453d884a9b327e57f9c8b26e6b76e5dace1f6bc47e->leave($__internal_b0eb598729ed911321f45e453d884a9b327e57f9c8b26e6b76e5dace1f6bc47e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bf1e61869a45b2d194325b3cd90a1640e058da63b0d46ff11c3698bcf3ffec4 = $this->env->getExtension("native_profiler");
        $__internal_8bf1e61869a45b2d194325b3cd90a1640e058da63b0d46ff11c3698bcf3ffec4->enter($__internal_8bf1e61869a45b2d194325b3cd90a1640e058da63b0d46ff11c3698bcf3ffec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_8bf1e61869a45b2d194325b3cd90a1640e058da63b0d46ff11c3698bcf3ffec4->leave($__internal_8bf1e61869a45b2d194325b3cd90a1640e058da63b0d46ff11c3698bcf3ffec4_prof);

    }

    // line 5
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_de36690f2ad01e8b3fdcdedc177855d2e486b28df2195df0a21ceffe52f91084 = $this->env->getExtension("native_profiler");
        $__internal_de36690f2ad01e8b3fdcdedc177855d2e486b28df2195df0a21ceffe52f91084->enter($__internal_de36690f2ad01e8b3fdcdedc177855d2e486b28df2195df0a21ceffe52f91084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

        // line 6
        echo "    <h2>Listes des Recrutement</h2>

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pw6_recrutement_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
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
            echo "            <li>Pas de postes disponibles</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
";
        
        $__internal_de36690f2ad01e8b3fdcdedc177855d2e486b28df2195df0a21ceffe52f91084->leave($__internal_de36690f2ad01e8b3fdcdedc177855d2e486b28df2195df0a21ceffe52f91084_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:index.html.twig";
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
/* {% extends 'PW6RecrutementBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Accueil - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6recrutement_body %}*/
/*     <h2>Listes des Recrutement</h2>*/
/* */
/*     <ul>*/
/*         {% for advert in listAdverts %}*/
/*             <li>*/
/*                 <a href="{{ path('pw6_recrutement_view', {'id': advert.id}) }}">*/
/*                     {{ advert.title }}*/
/*                 </a>*/
/*                 par {{ advert.author }},*/
/*                 le {{ advert.date|date('d/m/Y') }}*/
/*                 {% if advert.updatedAt is not null %}, modifiée le {{ advert.updatedAt|date('d/m/Y H:i:s') }}{% endif %}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>Pas de postes disponibles</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
