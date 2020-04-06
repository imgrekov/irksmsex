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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/user/profile.htm */
class __TwigTemplate_fe8765d51db86886573c88af92908c1dc138833af994228c8ef00f06c1c2f885 extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["userAdverts"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["userAdverts"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["userAdverts"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["userAdverts"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["userAdverts"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["userAdverts"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "
<div class=\"profile\">

  <div class=\"profile-head\">
    <h1 class=\"profile__title\">Личный кабинет</h1>
    <a class=\"btn btn-outline-primary profile__add-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("create-advert");
        echo "\">Создать объявлнение</a>
  </div>
  <!-- /.profile-head -->

  <hr>

  <div class=\"profile-hero\">
    <h2 class=\"profile-hero__title\">Ваши объявлнения</h2>


    <ul class=\"profile-hero__list\">

      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 24) == twig_get_attribute($this->env, $this->source, $context["record"], "author", [], "any", false, false, false, 24))) {
                // line 25
                echo "
      <li class=\"profile-hero__item\">

        <div class=\"row\">

          <div class=\"col-sm-8\">

            <div class=\"profile-hero__info\">
              <span class=\"timehead\">
                ";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "updated_at", [], "any", false, false, false, 34), "Создано d-m-Y, в H:i"), "html", null, true);
                echo "
              </span> <!-- /.timehead -->

              <div class=\"profile-hero__item-text\">

                ";
                // line 39
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 39) == "vip")) {
                    // line 40
                    echo "                <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vip.png");
                    echo "\" alt=\"vip\" class=\"id\">
                ";
                }
                // line 42
                echo "
                ";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 43);
                echo "
              </div> <!-- /.profile-hero__item-text -->


              ";
                // line 47
                if (twig_get_attribute($this->env, $this->source, $context["record"], "attachimage1", [], "any", false, false, false, 47)) {
                    // line 48
                    echo "              <div class=\"advert__imgs-wrap count_imgs-parent\">
                <a class=\"advert__image\" href=\"";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage1", [], "any", false, false, false, 49), "path", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" data-toggle=\"lightbox\" data-type=\"image\">
                  <img src=\"";
                    // line 50
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage1", [], "any", false, false, false, 50), "path", [], "any", false, false, false, 50), "html", null, true);
                    echo "\" alt=\"Фото1\">
                </a>
                <!-- Изображение первое -->

                ";
                    // line 54
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "attachimage2", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "                <a class=\"advert__image\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage2", [], "any", false, false, false, 55), "path", [], "any", false, false, false, 55), "html", null, true);
                        echo "\" data-toggle=\"lightbox\" data-type=\"image\">
                  <img src=\"";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage2", [], "any", false, false, false, 56), "path", [], "any", false, false, false, 56), "html", null, true);
                        echo "\" alt=\"Фото1\">
                </a>
                ";
                    }
                    // line 59
                    echo "                <!-- Изображение второе -->
                ";
                    // line 60
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "attachimage3", [], "any", false, false, false, 60)) {
                        // line 61
                        echo "                <a class=\"advert__image\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage3", [], "any", false, false, false, 61), "path", [], "any", false, false, false, 61), "html", null, true);
                        echo "\" data-toggle=\"lightbox\" data-type=\"image\">
                  <img src=\"";
                        // line 62
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage3", [], "any", false, false, false, 62), "path", [], "any", false, false, false, 62), "html", null, true);
                        echo "\" alt=\"Фото1\">
                </a>
                ";
                    }
                    // line 65
                    echo "                <!-- Изображение третье -->

              </div>
              ";
                }
                // line 69
                echo "              <!-- Изображения к объявлению -->


              <span class=\"advert-id\">ID: ";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 72), "html", null, true);
                echo "</span>
              <!-- /.advert-id -->
            </div>
            <!-- /.profile-hero__info -->

          </div>
          <!-- /.col-md-8 -->


          <div class=\"col-sm-4\">
            <div class=\"profile-hero__status\">
              <p>
                Объявление:
                ";
                // line 85
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "state", [], "any", false, false, false, 85) == "on")) {
                    // line 86
                    echo "                <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
                ";
                } else {
                    // line 88
                    echo "                <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
                ";
                }
                // line 90
                echo "              </p>
              <p>
                Выделено:
                ";
                // line 93
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "highlight", [], "any", false, false, false, 93) == "on")) {
                    // line 94
                    echo "                <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
                ";
                } else {
                    // line 96
                    echo "                <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
                ";
                }
                // line 98
                echo "              </p>
              <p>
                <!-- Здесь посчитать количество картинок. Если изображений нет, то \"0\". Если есть, то их количество. -->
                Изображений добавлено: <span class=\"badge badge-primary count_imgs\">";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "imageCount", [], "any", false, false, false, 101), "html", null, true);
                echo "</span> <!-- /.count_imgs -->
              </p>
              <p>
                <!-- Текст в соответствии с категорией объявления -->
                Категория:
                ";
                // line 106
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 106) == "categories-ona-on")) {
                    // line 107
                    echo "                <span class=\"state state-category\">Девушка ищет парня</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 108
$context["record"], "category", [], "any", false, false, false, 108) == "categories-on-ona")) {
                    // line 109
                    echo "                <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 110
$context["record"], "category", [], "any", false, false, false, 110) == "categories-on-on")) {
                    // line 111
                    echo "                <span class=\"state state-category\">Парень ищет парня</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 112
$context["record"], "category", [], "any", false, false, false, 112) == "categories-ona-ona")) {
                    // line 113
                    echo "                <span class=\"state state-category\">Девушка ищет девушку</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 114
$context["record"], "category", [], "any", false, false, false, 114) == "categories-free")) {
                    // line 115
                    echo "                <span class=\"state state-category\">Досуг в Иркутске</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 116
$context["record"], "category", [], "any", false, false, false, 116) == "categories-services")) {
                    // line 117
                    echo "                <span class=\"state state-category\">Услуги массажа</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 118
$context["record"], "category", [], "any", false, false, false, 118) == "categories-family")) {
                    // line 119
                    echo "                <span class=\"state state-category\">Семейные пары</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 120
$context["record"], "category", [], "any", false, false, false, 120) == "categories-flirt")) {
                    // line 121
                    echo "                <span class=\"state state-category\">Свободные отношения</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 122
$context["record"], "category", [], "any", false, false, false, 122) == "categories-realty")) {
                    // line 123
                    echo "                <span class=\"state state-category\">Недвижимость</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 124
$context["record"], "category", [], "any", false, false, false, 124) == "categories-arenda")) {
                    // line 125
                    echo "                <span class=\"state state-category\">Аренда квартир на сутки</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 126
$context["record"], "category", [], "any", false, false, false, 126) == "categories-work")) {
                    // line 127
                    echo "                <span class=\"state state-category\">Работа в Иркутске</span> <!-- /.state-category -->
                ";
                } else {
                    // line 129
                    echo "                <span class=\"d-block badge badge-danger\">Ошибка: 404 — Not Found</span> <!-- /.badge-danger -->
                ";
                }
                // line 131
                echo "              </p>
            </div> <!-- /.profile-hero__status -->

            <hr>

            <a class=\"btn btn-success btn-sm profile-hero__action\"
              href=\"";
                // line 137
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 137)]);
                echo "\">Редактировать
              объявлнение</a>
            <!-- /.profile-hero__action -->
          </div>
          <!-- /.col-md-4 -->

        </div> <!-- /.row -->

      </li> <!-- /.profile-hero__item -->

      ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 148
            echo "      <li class=\"alert alert-danger advert-none\">
        <p>";
            // line 149
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo " <span data-toggle=\"tooltip\" data-placement=\"right\"
            title=\"Самое время создать\">&uarr;</span></p>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
    </ul>
    <!-- /.profile-hero__list -->
  </div>
  <!-- /.profile-hero -->

