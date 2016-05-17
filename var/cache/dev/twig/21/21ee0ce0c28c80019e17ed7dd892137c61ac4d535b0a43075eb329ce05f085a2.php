<?php

/* PW6RecrutementBundle:Advert:graph.html.twig */
class __TwigTemplate_8364aedde5c26cd19c2ca0e59a56791c2a42c22241bd807891fad6d8d559e7a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("PW6RecrutementBundle::layout.html.twig", "PW6RecrutementBundle:Advert:graph.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pw6recrutement_body' => array($this, 'block_pw6recrutement_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PW6RecrutementBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2dcc11dd3a6edba7d213e9de12498bf0522381bb472e3f2dfd2ef02329924530 = $this->env->getExtension("native_profiler");
        $__internal_2dcc11dd3a6edba7d213e9de12498bf0522381bb472e3f2dfd2ef02329924530->enter($__internal_2dcc11dd3a6edba7d213e9de12498bf0522381bb472e3f2dfd2ef02329924530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:graph.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcc11dd3a6edba7d213e9de12498bf0522381bb472e3f2dfd2ef02329924530->leave($__internal_2dcc11dd3a6edba7d213e9de12498bf0522381bb472e3f2dfd2ef02329924530_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdddfa925aec82ce44adcd0ee1d7970864ee3de189847a959efde73f431836f2 = $this->env->getExtension("native_profiler");
        $__internal_bdddfa925aec82ce44adcd0ee1d7970864ee3de189847a959efde73f431836f2->enter($__internal_bdddfa925aec82ce44adcd0ee1d7970864ee3de189847a959efde73f431836f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_bdddfa925aec82ce44adcd0ee1d7970864ee3de189847a959efde73f431836f2->leave($__internal_bdddfa925aec82ce44adcd0ee1d7970864ee3de189847a959efde73f431836f2_prof);

    }

    // line 5
    public function block_pw6recrutement_body($context, array $blocks = array())
    {
        $__internal_1cf97450d7ec542258c65c638b94de2d48812f4baeec6b231e7b82979b5e88bc = $this->env->getExtension("native_profiler");
        $__internal_1cf97450d7ec542258c65c638b94de2d48812f4baeec6b231e7b82979b5e88bc->enter($__internal_1cf97450d7ec542258c65c638b94de2d48812f4baeec6b231e7b82979b5e88bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pw6recrutement_body"));

        // line 6
        echo "    <h2>Listes des Recrutement</h2>

<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.1.8/highcharts.js\"></script>
<script src=\"//code.highcharts.com/4.1.8/modules/exporting.js\"></script>
<script type=\"text/javascript\">
    ";
        // line 13
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["pie"]) ? $context["pie"] : $this->getContext($context, "pie")));
        echo "
</script>

<div id=\"pie\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>
";
        
        $__internal_1cf97450d7ec542258c65c638b94de2d48812f4baeec6b231e7b82979b5e88bc->leave($__internal_1cf97450d7ec542258c65c638b94de2d48812f4baeec6b231e7b82979b5e88bc_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:graph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  54 => 6,  48 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'PW6RecrutementBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Accueil - {{ parent() }}{% endblock %}*/
/* */
/* {% block pw6recrutement_body %}*/
/*     <h2>Listes des Recrutement</h2>*/
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
