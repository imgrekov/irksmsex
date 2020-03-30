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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/user-status.htm */
class __TwigTemplate_8a68a9b46552cd4b645d8ef34cecc88af42c2ed8ee980850b992a31446f9a92e extends \Twig\Template
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
        echo "<div class=\"user-status\">
  ";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "  <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user/profile");
            echo "\" class=\"btn btn-primary btn-sm\">Личный кабинет</a>
  <a href=\"";
            // line 4
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user/account");
            echo "\" class=\"btn btn-info btn-sm\">Настройки</a>
  <a href=\"javascript:;\" data-request=\"onLogout\" class=\"btn btn-danger btn-sm\">Выйти</a>
  <!-- /.logout -->

  ";
        } else {
            // line 9
            echo "  <a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("user/account");
            echo "\" class=\"btn btn-light btn-sm user-status__link\">Регистрация и Вход</a>
  <!-- /.user-status__link -->
  ";
        }
        // line 12
        echo "</div>
<!-- /.user-status -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/user-status.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  55 => 9,  47 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"user-status\">
  {% if user %}
  <a href=\"{{ 'user/profile'|page }}\" class=\"btn btn-primary btn-sm\">Личный кабинет</a>
  <a href=\"{{ 'user/account'|page }}\" class=\"btn btn-info btn-sm\">Настройки</a>
  <a href=\"javascript:;\" data-request=\"onLogout\" class=\"btn btn-danger btn-sm\">Выйти</a>
  <!-- /.logout -->

  {% else %}
  <a href=\"{{ 'user/account'|page }}\" class=\"btn btn-light btn-sm user-status__link\">Регистрация и Вход</a>
  <!-- /.user-status__link -->
  {% endif %}
</div>
<!-- /.user-status -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/user-status.htm", "");
    }
}
