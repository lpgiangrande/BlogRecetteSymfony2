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

/* user\add.html.twig */
class __TwigTemplate_9fe4e1c58be99d78d7309c4b15675e2c771e22cd777b60a901e53ccc8dd18f25 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user\\add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user\\add.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user\\add.html.twig", 1);
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

        echo " Espace utilisateur ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"container mt-5\">
    <h1>Proposer une recette</h1>
</div>

";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 11, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'row');
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 18, $this->source); })()), "categorie", [], "any", false, false, false, 18), 'row');
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 21, $this->source); })()), "imageFile", [], "any", false, false, false, 21), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 26, $this->source); })()), "temps", [], "any", false, false, false, 26), 'row');
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 29, $this->source); })()), "personne", [], "any", false, false, false, 29), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 34, $this->source); })()), "resume", [], "any", false, false, false, 34), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 39, $this->source); })()), "preparation", [], "any", false, false, false, 39), 'row');
        echo "
        </div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-12\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 44, $this->source); })()), 'rest');
        echo "
        </div>
    </div>

        <input type=\"reset\" class=\"btn btn-secondary\" value=\"Annuler\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\">

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 51, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user\\add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 51,  152 => 44,  144 => 39,  136 => 34,  128 => 29,  122 => 26,  114 => 21,  108 => 18,  102 => 15,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %} Espace utilisateur {% endblock %}

{% block body %}

<div class=\"container mt-5\">
    <h1>Proposer une recette</h1>
</div>

{{ form_start(formRecette) }}

    <div class=\"row\">
        <div class=\"col-md-3\">
            {{ form_row(formRecette.titre) }}
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formRecette.categorie) }}
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formRecette.imageFile) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            {{ form_row(formRecette.temps) }}
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formRecette.personne) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ form_row(formRecette.resume) }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {{ form_row(formRecette.preparation) }}
        </div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-12\">
            {{ form_rest(formRecette) }}
        </div>
    </div>

        <input type=\"reset\" class=\"btn btn-secondary\" value=\"Annuler\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\">

    {{ form_end(formRecette) }}

{% endblock %}", "user\\add.html.twig", "/Users/lpgia/blogrecette/templates/user/add.html.twig");
    }
}
