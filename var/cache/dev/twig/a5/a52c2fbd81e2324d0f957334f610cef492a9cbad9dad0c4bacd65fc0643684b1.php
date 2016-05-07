<?php

/* PW6FormationBundle:Advert:view.html.twig */
class __TwigTemplate_56afd26ba6ca11d0f2cd7038bc73ecbdfb75b73e3d170851a7ce507c6690ef5d extends Twig_Template
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
        $__internal_6a13c4ee0d47a9b80b69156c3a78e46054d1840c6402dd5389f7ec9cf0928efa = $this->env->getExtension("native_profiler");
        $__internal_6a13c4ee0d47a9b80b69156c3a78e46054d1840c6402dd5389f7ec9cf0928efa->enter($__internal_6a13c4ee0d47a9b80b69156c3a78e46054d1840c6402dd5389f7ec9cf0928efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:view.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Affichage de la formation ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Formation n°";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
        <div>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "            <p>
                Message flash : ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        <p>
            Merde
        </p>
    </body>
</html>
";
        
        $__internal_6a13c4ee0d47a9b80b69156c3a78e46054d1840c6402dd5389f7ec9cf0928efa->leave($__internal_6a13c4ee0d47a9b80b69156c3a78e46054d1840c6402dd5389f7ec9cf0928efa_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  46 => 12,  43 => 11,  39 => 10,  34 => 8,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <title>Affichage de la formation {{ id }}</title>*/
/*     </head>*/
/*     <body>*/
/*         <h1>Formation n°{{ id }}</h1>*/
/*         <div>*/
/*             {% for message in app.session.flashbag.get('info') %}*/
/*             <p>*/
/*                 Message flash : {{ message }}*/
/*             </p>*/
/*             {% endfor %}*/
/*         </div>*/
/*         <p>*/
/*             Merde*/
/*         </p>*/
/*     </body>*/
/* </html>*/
/* */
