<?php

/* PW6FormationBundle:Advert:form.html.twig */
class __TwigTemplate_d9fb910d1f63375f8ff1500e43a74e981c662298096f773dea81c90ec2300c19 extends Twig_Template
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
        $__internal_be380550f22c5aa53e1d66ac1f246f93586fc3038117bb80230912b7ca6623e2 = $this->env->getExtension("native_profiler");
        $__internal_be380550f22c5aa53e1d66ac1f246f93586fc3038117bb80230912b7ca6623e2->enter($__internal_be380550f22c5aa53e1d66ac1f246f93586fc3038117bb80230912b7ca6623e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6FormationBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulation d'ajout de Formation</h3>

<div class=\"well\">
    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    ";
        // line 6
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array(), "any", true, true)) {
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        }
        // line 7
        echo "
    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de la formation"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

        <div class=\"col-sm-10\">
            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de la formation"));
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "at", array()), 'row');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirements", array()), 'row');
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "
    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_be380550f22c5aa53e1d66ac1f246f93586fc3038117bb80230912b7ca6623e2->leave($__internal_be380550f22c5aa53e1d66ac1f246f93586fc3038117bb80230912b7ca6623e2_prof);

    }

    public function getTemplateName()
    {
        return "PW6FormationBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 31,  97 => 30,  93 => 29,  89 => 28,  85 => 27,  81 => 26,  77 => 25,  70 => 21,  65 => 19,  61 => 18,  53 => 13,  47 => 10,  43 => 9,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulation d'ajout de Formation</h3>*/
/* */
/* <div class="well">*/
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     {% if form.date is defined %}{{ form_row(form.date) }}{% endif %}*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.title, 'Titre de la formation', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form.title) }}*/
/* */
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.content, 'Contenu de la formation', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form.title) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_row(form.author) }}*/
/*     {{ form_row(form.at) }}*/
/*     {{ form_row(form.requirements) }}*/
/*     {{ form_row(form.published) }}*/
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*     {{ form_rest(form) }}*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
