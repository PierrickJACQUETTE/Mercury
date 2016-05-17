<?php

/* base.html.twig */
class __TwigTemplate_f4faa3c03963235a57faeb752b735d579ffe4cf835ee183c1b1c67ea675edec6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e1507afc8d1d2ed47c9b03888e51a0c9f0990133d4832bad14ceaac7a9a89a8 = $this->env->getExtension("native_profiler");
        $__internal_8e1507afc8d1d2ed47c9b03888e51a0c9f0990133d4832bad14ceaac7a9a89a8->enter($__internal_8e1507afc8d1d2ed47c9b03888e51a0c9f0990133d4832bad14ceaac7a9a89a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
\t\t";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
\t";
        // line 12
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "    </body>
</html>
";
        
        $__internal_8e1507afc8d1d2ed47c9b03888e51a0c9f0990133d4832bad14ceaac7a9a89a8->leave($__internal_8e1507afc8d1d2ed47c9b03888e51a0c9f0990133d4832bad14ceaac7a9a89a8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fc834b460906875c37700c284bd32cbe3fe063ce4f53c083e0861aa595a5d9b2 = $this->env->getExtension("native_profiler");
        $__internal_fc834b460906875c37700c284bd32cbe3fe063ce4f53c083e0861aa595a5d9b2->enter($__internal_fc834b460906875c37700c284bd32cbe3fe063ce4f53c083e0861aa595a5d9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_fc834b460906875c37700c284bd32cbe3fe063ce4f53c083e0861aa595a5d9b2->leave($__internal_fc834b460906875c37700c284bd32cbe3fe063ce4f53c083e0861aa595a5d9b2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_856fcf27213bef4ddac9a109af2dc8aacec754f0bcfbf783da2c1e68c9e0153c = $this->env->getExtension("native_profiler");
        $__internal_856fcf27213bef4ddac9a109af2dc8aacec754f0bcfbf783da2c1e68c9e0153c->enter($__internal_856fcf27213bef4ddac9a109af2dc8aacec754f0bcfbf783da2c1e68c9e0153c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_856fcf27213bef4ddac9a109af2dc8aacec754f0bcfbf783da2c1e68c9e0153c->leave($__internal_856fcf27213bef4ddac9a109af2dc8aacec754f0bcfbf783da2c1e68c9e0153c_prof);

    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
        $__internal_b7f18c27d620d1a393dfee7a318e7862387f439fe6e419f86c5e64d12ef09558 = $this->env->getExtension("native_profiler");
        $__internal_b7f18c27d620d1a393dfee7a318e7862387f439fe6e419f86c5e64d12ef09558->enter($__internal_b7f18c27d620d1a393dfee7a318e7862387f439fe6e419f86c5e64d12ef09558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 13
        echo "      <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
          <a class=\"navbar-brand\" href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Mercury</a>

          <ul class=\"nav navbar-nav navbar-right\">
            <li>
              <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("signin");
        echo "\">
                <span class=\"glyphicon glyphicon-user\"></span>Inscription
              </a>
            </li>
            <li>
              <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">
                <span class=\"glyphicon glyphicon-log-in\"></span> Connexion
              </a>
            </li>
            <li>
              <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                <span class=\"glyphicon glyphicon-log-out\"></span> Deconnexion
              </a>
            </li>
          </ul>
        </div>
      </nav>
    ";
        
        $__internal_b7f18c27d620d1a393dfee7a318e7862387f439fe6e419f86c5e64d12ef09558->leave($__internal_b7f18c27d620d1a393dfee7a318e7862387f439fe6e419f86c5e64d12ef09558_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_de420052202681bbbbf3f68ef5ea8ce3609a83d9f80e9ee47120941363308296 = $this->env->getExtension("native_profiler");
        $__internal_de420052202681bbbbf3f68ef5ea8ce3609a83d9f80e9ee47120941363308296->enter($__internal_de420052202681bbbbf3f68ef5ea8ce3609a83d9f80e9ee47120941363308296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de420052202681bbbbf3f68ef5ea8ce3609a83d9f80e9ee47120941363308296->leave($__internal_de420052202681bbbbf3f68ef5ea8ce3609a83d9f80e9ee47120941363308296_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4d3bb21dd435f0d09b78f88cf40395d0ca37034fd9ca3c836cf1656c2e134c8a = $this->env->getExtension("native_profiler");
        $__internal_4d3bb21dd435f0d09b78f88cf40395d0ca37034fd9ca3c836cf1656c2e134c8a->enter($__internal_4d3bb21dd435f0d09b78f88cf40395d0ca37034fd9ca3c836cf1656c2e134c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4d3bb21dd435f0d09b78f88cf40395d0ca37034fd9ca3c836cf1656c2e134c8a->leave($__internal_4d3bb21dd435f0d09b78f88cf40395d0ca37034fd9ca3c836cf1656c2e134c8a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 38,  138 => 37,  123 => 29,  115 => 24,  107 => 19,  100 => 15,  96 => 13,  90 => 12,  82 => 8,  76 => 7,  64 => 5,  55 => 39,  52 => 38,  49 => 37,  47 => 12,  43 => 10,  41 => 7,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Mercury{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* 		{% block stylesheets %}*/
/*             <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/* 	{% block nav %}*/
/*       <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*           <a class="navbar-brand" href="{{ path('homepage') }}">Mercury</a>*/
/* */
/*           <ul class="nav navbar-nav navbar-right">*/
/*             <li>*/
/*               <a href="{{ path('signin') }}">*/
/*                 <span class="glyphicon glyphicon-user"></span>Inscription*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('login') }}">*/
/*                 <span class="glyphicon glyphicon-log-in"></span> Connexion*/
/*               </a>*/
/*             </li>*/
/*             <li>*/
/*               <a href="{{ path('logout') }}">*/
/*                 <span class="glyphicon glyphicon-log-out"></span> Deconnexion*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </div>*/
/*       </nav>*/
/*     {% endblock %}*/
/*     {% block body %}{% endblock %}*/
/*     {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
