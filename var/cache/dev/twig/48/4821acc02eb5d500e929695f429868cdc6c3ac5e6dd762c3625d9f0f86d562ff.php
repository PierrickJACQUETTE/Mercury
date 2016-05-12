<?php

/* PW6UserBundle:Security:login.html.twig */
class __TwigTemplate_a8708945e321fd378bf6ac635ce84e58de358806eef9e2341f496f40ac83b14b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e5720c0345425a916cc28a314cebdf8927a5231a411eb5a8871840ff59caaff = $this->env->getExtension("native_profiler");
        $__internal_8e5720c0345425a916cc28a314cebdf8927a5231a411eb5a8871840ff59caaff->enter($__internal_8e5720c0345425a916cc28a314cebdf8927a5231a411eb5a8871840ff59caaff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e5720c0345425a916cc28a314cebdf8927a5231a411eb5a8871840ff59caaff->leave($__internal_8e5720c0345425a916cc28a314cebdf8927a5231a411eb5a8871840ff59caaff_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d11a56952aa8a04bf0449c84f3bc4f8a64c755bf26a278a44dd51ac1c504ef1 = $this->env->getExtension("native_profiler");
        $__internal_8d11a56952aa8a04bf0449c84f3bc4f8a64c755bf26a278a44dd51ac1c504ef1->enter($__internal_8d11a56952aa8a04bf0449c84f3bc4f8a64c755bf26a278a44dd51ac1c504ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Identifiant</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
        <label for=\"password\">Mot de passe :</label>
        <input type=\"password\" id=\"password\" name=\"_password\"/>
        <br>
        <input type=\"submit\" value=\"Connexion\">
    </form>
";
        
        $__internal_8d11a56952aa8a04bf0449c84f3bc4f8a64c755bf26a278a44dd51ac1c504ef1->leave($__internal_8d11a56952aa8a04bf0449c84f3bc4f8a64c755bf26a278a44dd51ac1c504ef1_prof);

    }

    public function getTemplateName()
    {
        return "PW6UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* {% block body %}*/
/*     {% if error %}*/
/*         <div class="alert alert-danger">{{ error.message }}</div>*/
/*     {% endif %}*/
/*     <form action="{{ path('login_check') }}" method="post">*/
/*         <label for="username">Identifiant</label>*/
/*         <input type="text" id="username" name="_username" value="{{ last_username }}"/>*/
/*         <label for="password">Mot de passe :</label>*/
/*         <input type="password" id="password" name="_password"/>*/
/*         <br>*/
/*         <input type="submit" value="Connexion">*/
/*     </form>*/
/* {% endblock %}*/
/* */
