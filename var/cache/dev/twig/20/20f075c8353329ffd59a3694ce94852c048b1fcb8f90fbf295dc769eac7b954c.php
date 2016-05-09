<?php

/* PW6FormationBundle::layout.html.twig */
class __TwigTemplate_dc547cd5a407e141346d03a358a86175a30714a47e69471ad6552b950cbaf172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6FormationBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'pw6formation_body' => array($this, 'block_pw6formation_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d172e46aec1abe25ce3176032f9f7c7747d3149cc144bd337a3744fd3cbff74 = $this->env->getExtension("native_profiler");
        $__internal_2d172e46aec1abe25ce3176032f9f7c7747d3149cc144bd337a3744fd3cbff74->enter($__internal_2d172e46aec1abe25ce3176032f9f7c7747d3149cc144bd337a3744fd3cbff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d172e46aec1abe25ce3176032f9f7c7747d3149cc144bd337a3744fd3cbff74->leave($__internal_2d172e46aec1abe25ce3176032f9f7c7747d3149cc144bd337a3744fd3cbff74_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43769b7a822f8e6bb69cfa35a85879e9bfe87bc48d9c213ac21a4e75734634ce = $this->env->getExtension("native_profiler");
        $__internal_43769b7a822f8e6bb69cfa35a85879e9bfe87bc48d9c213ac21a4e75734634ce->enter($__internal_43769b7a822f8e6bb69cfa35a85879e9bfe87bc48d9c213ac21a4e75734634ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formations - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_43769b7a822f8e6bb69cfa35a85879e9bfe87bc48d9c213ac21a4e75734634ce->leave($__internal_43769b7a822f8e6bb69cfa35a85879e9bfe87bc48d9c213ac21a4e75734634ce_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eb91fa92371186482d1659dbfe0c491a4f3da299b47574d025d584e7ddaeacf = $this->env->getExtension("native_profiler");
        $__internal_5eb91fa92371186482d1659dbfe0c491a4f3da299b47574d025d584e7ddaeacf->enter($__internal_5eb91fa92371186482d1659dbfe0c491a4f3da299b47574d025d584e7ddaeacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Formations</h1>
    <hr>
    ";
        // line 9
        $this->displayBlock('pw6formation_body', $context, $blocks);
        // line 10
        echo "
";
        
        $__internal_5eb91fa92371186482d1659dbfe0c491a4f3da299b47574d025d584e7ddaeacf->leave($__internal_5eb91fa92371186482d1659dbfe0c491a4f3da299b47574d025d584e7ddaeacf_prof);

    }

    // line 9
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_427b071a299ab30f207f19d3f119f2309748057ddadcade1da2c681116dbc4bc = $this->env->getExtension("native_profiler");
        $__internal_427b071a299ab30f207f19d3f119f2309748057ddadcade1da2c681116dbc4bc->enter($__internal_427b071a299ab30f207f19d3f119f2309748057ddadcade1da2c681116dbc4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        
        $__internal_427b071a299ab30f207f19d3f119f2309748057ddadcade1da2c681116dbc4bc->leave($__internal_427b071a299ab30f207f19d3f119f2309748057ddadcade1da2c681116dbc4bc_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  62 => 10,  60 => 9,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Formations - {{ parent() }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Formations</h1>*/
/*     <hr>*/
/*     {% block pw6formation_body %}{% endblock %}*/
/* */
/* {% endblock %}*/
/* */
