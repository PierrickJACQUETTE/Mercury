<?php

/* PW6StatistiqueBundle:Graph:graphBar.html.twig */
class __TwigTemplate_903d3b7a4f58eea1c4166ea39912e2f24f396b0949a928a28945fadc7ddd85c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6StatistiqueBundle::layout.html.twig", "PW6StatistiqueBundle:Graph:graphBar.html.twig", 1);
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
        $__internal_003fca961064fe353d3c3fca53fafb3c3b09d521248e9c6d312bc8a09ef8dbcd = $this->env->getExtension("native_profiler");
        $__internal_003fca961064fe353d3c3fca53fafb3c3b09d521248e9c6d312bc8a09ef8dbcd->enter($__internal_003fca961064fe353d3c3fca53fafb3c3b09d521248e9c6d312bc8a09ef8dbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6StatistiqueBundle:Graph:graphBar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_003fca961064fe353d3c3fca53fafb3c3b09d521248e9c6d312bc8a09ef8dbcd->leave($__internal_003fca961064fe353d3c3fca53fafb3c3b09d521248e9c6d312bc8a09ef8dbcd_prof);

    }

    // line 3
    public function block_PW6statistique_body($context, array $blocks = array())
    {
        $__internal_ec919cfd58c5dfdf748c6e31ff1d4964b84ae873d217775f0971f1670ae78139 = $this->env->getExtension("native_profiler");
        $__internal_ec919cfd58c5dfdf748c6e31ff1d4964b84ae873d217775f0971f1670ae78139->enter($__internal_ec919cfd58c5dfdf748c6e31ff1d4964b84ae873d217775f0971f1670ae78139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PW6statistique_body"));

        // line 4
        echo "
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 10
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["barchart"]) ? $context["barchart"] : $this->getContext($context, "barchart")));
        echo "
</script>

<div id=\"barchart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
        
        $__internal_ec919cfd58c5dfdf748c6e31ff1d4964b84ae873d217775f0971f1670ae78139->leave($__internal_ec919cfd58c5dfdf748c6e31ff1d4964b84ae873d217775f0971f1670ae78139_prof);

    }

    public function getTemplateName()
    {
        return "PW6StatistiqueBundle:Graph:graphBar.html.twig";
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
/*     {{ chart(barchart) }}*/
/* </script>*/
/* */
/* <div id="barchart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
/* {% endblock %}*/
/* */
