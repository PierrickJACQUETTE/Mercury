<?php

/* PW6RecrutementBundle:Advert:form.html.twig */
class __TwigTemplate_3edc3619c6f2947edb415248c5876ad96941da4e735ad6d5b3e59747f4591088 extends Twig_Template
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
        $__internal_dfc220002ed461a8c75b6af13f9b150ef2b342f03136767278bf4c47c0b1337d = $this->env->getExtension("native_profiler");
        $__internal_dfc220002ed461a8c75b6af13f9b150ef2b342f03136767278bf4c47c0b1337d->enter($__internal_dfc220002ed461a8c75b6af13f9b150ef2b342f03136767278bf4c47c0b1337d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:form.html.twig"));

        // line 1
        echo "<h3>Formulation d'ajout de Recrutement</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre du poste"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu du poste"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "responsable", array()), 'row');
        echo "
    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "at", array()), 'row');
        echo "
    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'row');
        echo "
    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "requirements", array()), 'row');
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
        
        $__internal_dfc220002ed461a8c75b6af13f9b150ef2b342f03136767278bf4c47c0b1337d->leave($__internal_dfc220002ed461a8c75b6af13f9b150ef2b342f03136767278bf4c47c0b1337d_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:form.html.twig";
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
/* <h3>Formulation d'ajout de Recrutement</h3>*/
/* */
/* <div class="well">*/
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     {% if form.date is defined %}{{ form_row(form.date) }}{% endif %}*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.title, 'Titre du poste', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form.title) }}*/
/* */
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.content, 'Contenu du poste', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form.title) }}*/
/*         <div class="col-sm-10">*/
/*             {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_row(form.responsable) }}*/
/*     {{ form_row(form.at) }}*/
/*     {{ form_row(form.time) }}*/
/*     {{ form_row(form.requirements) }}*/
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*     {{ form_rest(form) }}*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
