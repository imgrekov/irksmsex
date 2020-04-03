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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/footer.htm */
class __TwigTemplate_eacaa388eea0c6b4a60ae489b66d7044069581854e718804bf25b86a877e4d63 extends \Twig\Template
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
        echo "<div class=\"titlefoot\">
  <a rel='nofollow' class=\"btn btn-light btn-sm\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">На главную</a>
</div>

<footer class=\"footer\">
  <div class=\"admin\">Администратор: <b>info@irksmsex.ru</b></div>
  <p class=\"copy\">Знакомства в Иркутске</p>
</footer>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"titlefoot\">
  <a rel='nofollow' class=\"btn btn-light btn-sm\" href=\"{{ 'home'|page }}\">На главную</a>
</div>

<footer class=\"footer\">
  <div class=\"admin\">Администратор: <b>info@irksmsex.ru</b></div>
  <p class=\"copy\">Знакомства в Иркутске</p>
</footer>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/footer.htm", "");
    }
}
