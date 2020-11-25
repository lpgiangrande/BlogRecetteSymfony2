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

/* Admin/index.html.twig */
class __TwigTemplate_ed1f7154d23d8a7878f3c3a02c511e4e0ab1afa58a3988d7adbc22daecd723a2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Administration ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container mt-5\"> <!-- Ajoute une alert success quand recette ajoutée -->
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [0 => "success"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "        <div class=\"alert alert-success\">
            ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "


        <h1>Gestion des recettes</h1>

        <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_create");
        echo "\"class=\"btn btn-success btn-sm mt-3 mb-3\">Ajouter</a>

        <table class=\"table table-striped\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITRE</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recettes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 29
            echo "                <tr>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                    <td>
                        <button class=\"btn btn-light btn-sm\">Editer</button>
                        <button class=\"btn btn-danger btn-sm\">Supprimer</button>
                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recette'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  109 => 31,  105 => 30,  102 => 29,  98 => 28,  84 => 17,  77 => 12,  68 => 9,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/index.html.twig", "/Users/lpgia/blogrecette/templates/Admin/index.html.twig");
    }
}
