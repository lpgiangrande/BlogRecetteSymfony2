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

/* home/index.html.twig */
class __TwigTemplate_1046cf68b61aa587bac813fde9ecb7ef7a0287b7bc1e30d199d96c9ebf1e0700 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Home page ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"container mt-5\">
    <h1>Bienvenue/Accueil - exercice Symfony, blogs avec articles, ...</h1>

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recettes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            echo " 
    <!--Pour chaque élément recette(variable) dans recette(tableau d'objets)), afficher la recette-->
        <div class=\"card mt-4\" style=\"width: 18rem;\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 13), "html", null, true);
            echo "</h5>
                <h6 class=\"card-subtitle mb-2 text-muted\">";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "createdAt", [], "any", false, false, false, 14)), "html", null, true);
            echo "</h6>
                <p class=\"card-text\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "resume", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
                <a href=\"#\" class=\"card-link\">Voir la recette</a>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  80 => 15,  76 => 14,  72 => 13,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Users/lpgia/blogrecette/templates/home/index.html.twig");
    }
}
