<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* add_task/index.html.twig */
class __TwigTemplate_1748fcabba763037bf0ca0e1a3340257072b1660a5526c5e61719ff79f92c4f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_task/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "add_task/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "add_task/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello AddTaskController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        yield "<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
body{
    margin:0;
    padding:0;
}

h1{
    font-size: 1.3em;
    letter-spacing:0.1em;
     font-family: \"Playfair Display\", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
    .example-wrapper { 
        width:600px;
        background-color: #EEEEEE;
        padding:30px;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        border-radius: 5px;
        box-shadow: 2px 2px 10px #c7c7c7;

    }

    .form-control{
        width: 300px;
        padding:5px;
        margin:5px
    }

    .form-group{
       display: flex;
       justify-content:space-between;
       align-items:center;
       text-transform:capitalize;
       letter-spacing:0.1em;
       font-family: \"Playfair Display\", serif;
       font-optical-sizing: auto;
       font-weight: <weight>;
       font-style: normal;
    }

    button{
        font-family: \"Playfair Display\", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        background-color:#0B5394;
        padding: 10px 20px;
        color: white;
        text-transform:uppercase;
        letter-spacing:0.1em;
        cursor:pointer;
        border:none;
        transition: transform 0.3s ease;

        &:hover{
            background-color:#107bdb;
        }
    }
</style>

<div class=\"example-wrapper\">
    <h1>Please enter your new task in the field below.</h1>

    ";
        // line 77
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), 'form_start');
        yield "

         ";
        // line 80
        yield "         <div class=\"form-group\"> 
            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "title", [], "any", false, false, false, 81), 'label', ["attr" => ["class" => "form-label"], "label" => "Task Title"]);
        yield "
            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "title", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
         </div>
        
         ";
        // line 86
        yield "         <div class=\"form-group\"> 
            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "description", [], "any", false, false, false, 87), 'label', ["attr" => ["class" => "form-label"], "label" => "Task Description"]);
        yield "
            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
         </div>

         ";
        // line 92
        yield "         <div class=\"form-group\"> 
            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "executor", [], "any", false, false, false, 93), 'label', ["attr" => ["class" => "form-label"], "label" => "Task Executor"]);
        yield "
            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "executor", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
         </div>

        <button type=\"submit\">Add task</button>

    ";
        // line 99
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'form_end');
        yield "

   ";
        // line 102
        yield "   ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "flashes", [], "any", false, false, false, 102));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 103
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 104
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        yield "
</div>

";
        // line 111
        yield "
";
        // line 112
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "vars", [], "any", false, false, false, 112), "errors", [], "any", false, false, false, 112)) > 0)) {
            // line 113
            yield "    <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form_errors"]) || array_key_exists("form_errors", $context) ? $context["form_errors"] : (function () { throw new RuntimeError('Variable "form_errors" does not exist.', 113, $this->source); })()), "form", [], "any", false, false, false, 113), "html", null, true);
            yield "</div>
";
        }
        // line 115
        yield "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "add_task/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  256 => 115,  250 => 113,  248 => 112,  245 => 111,  240 => 107,  234 => 106,  223 => 104,  218 => 103,  213 => 102,  208 => 99,  200 => 94,  196 => 93,  193 => 92,  187 => 88,  183 => 87,  180 => 86,  174 => 82,  170 => 81,  167 => 80,  161 => 77,  90 => 7,  80 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Hello AddTaskController!{% endblock %}

{% block body %}
<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
body{
    margin:0;
    padding:0;
}

h1{
    font-size: 1.3em;
    letter-spacing:0.1em;
     font-family: \"Playfair Display\", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}
    .example-wrapper { 
        width:600px;
        background-color: #EEEEEE;
        padding:30px;
        position:absolute;
        top:50%;
        left:50%;
        transform:translate(-50%,-50%);
        border-radius: 5px;
        box-shadow: 2px 2px 10px #c7c7c7;

    }

    .form-control{
        width: 300px;
        padding:5px;
        margin:5px
    }

    .form-group{
       display: flex;
       justify-content:space-between;
       align-items:center;
       text-transform:capitalize;
       letter-spacing:0.1em;
       font-family: \"Playfair Display\", serif;
       font-optical-sizing: auto;
       font-weight: <weight>;
       font-style: normal;
    }

    button{
        font-family: \"Playfair Display\", serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
        background-color:#0B5394;
        padding: 10px 20px;
        color: white;
        text-transform:uppercase;
        letter-spacing:0.1em;
        cursor:pointer;
        border:none;
        transition: transform 0.3s ease;

        &:hover{
            background-color:#107bdb;
        }
    }
</style>

<div class=\"example-wrapper\">
    <h1>Please enter your new task in the field below.</h1>

    {# Start the form #}
    {{form_start(form)}}

         {# Custom label and input for the title #}
         <div class=\"form-group\"> 
            {{form_label(form.title, 'Task Title', {'attr': {\"class\": \"form-label\"}}                )}}
            {{form_widget(form.title, {'attr': {\"class\": \"form-control\"}} )}}
         </div>
        
         {# Custom label and input for the description #}
         <div class=\"form-group\"> 
            {{form_label(form.description, 'Task Description' , {'attr': {\"class\": \"form-label\"}}   )}}
            {{form_widget(form.description, {'attr': {\"class\": \"form-control\"}} )}}
         </div>

         {# Custom label and input for the executor #}
         <div class=\"form-group\"> 
            {{form_label(form.executor, 'Task Executor' , {'attr': {\"class\": \"form-label\"}}          )}}
            {{form_widget(form.executor, {'attr': {\"class\": \"form-control\"}} )}}
         </div>

        <button type=\"submit\">Add task</button>

    {{form_end(form)}}

   {# Flash message display #}
   {% for label, messages in app.flashes %}
        {% for message in messages %}
        <div class=\"alert alert-{{label}}\">{{message}}</div>
        {% endfor   %}
    {% endfor   %}

</div>

{# form-error handling #}

{% if form.vars.errors|length > 0 %}
    <div class=\"alert alert-danger\">{{form_errors.form}}</div>
{% endif %}

{% endblock %}
", "add_task/index.html.twig", "C:\\MAMP\\htdocs\\AddTask\\templates\\add_task\\index.html.twig");
    }
}
