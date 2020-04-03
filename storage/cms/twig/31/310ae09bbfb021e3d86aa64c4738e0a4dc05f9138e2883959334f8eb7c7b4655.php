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
  <p class=\"advert-edit__desc\">Активируйте, меняйте текст и добавляйте изображения.</p>
  <!-- /.advert-edir__desc -->

  <div class=\"ad-info\">

    <h3>Информация об&nbsp;объявлении</h3>
    <div class=\"ad-info__stats-wrap\">
      <p class=\"ad-info__stats-wrap-item\">
        Объявление:
        ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 22) == true)) {
                // line 23
                echo "        <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
        ";
            } else {
                // line 25
                echo "        <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
        ";
            }
            // line 27
            echo "      </p>
      <p class=\"ad-info__stats-wrap-item\">
        Выделено:
        ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "highlight", [], "any", false, false, false, 30) == "on")) {
                // line 31
                echo "        <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
        ";
            } else {
                // line 33
                echo "        <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
        ";
            }
            // line 35
            echo "      </p>
      <p class=\"ad-info__stats-wrap-item\">
        <!-- Текст в соответствии с категорией объявления -->
        Категория:
        ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 39) == "ona-on")) {
                // line 40
                echo "        <span class=\"badge badge-info\">Девушка ищет парня</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 41
($context["record"] ?? null), "category", [], "any", false, false, false, 41) == "on-ona")) {
                // line 42
                echo "        <span class=\"badge badge-info\">Парень ищет девушку</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 43
($context["record"] ?? null), "category", [], "any", false, false, false, 43) == "on-on")) {
                // line 44
                echo "        <span class=\"badge badge-info\">Парень ищет парня</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 45
($context["record"] ?? null), "category", [], "any", false, false, false, 45) == "ona-ona")) {
                // line 46
                echo "        <span class=\"badge badge-info\">Девушка ищет девушку</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 47
($context["record"] ?? null), "category", [], "any", false, false, false, 47) == "free")) {
                // line 48
                echo "        <span class=\"badge badge-info\">Досуг в Иркутске</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 49
($context["record"] ?? null), "category", [], "any", false, false, false, 49) == "services")) {
                // line 50
                echo "        <span class=\"badge badge-info\">Услуги массажа</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
($context["record"] ?? null), "category", [], "any", false, false, false, 51) == "family")) {
                // line 52
                echo "        <span class=\"badge badge-info\">Семейные пары</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 53
($context["record"] ?? null), "category", [], "any", false, false, false, 53) == "flirt")) {
                // line 54
                echo "        <span class=\"badge badge-info\">Свободные отношения</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 55
($context["record"] ?? null), "category", [], "any", false, false, false, 55) == "realty")) {
                // line 56
                echo "        <span class=\"badge badge-info\">Недвижимость</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 57
($context["record"] ?? null), "category", [], "any", false, false, false, 57) == "arenda")) {
                // line 58
                echo "        <span class=\"badge badge-info\">Аренда квартир на сутки</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 59
($context["record"] ?? null), "category", [], "any", false, false, false, 59) == "work")) {
                // line 60
                echo "        <span class=\"badge badge-info\">Работа в Иркутске</span> <!-- /.state-category -->
        ";
            } else {
                // line 62
                echo "        <span class=\"d-block badge badge-danger\">Ошибка. Категория не найдена</span> <!-- /.badge-danger -->
        ";
            }
            // line 64
            echo "      </p>
    </div>

  </div>

  ";
            // line 69
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editAdvert"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 70
            echo "
  <hr class=\"my-3\">

  <button class=\"btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"
    title=\"Удалить или деактивировать объявления\" href=\"javascript:;\" onclick=\"\$('.advert-advance').toggle()\">
    Дополнительные функции
  </button>

  <div class=\"advert-advance\" style=\"display: none\">

    <!-- Удалить объявление -->
    ";
            // line 81
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditDelete", ["redirect" => "/advert/delete-success", "data-request-flash" => true]]);
            echo "
    <input name=\"id\" type=\"hidden\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">
    <div class=\"form-group\">
      <span class=\"advert-edit-deactivate__text\" data-toggle=\"tooltip\" data-placement=\"bottom\"
        title=\"Безвозвратно\">Удалить объявление</span>
      <button class=\"btn btn-danger btn-sm\">Удалить</button>
    </div>
    ";
            // line 88
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

  </div> <!-- /.advert-advance -->

</div> <!-- /.advert-edit -->



";
        } else {
            // line 97
            echo "
<div class=\"err\">
  <img src=\"";
            // line 99
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/errors/404.svg");
            echo "\" alt=\"404 Ошибка\">
  <h1 class=\"text-right\">";
            // line 100
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
        return array (  214 => 100,  210 => 99,  206 => 97,  194 => 88,  185 => 82,  181 => 81,  168 => 70,  164 => 69,  157 => 64,  153 => 62,  149 => 60,  147 => 59,  144 => 58,  142 => 57,  139 => 56,  137 => 55,  134 => 54,  132 => 53,  129 => 52,  127 => 51,  124 => 50,  122 => 49,  119 => 48,  117 => 47,  114 => 46,  112 => 45,  109 => 44,  107 => 43,  104 => 42,  102 => 41,  99 => 40,  97 => 39,  91 => 35,  87 => 33,  83 => 31,  81 => 30,  76 => 27,  72 => 25,  68 => 23,  66 => 22,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
  <p class=\"advert-edit__desc\">Активируйте, меняйте текст и добавляйте изображения.</p>
  <!-- /.advert-edir__desc -->

  <div class=\"ad-info\">

    <h3>Информация об&nbsp;объявлении</h3>
    <div class=\"ad-info__stats-wrap\">
      <p class=\"ad-info__stats-wrap-item\">
        Объявление:
        {% if record.state == true %}
        <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
        {% else %}
        <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
        {% endif %}
      </p>
      <p class=\"ad-info__stats-wrap-item\">
        Выделено:
        {% if record.highlight == 'on' %}
        <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
        {% else %}
        <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
        {% endif %}
      </p>
      <p class=\"ad-info__stats-wrap-item\">
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

  </div>

  {% component 'editAdvert' %}

  <hr class=\"my-3\">

  <button class=\"btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"
    title=\"Удалить или деактивировать объявления\" href=\"javascript:;\" onclick=\"\$('.advert-advance').toggle()\">
    Дополнительные функции
  </button>

  <div class=\"advert-advance\" style=\"display: none\">

    <!-- Удалить объявление -->
    {{ form_ajax('onEditDelete', { redirect: \"/advert/delete-success\", 'data-request-flash': true } ) }}
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
