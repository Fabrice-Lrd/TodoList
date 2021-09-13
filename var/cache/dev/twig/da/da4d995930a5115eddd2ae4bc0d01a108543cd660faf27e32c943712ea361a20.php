<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* todo/list.html.twig */
class __TwigTemplate_ae25dafbce13c491b79d7975eb45325698ad782c26ce7a8971cf3f026d664901 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'block2' => [$this, 'block_block2'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "todo/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "todo/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des tâches";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_block2($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "block2"));

        echo "active";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<h2>Liste des tâches</h2>


";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 15
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
            ";
                // line 16
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

<ul class=\"list-group\">

    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) || array_key_exists("todos", $context) ? $context["todos"] : (function () { throw new RuntimeError('Variable "todos" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["todo"]) {
            // line 25
            echo "
    <li class=\"list-group-item\">

        <form action=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_delete");
            echo "\" method=\"post\">
            <button class=\"btn btn-xs btn-link\" type=\"submit\" name=\"delete\" value=\"";
            // line 29
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\"></span></button>
        </form>

        <span>
            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["todo"], "status", [], "any", false, false, false, 33) == "done")) {
                // line 34
                echo "            <!-- tâche effectuée -->
            <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_set_status", ["id" => $context["key"], "status" => "undone"]), "html", null, true);
                echo "\"><span
                    class=\"glyphicon glyphicon-check\"></span></a>
            ";
            } else {
                // line 38
                echo "            <!-- tâche non effectuée -->
            <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_set_status", ["id" => $context["key"], "status" => "done"]), "html", null, true);
                echo "\"><span
                    class=\"glyphicon glyphicon-unchecked\"></span></a>
            ";
            }
            // line 42
            echo "
            <!-- lien vers tâche -->
            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_show", ["id" => $context["key"]]), "html", null, true);
            echo "\">
                ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["todo"], "status", [], "any", false, false, false, 45) == "done")) {
                // line 46
                echo "                <!-- tâche effectuée -->
                <s>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "task", [], "any", false, false, false, 47), "html", null, true);
                echo "</s>
                ";
            } else {
                // line 49
                echo "                <!-- tâche non effectuée -->
                ";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["todo"], "task", [], "any", false, false, false, 50), "html", null, true);
                echo "
                ";
            }
            // line 52
            echo "            </a>
        </span>
    </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</ul>

";
        // line 58
        echo twig_include($this->env, $context, "partials/_new_task_form.html.twig");
        echo "

<hr>
<a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_reset");
        echo "\">Réinitialiser les tâches</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "todo/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 61,  226 => 58,  222 => 56,  213 => 52,  208 => 50,  205 => 49,  200 => 47,  197 => 46,  195 => 45,  191 => 44,  187 => 42,  181 => 39,  178 => 38,  172 => 35,  169 => 34,  167 => 33,  160 => 29,  156 => 28,  151 => 25,  147 => 24,  141 => 20,  128 => 16,  123 => 15,  118 => 14,  114 => 13,  108 => 8,  98 => 7,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des tâches{% endblock %}

{% block block2 %}active{% endblock %}

{% block body %}

<h2>Liste des tâches</h2>


{# read and display all flash messages #}
{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"alert alert-{{ label }}\">
            {{ message }}
        </div>
    {% endfor %}
{% endfor %}


<ul class=\"list-group\">

    {% for key, todo in todos %}

    <li class=\"list-group-item\">

        <form action=\"{{ path('todo_delete') }}\" method=\"post\">
            <button class=\"btn btn-xs btn-link\" type=\"submit\" name=\"delete\" value=\"{{ key }}\"><span class=\"glyphicon glyphicon-remove\"></span></button>
        </form>

        <span>
            {% if todo.status == 'done' %}
            <!-- tâche effectuée -->
            <a href=\"{{ path('todo_set_status', { 'id' : key, 'status' : 'undone' } ) }}\"><span
                    class=\"glyphicon glyphicon-check\"></span></a>
            {% else %}
            <!-- tâche non effectuée -->
            <a href=\"{{ path('todo_set_status', { 'id' : key, 'status' : 'done' } ) }}\"><span
                    class=\"glyphicon glyphicon-unchecked\"></span></a>
            {% endif %}

            <!-- lien vers tâche -->
            <a href=\"{{ path('todo_show', { 'id' : key }) }}\">
                {% if todo.status == 'done' %}
                <!-- tâche effectuée -->
                <s>{{ todo.task }}</s>
                {% else %}
                <!-- tâche non effectuée -->
                {{ todo.task }}
                {% endif %}
            </a>
        </span>
    </li>
    {% endfor %}
</ul>

{{ include('partials/_new_task_form.html.twig') }}

<hr>
<a href=\"{{ path('todo_reset') }}\">Réinitialiser les tâches</a>
{% endblock %}

", "todo/list.html.twig", "/Users/oclock/Documents/symfo-s01e05-exercice-todolist-Fabrice-Lrd/templates/todo/list.html.twig");
    }
}
