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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/adverts/add-advert.htm */
class __TwigTemplate_2df742ce015292dcfa3be096cd2f9c0f7281c306b482b962a2188139d4b0a837 extends \Twig\Template
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
        echo "<div class=\"infblock\">
  <a class=\"btn btn-warning btn-lg mb-3\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("create-advert");
        echo "\">Добавить объявление</a>
  <br>
  <a class=\"btn btn-secondary\" href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("help");
        echo "\">Как добавить объявление на сайт?</a>
</div>
<!-- /.infblock -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/adverts/add-advert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"infblock\">
  <a class=\"btn btn-warning btn-lg mb-3\" href=\"{{ 'create-advert'|page }}\">Добавить объявление</a>
  <br>
  <a class=\"btn btn-secondary\" href=\"{{ 'help'|page }}\">Как добавить объявление на сайт?</a>
</div>
<!-- /.infblock -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/adverts/add-advert.htm", "");
    }
}
