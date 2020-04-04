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

/* D:\OSPanel\domains\irksmsex.ru/plugins/grekov/advertslist/components/createadvert/default.htm */
class __TwigTemplate_cb3dbf7169d69d1298a0ec6859ea1b1ba1dc5625a4fb940f95c820e8f9329a9a extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onCreateAdvert", ["class" => "pay-form", "id" => "advert-create-form", "redirect" => "/advert/create-success"]]);
        echo "

<input name=\"author\" type=\"hidden\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 3), "html", null, true);
        echo "\">

<fieldset class=\"pay-form__info\">

  <div class=\"pay-form__category\">
    <label>
      Категория объявления
      <select name=\"category\" id=\"category\" form=\"advert-create-form\" required>
        <option value=\"categories-on-ona\">Парень ищет девушку</option>
        <option value=\"categories-ona-on\">Девушка ищет парня</option>
        <option value=\"categories-on-on\">Парень ищет парня</option>
        <option value=\"categories-ona-ona\">Девушка ищет девушку</option>
        <option value=\"categories-free\">Досуг в Иркутске</option>
        <option value=\"categories-services\">Услуги массажа</option>
        <option value=\"categories-family\">Семейные пары</option>
        <option value=\"categories-flirt\">Флирт</option>
        <option value=\"categories-realty\">Недвижимость</option>
        <option value=\"categories-arenda\">Аренда квартир на сутки</option>
        <option value=\"categories-work\">Работа/подработка</option>
      </select>
    </label>
  </div>

  <div class=\"pay-form__text\">
    <label for=\"text\">Текст объявления</label>
    <textarea id=\"text\" name=\"text\" autofocus required></textarea>
  </div>

</fieldset>

<button type=\"submit\" class=\"btn btn-success mt-4\">Создать</button>

";
        // line 35
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/plugins/grekov/advertslist/components/createadvert/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 35,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onCreateAdvert', { class: \"pay-form\", id: \"advert-create-form\", redirect: \"/advert/create-success\" }) }}

<input name=\"author\" type=\"hidden\" value=\"{{ user.email }}\">

<fieldset class=\"pay-form__info\">

  <div class=\"pay-form__category\">
    <label>
      Категория объявления
      <select name=\"category\" id=\"category\" form=\"advert-create-form\" required>
        <option value=\"categories-on-ona\">Парень ищет девушку</option>
        <option value=\"categories-ona-on\">Девушка ищет парня</option>
        <option value=\"categories-on-on\">Парень ищет парня</option>
        <option value=\"categories-ona-ona\">Девушка ищет девушку</option>
        <option value=\"categories-free\">Досуг в Иркутске</option>
        <option value=\"categories-services\">Услуги массажа</option>
        <option value=\"categories-family\">Семейные пары</option>
        <option value=\"categories-flirt\">Флирт</option>
        <option value=\"categories-realty\">Недвижимость</option>
        <option value=\"categories-arenda\">Аренда квартир на сутки</option>
        <option value=\"categories-work\">Работа/подработка</option>
      </select>
    </label>
  </div>

  <div class=\"pay-form__text\">
    <label for=\"text\">Текст объявления</label>
    <textarea id=\"text\" name=\"text\" autofocus required></textarea>
  </div>

</fieldset>

<button type=\"submit\" class=\"btn btn-success mt-4\">Создать</button>

{{ form_close() }}", "D:\\OSPanel\\domains\\irksmsex.ru/plugins/grekov/advertslist/components/createadvert/default.htm", "");
    }
}
