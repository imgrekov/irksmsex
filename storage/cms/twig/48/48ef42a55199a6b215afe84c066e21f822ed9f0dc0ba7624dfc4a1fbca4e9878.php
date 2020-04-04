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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/adverts/success.htm */
class __TwigTemplate_6ebbe46b4b893bec1326ee23e150b239a3c11fc2d419d49ace24f5004986208a extends \Twig\Template
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
        // line 1
        echo "<div class=\"success\">

  <div class=\"alert alert-success\" role=\"alert\">
    <h1>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
    <!-- title -->
    <small>";
        // line 6
        echo twig_escape_filter($this->env, ($context["text"] ?? null), "html", null, true);
        echo "&nbsp;<span>&darr;</span></small>
    <!-- description -->
  </div>
  <!-- message -->

  <a href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("user/profile.htm");
        echo "\" class=\"btn btn-info\" type=\"button\" data-toggle=\"tooltip\"
    data-placement=\"right\" title=\"Активировать и&nbsp;редактировать\">В личный кабинет</a>
  <!-- /.success-button -->

</div>
<!-- /.success -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/adverts/success.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"success\">

  <div class=\"alert alert-success\" role=\"alert\">
    <h1>{{ title }}</h1>
    <!-- title -->
    <small>{{ text }}&nbsp;<span>&darr;</span></small>
    <!-- description -->
  </div>
  <!-- message -->

  <a href=\"{{ 'user/profile.htm'|page }}\" class=\"btn btn-info\" type=\"button\" data-toggle=\"tooltip\"
    data-placement=\"right\" title=\"Активировать и&nbsp;редактировать\">В личный кабинет</a>
  <!-- /.success-button -->

</div>
<!-- /.success -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/adverts/success.htm", "");
    }
}
