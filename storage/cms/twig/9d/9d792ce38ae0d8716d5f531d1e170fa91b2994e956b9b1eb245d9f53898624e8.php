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

/* D:\OSPanel\domains\irksmsex.ru/plugins/grekov/advertslist/components/editadvert/default.htm */
class __TwigTemplate_c57f6686091032954b615a57dccd69336e2d099a4d11427c32c2869694dd8950 extends \Twig\Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onEditAdvert", ["class" => "advert-edit-form", "id" => "advert-edit-form", "data-request-flash" => true, "data-request-files" => true, "redirect" => "../advert/edit-success"]]);
        echo "

<input type=\"hidden\" name=\"id\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\">

<fieldset class=\"advert-form\">


  <div class=\"advert-edit-form__text\">
    <label for=\"text\">Текст объявления</label>
    <textarea id=\"text\" name=\"text\" required>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "text", [], "any", false, false, false, 10), "html", null, true);
        echo "</textarea>
  </div>


  <div class=\"row mb-4\">

    <div class=\"col-md-7\">

      <div class=\"form-group advert-edit__type\">
        <p>Тип объявления</p>

        <label for=\"basic\">
          <input type=\"radio\" name=\"type\" id=\"basic\" value=\"basic\" ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "type", [], "any", false, false, false, 22) == "basic")) {
            echo " checked ";
        }
        echo ">
          Обычное
        </label>
        <label for=\"vip\">
          <input type=\"radio\" name=\"type\" id=\"vip\" value=\"vip\" ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "type", [], "any", false, false, false, 26) == "vip")) {
            echo " checked ";
        }
        echo ">
          Вип
        </label>
        <label for=\"xvip\">
          <input type=\"radio\" name=\"type\" id=\"xvip\" value=\"xvip\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "type", [], "any", false, false, false, 30) == "xvip")) {
            echo " checked ";
        }
        echo ">
          xVIP
        </label>
      </div> <!-- /.form-group -->

      <div class=\"form-group advert-edit-vip\">
        <input name=\"highlight\" type=\"checkbox\" id=\"highlight\" style=\"display: none;\" ";
        // line 36
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "highlight", [], "any", false, false, false, 36) == "on")) {
            // line 37
            echo "          checked ";
        }
        echo ">
        <label for=\"highlight\" class=\"check\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Синий фон с надписью\">
          <svg width=\"18px\" height=\"18px\" viewBox=\"0 0 18 18\">
            <path
              d=\"M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z\">
            </path>
            <polyline points=\"1 9 7 14 15 4\"></polyline>
          </svg>
          Экстра выделение
        </label>
      </div> <!-- /.advert-edit__vip -->

      <div class=\"form-group advert-edit-vip\">
        <input name=\"state\" type=\"checkbox\" id=\"state\" style=\"display: none;\" ";
        // line 50
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 50) == "on")) {
            echo " checked
          ";
        }
        // line 51
        echo ">
        <label for=\"state\" class=\"check\" data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"";
        // line 53
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 53) == "on")) {
            echo " Чтобы деактивировать пройдите вниз ";
        } else {
            echo " Показывать объявление ";
        }
        echo "\">
          <svg width=\"18px\" height=\"18px\" viewBox=\"0 0 18 18\">
            <path
              d=\"M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z\">
            </path>
            <polyline points=\"1 9 7 14 15 4\"></polyline>
          </svg>
          ";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "state", [], "any", false, false, false, 60) == true)) {
            echo " Активно ";
        } else {
            echo " Активировать ";
        }
        // line 61
        echo "        </label>
      </div> <!-- /.advert-edit__activate -->

    </div> <!-- /.col-md-6 -->


    <div class=\"col-md-5\">
      <div class=\"form-group advert-edit__category\">

        <p class=\"advert-edit__category-desc\">Категория</p>
        <!-- /.advert-edit__category-desc -->

        <select name=\"category\" id=\"category\" form=\"advert-edit-form\" required>
          <option value=\"on-ona\" ";
        // line 74
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 74) == "on-ona")) {
            echo "selected";
        }
        echo ">
            Парень ищет девушку
          </option> <!-- on-ona -->

          <option value=\"ona-on\" ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 78) == "ona-on")) {
            echo "selected";
        }
        echo ">
            Девушка ищет парня
          </option> <!-- ona-on -->

          <option value=\"on-on\" ";
        // line 82
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 82) == "on-on")) {
            echo "selected";
        }
        echo ">
            Парень ищет парня
          </option> <!-- on-on -->

          <option value=\"ona-ona\" ";
        // line 86
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 86) == "ona-ona")) {
            echo "selected";
        }
        echo ">
            Девушка ищет девушку
          </option> <!-- ona-ona -->

          <option value=\"free\" ";
        // line 90
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 90) == "free")) {
            echo "selected";
        }
        echo ">
            Досуг в Иркутске
          </option> <!-- free -->

          <option value=\"services\" ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 94) == "services")) {
            echo "selected";
        }
        echo ">
            Услуги массажа
          </option> <!-- services -->

          <option value=\"family\" ";
        // line 98
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 98) == "family")) {
            echo "selected";
        }
        echo ">
            Семейные пары
          </option> <!-- family -->

          <option value=\"flirt\" ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 102) == "flirt")) {
            echo "selected";
        }
        echo ">
            Флирт
          </option> <!-- flirt -->

          <option value=\"realty\" ";
        // line 106
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 106) == "realty")) {
            echo "selected";
        }
        echo ">
            Недвижимость
          </option> <!-- realty -->

          <option value=\"arenda\" ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 110) == "arenda")) {
            echo "selected";
        }
        echo ">
            Аренда квартир на сутки
          </option> <!-- arenda -->

          <option value=\"work\" ";
        // line 114
        if ((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "category", [], "any", false, false, false, 114) == "work")) {
            echo "selected";
        }
        echo ">
            Работа или подработка
          </option> <!-- work -->
        </select>
        <!-- /#category -->

      </div> <!-- /.form-group advert-edit__category -->

    </div> <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->


  <div class=\"advert-edit__image\">
    <h3 class=\"mb-3 advert-edit__image-title\">Добавьте изображения к&nbsp;объявлению</h3>


    <div class=\"advert-edit__image-wrap\">

