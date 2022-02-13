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

/* page/index.html.twig */
class __TwigTemplate_fca3a63ce7f2647b8c0a0d142d55ab9def2a31dc81ee3c2b952df07c3aa57be4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/index.html.twig", 1);
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

        echo "Inicio!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 8
        echo twig_include($this->env, $context, "/partials/navbar.html.twig");
        echo "

<!--regiones-->
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["regiones"]) || array_key_exists("regiones", $context) ? $context["regiones"] : (function () { throw new RuntimeError('Variable "regiones" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 12
            echo "<h2 class=\"card-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "nombre", [], "any", false, false, false, 12), "html", null, true);
            echo "</h5>
<div style = \" flex-direction:row;\">
<div class=\"card\">
  <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "imagen", [], "any", false, false, false, 15), "html", null, true);
            echo "\" class=\"card-img-top\" >
  <div class=\"card-body\">
    <a href=\"/region/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "nombre", [], "any", false, false, false, 17), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" class=\"btn btn-info\">Visita ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["region"], "nombre", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>
  </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['region'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "<!--regiones-->

<!-- Video YT -->
<div id=\"contenedor_arcane\">

<h1 id=\"titulo_video\">Arcane! La serie original de League of Legends! </h1>
<div id=\"video\">
<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iKJ-coaQmBE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
</div>

<!-- Video YT -->

<!-- INFO ARCANE -->
<input type=\"button\" id=\"arcane_boton\" value=\"Arcane\">
<div id=\"contenedor_saber\" style=\"background-color:#bfa6a2;\">
  </div>
<!-- INFO ARCANE -->
</div>



  ";
        // line 42
        echo twig_include($this->env, $context, "/partials/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "page/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  127 => 21,  113 => 17,  108 => 15,  101 => 12,  97 => 11,  91 => 8,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inicio!{% endblock %}


{% block body %}

{{include (\"/partials/navbar.html.twig\")}}

<!--regiones-->
{% for region in regiones %}
<h2 class=\"card-title\">{{region.nombre}}</h5>
<div style = \" flex-direction:row;\">
<div class=\"card\">
  <img src=\"{{region.imagen}}\" class=\"card-img-top\" >
  <div class=\"card-body\">
    <a href=\"/region/{{region.nombre}}/{{region.id}}\" class=\"btn btn-info\">Visita {{region.nombre}}</a>
  </div>
</div>
{% endfor %}
<!--regiones-->

<!-- Video YT -->
<div id=\"contenedor_arcane\">

<h1 id=\"titulo_video\">Arcane! La serie original de League of Legends! </h1>
<div id=\"video\">
<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/iKJ-coaQmBE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>
</div>

<!-- Video YT -->

<!-- INFO ARCANE -->
<input type=\"button\" id=\"arcane_boton\" value=\"Arcane\">
<div id=\"contenedor_saber\" style=\"background-color:#bfa6a2;\">
  </div>
<!-- INFO ARCANE -->
</div>



  {{include (\"/partials/footer.html.twig\")}}
{% endblock %}
", "page/index.html.twig", "/home/raimon/Documentos/proyectoRaimonPagina/templates/page/index.html.twig");
    }
}
