<?php

/* PW6UserBundle:Security:signin.html.twig */
class __TwigTemplate_ed7aae062aafdbbc025af75cd3f1ab538326e103d9c3318939caa79cbabdce01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "PW6UserBundle:Security:signin.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd7dec3141bdb4fedf3d2cd8d363f86451dfb156666e9f23d3cb7f6367890b34 = $this->env->getExtension("native_profiler");
        $__internal_bd7dec3141bdb4fedf3d2cd8d363f86451dfb156666e9f23d3cb7f6367890b34->enter($__internal_bd7dec3141bdb4fedf3d2cd8d363f86451dfb156666e9f23d3cb7f6367890b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PW6UserBundle:Security:signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7dec3141bdb4fedf3d2cd8d363f86451dfb156666e9f23d3cb7f6367890b34->leave($__internal_bd7dec3141bdb4fedf3d2cd8d363f86451dfb156666e9f23d3cb7f6367890b34_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_45c45d9e5b1a9244b9be4666c41a544d2726e12b698ff7216a72f7ffe84caf7f = $this->env->getExtension("native_profiler");
        $__internal_45c45d9e5b1a9244b9be4666c41a544d2726e12b698ff7216a72f7ffe84caf7f->enter($__internal_45c45d9e5b1a9244b9be4666c41a544d2726e12b698ff7216a72f7ffe84caf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "<h1>Inscription</h1>";
        
        $__internal_45c45d9e5b1a9244b9be4666c41a544d2726e12b698ff7216a72f7ffe84caf7f->leave($__internal_45c45d9e5b1a9244b9be4666c41a544d2726e12b698ff7216a72f7ffe84caf7f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_badff49471a194d5e423bed3fe600fe1674719d016e2494c6abe6454ef4e0524 = $this->env->getExtension("native_profiler");
        $__internal_badff49471a194d5e423bed3fe600fe1674719d016e2494c6abe6454ef4e0524->enter($__internal_badff49471a194d5e423bed3fe600fe1674719d016e2494c6abe6454ef4e0524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        $this->displayParentBlock("body", $context, $blocks);
        echo "
<div class=\"row\">
    <div class=\"col-xs-12 col-md-8\">
        <div class=\"well\">
            <p class=\"text-danger center\"><em>Tous les champs sont obligatoires</em></p>
            ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "role" => "form")));
        echo "

            ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fname", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Nom"));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fname", array()), 'errors');
        echo "
                <div class=\"col-sm-7\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pname", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Prénom"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pname", array()), 'errors');
        echo "
                <div class=\"col-sm-7\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pname", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "E-mail"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "
                <div class=\"col-sm-7\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>

            <div class=\"form-group\">
              ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Identifiant"));
        echo "
              ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
              <div class=\"col-sm-7\">
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
              ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Mot de passe"));
        echo "
              ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'errors');
        echo "
              <div class=\"col-sm-7\">
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
              ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-sm-4 control-label"), "label" => "Confirmation"));
        echo "
              ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'errors');
        echo "
              <div class=\"col-sm-7\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
              </div>
            </div>

            <div class=\"form-group\">
                <div class=\"col-xs-offset-9\">
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
                </div>
            </div>
          ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

          ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>

    </div>
</div>
";
        
        $__internal_badff49471a194d5e423bed3fe600fe1674719d016e2494c6abe6454ef4e0524->leave($__internal_badff49471a194d5e423bed3fe600fe1674719d016e2494c6abe6454ef4e0524_prof);

    }

    public function getTemplateName()
    {
        return "PW6UserBundle:Security:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 70,  181 => 68,  175 => 65,  166 => 59,  161 => 57,  157 => 56,  149 => 51,  144 => 49,  140 => 48,  132 => 43,  127 => 41,  123 => 40,  115 => 35,  110 => 33,  106 => 32,  98 => 27,  93 => 25,  89 => 24,  81 => 19,  76 => 17,  72 => 16,  66 => 13,  61 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block header %}<h1>Inscription</h1>{% endblock %}*/
/* */
/* {% block body %}*/
/* {{ parent() }}*/
/* <div class="row">*/
/*     <div class="col-xs-12 col-md-8">*/
/*         <div class="well">*/
/*             <p class="text-danger center"><em>Tous les champs sont obligatoires</em></p>*/
/*             {{ form_start(form, {'attr': {'class': 'form-horizontal', 'role' : 'form'}}) }}*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             <div class="form-group">*/
/*                 {{ form_label(form.fname, "Nom", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                 {{ form_errors(form.fname) }}*/
/*                 <div class="col-sm-7">*/
/*                     {{ form_widget(form.fname, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 {{ form_label(form.pname, "Prénom", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                 {{ form_errors(form.pname) }}*/
/*                 <div class="col-sm-7">*/
/*                     {{ form_widget(form.pname, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 {{ form_label(form.mail, "E-mail", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*                 {{ form_errors(form.mail) }}*/
/*                 <div class="col-sm-7">*/
/*                     {{ form_widget(form.mail, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*               {{ form_label(form.username, "Identifiant", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*               {{ form_errors(form.username) }}*/
/*               <div class="col-sm-7">*/
/*                 {{ form_widget(form.username, {'attr': {'class': 'form-control'}}) }}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*               {{ form_label(form.password.first, "Mot de passe", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*               {{ form_errors(form.password.first) }}*/
/*               <div class="col-sm-7">*/
/*                 {{ form_widget(form.password.first, {'attr': {'class': 'form-control'}}) }}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*               {{ form_label(form.password.second, "Confirmation", {'label_attr': {'class': 'col-sm-4 control-label'}}) }}*/
/*               {{ form_errors(form.password.second) }}*/
/*               <div class="col-sm-7">*/
/*                 {{ form_widget(form.password.second, {'attr': {'class': 'form-control'}}) }}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group">*/
/*                 <div class="col-xs-offset-9">*/
/*                     {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*                 </div>*/
/*             </div>*/
/*           {{ form_rest(form) }}*/
/* */
/*           {{ form_end(form) }}*/
/*         </div>*/
/* */
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
