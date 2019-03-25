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

/* news-list.twig */
class __TwigTemplate_27b5d1f69a592ffc737decb1a7c0163e348a05247550d01dda793c9976d2bb97 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "news-list.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function block_title($context, array $blocks = [])
    {
        echo " Pagina Principal ";
    }

    public function block_content($context, array $blocks = [])
    {
        // line 2
        echo "<h1>Notícias Disponíveis</h1>
<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"\">
    <div class=\"btn-group\" role=\"group\" aria-label=\"\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("news-list"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Atualizar Lista</a>
    </div>
</div>
<table class=\"table\">
    <thead>
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Criado Em</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "        <tr>
            <td scope=\"row\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", []), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", []), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "news-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 24,  87 => 21,  83 => 20,  79 => 19,  76 => 18,  72 => 17,  57 => 5,  52 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %} {% block title %} Pagina Principal {% endblock title %} {% block content %}
<h1>Notícias Disponíveis</h1>
<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"\">
    <div class=\"btn-group\" role=\"group\" aria-label=\"\">
        <a href=\"{{path_for('news-list')}}\" class=\"btn btn-primary\">Atualizar Lista</a>
    </div>
</div>
<table class=\"table\">
    <thead>
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Criado Em</th>
        </tr>
    </thead>
    <tbody>
        {% for post in posts %}
        <tr>
            <td scope=\"row\">{{post.id}}</td>
            <td>{{post.title}}</td>
            <td>{{post.created_at}}</td>
        </tr>
        {% endfor %}
    </tbody>
</table>
{% endblock content %}", "news-list.twig", "C:\\xampp\\htdocs\\news-manager\\templates\\news-list.twig");
    }
}
