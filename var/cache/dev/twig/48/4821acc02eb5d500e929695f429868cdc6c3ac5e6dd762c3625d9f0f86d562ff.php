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
        $__internal_bb4e7b2ae76ad7fe84baeaac9d59b9d1e589a9614de990c6aa017ff2ea1b5b6c = $this->env->getExtension("native_profiler");
        $__internal_bb4e7b2ae76ad7fe84baeaac9d59b9d1e589a9614de990c6aa017ff2ea1b5b6c->enter($__internal_bb4e7b2ae76ad7fe84baeaac9d59b9d1e589a9614de990c6aa017ff2ea1b5b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4e7b2ae76ad7fe84baeaac9d59b9d1e589a9614de990c6aa017ff2ea1b5b6c->leave($__internal_bb4e7b2ae76ad7fe84baeaac9d59b9d1e589a9614de990c6aa017ff2ea1b5b6c_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_117d4e7367bf950ecde83ceff040bd2754af9478f50fba363a64b92078261d73 = $this->env->getExtension("native_profiler");
        $__internal_117d4e7367bf950ecde83ceff040bd2754af9478f50fba363a64b92078261d73->enter($__internal_117d4e7367bf950ecde83ceff040bd2754af9478f50fba363a64b92078261d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "    <h1>Connexion</h1>
";
        
        $__internal_117d4e7367bf950ecde83ceff040bd2754af9478f50fba363a64b92078261d73->leave($__internal_117d4e7367bf950ecde83ceff040bd2754af9478f50fba363a64b92078261d73_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a88ece0b76137f86cdda51610be4b6a7e761ccf0f6a67d45a78dbd101003dc = $this->env->getExtension("native_profiler");
        $__internal_f5a88ece0b76137f86cdda51610be4b6a7e761ccf0f6a67d45a78dbd101003dc->enter($__internal_f5a88ece0b76137f86cdda51610be4b6a7e761ccf0f6a67d45a78dbd101003dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
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
        
        $__internal_f5a88ece0b76137f86cdda51610be4b6a7e761ccf0f6a67d45a78dbd101003dc->leave($__internal_f5a88ece0b76137f86cdda51610be4b6a7e761ccf0f6a67d45a78dbd101003dc_prof);

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
/*     <div class="alert alert-danger">{{ error.message }}</div>*/
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
