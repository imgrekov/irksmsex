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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/categories/on-on.htm */
class __TwigTemplate_c0f647b4805824ccaa636a862f92114acb9a1b4839ddf55673aff38e30729b1c extends \Twig\Template
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
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["AdvertsList"] ?? null), "records", [], "any", false, false, false, 1);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["AdvertsList"] ?? null), "displayColumn", [], "any", false, false, false, 2);
        // line 3
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["AdvertsList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 3);
        // line 4
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["AdvertsList"] ?? null), "detailsPage", [], "any", false, false, false, 4);
        // line 5
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["AdvertsList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 5);
        // line 6
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["AdvertsList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 6);
        // line 7
        echo "

<ul class=\"record-list\">
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            if ((((twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 10) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)) && (twig_get_attribute($this->env, $this->source, $context["record"], "state", [], "any", false, false, false, 10) == "on")) && (twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 10) != "xvip"))) {
                // line 11
                echo "  <li class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 11) == "vip")) {
                    echo "vip";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 11) == "basic")) {
                    echo "basic";
                }
                echo "\">
    <div id=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "highlight", [], "any", false, false, false, 12) == "on")) {
                    echo "highlight";
                }
                echo " record\">
      ";
                // line 13
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 13) == "vip")) {
                    // line 14
                    echo "      <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vip.png");
                    echo "\" alt=\"vip\" class=\"id\">
      ";
                }
                // line 16
                echo "
      <span class=\"timehead\">
        ";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 18), "d-m-Y H:i"), "html", null, true);
                echo "
      </span>
      <!-- Когда создано -->

      <div class=\"record__text\">
        ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 23);
                echo "
      </div>
      <!-- Текст объявления -->

      ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["record"], "attachimage1", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "      <div class=\"advert__imgs-wrap\">
        <a class=\"advert__image\" href=\"";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage1", [], "any", false, false, false, 29), "path", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" data-toggle=\"lightbox\" data-type=\"image\">
          <img src=\"";
                    // line 30
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage1", [], "any", false, false, false, 30), "path", [], "any", false, false, false, 30), "html", null, true);
                    echo "\" alt=\"Фото1\">
        </a>
        <!-- Изображение первое -->

        ";
                    // line 34
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "attachimage2", [], "any", false, false, false, 34)) {
                        // line 35
                        echo "        <a class=\"advert__image\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage2", [], "any", false, false, false, 35), "path", [], "any", false, false, false, 35), "html", null, true);
                        echo "\" data-toggle=\"lightbox\" data-type=\"image\">
          <img src=\"";
                        // line 36
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage2", [], "any", false, false, false, 36), "path", [], "any", false, false, false, 36), "html", null, true);
                        echo "\" alt=\"Фото1\">
        </a>
        ";
                    }
                    // line 39
                    echo "        <!-- Изображение второе -->
        ";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "attachimage3", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "        <a class=\"advert__image\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage3", [], "any", false, false, false, 41), "path", [], "any", false, false, false, 41), "html", null, true);
                        echo "\" data-toggle=\"lightbox\" data-type=\"image\">
          <img src=\"";
                        // line 42
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "attachimage3", [], "any", false, false, false, 42), "path", [], "any", false, false, false, 42), "html", null, true);
                        echo "\" alt=\"Фото1\">
        </a>
        ";
                    }
                    // line 45
                    echo "        <!-- Изображение третье -->

      </div>
      ";
                }
                // line 49
                echo "      <!-- Изображения к объявлению -->

      <span class=\"advert-id\">ID: ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "</span>
      <!-- /.advert-id -->

    </div>
    <!-- /.record -->

  </li>



  ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 62
            echo "  <li class=\"alert alert-danger advert-none\">
    <p>";
            // line 63
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</p>
  </li>
  <!-- /.advert-none -->
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "</ul>
<!-- /.record-list -->


