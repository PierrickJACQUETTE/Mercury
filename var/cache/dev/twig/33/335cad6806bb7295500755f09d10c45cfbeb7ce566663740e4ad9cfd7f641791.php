<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_bce115fbef8b876e1063fa929331d796b9f0a30928900c33e25b4380f410aead extends Twig_Template
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
        $__internal_100c1e842ea530d9e0f4263e02de1be40a3f09018bc8b1ed92db8a5d573d2c57 = $this->env->getExtension("native_profiler");
        $__internal_100c1e842ea530d9e0f4263e02de1be40a3f09018bc8b1ed92db8a5d573d2c57->enter($__internal_100c1e842ea530d9e0f4263e02de1be40a3f09018bc8b1ed92db8a5d573d2c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_100c1e842ea530d9e0f4263e02de1be40a3f09018bc8b1ed92db8a5d573d2c57->leave($__internal_100c1e842ea530d9e0f4263e02de1be40a3f09018bc8b1ed92db8a5d573d2c57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
