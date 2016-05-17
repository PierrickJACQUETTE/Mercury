<?php

/* PW6RecrutementBundle:Advert:formAddCandidature.html.twig */
class __TwigTemplate_ac7aaaae19c185f64b57dc1adf4efa716a6ee8ad39f32d0e0086757be559802a extends Twig_Template
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
        $__internal_c65d7ecb75d42e281d8f1475adb4cf15631ca501ec6029a3391096214fdbcf3a = $this->env->getExtension("native_profiler");
        $__internal_c65d7ecb75d42e281d8f1475adb4cf15631ca501ec6029a3391096214fdbcf3a->enter($__internal_c65d7ecb75d42e281d8f1475adb4cf15631ca501ec6029a3391096214fdbcf3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6RecrutementBundle:Advert:formAddCandidature.html.twig"));

        // line 1
        echo "<h3>Formulaire de candidature</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Name Prenom"));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'errors');
        echo "
        <div class=\"col-sm-5\">
            ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    </div>

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cv", array()), 'row');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lDM", array()), 'row');
        echo "

    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_c65d7ecb75d42e281d8f1475adb4cf15631ca501ec6029a3391096214fdbcf3a->leave($__internal_c65d7ecb75d42e281d8f1475adb4cf15631ca501ec6029a3391096214fdbcf3a_prof);

    }

    public function getTemplateName()
    {
        return "PW6RecrutementBundle:Advert:formAddCandidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 21,  72 => 20,  68 => 19,  63 => 17,  59 => 16,  52 => 12,  47 => 10,  43 => 9,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* <h3>Formulaire de candidature</h3>*/
/* */
/* <div class="well">*/
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     {% if form.date is defined %}{{ form_row(form.date) }}{% endif %}*/
/* */
/*     <div class="form-group">*/
/*         {{ form_label(form.author, 'Name Prenom', {'label_attr': {'class': 'col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form.author) }}*/
/*         <div class="col-sm-5">*/
/*             {{ form_widget(form.author, {'attr': {'class': 'form-control'}}) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{ form_row(form.cv) }}*/
/*     {{ form_row(form.lDM) }}*/
/* */
/*     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*     {{ form_rest(form) }}*/
/*     {{ form_end(form) }}*/
/* </div>*/
/* */
