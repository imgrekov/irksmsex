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
      <!-- /.ad-info__stats-wrap-item -->
      <p class=\"ad-info__stats-wrap-item\">
        Выделено:
        ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "highlight", [], "any", false, false, false, 31) == "on")) {
                // line 32
                echo "        <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
        ";
            } else {
                // line 34
                echo "        <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
        ";
            }
            // line 36
            echo "      </p>
      <!-- /.ad-info__stats-wrap-item -->

      <p class=\"ad-info__stats-wrap-item\">
        <!-- Текст в соответствии с категорией объявления -->
        Категория:
        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 42) == "categories-ona-on")) {
                // line 43
                echo "        <span class=\"state state-category\">Девушка ищет парня</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
($context["record"] ?? null), "category", [], "any", false, false, false, 44) == "categories-on-ona")) {
                // line 45
                echo "        <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 46
($context["record"] ?? null), "category", [], "any", false, false, false, 46) == "categories-on-on")) {
                // line 47
                echo "        <span class=\"state state-category\">Парень ищет парня</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 48
($context["record"] ?? null), "category", [], "any", false, false, false, 48) == "categories-ona-ona")) {
                // line 49
                echo "        <span class=\"state state-category\">Девушка ищет девушку</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 50
($context["record"] ?? null), "category", [], "any", false, false, false, 50) == "categories-free")) {
                // line 51
                echo "        <span class=\"state state-category\">Досуг в Иркутске</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 52
($context["record"] ?? null), "category", [], "any", false, false, false, 52) == "categories-services")) {
                // line 53
                echo "        <span class=\"state state-category\">Услуги массажа</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 54
($context["record"] ?? null), "category", [], "any", false, false, false, 54) == "categories-family")) {
                // line 55
                echo "        <span class=\"state state-category\">Семейные пары</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 56
($context["record"] ?? null), "category", [], "any", false, false, false, 56) == "categories-flirt")) {
                // line 57
                echo "        <span class=\"state state-category\">Свободные отношения</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 58
($context["record"] ?? null), "category", [], "any", false, false, false, 58) == "categories-realty")) {
                // line 59
                echo "        <span class=\"state state-category\">Недвижимость</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 60
($context["record"] ?? null), "category", [], "any", false, false, false, 60) == "categories-arenda")) {
                // line 61
                echo "        <span class=\"state state-category\">Аренда квартир на сутки</span> <!-- /.state-category -->
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 62
($context["record"] ?? null), "category", [], "any", false, false, false, 62) == "categories-work")) {
                // line 63
                echo "        <span class=\"state state-category\">Работа в Иркутске</span> <!-- /.state-category -->
        ";
            } else {
                // line 65
                echo "        <span class=\"badge badge-danger\">Ошибка: 404 — Not Found</span> <!-- /.badge-danger -->
        ";
            }
            // line 67
            echo "      </p>
      <!-- /.ad-info__stats-wrap-item -->

    </div>
    <!-- /.ad-info__stats-wrap -->

  </div>

  ";
            // line 75
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("editAdvert"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 76
            echo "
  <hr class=\"my-3\">

  <button class=\"btn btn-outline-secondary btn-sm\" type=\"button\" data-toggle=\"tooltip\" data-placement=\"right\"
    title=\"Удалить или деактивировать объявления\" href=\"javascript:;\" onclick=\"\$('.advert-advance').toggle()\">
    Дополнительные функции
  </button>

  <div class=\"advert-advance\" style=\"display: none\">

    <!-- Удалить объявление -->
    ";
            // line 87
            echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditDelete", ["redirect" => "/advert/delete-success", "data-request-flash" => true]]);
            echo "
    <input name=\"id\" type=\"hidden\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\">
    <div class=\"form-group\">
      <span class=\"advert-edit-deactivate__text\" data-toggle=\"tooltip\" data-placement=\"bottom\"
        title=\"Безвозвратно\">Удалить объявление</span>
      <button class=\"btn btn-danger btn-sm\">Удалить</button>
    </div>
    ";
            // line 94
            echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
            echo "

  </div> <!-- /.advert-advance -->

</div> <!-- /.advert-edit -->



";
        } else {
            // line 103
            echo "
<div class=\"err\">
  <img src=\"";
            // line 105
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/errors/404.svg");
            echo "\" alt=\"404 Ошибка\">
  <h1 class=\"text-right\">";
            // line 106
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
        return array (  220 => 106,  216 => 105,  212 => 103,  200 => 94,  191 => 88,  187 => 87,  174 => 76,  170 => 75,  160 => 67,  156 => 65,  152 => 63,  150 => 62,  147 => 61,  145 => 60,  142 => 59,  140 => 58,  137 => 57,  135 => 56,  132 => 55,  130 => 54,  127 => 53,  125 => 52,  122 => 51,  120 => 50,  117 => 49,  115 => 48,  112 => 47,  110 => 46,  107 => 45,  105 => 44,  102 => 43,  100 => 42,  92 => 36,  88 => 34,  84 => 32,  82 => 31,  76 => 27,  72 => 25,  68 => 23,  66 => 22,  50 => 8,  48 => 7,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
      <!-- /.ad-info__stats-wrap-item -->
      <p class=\"ad-info__stats-wrap-item\">
        Выделено:
        {% if record.highlight == 'on' %}
        <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
        {% else %}
        <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
        {% endif %}
      </p>
      <!-- /.ad-info__stats-wrap-item -->

      <p class=\"ad-info__stats-wrap-item\">
        <!-- Текст в соответствии с категорией объявления -->
        Категория:
        {% if record.category == 'categories-ona-on' %}
        <span class=\"state state-category\">Девушка ищет парня</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-on-ona' %}
        <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-on-on' %}
        <span class=\"state state-category\">Парень ищет парня</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-ona-ona' %}
        <span class=\"state state-category\">Девушка ищет девушку</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-free' %}
        <span class=\"state state-category\">Досуг в Иркутске</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-services' %}
        <span class=\"state state-category\">Услуги массажа</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-family' %}
        <span class=\"state state-category\">Семейные пары</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-flirt' %}
        <span class=\"state state-category\">Свободные отношения</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-realty' %}
        <span class=\"state state-category\">Недвижимость</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-arenda' %}
        <span class=\"state state-category\">Аренда квартир на сутки</span> <!-- /.state-category -->
        {% elseif record.category == 'categories-work' %}
        <span class=\"state state-category\">Работа в Иркутске</span> <!-- /.state-category -->
        {% else %}
        <span class=\"badge badge-danger\">Ошибка: 404 — Not Found</span> <!-- /.badge-danger -->
        {% endif %}
      </p>
      <!-- /.ad-info__stats-wrap-item -->

    </div>
    <!-- /.ad-info__stats-wrap -->

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