</div>
<!-- /.profile -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/user/profile.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 153,  312 => 149,  309 => 148,  292 => 137,  284 => 131,  280 => 129,  276 => 127,  274 => 126,  271 => 125,  269 => 124,  266 => 123,  264 => 122,  261 => 121,  259 => 120,  256 => 119,  254 => 118,  251 => 117,  249 => 116,  246 => 115,  244 => 114,  241 => 113,  239 => 112,  236 => 111,  234 => 110,  231 => 109,  229 => 108,  226 => 107,  224 => 106,  216 => 101,  211 => 98,  207 => 96,  203 => 94,  201 => 93,  196 => 90,  192 => 88,  188 => 86,  186 => 85,  170 => 72,  165 => 69,  159 => 65,  153 => 62,  148 => 61,  146 => 60,  143 => 59,  137 => 56,  132 => 55,  130 => 54,  123 => 50,  119 => 49,  116 => 48,  114 => 47,  107 => 43,  104 => 42,  98 => 40,  96 => 39,  88 => 34,  77 => 25,  71 => 24,  56 => 12,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = userAdverts.records %}
{% set displayColumn = userAdverts.displayColumn %}
{% set noRecordsMessage = userAdverts.noRecordsMessage %}
{% set detailsPage = userAdverts.detailsPage %}
{% set detailsKeyColumn = userAdverts.detailsKeyColumn %}
{% set detailsUrlParameter = userAdverts.detailsUrlParameter %}

