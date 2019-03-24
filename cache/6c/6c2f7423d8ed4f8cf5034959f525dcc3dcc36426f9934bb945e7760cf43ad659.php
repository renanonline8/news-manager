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

/* sendnews-preview.twig */
class __TwigTemplate_e1bf993c009f74e89021cd8d690985baf6c78633e332ef1ef0c32adf0ee5716c extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "sendnews-preview.twig", 1);
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
        echo " Pre-visualização do e-mail - Enviar Newsletter ";
    }

    public function block_content($context, array $blocks = [])
    {
        // line 2
        echo "<h1>Pre-visualização do e-mail</h1>
<label>Mensagem:</label>
<div class=\"border p-1\" id=\"preview\">
    <h1>Newsletter da Semana</h1>
    <p>Sua newsletter semanal!</p>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["postsChosen"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "        <p><b>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "created_at", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", []), "html", null, true);
            echo "</b><br />";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", []), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
<div class=\"form-group\">
  <label for=\"\">Para:</label>
  <input type=\"text\"
    class=\"form-control\" name=\"email\" id=\"email\" aria-describedby=\"helpId\" placeholder=\"\" value=\"michel.regis@prnewswire.com.br\" disabled>
</div>
<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"\">
    <div class=\"btn-group\" role=\"group\" aria-label=\"\">
        <button type=\"button\" class=\"btn btn-primary\">Enviar Newsletter</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sendnews-preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  63 => 8,  59 => 7,  52 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %} {% block title %} Pre-visualização do e-mail - Enviar Newsletter {% endblock title %} {% block content %}
<h1>Pre-visualização do e-mail</h1>
<label>Mensagem:</label>
<div class=\"border p-1\" id=\"preview\">
    <h1>Newsletter da Semana</h1>
    <p>Sua newsletter semanal!</p>
    {% for post in postsChosen %}
        <p><b>{{post.created_at}} - {{post.title}}</b><br />{{post.description}}
    {% endfor %}
</div>
<div class=\"form-group\">
  <label for=\"\">Para:</label>
  <input type=\"text\"
    class=\"form-control\" name=\"email\" id=\"email\" aria-describedby=\"helpId\" placeholder=\"\" value=\"michel.regis@prnewswire.com.br\" disabled>
</div>
<div class=\"btn-toolbar\" role=\"toolbar\" aria-label=\"\">
    <div class=\"btn-group\" role=\"group\" aria-label=\"\">
        <button type=\"button\" class=\"btn btn-primary\">Enviar Newsletter</button>
    </div>
</div>
{% endblock content %}", "sendnews-preview.twig", "C:\\xampp\\htdocs\\news-manager\\templates\\sendnews-preview.twig");
    }
}