<<<<<<< Updated upstream
      <div class=\"\">
        <input type=\"file\" class=\"mb-3\" name=\"attachimage1\" id=\"attachimage1\">
        <span class=\"remove-button btn btn-outline-danger btn-sm\" id=\"btn-remove-image1\">Очистить</span>
=======
      <div class=\"advert-edit__image-item\">
        <p>№ — 1</p>
        <input class=\"inputfile\" type=\"file\" id=\"attachimage1\" name=\"attachimage1\" accept=\"image/jpeg,image/png,image/jpg\">
        <label for=\"attachimage1\">Выберите файл</label>
        <div class=\"image1-name image-name\"></div>
        <a class=\"remove-button btn btn-outline-danger btn-sm\" href=\"javascript:;\" id=\"btn-remove-image1\">Очистить</a>
>>>>>>> Stashed changes
      </div> <!-- /.advert-edit__image-item -->

      <div class=\"advert-edit__image-item\">
        <p>№ — 2</p>
        <input class=\"inputfile\" type=\"file\" id=\"attachimage2\" name=\"attachimage2\" accept=\"image/jpeg,image/png,image/jpg\">
        <label for=\"attachimage2\">Выберите файл</label>
        <div class=\"image2-name image-name\"></div>
        <a class=\"remove-button btn btn-outline-danger btn-sm\" href=\"javascript:;\" id=\"btn-remove-image2\">Очистить</a>
      </div> <!-- /.advert-edit__image-item -->

      <div class=\"advert-edit__image-item\">
        <p>№ — 3</p>
        <input class=\"inputfile\" type=\"file\" id=\"attachimage3\" name=\"attachimage3\" accept=\"image/jpeg,image/png,image/jpg\">
        <label for=\"attachimage3\">Выберите файл</label>
        <div class=\"image3-name image-name\"></div>
        <a class=\"remove-button btn btn-outline-danger btn-sm\" href=\"javascript:;\" id=\"btn-remove-image3\">Очистить</a>
      </div> <!-- /.advert-edit__image-item -->

    </div> <!-- /.advert-edit__image-wrap -->

  </div> <!-- /.advert-edit__image -->

