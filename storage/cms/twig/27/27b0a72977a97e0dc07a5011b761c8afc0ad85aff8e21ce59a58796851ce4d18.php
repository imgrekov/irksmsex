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
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("create-advert");
        echo "\">Создать объявлнение</a>
  </div>
  <!-- /.profile-head -->

  <hr>

  <div class=\"profile-hero\">
    <h2 class=\"profile-hero__title\">Ваши объявлнения</h2>


    <ul class=\"profile-hero__list\">

      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 25) == twig_get_attribute($this->env, $this->source, $context["record"], "author", [], "any", false, false, false, 25))) {
                // line 26
                echo "
      <li class=\"profile-hero__item\">

        <div class=\"row\">

          <div class=\"col-sm-8\">

            <div class=\"profile-hero__info\">
              <span class=\"timehead\">
                ";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "updated_at", [], "any", false, false, false, 35), "Создано d-m-Y, в H:i"), "html", null, true);
                echo "
              </span> <!-- /.timehead -->

              <div class=\"profile-hero__item-text\">

                ";
                // line 40
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 40) == "vip")) {
                    // line 41
                    echo "                <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vip.png");
                    echo "\" alt=\"vip\" class=\"id\">
                ";
                }
                // line 43
                echo "
                ";
                // line 44
                echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 44);
                echo "
              </div> <!-- /.profile-hero__item-text -->


              ";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 48)) {
                    // line 49
                    echo "              <div class=\"advert__imgs-wrap\">
                <div class=\"advert__image\"><img src=\"";
                    // line 50
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 50));
                    echo "\" alt=\"Фото2\"></div>

                ";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 52)) {
                        // line 53
                        echo "                <div class=\"advert__image\"><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 53));
                        echo "\" alt=\"Фото2\"></div>
                ";
                    }
                    // line 55
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 55)) {
                        // line 56
                        echo "                <div class=\"advert__image\"><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 56));
                        echo "\" alt=\"Фото3\"></div>
                ";
                    }
                    // line 58
                    echo "
              </div>
              ";
                }
                // line 61
                echo "

              <span class=\"profile-hero__id\">ID: ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "</span> <!-- /.profile-hero__id -->
            </div> <!-- /.profile-hero__info -->

          </div>
          <!-- /.col-md-8 -->


          <div class=\"col-sm-4 pos-r\">
            <div class=\"profile-hero__status\">
              <p>
                Объявление:
                ";
                // line 74
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "state", [], "any", false, false, false, 74) == "on")) {
                    // line 75
                    echo "                <span class=\"badge badge-success\">активно</span> <!-- /.badge-success -->
                ";
                } else {
                    // line 77
                    echo "                <span class=\"badge badge-danger\">неактивно</span> <!-- /.state -->
                ";
                }
                // line 79
                echo "              </p>
              <p>
                Выделено:
                ";
                // line 82
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "highlight", [], "any", false, false, false, 82) == "on")) {
                    // line 83
                    echo "                <span class=\"badge badge-success\">да</span> <!-- /.badge-success -->
                ";
                } else {
                    // line 85
                    echo "                <span class=\"badge badge-danger\">нет</span> <!-- /.state -->
                ";
                }
                // line 87
                echo "              </p>
              <p>
                <!-- Здесь посчитать количество картинок. Если изображений нет, то \"0\". Если есть, то их количество. -->
                Изображений добавлено: <span class=\"badge badge-primary countimgs\">0</span> <!-- /.badge-primary -->
              </p>
              <p>
                <!-- Текст в соответствии с категорией объявления -->
                Категория:
                ";
                // line 95
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 95) == "ona-on")) {
                    // line 96
                    echo "                <span class=\"state state-category\">Девушка ищет парня</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 97
$context["record"], "category", [], "any", false, false, false, 97) == "on-ona")) {
                    // line 98
                    echo "                <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 99
$context["record"], "category", [], "any", false, false, false, 99) == "on-on")) {
                    // line 100
                    echo "                <span class=\"state state-category\">Парень ищет парня</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 101
$context["record"], "category", [], "any", false, false, false, 101) == "ona-ona")) {
                    // line 102
                    echo "                <span class=\"state state-category\">Девушка ищет девушку</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 103
$context["record"], "category", [], "any", false, false, false, 103) == "free")) {
                    // line 104
                    echo "                <span class=\"state state-category\">Досуг в Иркутске</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 105
$context["record"], "category", [], "any", false, false, false, 105) == "services")) {
                    // line 106
                    echo "                <span class=\"state state-category\">Услуги массажа</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 107
$context["record"], "category", [], "any", false, false, false, 107) == "family")) {
                    // line 108
                    echo "                <span class=\"state state-category\">Семейные пары</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 109
$context["record"], "category", [], "any", false, false, false, 109) == "flirt")) {
                    // line 110
                    echo "                <span class=\"state state-category\">Свободные отношения</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 111
$context["record"], "category", [], "any", false, false, false, 111) == "realty")) {
                    // line 112
                    echo "                <span class=\"state state-category\">Недвижимость</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 113
$context["record"], "category", [], "any", false, false, false, 113) == "arenda")) {
                    // line 114
                    echo "                <span class=\"state state-category\">Аренда квартир на сутки</span> <!-- /.state-category -->
                ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 115
$context["record"], "category", [], "any", false, false, false, 115) == "work")) {
                    // line 116
                    echo "                <span class=\"state state-category\">Работа в Иркутске</span> <!-- /.state-category -->
                ";
                } else {
                    // line 118
                    echo "                <span class=\"d-block badge badge-danger\">Ошибка. Категория не найдена</span> <!-- /.badge-danger -->
                ";
                }
                // line 120
                echo "              </p>
            </div> <!-- /.profile-hero__status -->

            <hr>

            <a class=\"btn btn-success btn-sm profile-hero__action\"
              href=\"";
                // line 126
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 126)]);
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
            // line 137
            echo "      <li class=\"alert alert-danger advert-none\">
        <p>";
            // line 138
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo " <span data-toggle=\"tooltip\" data-placement=\"right\"
            title=\"Самое время создать\">&uarr;</span></p>
      </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "
      <li class=\"profile-hero__item\">

        <div class=\"row\">
          <div class=\"col-sm-8\">

            <div class=\"profile-hero__info\">
              <span class=\"timehead\">
                ";
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "created_at", [], "any", false, false, false, 150), "Создано d-m-Y, в H:i"), "html", null, true);
        echo "
              </span>
              <!-- /.timehead -->
              <p class=\"profile-hero__item-text\">
                Это базовое объявлнение. Оно не из БД.
              </p>
              <!-- /.profile-hero__item-text -->

              <div class=\"advert__imgs-wrap\">
                <div class=\"advert__image\"><img src=\"";
        // line 159
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/test/cat-3.jpg");
        echo "\" alt=\"Фото3\"></div>
                <div class=\"advert__image\"><img src=\"";
        // line 160
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/test/cat-2.jpg");
        echo "\" alt=\"Фото2\"></div>
                <div class=\"advert__image\"><img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/test/cat-4.jpg");
        echo "\" alt=\"Фото2\"></div>
              </div> <!-- /.advert__imgs-wrap -->

              <span class=\"profile-hero__id\">ID: *";
        // line 164
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 164), "html", null, true);
        echo "</span>
            </div>


          </div>
          <!-- /.col-md-8 -->

          <div class=\"col-sm-4 pos-r\">
            <div class=\"profile-hero__status\">
              <p>
                Объявление <span class=\"badge badge-danger\">неактивно</span> <!-- /.badge-danger -->
              </p>

              <p>
                Изображений добавлено: <span class=\"badge badge-primary countimgs\"></span> <!-- /.badge-primary -->
              </p>

              <p>
                Категория: <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
              </p>
            </div>

            <hr>

            ";
        // line 188
        ob_start();
        // line 189
        echo "            <a class=\"btn btn-success btn-sm profile-hero__action\"
              href=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["detailsKeyColumn"] ?? null), [], "any", false, false, false, 190)]);
        echo "\">Редактировать&nbsp;объявлнение</a>
            <!-- /.profile-hero__action -->
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 193
        echo "

          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

      </li> <!-- /.profile-hero__item -->

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
        return array (  372 => 193,  366 => 190,  363 => 189,  361 => 188,  334 => 164,  328 => 161,  324 => 160,  320 => 159,  308 => 150,  298 => 142,  288 => 138,  285 => 137,  268 => 126,  260 => 120,  256 => 118,  252 => 116,  250 => 115,  247 => 114,  245 => 113,  242 => 112,  240 => 111,  237 => 110,  235 => 109,  232 => 108,  230 => 107,  227 => 106,  225 => 105,  222 => 104,  220 => 103,  217 => 102,  215 => 101,  212 => 100,  210 => 99,  207 => 98,  205 => 97,  202 => 96,  200 => 95,  190 => 87,  186 => 85,  182 => 83,  180 => 82,  175 => 79,  171 => 77,  167 => 75,  165 => 74,  151 => 63,  147 => 61,  142 => 58,  136 => 56,  133 => 55,  127 => 53,  125 => 52,  120 => 50,  117 => 49,  115 => 48,  108 => 44,  105 => 43,  99 => 41,  97 => 40,  89 => 35,  78 => 26,  72 => 25,  57 => 13,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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


              {% if record.image1 %}
              <div class=\"advert__imgs-wrap\">
                <div class=\"advert__image\"><img src=\"{{ record.image1|media }}\" alt=\"Фото2\"></div>

                {% if record.image2 %}
                <div class=\"advert__image\"><img src=\"{{ record.image2|media }}\" alt=\"Фото2\"></div>
                {% endif %}
                {% if record.image3 %}
                <div class=\"advert__image\"><img src=\"{{ record.image3|media }}\" alt=\"Фото3\"></div>
                {% endif %}

              </div>
              {% endif %}


              <span class=\"profile-hero__id\">ID: {{record.id}}</span> <!-- /.profile-hero__id -->
            </div> <!-- /.profile-hero__info -->

          </div>
          <!-- /.col-md-8 -->


          <div class=\"col-sm-4 pos-r\">
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
                Изображений добавлено: <span class=\"badge badge-primary countimgs\">0</span> <!-- /.badge-primary -->
              </p>
              <p>
                <!-- Текст в соответствии с категорией объявления -->
                Категория:
                {% if record.category == 'ona-on' %}
                <span class=\"state state-category\">Девушка ищет парня</span> <!-- /.state-category -->
                {% elseif record.category == 'on-ona' %}
                <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
                {% elseif record.category == 'on-on' %}
                <span class=\"state state-category\">Парень ищет парня</span> <!-- /.state-category -->
                {% elseif record.category == 'ona-ona' %}
                <span class=\"state state-category\">Девушка ищет девушку</span> <!-- /.state-category -->
                {% elseif record.category == 'free' %}
                <span class=\"state state-category\">Досуг в Иркутске</span> <!-- /.state-category -->
                {% elseif record.category == 'services' %}
                <span class=\"state state-category\">Услуги массажа</span> <!-- /.state-category -->
                {% elseif record.category == 'family' %}
                <span class=\"state state-category\">Семейные пары</span> <!-- /.state-category -->
                {% elseif record.category == 'flirt' %}
                <span class=\"state state-category\">Свободные отношения</span> <!-- /.state-category -->
                {% elseif record.category == 'realty' %}
                <span class=\"state state-category\">Недвижимость</span> <!-- /.state-category -->
                {% elseif record.category == 'arenda' %}
                <span class=\"state state-category\">Аренда квартир на сутки</span> <!-- /.state-category -->
                {% elseif record.category == 'work' %}
                <span class=\"state state-category\">Работа в Иркутске</span> <!-- /.state-category -->
                {% else %}
                <span class=\"d-block badge badge-danger\">Ошибка. Категория не найдена</span> <!-- /.badge-danger -->
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

      <li class=\"profile-hero__item\">

        <div class=\"row\">
          <div class=\"col-sm-8\">

            <div class=\"profile-hero__info\">
              <span class=\"timehead\">
                {{ record.created_at|date('Создано d-m-Y, в H:i') }}
              </span>
              <!-- /.timehead -->
              <p class=\"profile-hero__item-text\">
                Это базовое объявлнение. Оно не из БД.
              </p>
              <!-- /.profile-hero__item-text -->

              <div class=\"advert__imgs-wrap\">
                <div class=\"advert__image\"><img src=\"{{ 'assets/images/test/cat-3.jpg'|theme }}\" alt=\"Фото3\"></div>
                <div class=\"advert__image\"><img src=\"{{ 'assets/images/test/cat-2.jpg'|theme }}\" alt=\"Фото2\"></div>
                <div class=\"advert__image\"><img src=\"{{ 'assets/images/test/cat-4.jpg'|theme }}\" alt=\"Фото2\"></div>
              </div> <!-- /.advert__imgs-wrap -->

              <span class=\"profile-hero__id\">ID: *{{record.id}}</span>
            </div>


          </div>
          <!-- /.col-md-8 -->

          <div class=\"col-sm-4 pos-r\">
            <div class=\"profile-hero__status\">
              <p>
                Объявление <span class=\"badge badge-danger\">неактивно</span> <!-- /.badge-danger -->
              </p>

              <p>
                Изображений добавлено: <span class=\"badge badge-primary countimgs\"></span> <!-- /.badge-primary -->
              </p>

              <p>
                Категория: <span class=\"state state-category\">Парень ищет девушку</span> <!-- /.state-category -->
              </p>
            </div>

            <hr>

            {% spaceless %}
            <a class=\"btn btn-success btn-sm profile-hero__action\"
              href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">Редактировать&nbsp;объявлнение</a>
            <!-- /.profile-hero__action -->
            {% endspaceless %}


          </div>
          <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

      </li> <!-- /.profile-hero__item -->

    </ul>
    <!-- /.profile-hero__list -->
  </div>
  <!-- /.profile-hero -->

</div>
<!-- /.profile -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/user/profile.htm", "");
    }
}
