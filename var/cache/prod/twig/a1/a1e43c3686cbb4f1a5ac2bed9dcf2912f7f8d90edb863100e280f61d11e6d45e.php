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

/* Admin/create.html.twig */
class __TwigTemplate_6232fde7fb383a3aa4feb39c1943f512156cebb00ea8278665761fb348e0e15b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"container mt-5\">
    <h1 class=\"mb-3\">Ajouter une recette</h1>

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRecette"] ?? null), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRecette"] ?? null), "titre", [], "any", false, false, false, 12), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRecette"] ?? null), "temps", [], "any", false, false, false, 17), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\">
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRecette"] ?? null), "personne", [], "any", false, false, false, 22), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRecette"] ?? null), "resume", [], "any", false, false, false, 27), 'row');
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formRecette"] ?? null), "preparation", [], "any", false, false, false, 32), 'row');
        echo "
        </div>
    </div>
    <div class=\"row mt-3\">
        <div class=\"col-md-12\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["formRecette"] ?? null), 'rest');
        echo "
        </div>
    </div>

        <input type=\"reset\" class=\"btn btn-secondary\" value=\"Annuler\">
        <input type=\"submit\" class=\"btn btn-success\" value=\"Enregistrer\">

    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["formRecette"] ?? null), 'form_end');
        echo "
</div>


";
    }

    public function getTemplateName()
    {
        return "Admin/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 44,  103 => 37,  95 => 32,  87 => 27,  79 => 22,  71 => 17,  63 => 12,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/create.html.twig", "/Users/lpgia/blogrecette/templates/Admin/create.html.twig");
    }
}
