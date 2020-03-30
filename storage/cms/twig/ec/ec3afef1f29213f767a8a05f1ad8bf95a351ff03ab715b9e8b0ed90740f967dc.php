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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/partials/account/update.htm */
class __TwigTemplate_2a443faeb743df1a01d648f2ee606f366e17ea50a1ec9cb9fd3ace6693cc72fc extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate"]);
        echo "

<fieldset class=\"form-wrapper\">
\t<!-- <div class=\"form-group\">
\t\t<label for=\"accountName\">Имя</label>
\t\t<input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
\t</div> -->

\t";
        // line 9
        if ((($context["loginAttribute"] ?? null) == "username")) {
            // line 10
            echo "\t<div class=\"form-group\">
\t\t<label for=\"accountName\">Имя пользователя</label>
\t\t<input name=\"username\" type=\"text\" class=\"form-control\" id=\"userName\" value=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
\t</div>
\t";
        }
        // line 15
        echo "
\t<h3 class=\"form-wrapper__title\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Её нельзя изменить\">
\t\tТекущая почта
\t\t<span>*</span>
\t</h3>
\t<div class=\"form-group\">
\t\t<input name=\"email\" type=\"email\" class=\"form-control\" id=\"Email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 21), "html", null, true);
        echo "\" disabled>
\t</div>

\t<!-- на всякий случай сохраню -->
\t<!-- <div class=\"form-group\">
\t\t<label for=\"accountEmail\">Почта</label>
\t\t<input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
\t</div> -->

</fieldset>


<fieldset class=\"form-wrapper\">

\t<h3>Новый пароль</h3>

\t<div class=\"form-group\">
\t\t<label for=\"accountPassword\">Обновите пароль</label>
\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Введите новый пароль\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"accountPasswordConfirm\">Подтвердите его</label>
\t\t<input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\" placeholder=\"Подтвердите его\">
\t</div>
</fieldset>


<button type=\"submit\" class=\"btn btn-success\">Сохранить</button>

";
        // line 51
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/account/update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 51,  80 => 27,  71 => 21,  63 => 15,  57 => 12,  53 => 10,  51 => 9,  45 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onUpdate') }}

<fieldset class=\"form-wrapper\">
\t<!-- <div class=\"form-group\">
\t\t<label for=\"accountName\">Имя</label>
\t\t<input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
\t</div> -->

\t{% if loginAttribute == \"username\" %}
\t<div class=\"form-group\">
\t\t<label for=\"accountName\">Имя пользователя</label>
\t\t<input name=\"username\" type=\"text\" class=\"form-control\" id=\"userName\" value=\"{{ user.username }}\">
\t</div>
\t{% endif %}

\t<h3 class=\"form-wrapper__title\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"Её нельзя изменить\">
\t\tТекущая почта
\t\t<span>*</span>
\t</h3>
\t<div class=\"form-group\">
\t\t<input name=\"email\" type=\"email\" class=\"form-control\" id=\"Email\" value=\"{{ user.email }}\" disabled>
\t</div>

\t<!-- на всякий случай сохраню -->
\t<!-- <div class=\"form-group\">
\t\t<label for=\"accountEmail\">Почта</label>
\t\t<input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
\t</div> -->

</fieldset>


<fieldset class=\"form-wrapper\">

\t<h3>Новый пароль</h3>

\t<div class=\"form-group\">
\t\t<label for=\"accountPassword\">Обновите пароль</label>
\t\t<input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\" placeholder=\"Введите новый пароль\">
\t</div>

\t<div class=\"form-group\">
\t\t<label for=\"accountPasswordConfirm\">Подтвердите его</label>
\t\t<input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\" placeholder=\"Подтвердите его\">
\t</div>
</fieldset>


<button type=\"submit\" class=\"btn btn-success\">Сохранить</button>

{{ form_close() }}", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/partials/account/update.htm", "");
    }
}
