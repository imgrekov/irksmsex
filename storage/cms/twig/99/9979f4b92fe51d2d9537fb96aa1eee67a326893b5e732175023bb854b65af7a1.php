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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/second/footer-home.htm */
class __TwigTemplate_31eddfeaaece4da53c128ca4a36bd3b0b9d20d04742a0c35c1a69682211d87ec extends \Twig\Template
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
        echo "<footer class=\"footer\">
  <div class=\"admin\">Администратор: <b>info@irksmsex.ru</b></div>
  <p class=\"copy\">Знакомства в Иркутске</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/second/footer-home.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer\">
  <div class=\"admin\">Администратор: <b>info@irksmsex.ru</b></div>
  <p class=\"copy\">Знакомства в Иркутске</p>
</footer>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/second/footer-home.htm", "");
    }
}
