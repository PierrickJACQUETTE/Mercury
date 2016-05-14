<?php

/* PW6UserBundle:Security:login.html.twig */
class __TwigTemplate_8d2698c3b7696a0197e4819a3896f7369ca87af67c1547b6b474c9e514f177c1 extends Twig_Template
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
        $__internal_fb225560c1b06bc9f3eba8bdf3eda1326d92a9e17c046bb64d15da831347b798 = $this->env->getExtension("native_profiler");
        $__internal_fb225560c1b06bc9f3eba8bdf3eda1326d92a9e17c046bb64d15da831347b798->enter($__internal_fb225560c1b06bc9f3eba8bdf3eda1326d92a9e17c046bb64d15da831347b798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb225560c1b06bc9f3eba8bdf3eda1326d92a9e17c046bb64d15da831347b798->leave($__internal_fb225560c1b06bc9f3eba8bdf3eda1326d92a9e17c046bb64d15da831347b798_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e4230c5f0e3d81dc56365338f9496970705694caba3e14f04d8321ce7d9ac5a = $this->env->getExtension("native_profiler");
        $__internal_0e4230c5f0e3d81dc56365338f9496970705694caba3e14f04d8321ce7d9ac5a->enter($__internal_0e4230c5f0e3d81dc56365338f9496970705694caba3e14f04d8321ce7d9ac5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e4230c5f0e3d81dc56365338f9496970705694caba3e14f04d8321ce7d9ac5a->leave($__internal_0e4230c5f0e3d81dc56365338f9496970705694caba3e14f04d8321ce7d9ac5a_prof);

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
