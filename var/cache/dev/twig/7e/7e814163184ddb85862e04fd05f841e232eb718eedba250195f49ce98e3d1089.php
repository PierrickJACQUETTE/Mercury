<?php

/* PW6FormationBundle:Advert:apply.html.twig */
class __TwigTemplate_5f69f2350ce734ad3c5d9a0cfd2366d05c1774bd9e35abbfb52f00900c0bcb8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6FormationBundle::layout.html.twig", "PW6FormationBundle:Advert:apply.html.twig", 1);
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
        $__internal_f21c4f0e2d0158385bb2ef25e8d101babf05d554c6b2db4e98197b94fbe7b4e8 = $this->env->getExtension("native_profiler");
        $__internal_f21c4f0e2d0158385bb2ef25e8d101babf05d554c6b2db4e98197b94fbe7b4e8->enter($__internal_f21c4f0e2d0158385bb2ef25e8d101babf05d554c6b2db4e98197b94fbe7b4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:apply.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f21c4f0e2d0158385bb2ef25e8d101babf05d554c6b2db4e98197b94fbe7b4e8->leave($__internal_f21c4f0e2d0158385bb2ef25e8d101babf05d554c6b2db4e98197b94fbe7b4e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96979c0d216b1a0b339f0357af048e5a178f78466f4826408f2bada375e9dfb8 = $this->env->getExtension("native_profiler");
        $__internal_96979c0d216b1a0b339f0357af048e5a178f78466f4826408f2bada375e9dfb8->enter($__internal_96979c0d216b1a0b339f0357af048e5a178f78466f4826408f2bada375e9dfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Validation - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_96979c0d216b1a0b339f0357af048e5a178f78466f4826408f2bada375e9dfb8->leave($__internal_96979c0d216b1a0b339f0357af048e5a178f78466f4826408f2bada375e9dfb8_prof);

    }

    // line 5
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_6a3c66fb269690770c7aa59432b549c00fb578b4efef0f9cc05801029cb109a1 = $this->env->getExtension("native_profiler");
        $__internal_6a3c66fb269690770c7aa59432b549c00fb578b4efef0f9cc05801029cb109a1->enter($__internal_6a3c66fb269690770c7aa59432b549c00fb578b4efef0f9cc05801029cb109a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        // line 6
        echo "<div class=\"well well-lg\">
    <p>Votre demande a été pris en compte</p>
</div>
<p>
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("pw6_formation_home");
        echo "\" class=\"btn btn-default\">
        <i class=\"glyphicon glyphicon-chevron-left\"></i> Retour à la liste
    </a>
</p>
";
        
        $__internal_6a3c66fb269690770c7aa59432b549c00fb578b4efef0f9cc05801029cb109a1->leave($__internal_6a3c66fb269690770c7aa59432b549c00fb578b4efef0f9cc05801029cb109a1_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:apply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6FormationBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Validation - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6formation_body %}*/
/* <div class="well well-lg">*/
/*     <p>Votre demande a été pris en compte</p>*/
/* </div>*/
/* <p>*/
/*     <a href="{{ path('pw6_formation_home') }}" class="btn btn-default">*/
/*         <i class="glyphicon glyphicon-chevron-left"></i> Retour à la liste*/
/*     </a>*/
/* </p>*/
/* {% endblock %}*/
/* */
