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

/* index.twig */
class __TwigTemplate_2d5d87b4b7f38902eb3a0f2175a5b6db58f2f5b310685edd2c8940cfdb24eb2b extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.twig", "index.twig", 1);
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
        echo "
<div class=\"jumbotron\">
    <h1 class=\"display-3\">Gerenciador de Newsletter</h1>
    <p class=\"lead\">Bem Vindo ao Gerenciador de Newsletter</p>
    <p class=\"lead\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("news-list"), "html", null, true);
        echo "\" role=\"button\" >Noticias Disponíveis</a>
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("sendnews-choose"), "html", null, true);
        echo "\" role=\"button\">Enviar Newsletter</a>
    </p>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  59 => 7,  52 => 2,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %} {% block title %} Pagina Principal {% endblock title %} {% block content %}

<div class=\"jumbotron\">
    <h1 class=\"display-3\">Gerenciador de Newsletter</h1>
    <p class=\"lead\">Bem Vindo ao Gerenciador de Newsletter</p>
    <p class=\"lead\">
        <a class=\"btn btn-primary btn-lg\" href=\"{{path_for('news-list')}}\" role=\"button\" >Noticias Disponíveis</a>
        <a class=\"btn btn-primary btn-lg\" href=\"{{path_for('sendnews-choose')}}\" role=\"button\">Enviar Newsletter</a>
    </p>
</div>
{% endblock content %}", "index.twig", "C:\\xampp\\htdocs\\news-manager\\templates\\index.twig");
    }
}
