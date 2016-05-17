<?php

/* PW6UserBundle:Security:login.html.twig */
class __TwigTemplate_d0dc4ec292f9387db79e3411ba1b98f67a8920d643f8545285b63d874ff9764f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6UserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31515c2fc8e8f81e1c454fa233d83e0a578a05fe3ac8f8499f0f9e651b69ff0f = $this->env->getExtension("native_profiler");
        $__internal_31515c2fc8e8f81e1c454fa233d83e0a578a05fe3ac8f8499f0f9e651b69ff0f->enter($__internal_31515c2fc8e8f81e1c454fa233d83e0a578a05fe3ac8f8499f0f9e651b69ff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31515c2fc8e8f81e1c454fa233d83e0a578a05fe3ac8f8499f0f9e651b69ff0f->leave($__internal_31515c2fc8e8f81e1c454fa233d83e0a578a05fe3ac8f8499f0f9e651b69ff0f_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_162a974a99f6ae8a270a67c17a8a5ebc04408aa166eaf17fefc5b20917727b64 = $this->env->getExtension("native_profiler");
        $__internal_162a974a99f6ae8a270a67c17a8a5ebc04408aa166eaf17fefc5b20917727b64->enter($__internal_162a974a99f6ae8a270a67c17a8a5ebc04408aa166eaf17fefc5b20917727b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <h1>Connexion</h1>
";
        
        $__internal_162a974a99f6ae8a270a67c17a8a5ebc04408aa166eaf17fefc5b20917727b64->leave($__internal_162a974a99f6ae8a270a67c17a8a5ebc04408aa166eaf17fefc5b20917727b64_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd3cd846df94b93c66afdfa052a1917d1d623a3aeada7ebcea64f2e932533f6e = $this->env->getExtension("native_profiler");
        $__internal_cd3cd846df94b93c66afdfa052a1917d1d623a3aeada7ebcea64f2e932533f6e->enter($__internal_cd3cd846df94b93c66afdfa052a1917d1d623a3aeada7ebcea64f2e932533f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 11
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-6 well\">
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\">
                <div class=\"row\">
                    <div class=\"form-group col-xs-12 col-md-10 col-md-offset-1\">
                        <label for=\"username\">Login :</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-xs-12 col-md-10 col-md-offset-1\">
                        <label for=\"password\">Password :</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-group col-xs-12 col-md-10 col-md-offset-1\">
                        <input type=\"submit\" value=\"Connexion\" class=\"btn btn-info\"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
";
        
        $__internal_cd3cd846df94b93c66afdfa052a1917d1d623a3aeada7ebcea64f2e932533f6e->leave($__internal_cd3cd846df94b93c66afdfa052a1917d1d623a3aeada7ebcea64f2e932533f6e_prof);

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
        return array (  76 => 18,  69 => 14,  64 => 11,  58 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::layout.html.twig' %}*/
/* */
/* {% block header %}*/
/*     <h1>Connexion</h1>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <div class="col-xs-12 col-md-6 well">*/
/*             <form action="{{ path('login_check') }}" method="post" role="form">*/
/*                 <div class="row">*/
/*                     <div class="form-group col-xs-12 col-md-10 col-md-offset-1">*/
/*                         <label for="username">Login :</label>*/
/*                         <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" />*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="form-group col-xs-12 col-md-10 col-md-offset-1">*/
/*                         <label for="password">Password :</label>*/
/*                         <input type="password" id="password" name="_password" class="form-control"/>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="form-group col-xs-12 col-md-10 col-md-offset-1">*/
/*                         <input type="submit" value="Connexion" class="btn btn-info"/>*/
/*                     </div>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
