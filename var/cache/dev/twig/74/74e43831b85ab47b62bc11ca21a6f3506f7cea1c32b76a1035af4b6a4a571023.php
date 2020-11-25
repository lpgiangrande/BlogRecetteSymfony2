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

/* admin/_form.html.twig */
class __TwigTemplate_c3ecce44b96115a8c25783a406c4b127ecd0cd3e2a98b31c03a6f26f29d15049 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_form.html.twig"));

        // line 1
        echo "<div class=\"container mt-5\">

    ";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 3, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 7, $this->source); })()), "titre", [], "any", false, false, false, 7), 'row');
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 10, $this->source); })()), "categorie", [], "any", false, false, false, 10), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 15, $this->source); })()), "temps", [], "any", false, false, false, 15), 'row');
        echo "
        </div>
        <div class=\"col-md-3\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 18, $this->source); })()), "personne", [], "any", false, false, false, 18), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 23, $this->source); })()), "resume", [], "any", false, false, false, 23), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 28, $this->source); })()), "preparation", [], "any", false, false, false, 28), 'row');
        echo "
        </div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-12\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 33, $this->source); })()), 'rest');
        echo "
        </div>
    </div>

        <input type=\"reset\" class=\"btn btn-secondary\" value=\"Annuler\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\">

    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRecette"]) || array_key_exists("formRecette", $context) ? $context["formRecette"] : (function () { throw new RuntimeError('Variable "formRecette" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  98 => 33,  90 => 28,  82 => 23,  74 => 18,  68 => 15,  60 => 10,  54 => 7,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container mt-5\">

    {{ form_start(formRecette) }}

    <div class=\"row\">
        <div class=\"col-md-3\">
            {{ form_row(formRecette.titre) }}
        </div>
        <div class=\"col-md-3\">
            {{ form_row(formRecette.categorie) }}
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
</div>", "admin/_form.html.twig", "/Users/lpgia/blogrecette/templates/admin/_form.html.twig");
    }
}
