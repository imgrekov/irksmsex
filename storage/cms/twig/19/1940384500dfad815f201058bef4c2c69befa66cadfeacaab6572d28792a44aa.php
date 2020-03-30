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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/header.htm */
class __TwigTemplate_6e1d3879474c6fc97e848df8ac8c18e0142ef0b1ca94197d78595529aacb2a6f extends \Twig\Template
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
        echo "<header class=\"header\">
  <a title=\"Главная\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
    <img title=\"Доска объявлений в Иркутске\" src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main.svg");
        echo "\"
      alt=\"смс знакомства без регистрации в Иркутске\">
  </a>
</header>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
  <a title=\"Главная\" href=\"{{ 'home'|page }}\">
    <img title=\"Доска объявлений в Иркутске\" src=\"{{ 'assets/images/main.svg'|theme }}\"
      alt=\"смс знакомства без регистрации в Иркутске\">
  </a>
</header>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/header.htm", "");
    }
}