";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 71) > 1)) {
            // line 72
            echo "<ul class=\"pagination\">
  ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 73) > 1)) {
                // line 74
                echo "  <li class=\"pagination__item\">
    <a class=\"pagination__prev\"
      href=\"";
                // line 76
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 76), "baseFileName", [], "any", false, false, false, 76), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 76) - 1)]);
                echo "\">&larr; Назад</a>
  </li>
  ";
            }
            // line 79
            echo "
  ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 80)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 81
                echo "  <li class=\"pagination__item ";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 81) == $context["page"])) ? ("active") : (null));
                echo "\">
    <a class=\"pagination__link\" href=\"";
                // line 82
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 82), "baseFileName", [], "any", false, false, false, 82), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "
  ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 86) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 86))) {
                // line 87
                echo "  <li class=\"pagination__item\">
    <a class=\"pagination__next\"
      href=\"";
                // line 89
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 89), "baseFileName", [], "any", false, false, false, 89), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 89) + 1)]);
                echo "\">Вперёд &rarr;</a>
  </li>
  ";
            }
            // line 92
            echo "</ul>
";
        }
        // line 94
        echo "<!-- Пагинация -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/categories/on-on.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 94,  250 => 92,  244 => 89,  240 => 87,  238 => 86,  235 => 85,  224 => 82,  219 => 81,  215 => 80,  212 => 79,  206 => 76,  202 => 74,  200 => 73,  197 => 72,  195 => 71,  189 => 67,  179 => 63,  176 => 62,  159 => 51,  155 => 49,  149 => 45,  143 => 42,  138 => 41,  136 => 40,  133 => 39,  127 => 36,  122 => 35,  120 => 34,  113 => 30,  109 => 29,  106 => 28,  104 => 27,  97 => 23,  89 => 18,  85 => 16,  79 => 14,  77 => 13,  69 => 12,  60 => 11,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set records = AdvertsList.records %}
{% set displayColumn = AdvertsList.displayColumn %}
{% set noRecordsMessage = AdvertsList.noRecordsMessage %}
{% set detailsPage = AdvertsList.detailsPage %}
{% set detailsKeyColumn = AdvertsList.detailsKeyColumn %}
{% set detailsUrlParameter = AdvertsList.detailsUrlParameter %}


<ul class=\"record-list\">
  {% for record in records if record.category == this.page.id and record.state == 'on' and record.type != 'xvip' %}
  <li class=\"{% if record.type == 'vip' %}vip{% elseif record.type == 'basic' %}basic{% endif %}\">
    <div id=\"{{ record.id }}\" class=\"{% if record.highlight == 'on' %}highlight{% endif %} record\">
      {% if record.type == 'vip' %}
      <img src=\"{{ 'assets/images/vip.png'|theme }}\" alt=\"vip\" class=\"id\">
      {% endif %}

      <span class=\"timehead\">
        {{ record.created_at|date('d-m-Y H:i') }}
      </span>
      <!-- Когда создано -->

      <div class=\"record__text\">
        {{ record.text|raw }}
      </div>
      <!-- Текст объявления -->

      {% if record.attachimage1 %}
      <div class=\"advert__imgs-wrap\">
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
    <!-- /.record -->

  </li>



  {% else %}
  <li class=\"alert alert-danger advert-none\">
    <p>{{ noRecordsMessage }}</p>
  </li>
  <!-- /.advert-none -->
  {% endfor %}
</ul>
<!-- /.record-list -->


{% if records.lastPage > 1 %}
<ul class=\"pagination\">
  {% if records.currentPage > 1 %}
  <li class=\"pagination__item\">
    <a class=\"pagination__prev\"
      href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Назад</a>
  </li>
  {% endif %}

  {% for page in 1..records.lastPage %}
  <li class=\"pagination__item {{ records.currentPage == page ? 'active' : null }}\">
    <a class=\"pagination__link\" href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
  </li>
  {% endfor %}

  {% if records.lastPage > records.currentPage %}
  <li class=\"pagination__item\">
    <a class=\"pagination__next\"
      href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Вперёд &rarr;</a>
  </li>
  {% endif %}
</ul>
{% endif %}
<!-- Пагинация -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/categories/on-on.htm", "");
    }
}
