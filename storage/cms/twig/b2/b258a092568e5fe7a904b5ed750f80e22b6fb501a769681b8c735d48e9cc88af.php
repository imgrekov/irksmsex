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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/account/deactivate_link.htm */
class __TwigTemplate_04ee2bf4540b78a84badc29ee316cb5b99edfa90c140594af6a79c87d9ca069c extends \Twig\Template
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
        echo "<button class=\"profile-edit-deactivate btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Удалить все объявления\" href=\"javascript:;\"
\tonclick=\"\$('#accountDeactivateForm').toggle()\">
\tДеактивировать аккаунт
</button>

<div id=\"accountDeactivateForm\" style=\"display: none\">
\t";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onDeactivate"]);
        echo "

\t<div class=\"profile-deactivate\">
\t\t<h2 class=\"text-monospace profile-edit-title\">Твой аккаунт будет заморожен, а&nbsp;объявления удалены</h2>
\t\t<small>Ты сможешь заново активировать аккаунт войдя в него.</small>
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"accountDeletePassword\">Чтобы продолжить, введи пароль:</label>
\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountDeletePassword\" placeholder=\"Текущий пароль\">
\t</div>

\t<button type=\"submit\" class=\"btn btn-danger btn-sm\">Деактивировать</button>
\t<a class=\"btn btn-outline-primary btn-sm\" href=\"javascript:;\" onclick=\"\$('#accountDeactivateForm').toggle()\">Я
\t\tпередумал</a>
\t";
        // line 22
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/account/deactivate_link.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"profile-edit-deactivate btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Удалить все объявления\" href=\"javascript:;\"
\tonclick=\"\$('#accountDeactivateForm').toggle()\">
\tДеактивировать аккаунт
</button>

<div id=\"accountDeactivateForm\" style=\"display: none\">
\t{{ form_ajax('onDeactivate') }}

\t<div class=\"profile-deactivate\">
\t\t<h2 class=\"text-monospace profile-edit-title\">Твой аккаунт будет заморожен, а&nbsp;объявления удалены</h2>
\t\t<small>Ты сможешь заново активировать аккаунт войдя в него.</small>
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"accountDeletePassword\">Чтобы продолжить, введи пароль:</label>
\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountDeletePassword\" placeholder=\"Текущий пароль\">
\t</div>

\t<button type=\"submit\" class=\"btn btn-danger btn-sm\">Деактивировать</button>
\t<a class=\"btn btn-outline-primary btn-sm\" href=\"javascript:;\" onclick=\"\$('#accountDeactivateForm').toggle()\">Я
\t\tпередумал</a>
\t{{ form_close() }}
</div>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/account/deactivate_link.htm", "");
    }
}