<div class=\"profile\">

  <div class=\"profile-head\">
    <h1 class=\"profile__title\">Личный кабинет</h1>
    <a class=\"btn btn-outline-primary profile__add-link\" href=\"{{ 'create-advert'|page }}\">Создать объявлнение</a>
  </div>
  <!-- /.profile-head -->

  <hr>

  <div class=\"profile-hero\">
    <h2 class=\"profile-hero__title\">Ваши объявлнения</h2>


    <ul class=\"profile-hero__list\">

      {% for record in records if user.email == record.author %}

      <li class=\"profile-hero__item\">

        <div class=\"row\">

          <div class=\"col-sm-8\">

            <div class=\"profile-hero__info\">
              <span class=\"timehead\">
                {{ record.updated_at|date('Создано d-m-Y, в H:i') }}
              </span> <!-- /.timehead -->

              <div class=\"profile-hero__item-text\">

                {% if record.type == 'vip' %}
                <img src=\"{{ 'assets/images/vip.png'|theme }}\" alt=\"vip\" class=\"id\">
                {% endif %}

                {{ record.text|raw }}
              </div> <!-- /.profile-hero__item-text -->


              {% if record.attachimage1 %}
              <div class=\"advert__imgs-wrap count_imgs-parent\">
                <a class=\"advert__image\" href=\"{{ record.attachimage1.path }}\" data-toggle=\"lightbox\" data-type=\"image\">
                  <img src=\"{{ record.attachimage1.path }}\" alt=\"Фото1\">
                </a>
                <!-- Изображение первое -->

                {% if record.attachimage2 %}
                <a class=\"advert__image\" href=\"{{ record.attachimage2.path }}\" data-toggle=\"lightbox\" data-type=\"image\">
                  <img src=\"{{ record.attachimage2.path }}\" alt=\"Фото1\">
                </a>
                {% endif %}
                <!-- Изображение второе -->
                {% if record.attachimage3 %}
                <a class=\"advert__image\" href=\"{{ record.attachimage3.path }}\" data-toggle=\"lightbox\" data-type=\"image\">
                  <img src=\"{{ record.attachimage3.path }}\" alt=\"Фото1\">
                </a>
                {% endif %}
                <!-- Изображение третье -->

              </div>
              {% endif %}
              <!-- Изображения к объявлению -->


              <span class=\"advert-id\">ID: {{record.id}}</span>
              <!-- /.advert-id -->
            </div>
            <!-- /.profile-hero__info -->

          </div>
          <!-- /.col-md-8 -->


          <div class=\"col-sm-4\">
            <div class=\"profile-hero__status\">
              <p>
                Объявление:
                {% if record.state == 'on' %}
                <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
                {% else %}
                <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
                {% endif %}
              </p>
              <p>
                Выделено:
                {% if record.highlight == 'on' %}
                <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
                {% else %}
                <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
                {% endif %}
              </p>
              <p>
                <!-- Здесь посчитать количество картинок. Если изображений нет, то \"0\". Если есть, то их количество. -->
                Изображений добавлено: <span class=\"badge badge-primary count_imgs\">{{record.imageCount}}</span> <!-- /.count_imgs -->
              </p>
              <p>
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
                <span class=\"d-block badge badge-danger\">Ошибка: 404 — Not Found</span> <!-- /.badge-danger -->
                {% endif %}
              </p>
            </div> <!-- /.profile-hero__status -->

            <hr>

            <a class=\"btn btn-success btn-sm profile-hero__action\"
              href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">Редактировать
              объявлнение</a>
            <!-- /.profile-hero__action -->
          </div>
          <!-- /.col-md-4 -->

        </div> <!-- /.row -->

      </li> <!-- /.profile-hero__item -->

      {% else %}
      <li class=\"alert alert-danger advert-none\">
        <p>{{ noRecordsMessage }} <span data-toggle=\"tooltip\" data-placement=\"right\"
            title=\"Самое время создать\">&uarr;</span></p>
      </li>
      {% endfor %}

    </ul>
    <!-- /.profile-hero__list -->
  </div>
  <!-- /.profile-hero -->

</div>
<!-- /.profile -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/user/profile.htm", "");
    }
}
