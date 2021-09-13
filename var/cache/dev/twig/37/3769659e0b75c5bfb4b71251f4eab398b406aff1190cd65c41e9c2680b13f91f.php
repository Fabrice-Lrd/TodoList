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

/* partials/_new_task_form.html.twig */
class __TwigTemplate_ee623d054cb99ddbed64206ae9096a25ebcc4d15632cc45202e6bcc5eb0c8dc5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_new_task_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_new_task_form.html.twig"));

        // line 1
        echo "
<h3>Nouvelle tâche</h3>

<form action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("todo_add");
        echo "\" method=\"post\" class=\"form-inline\">
    <div class=\"form-group\">
        <input type=\"text\" name=\"task\" placeholder=\"Intitulé de la tâche\" class=\"form-control\">
        <input type=\"submit\" name=\"add\" value=\"Ajouter\" class=\"form-control btn btn-primary\">
    </div>
</form>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_new_task_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<h3>Nouvelle tâche</h3>

<form action=\"{{ path('todo_add') }}\" method=\"post\" class=\"form-inline\">
    <div class=\"form-group\">
        <input type=\"text\" name=\"task\" placeholder=\"Intitulé de la tâche\" class=\"form-control\">
        <input type=\"submit\" name=\"add\" value=\"Ajouter\" class=\"form-control btn btn-primary\">
    </div>
</form>", "partials/_new_task_form.html.twig", "/Users/oclock/Documents/symfo-s01e05-exercice-todolist-Fabrice-Lrd/templates/partials/_new_task_form.html.twig");
    }
}
