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
        $__internal_8ddb3d8c130c7fbe23f19af6b9ac3e58d0a0dc05038673b0c1ccddf7cb1c22e0 = $this->env->getExtension("native_profiler");
        $__internal_8ddb3d8c130c7fbe23f19af6b9ac3e58d0a0dc05038673b0c1ccddf7cb1c22e0->enter($__internal_8ddb3d8c130c7fbe23f19af6b9ac3e58d0a0dc05038673b0c1ccddf7cb1c22e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddb3d8c130c7fbe23f19af6b9ac3e58d0a0dc05038673b0c1ccddf7cb1c22e0->leave($__internal_8ddb3d8c130c7fbe23f19af6b9ac3e58d0a0dc05038673b0c1ccddf7cb1c22e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a35397e096223bd2f427c6a9347aa53afe4881f67b10b5cee1e3e320f3651794 = $this->env->getExtension("native_profiler");
        $__internal_a35397e096223bd2f427c6a9347aa53afe4881f67b10b5cee1e3e320f3651794->enter($__internal_a35397e096223bd2f427c6a9347aa53afe4881f67b10b5cee1e3e320f3651794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Formations - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_a35397e096223bd2f427c6a9347aa53afe4881f67b10b5cee1e3e320f3651794->leave($__internal_a35397e096223bd2f427c6a9347aa53afe4881f67b10b5cee1e3e320f3651794_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_85e278f80f2b0b3d2b2127b7bb579cb466e6fa0be1078a6bab5967e2991102f8 = $this->env->getExtension("native_profiler");
        $__internal_85e278f80f2b0b3d2b2127b7bb579cb466e6fa0be1078a6bab5967e2991102f8->enter($__internal_85e278f80f2b0b3d2b2127b7bb579cb466e6fa0be1078a6bab5967e2991102f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85e278f80f2b0b3d2b2127b7bb579cb466e6fa0be1078a6bab5967e2991102f8->leave($__internal_85e278f80f2b0b3d2b2127b7bb579cb466e6fa0be1078a6bab5967e2991102f8_prof);

    }

    // line 9
    public function block_pw6formation_body($context, array $blocks = array())
    {
        $__internal_9d183bb31644586b27de448c4537c46fe09087b3d6ec9f934647fe7712b6aa67 = $this->env->getExtension("native_profiler");
        $__internal_9d183bb31644586b27de448c4537c46fe09087b3d6ec9f934647fe7712b6aa67->enter($__internal_9d183bb31644586b27de448c4537c46fe09087b3d6ec9f934647fe7712b6aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6formation_body"));

        
        $__internal_9d183bb31644586b27de448c4537c46fe09087b3d6ec9f934647fe7712b6aa67->leave($__internal_9d183bb31644586b27de448c4537c46fe09087b3d6ec9f934647fe7712b6aa67_prof);

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
