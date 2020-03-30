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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/account/not-registered.htm */
class __TwigTemplate_d025029553ccb9a7044cafda5aa35ca3387065f71421b7690bf3a366aa5135f5 extends \Twig\Template
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
        echo "<div class=\"not-registered\">
  <div class=\"not-registered__desc\">

    <h1 class=\"mb-4\">Мы&nbsp;не&nbsp;знаем, кто&nbsp;вы <span>&darr;</span></h1>
    <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("user/account");
        echo "\" class=\"btn btn-success\">Зарегистрируйтесь или&nbsp;Войдите</a>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/account/not-registered.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"not-registered\">
  <div class=\"not-registered__desc\">

    <h1 class=\"mb-4\">Мы&nbsp;не&nbsp;знаем, кто&nbsp;вы <span>&darr;</span></h1>
    <a href=\"{{ 'user/account'|page }}\" class=\"btn btn-success\">Зарегистрируйтесь или&nbsp;Войдите</a>

  </div>

</div>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/account/not-registered.htm", "");
    }
}
