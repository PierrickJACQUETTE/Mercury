<?php

/* PW6FormationBundle:Advert:index.html.twig */
class __TwigTemplate_a957b2507fcbb4d87becb8345a6af6084f8e93e0464337f30ee1daa7d93de2b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca402160fab72c9b47eb92cac64228b3ab84d732eda032b33c41f987cc6e5e71 = $this->env->getExtension("native_profiler");
        $__internal_ca402160fab72c9b47eb92cac64228b3ab84d732eda032b33c41f987cc6e5e71->enter($__internal_ca402160fab72c9b47eb92cac64228b3ab84d732eda032b33c41f987cc6e5e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>MFG Center</title>
    </head>
    <body>
        <h1>Bienvenue ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "</h1>
        <h2>sur le Gestionnaire des Formations de Mercury</h2>
        <p>
            Bientôt vous pourrez accéder au catalogue des formations proposées.
        </p>
    </body>
</html>
";
        
        $__internal_ca402160fab72c9b47eb92cac64228b3ab84d732eda032b33c41f987cc6e5e71->leave($__internal_ca402160fab72c9b47eb92cac64228b3ab84d732eda032b33c41f987cc6e5e71_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>MFG Center</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Bienvenue {{ nom }}</h1>*/
/*         <h2>sur le Gestionnaire des Formations de Mercury</h2>*/
/*         <p>*/
/*             Bientôt vous pourrez accéder au catalogue des formations proposées.*/
/*         </p>*/
/*     </body>*/
/* </html>*/
/* */
