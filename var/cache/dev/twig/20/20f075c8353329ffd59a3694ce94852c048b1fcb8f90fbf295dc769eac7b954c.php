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
        $__internal_6723db40955b4de7468a4fb49027925949c10116aa3f6844d241d0e7164380ab = $this->env->getExtension("native_profiler");
        $__internal_6723db40955b4de7468a4fb49027925949c10116aa3f6844d241d0e7164380ab->enter($__internal_6723db40955b4de7468a4fb49027925949c10116aa3f6844d241d0e7164380ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6723db40955b4de7468a4fb49027925949c10116aa3f6844d241d0e7164380ab->leave($__internal_6723db40955b4de7468a4fb49027925949c10116aa3f6844d241d0e7164380ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a68168e6c8d4d81f9bdd074292a6cec5874e00b20131df92dc2df6d7730911db = $this->env->getExtension("native_profiler");
        $__internal_a68168e6c8d4d81f9bdd074292a6cec5874e00b20131df92dc2df6d7730911db->enter($__internal_a68168e6c8d4d81f9bdd074292a6cec5874e00b20131df92dc2df6d7730911db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formations - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a68168e6c8d4d81f9bdd074292a6cec5874e00b20131df92dc2df6d7730911db->leave($__internal_a68168e6c8d4d81f9bdd074292a6cec5874e00b20131df92dc2df6d7730911db_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c888fc2f9d705d8455b6c5b0c9cca59270ed84e1d60e22ba08ace578d620016e = $this->env->getExtension("native_profiler");
        $__internal_c888fc2f9d705d8455b6c5b0c9cca59270ed84e1d60e22ba08ace578d620016e->enter($__internal_c888fc2f9d705d8455b6c5b0c9cca59270ed84e1d60e22ba08ace578d620016e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Formations</h1>
    <h5>Nous sommes le ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</h5>
    <hr>
    ";
        // line 10
        $this->displayBlock('pw6formation_body', $context, $blocks);
        // line 11
        echo "
";
        
        $__internal_c888fc2f9d705d8455b6c5b0c9cca59270ed84e1d60e22ba08ace578d620016e->leave($__internal_c888fc2f9d705d8455b6c5b0c9cca59270ed84e1d60e22ba08ace578d620016e_prof);

    }

    // line 10
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_1dd5dcfc8d632376a1d0d9f0c23895a17b4d11027503d02b140f61feef6c90c5 = $this->env->getExtension("native_profiler");
        $__internal_1dd5dcfc8d632376a1d0d9f0c23895a17b4d11027503d02b140f61feef6c90c5->enter($__internal_1dd5dcfc8d632376a1d0d9f0c23895a17b4d11027503d02b140f61feef6c90c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        
        $__internal_1dd5dcfc8d632376a1d0d9f0c23895a17b4d11027503d02b140f61feef6c90c5->leave($__internal_1dd5dcfc8d632376a1d0d9f0c23895a17b4d11027503d02b140f61feef6c90c5_prof);

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
        return array (  74 => 10,  66 => 11,  64 => 10,  59 => 8,  55 => 6,  49 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Formations - {{ parent() }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Formations</h1>*/
/*     <h5>Nous sommes le {{ 'now'|date('d/m/Y') }}</h5>*/
/*     <hr>*/
/*     {% block pw6formation_body %}{% endblock %}*/
/* */
/* {% endblock %}*/
/* */
