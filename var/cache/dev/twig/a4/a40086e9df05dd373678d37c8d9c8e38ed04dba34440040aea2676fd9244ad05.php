<?php

/* PW6StatistiqueBundle:Graph:graph.html.twig */
class __TwigTemplate_4bb380910e798687e088e14762499e380f8960c262e8a3f63c2029860dd6f01e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6StatistiqueBundle::layout.html.twig", "PW6StatistiqueBundle:Graph:graph.html.twig", 1);
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
        $__internal_7d4209a3d3efc306592623f1b8fbe11315f6f7b0e7a411fdec01fa3cee453954 = $this->env->getExtension("native_profiler");
        $__internal_7d4209a3d3efc306592623f1b8fbe11315f6f7b0e7a411fdec01fa3cee453954->enter($__internal_7d4209a3d3efc306592623f1b8fbe11315f6f7b0e7a411fdec01fa3cee453954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6StatistiqueBundle:Graph:graph.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d4209a3d3efc306592623f1b8fbe11315f6f7b0e7a411fdec01fa3cee453954->leave($__internal_7d4209a3d3efc306592623f1b8fbe11315f6f7b0e7a411fdec01fa3cee453954_prof);

    }

    // line 3
    public function block_PW6statistique_body($context, array $blocks = array())
    {
        $__internal_1c19b3be34828b63656c4c45e12a18b97e37af13fea62e00adec9993bfddf5d3 = $this->env->getExtension("native_profiler");
        $__internal_1c19b3be34828b63656c4c45e12a18b97e37af13fea62e00adec9993bfddf5d3->enter($__internal_1c19b3be34828b63656c4c45e12a18b97e37af13fea62e00adec9993bfddf5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "PW6statistique_body"));

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
        
        $__internal_1c19b3be34828b63656c4c45e12a18b97e37af13fea62e00adec9993bfddf5d3->leave($__internal_1c19b3be34828b63656c4c45e12a18b97e37af13fea62e00adec9993bfddf5d3_prof);

    }

    public function getTemplateName()
    {
        return "PW6StatistiqueBundle:Graph:graph.html.twig";
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
