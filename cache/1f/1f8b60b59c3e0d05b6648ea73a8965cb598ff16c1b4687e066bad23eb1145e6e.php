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

/* sendnews-choose.twig */
class __TwigTemplate_e5e954eef14e14b32225702b156ec0423f4281e1cb07b483db5803fb467f1362 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "sendnews-choose.twig", 1);
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
        echo " Selecionar Noticias - Enviar Newsletter ";
    }

    public function block_content($context, array $blocks = [])
    {
        // line 2
        echo "<h1>Enviar Newsletter</h1>
<form method=\"POST\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("sendnews-preview"), "html", null, true);
        echo "\">
    <div class=\"form-check\">
      <label class=\"form-check-label\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "          <input type=\"checkbox\" class=\"form-check-input\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", []), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", []), "html", null, true);
            echo "\" value=\"checkedValue\">
          ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "<br />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </label>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "sendnews-choose.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 10,  72 => 8,  65 => 7,  61 => 6,  55 => 3,  52 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %} {% block title %} Selecionar Noticias - Enviar Newsletter {% endblock title %} {% block content %}
<h1>Enviar Newsletter</h1>
<form method=\"POST\" action=\"{{path_for('sendnews-preview')}}\">
    <div class=\"form-check\">
      <label class=\"form-check-label\">
        {% for post in posts %}
          <input type=\"checkbox\" class=\"form-check-input\" name=\"{{post.id}}\" id=\"{{post.id}}\" value=\"checkedValue\">
          {{post.created_at}} - {{post.title}}<br />
        {% endfor %}
      </label>
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
</form>
{% endblock content %}", "sendnews-choose.twig", "C:\\xampp\\htdocs\\news-manager\\templates\\sendnews-choose.twig");
    }
}
