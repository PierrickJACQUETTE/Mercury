<?php

/* PW6StatistiqueBundle:Graph:graphPie.html.twig */
class __TwigTemplate_82580094d14a7bd3cfa93d4a742eab9b031a23af2cd20f1b31d06cfc46aaf514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6StatistiqueBundle::layout.html.twig", "PW6StatistiqueBundle:Graph:graphPie.html.twig", 1);
        $this->blocks = array(
            'PW6statistique_body' => array($this, 'block_PW6statistique_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6StatistiqueBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f2c9ebe69b450dd2fe675ab3775a65a3307ba49053abd15ed30286b918949d5 = $this->env->getExtension("native_profiler");
        $__internal_9f2c9ebe69b450dd2fe675ab3775a65a3307ba49053abd15ed30286b918949d5->enter($__internal_9f2c9ebe69b450dd2fe675ab3775a65a3307ba49053abd15ed30286b918949d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6StatistiqueBundle:Graph:graphPie.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2c9ebe69b450dd2fe675ab3775a65a3307ba49053abd15ed30286b918949d5->leave($__internal_9f2c9ebe69b450dd2fe675ab3775a65a3307ba49053abd15ed30286b918949d5_prof);

    }

    // line 3
    public function block_PW6statistique_body($context, array $blocks = array())
    {
        $__internal_8aa43fb2ba371497e8db57a9eaf3d5d18f5e8ca4aa4a2bf7906e45bb14213e9b = $this->env->getExtension("native_profiler");
        $__internal_8aa43fb2ba371497e8db57a9eaf3d5d18f5e8ca4aa4a2bf7906e45bb14213e9b->enter($__internal_8aa43fb2ba371497e8db57a9eaf3d5d18f5e8ca4aa4a2bf7906e45bb14213e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PW6statistique_body"));

        // line 4
        echo "
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 10
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["pie"]) ? $context["pie"] : $this->getContext($context, "pie")));
        echo "
</script>

<div id=\"pie\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
        
        $__internal_8aa43fb2ba371497e8db57a9eaf3d5d18f5e8ca4aa4a2bf7906e45bb14213e9b->leave($__internal_8aa43fb2ba371497e8db57a9eaf3d5d18f5e8ca4aa4a2bf7906e45bb14213e9b_prof);

    }

    public function getTemplateName()
    {
        return "PW6StatistiqueBundle:Graph:graphPie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6StatistiqueBundle::layout.html.twig' %}*/
/* */
/*     {% block PW6statistique_body %}*/
/* */
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.1.8/highcharts.js"></script>*/
/* <script src="//code.highcharts.com/4.1.8/modules/exporting.js"></script>*/
/* <script type="text/javascript">*/
/*     {{ chart(pie) }}*/
/* </script>*/
/* */
/* <div id="pie" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* {% endblock %}*/
/* */
