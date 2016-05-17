<?php

/* base.html.twig */
class __TwigTemplate_4c932af2f7ca058db464c5f122b4fcc9a2d9fab612043c6484ba8d9119b8383b extends Twig_Template
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
        $__internal_ccb7717e1ff159cde7676df892196b4ea26b9ec35bb44d8fc1e3ae3a5e8ffa27 = $this->env->getExtension("native_profiler");
        $__internal_ccb7717e1ff159cde7676df892196b4ea26b9ec35bb44d8fc1e3ae3a5e8ffa27->enter($__internal_ccb7717e1ff159cde7676df892196b4ea26b9ec35bb44d8fc1e3ae3a5e8ffa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ccb7717e1ff159cde7676df892196b4ea26b9ec35bb44d8fc1e3ae3a5e8ffa27->leave($__internal_ccb7717e1ff159cde7676df892196b4ea26b9ec35bb44d8fc1e3ae3a5e8ffa27_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_361837f8b89919ee47bae9b2546b281c5ddfbe2f1504b3c11f18faf4a6322039 = $this->env->getExtension("native_profiler");
        $__internal_361837f8b89919ee47bae9b2546b281c5ddfbe2f1504b3c11f18faf4a6322039->enter($__internal_361837f8b89919ee47bae9b2546b281c5ddfbe2f1504b3c11f18faf4a6322039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mercury";
        
        $__internal_361837f8b89919ee47bae9b2546b281c5ddfbe2f1504b3c11f18faf4a6322039->leave($__internal_361837f8b89919ee47bae9b2546b281c5ddfbe2f1504b3c11f18faf4a6322039_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_094cfc33d8044f7f3cf5066d2a46659e78224583f4b19498817c5bfd091a85be = $this->env->getExtension("native_profiler");
        $__internal_094cfc33d8044f7f3cf5066d2a46659e78224583f4b19498817c5bfd091a85be->enter($__internal_094cfc33d8044f7f3cf5066d2a46659e78224583f4b19498817c5bfd091a85be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_094cfc33d8044f7f3cf5066d2a46659e78224583f4b19498817c5bfd091a85be->leave($__internal_094cfc33d8044f7f3cf5066d2a46659e78224583f4b19498817c5bfd091a85be_prof);

    }

    // line 12
    public function block_nav($context, array $blocks = array())
    {
        $__internal_a109d4b2515c3f29c2549368d5ec4803465a641d8b261cc75cb4d91599ef0b27 = $this->env->getExtension("native_profiler");
        $__internal_a109d4b2515c3f29c2549368d5ec4803465a641d8b261cc75cb4d91599ef0b27->enter($__internal_a109d4b2515c3f29c2549368d5ec4803465a641d8b261cc75cb4d91599ef0b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        
        $__internal_a109d4b2515c3f29c2549368d5ec4803465a641d8b261cc75cb4d91599ef0b27->leave($__internal_a109d4b2515c3f29c2549368d5ec4803465a641d8b261cc75cb4d91599ef0b27_prof);

    }

    // line 37
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49ca325ef836be560225801b47a5b9abe8dc137e6cabdd5d3ed9221d0d2e2ab = $this->env->getExtension("native_profiler");
        $__internal_b49ca325ef836be560225801b47a5b9abe8dc137e6cabdd5d3ed9221d0d2e2ab->enter($__internal_b49ca325ef836be560225801b47a5b9abe8dc137e6cabdd5d3ed9221d0d2e2ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b49ca325ef836be560225801b47a5b9abe8dc137e6cabdd5d3ed9221d0d2e2ab->leave($__internal_b49ca325ef836be560225801b47a5b9abe8dc137e6cabdd5d3ed9221d0d2e2ab_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c55945f04978bca91830d7d5525bb8c8145a28dbc1513457fffb2cfa9dcacb0 = $this->env->getExtension("native_profiler");
        $__internal_6c55945f04978bca91830d7d5525bb8c8145a28dbc1513457fffb2cfa9dcacb0->enter($__internal_6c55945f04978bca91830d7d5525bb8c8145a28dbc1513457fffb2cfa9dcacb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6c55945f04978bca91830d7d5525bb8c8145a28dbc1513457fffb2cfa9dcacb0->leave($__internal_6c55945f04978bca91830d7d5525bb8c8145a28dbc1513457fffb2cfa9dcacb0_prof);

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
