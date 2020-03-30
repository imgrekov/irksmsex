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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/edit-advert.htm */
class __TwigTemplate_c6cb92149de73a20197a08f35609ec8331fe49af82caeda6354a63504cc0c973 extends \Twig\Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", [], "any", false, false, false, 3);
        // line 4
        echo "


";
        // line 7
        if (($context["record"] ?? null)) {
            // line 8
            echo "

<div class=\"advert-edit\">
  <h1 class=\"advert-edit__title\">Редактировать объявление</h1>
  <!-- /.advert-edit__title -->
  <p class=\"advert-edit__desc\">Активируй, меняй текст и изображения.</p>
  <!-- /.advert-edir__desc -->

  <div class=\"ad-info\">
    <h3>Информация об&nbsp;объявлении</h3>
    <p>
      Объявление:
      ";
            // line 20
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 20) == true)) {
                // line 21
                echo "      <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
      ";
            } else {
                // line 23
                echo "      <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
      ";
            }
            // line 25
            echo "    </p>

    <p>
      <!-- Текст в соответствии с категорией объявления -->
      Категория:
      ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 30) == "ona-on")) {
                // line 31
                echo "      <span class=\"badge badge-info\">Девушка ищет парня</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 32
($context["record"] ?? null), "category", [], "any", false, false, false, 32) == "on-ona")) {
                // line 33
                echo "      <span class=\"badge badge-info\">Парень ищет девушку</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 34
($context["record"] ?? null), "category", [], "any", false, false, false, 34) == "on-on")) {
                // line 35
                echo "      <span class=\"badge badge-info\">Парень ищет парня</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 36
($context["record"] ?? null), "category", [], "any", false, false, false, 36) == "ona-ona")) {
                // line 37
                echo "      <span class=\"badge badge-info\">Девушка ищет девушку</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 38
($context["record"] ?? null), "category", [], "any", false, false, false, 38) == "free")) {
                // line 39
                echo "      <span class=\"badge badge-info\">Досуг в Иркутске</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 40
($context["record"] ?? null), "category", [], "any", false, false, false, 40) == "services")) {
                // line 41
                echo "      <span class=\"badge badge-info\">Услуги массажа</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 42
($context["record"] ?? null), "category", [], "any", false, false, false, 42) == "family")) {
                // line 43
                echo "      <span class=\"badge badge-info\">Семейные пары</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
($context["record"] ?? null), "category", [], "any", false, false, false, 44) == "flirt")) {
                // line 45
                echo "      <span class=\"badge badge-info\">Свободные отношения</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
($context["record"] ?? null), "category", [], "any", false, false, false, 46) == "realty")) {
                // line 47
                echo "      <span class=\"badge badge-info\">Недвижимость</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
($context["record"] ?? null), "category", [], "any", false, false, false, 48) == "arenda")) {
                // line 49
                echo "      <span class=\"badge badge-info\">Аренда квартир на сутки</span> <!-- /.state-category -->
      ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
($context["record"] ?? null), "category", [], "any", false, false, false, 50) == "work")) {
                // line 51
                echo "      <span class=\"badge badge-info\">Работа в Иркутске</span> <!-- /.state-category -->
      ";
            } else {
                // line 53
                echo "      <span class=\"d-block badge badge-danger\">Ошибка. Категория не найдена</span> <!-- /.badge-danger -->
      ";
            }
            // line 55
            echo "    </p>
  </div>

  ";
            // line 58
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editAdvert"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 59
            echo "
  <hr class=\"my-3\">

  <button class=\"btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"
    title=\"Удалить или деактивировать объявления\" href=\"javascript:;\" onclick=\"\$('.advert-advance').toggle()\">
    Дополнительные функции
  </button>

  <div class=\"advert-advance\" style=\"display: none\">

    <!-- Удалить объявление -->
    ";
            // line 70
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditDelete", ["redirect" => "/advert/edit-success", "data-request-flash" => true]]);
            echo "
    <input name=\"id\" type=\"hidden\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">
    <div class=\"form-group\">
      <span class=\"advert-edit-deactivate__text\" data-toggle=\"tooltip\" data-placement=\"bottom\"
        title=\"Безвозвратно\">Удалить объявление</span>
      <button class=\"btn btn-danger btn-sm\">Удалить</button>
    </div>
    ";
            // line 77
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

  </div> <!-- /.advert-advance -->

</div> <!-- /.advert-edit -->



