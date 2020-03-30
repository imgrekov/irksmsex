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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/second/socials.htm */
class __TwigTemplate_7f2bb5e5ecf5a30ca8e36dd4a0acacbe5d6c230713be9d87c8dbfa9a063cccac extends \Twig\Template
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
  <div class=\"socials\">
    <a href=\"#!\">
      <i class=\"fa fa-vk\"></i>
    </a>
    <a href=\"#!\">
      <i class=\"fa fa-facebook-square\"></i>
    </a>
    <a href=\"#!\">
      <i class=\"fa fa-odnoklassniki\"></i>
    </a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/second/socials.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"titlefoot\">
  <div class=\"socials\">
    <a href=\"#!\">
      <i class=\"fa fa-vk\"></i>
    </a>
    <a href=\"#!\">
      <i class=\"fa fa-facebook-square\"></i>
    </a>
    <a href=\"#!\">
      <i class=\"fa fa-odnoklassniki\"></i>
    </a>
  </div>
</div>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/second/socials.htm", "");
    }
}