</fieldset> <!-- /.advert-form -->

<button type=\"submit\" class=\"btn btn-success\">Готово</button>
<!-- /.btn btn-success -->

";
        // line 163
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/plugins/grekov/advertslist/components/editadvert/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 163,  249 => 114,  240 => 110,  231 => 106,  222 => 102,  213 => 98,  204 => 94,  195 => 90,  186 => 86,  177 => 82,  168 => 78,  159 => 74,  144 => 61,  138 => 60,  124 => 53,  120 => 51,  115 => 50,  98 => 37,  96 => 36,  85 => 30,  76 => 26,  67 => 22,  52 => 10,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_ajax('onEditAdvert', { class: \"advert-edit-form\", id: \"advert-edit-form\", 'data-request-flash': true, 'data-request-files': true, redirect: \"../advert/edit-success\" }) }}

<input type=\"hidden\" name=\"id\" value=\"{{ record.id }}\">

<fieldset class=\"advert-form\">


  <div class=\"advert-edit-form__text\">
    <label for=\"text\">Текст объявления</label>
    <textarea id=\"text\" name=\"text\" required>{{ record.text }}</textarea>
  </div>


  <div class=\"row mb-4\">

    <div class=\"col-md-7\">

      <div class=\"form-group advert-edit__type\">
        <p>Тип объявления</p>

        <label for=\"basic\">
          <input type=\"radio\" name=\"type\" id=\"basic\" value=\"basic\" {% if record.type == 'basic' %} checked {% endif %}>
          Обычное
        </label>
        <label for=\"vip\">
          <input type=\"radio\" name=\"type\" id=\"vip\" value=\"vip\" {% if record.type == 'vip' %} checked {% endif %}>
          Вип
        </label>
        <label for=\"xvip\">
          <input type=\"radio\" name=\"type\" id=\"xvip\" value=\"xvip\" {% if record.type == 'xvip' %} checked {% endif %}>
          xVIP
        </label>
      </div> <!-- /.form-group -->

      <div class=\"form-group advert-edit-vip\">
        <input name=\"highlight\" type=\"checkbox\" id=\"highlight\" style=\"display: none;\" {% if record.highlight == 'on' %}
          checked {% endif %}>
        <label for=\"highlight\" class=\"check\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Синий фон с надписью\">
          <svg width=\"18px\" height=\"18px\" viewBox=\"0 0 18 18\">
            <path
              d=\"M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z\">
            </path>
            <polyline points=\"1 9 7 14 15 4\"></polyline>
          </svg>
          Экстра выделение
        </label>
      </div> <!-- /.advert-edit__vip -->

      <div class=\"form-group advert-edit-vip\">
        <input name=\"state\" type=\"checkbox\" id=\"state\" style=\"display: none;\" {% if record.state == 'on' %} checked
          {% endif %}>
        <label for=\"state\" class=\"check\" data-toggle=\"tooltip\" data-placement=\"bottom\"
          title=\"{% if record.state == 'on' %} Чтобы деактивировать пройдите вниз {% else %} Показывать объявление {% endif %}\">
          <svg width=\"18px\" height=\"18px\" viewBox=\"0 0 18 18\">
            <path
              d=\"M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z\">
            </path>
            <polyline points=\"1 9 7 14 15 4\"></polyline>
          </svg>
          {% if record.state == true %} Активно {% else %} Активировать {% endif %}
        </label>
      </div> <!-- /.advert-edit__activate -->

    </div> <!-- /.col-md-6 -->


    <div class=\"col-md-5\">
      <div class=\"form-group advert-edit__category\">

        <p class=\"advert-edit__category-desc\">Категория</p>
        <!-- /.advert-edit__category-desc -->

        <select name=\"category\" id=\"category\" form=\"advert-edit-form\" required>
          <option value=\"on-ona\" {% if record.category == 'on-ona' %}selected{%endif%}>
            Парень ищет девушку
          </option> <!-- on-ona -->

          <option value=\"ona-on\" {% if record.category == 'ona-on' %}selected{%endif%}>
            Девушка ищет парня
          </option> <!-- ona-on -->

          <option value=\"on-on\" {% if record.category == 'on-on' %}selected{%endif%}>
            Парень ищет парня
          </option> <!-- on-on -->

          <option value=\"ona-ona\" {% if record.category == 'ona-ona' %}selected{%endif%}>
            Девушка ищет девушку
          </option> <!-- ona-ona -->

          <option value=\"free\" {% if record.category == 'free' %}selected{%endif%}>
            Досуг в Иркутске
          </option> <!-- free -->

          <option value=\"services\" {% if record.category == 'services' %}selected{%endif%}>
            Услуги массажа
          </option> <!-- services -->

          <option value=\"family\" {% if record.category == 'family' %}selected{%endif%}>
            Семейные пары
          </option> <!-- family -->

          <option value=\"flirt\" {% if record.category == 'flirt' %}selected{%endif%}>
            Флирт
          </option> <!-- flirt -->

          <option value=\"realty\" {% if record.category == 'realty' %}selected{%endif%}>
            Недвижимость
          </option> <!-- realty -->

          <option value=\"arenda\" {% if record.category == 'arenda' %}selected{%endif%}>
            Аренда квартир на сутки
          </option> <!-- arenda -->

          <option value=\"work\" {% if record.category == 'work' %}selected{%endif%}>
            Работа или подработка
          </option> <!-- work -->
        </select>
        <!-- /#category -->

      </div> <!-- /.form-group advert-edit__category -->

    </div> <!-- /.col-md-6 -->
  </div>
  <!-- /.row -->


  <div class=\"advert-edit__image\">
    <h3 class=\"mb-3 advert-edit__image-title\">Добавьте изображения к&nbsp;объявлению</h3>


    <div class=\"advert-edit__image-wrap\">

<<<<<<< Updated upstream
      <div class=\"\">
        <input type=\"file\" class=\"mb-3\" name=\"attachimage1\" id=\"attachimage1\">
        <span class=\"remove-button btn btn-outline-danger btn-sm\" id=\"btn-remove-image1\">Очистить</span>
=======
      <div class=\"advert-edit__image-item\">
        <p>№ — 1</p>
        <input class=\"inputfile\" type=\"file\" id=\"attachimage1\" name=\"attachimage1\" accept=\"image/jpeg,image/png,image/jpg\">
        <label for=\"attachimage1\">Выберите файл</label>
        <div class=\"image1-name image-name\"></div>
        <a class=\"remove-button btn btn-outline-danger btn-sm\" href=\"javascript:;\" id=\"btn-remove-image1\">Очистить</a>
>>>>>>> Stashed changes
      </div> <!-- /.advert-edit__image-item -->

      <div class=\"advert-edit__image-item\">
        <p>№ — 2</p>
        <input class=\"inputfile\" type=\"file\" id=\"attachimage2\" name=\"attachimage2\" accept=\"image/jpeg,image/png,image/jpg\">
        <label for=\"attachimage2\">Выберите файл</label>
        <div class=\"image2-name image-name\"></div>
        <a class=\"remove-button btn btn-outline-danger btn-sm\" href=\"javascript:;\" id=\"btn-remove-image2\">Очистить</a>
      </div> <!-- /.advert-edit__image-item -->

      <div class=\"advert-edit__image-item\">
        <p>№ — 3</p>
        <input class=\"inputfile\" type=\"file\" id=\"attachimage3\" name=\"attachimage3\" accept=\"image/jpeg,image/png,image/jpg\">
        <label for=\"attachimage3\">Выберите файл</label>
        <div class=\"image3-name image-name\"></div>
        <a class=\"remove-button btn btn-outline-danger btn-sm\" href=\"javascript:;\" id=\"btn-remove-image3\">Очистить</a>
      </div> <!-- /.advert-edit__image-item -->

    </div> <!-- /.advert-edit__image-wrap -->

  </div> <!-- /.advert-edit__image -->

</fieldset> <!-- /.advert-form -->

<button type=\"submit\" class=\"btn btn-success\">Готово</button>
<!-- /.btn btn-success -->

{{ form_close() }}", "D:\\OSPanel\\domains\\irksmsex.ru/plugins/grekov/advertslist/components/editadvert/default.htm", "");
    }
}