";
        } else {
            // line 86
            echo "
<div class=\"err\">
  <img src=\"";
            // line 88
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/errors/404.svg");
            echo "\" alt=\"404 Ошибка\">
  <h1 class=\"text-right\">";
            // line 89
            echo ($context["notFoundMessage"] ?? null);
            echo "</h1>
</div> <!-- /.err -->

";
        }
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/edit-advert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 89,  192 => 88,  188 => 86,  176 => 77,  167 => 71,  163 => 70,  150 => 59,  146 => 58,  141 => 55,  137 => 53,  133 => 51,  131 => 50,  128 => 49,  126 => 48,  123 => 47,  121 => 46,  118 => 45,  116 => 44,  113 => 43,  111 => 42,  108 => 41,  106 => 40,  103 => 39,  101 => 38,  98 => 37,  96 => 36,  93 => 35,  91 => 34,  88 => 33,  86 => 32,  83 => 31,  81 => 30,  74 => 25,  70 => 23,  66 => 21,  64 => 20,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}



{% if record %}


<div class=\"advert-edit\">
  <h1 class=\"advert-edit__title\">Редактировать объявление</h1>
  <!-- /.advert-edit__title -->
  <p class=\"advert-edit__desc\">Активируй, меняй текст и изображения.</p>
  <!-- /.advert-edir__desc -->

  <div class=\"ad-info\">
    <h3>Информация об&nbsp;объявлении</h3>
    <p>
      Объявление:
      {% if record.state == true %}
      <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
      {% else %}
      <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
      {% endif %}
    </p>

    <p>
      <!-- Текст в соответствии с категорией объявления -->
      Категория:
      {% if record.category == 'ona-on' %}
      <span class=\"badge badge-info\">Девушка ищет парня</span> <!-- /.state-category -->
      {% elseif record.category == 'on-ona' %}
      <span class=\"badge badge-info\">Парень ищет девушку</span> <!-- /.state-category -->
      {% elseif record.category == 'on-on' %}
      <span class=\"badge badge-info\">Парень ищет парня</span> <!-- /.state-category -->
      {% elseif record.category == 'ona-ona' %}
      <span class=\"badge badge-info\">Девушка ищет девушку</span> <!-- /.state-category -->
      {% elseif record.category == 'free' %}
      <span class=\"badge badge-info\">Досуг в Иркутске</span> <!-- /.state-category -->
      {% elseif record.category == 'services' %}
      <span class=\"badge badge-info\">Услуги массажа</span> <!-- /.state-category -->
      {% elseif record.category == 'family' %}
      <span class=\"badge badge-info\">Семейные пары</span> <!-- /.state-category -->
      {% elseif record.category == 'flirt' %}
      <span class=\"badge badge-info\">Свободные отношения</span> <!-- /.state-category -->
      {% elseif record.category == 'realty' %}
      <span class=\"badge badge-info\">Недвижимость</span> <!-- /.state-category -->
      {% elseif record.category == 'arenda' %}
      <span class=\"badge badge-info\">Аренда квартир на сутки</span> <!-- /.state-category -->
      {% elseif record.category == 'work' %}
      <span class=\"badge badge-info\">Работа в Иркутске</span> <!-- /.state-category -->
      {% else %}
      <span class=\"d-block badge badge-danger\">Ошибка. Категория не найдена</span> <!-- /.badge-danger -->
      {% endif %}
    </p>
  </div>

  {% component 'editAdvert' %}

  <hr class=\"my-3\">

  <button class=\"btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"
    title=\"Удалить или деактивировать объявления\" href=\"javascript:;\" onclick=\"\$('.advert-advance').toggle()\">
    Дополнительные функции
  </button>

  <div class=\"advert-advance\" style=\"display: none\">

    <!-- Удалить объявление -->
    {{ form_ajax('onEditDelete', { redirect: \"/advert/edit-success\", 'data-request-flash': true } ) }}
    <input name=\"id\" type=\"hidden\" value=\"{{ record.id }}\">
    <div class=\"form-group\">
      <span class=\"advert-edit-deactivate__text\" data-toggle=\"tooltip\" data-placement=\"bottom\"
        title=\"Безвозвратно\">Удалить объявление</span>
      <button class=\"btn btn-danger btn-sm\">Удалить</button>
    </div>
    {{ form_close() }}

  </div> <!-- /.advert-advance -->

</div> <!-- /.advert-edit -->



{% else %}

<div class=\"err\">
  <img src=\"{{ 'assets/images/errors/404.svg'|theme }}\" alt=\"404 Ошибка\">
  <h1 class=\"text-right\">{{ notFoundMessage|raw }}</h1>
</div> <!-- /.err -->

{% endif %}", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/edit-advert.htm", "");
    }
}
