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

/* /partials/navbar.html.twig */
class __TwigTemplate_604a7c4e4680ea3c061c3a9cf724388412e5f5e5b94e2876a454d9a2971d19a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/partials/navbar.html.twig"));

        // line 1
        echo "    <!--navbar!-->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">LoLWiki.GG</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/personajes\">Personajes</a>
        </li>   
      </ul>
       <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <button id=\"botonOscuro\">Modo oscuro!</button>
        </li>   
      </ul>
  
    </div>
    
      ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [0 => "IS_AUTHENTICATED_FULLY"], "method", false, false, false, 22)) {
            // line 23
            echo "        <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/logout\">Cierra sesión!</a>
        </li>   
      </ul>
      ";
        } else {
            // line 29
            echo "      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/login\">Inicia sesión!</a>
        </li>   
      </ul>
      ";
        }
        // line 35
        echo "    <div>
      <form class=\"form-inline my-2 my-lg-0\" style=\"display:flex\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Busca personajes\" aria-label=\"Search\" id=\"texto_buscador\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\" id=\"buscador\">Buscar!</button>
      </form>
  </div>
</nav>
<!--navbar-->
    ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/partials/navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 35,  76 => 29,  68 => 23,  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!--navbar!-->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"/\">LoLWiki.GG</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"/personajes\">Personajes</a>
        </li>   
      </ul>
       <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
          <button id=\"botonOscuro\">Modo oscuro!</button>
        </li>   
      </ul>
  
    </div>
    
      {% if app.user ('IS_AUTHENTICATED_FULLY') %}
        <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/logout\">Cierra sesión!</a>
        </li>   
      </ul>
      {% else %}
      <ul class=\"navbar-nav\">
        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"/login\">Inicia sesión!</a>
        </li>   
      </ul>
      {% endif %}
    <div>
      <form class=\"form-inline my-2 my-lg-0\" style=\"display:flex\">
      <input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Busca personajes\" aria-label=\"Search\" id=\"texto_buscador\">
      <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\" id=\"buscador\">Buscar!</button>
      </form>
  </div>
</nav>
<!--navbar-->
    ", "/partials/navbar.html.twig", "/home/raimon/Documentos/proyectoRaimonPagina/templates/partials/navbar.html.twig");
    }
}
