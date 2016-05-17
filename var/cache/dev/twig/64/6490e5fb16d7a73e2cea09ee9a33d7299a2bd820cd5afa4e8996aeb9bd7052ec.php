<?php

/* PW6StatistiqueBundle::layout.html.twig */
class __TwigTemplate_0d6ff0d31adf9dd0c8a739a0a5315eae9f800b18e5cbd78d6b9b176d73f5e736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6StatistiqueBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'PW6statistique_body' => array($this, 'block_PW6statistique_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7090643558b9008f008f509db9b852c266d1b1689c89d635b26e92a352ae4fa0 = $this->env->getExtension("native_profiler");
        $__internal_7090643558b9008f008f509db9b852c266d1b1689c89d635b26e92a352ae4fa0->enter($__internal_7090643558b9008f008f509db9b852c266d1b1689c89d635b26e92a352ae4fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6StatistiqueBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7090643558b9008f008f509db9b852c266d1b1689c89d635b26e92a352ae4fa0->leave($__internal_7090643558b9008f008f509db9b852c266d1b1689c89d635b26e92a352ae4fa0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42cfc7f78463e8b649e2b73f9db49941de0351df82d09261cd029bcad977921c = $this->env->getExtension("native_profiler");
        $__internal_42cfc7f78463e8b649e2b73f9db49941de0351df82d09261cd029bcad977921c->enter($__internal_42cfc7f78463e8b649e2b73f9db49941de0351df82d09261cd029bcad977921c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Statistique - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_42cfc7f78463e8b649e2b73f9db49941de0351df82d09261cd029bcad977921c->leave($__internal_42cfc7f78463e8b649e2b73f9db49941de0351df82d09261cd029bcad977921c_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_17cc2f8ac997d99addb7a6f5f20f9e7d6e6e45eb88dfbcd78a07046563e2c24d = $this->env->getExtension("native_profiler");
        $__internal_17cc2f8ac997d99addb7a6f5f20f9e7d6e6e45eb88dfbcd78a07046563e2c24d->enter($__internal_17cc2f8ac997d99addb7a6f5f20f9e7d6e6e45eb88dfbcd78a07046563e2c24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <h1>Plateforme des statistiques</h1>
";
        
        $__internal_17cc2f8ac997d99addb7a6f5f20f9e7d6e6e45eb88dfbcd78a07046563e2c24d->leave($__internal_17cc2f8ac997d99addb7a6f5f20f9e7d6e6e45eb88dfbcd78a07046563e2c24d_prof);

    }

    // line 9
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4d2b34256604db99768fc4e2664e9739aa7c93a4206545bfa4bf5a377fc9d6c = $this->env->getExtension("native_profiler");
        $__internal_c4d2b34256604db99768fc4e2664e9739aa7c93a4206545bfa4bf5a377fc9d6c->enter($__internal_c4d2b34256604db99768fc4e2664e9739aa7c93a4206545bfa4bf5a377fc9d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 10
        echo "
    <h3>Les statistiques disponibles</h3>
    <ul>
        <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("pw6_statistique_home");
        echo "\">Accueil</a></li>
    </ul>
";
        
        $__internal_c4d2b34256604db99768fc4e2664e9739aa7c93a4206545bfa4bf5a377fc9d6c->leave($__internal_c4d2b34256604db99768fc4e2664e9739aa7c93a4206545bfa4bf5a377fc9d6c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a9269ef3aa76b2380929d9f0e4dc0f7f9564b5d21c216869eaff19db78beb68 = $this->env->getExtension("native_profiler");
        $__internal_9a9269ef3aa76b2380929d9f0e4dc0f7f9564b5d21c216869eaff19db78beb68->enter($__internal_9a9269ef3aa76b2380929d9f0e4dc0f7f9564b5d21c216869eaff19db78beb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    ";
        $this->displayBlock('PW6statistique_body', $context, $blocks);
        // line 20
        echo "
";
        
        $__internal_9a9269ef3aa76b2380929d9f0e4dc0f7f9564b5d21c216869eaff19db78beb68->leave($__internal_9a9269ef3aa76b2380929d9f0e4dc0f7f9564b5d21c216869eaff19db78beb68_prof);

    }

    // line 19
    public function block_PW6statistique_body($context, array $blocks = array())
    {
        $__internal_b038ca22f52c758d2452c30246dcdeb0418fcb6cd2f50e2313fae6f9efeda565 = $this->env->getExtension("native_profiler");
        $__internal_b038ca22f52c758d2452c30246dcdeb0418fcb6cd2f50e2313fae6f9efeda565->enter($__internal_b038ca22f52c758d2452c30246dcdeb0418fcb6cd2f50e2313fae6f9efeda565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PW6statistique_body"));

        
        $__internal_b038ca22f52c758d2452c30246dcdeb0418fcb6cd2f50e2313fae6f9efeda565->leave($__internal_b038ca22f52c758d2452c30246dcdeb0418fcb6cd2f50e2313fae6f9efeda565_prof);

    }

    public function getTemplateName()
    {
        return "PW6StatistiqueBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 19,  95 => 20,  92 => 19,  86 => 18,  76 => 13,  71 => 10,  65 => 9,  57 => 6,  51 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block title %}Statistique - {{ parent() }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <h1>Plateforme des statistiques</h1>*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/* */
/*     <h3>Les statistiques disponibles</h3>*/
/*     <ul>*/
/*         <li><a href="{{ path('pw6_statistique_home') }}">Accueil</a></li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     {% block PW6statistique_body %}{% endblock %}*/
/* */
/* {% endblock %}*/
/* */
