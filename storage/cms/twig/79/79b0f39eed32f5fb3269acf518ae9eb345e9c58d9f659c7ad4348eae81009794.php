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
            // line 11
            echo "
  ";
            // line 12
            if (((twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 12) == "on-on") && (twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 12) != "xvip"))) {
                // line 13
                echo "
  <li class=\"";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 14) == "vip")) {
                    echo "vip";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 14) == "basic")) {
                    echo "basic";
                }
                // line 15
                echo "  ";
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "highlight", [], "any", false, false, false, 15) == "on")) {
                    echo "gold";
                }
                echo "\">
    <div id=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 16), "html", null, true);
                echo "\" class=\"sms\">
      <!-- Время добавления объявления -->

      ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 19) == "vip")) {
                    // line 20
                    echo "      <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vip.png");
                    echo "\" alt=\"vip\">
      ";
                }
                // line 22
                echo "
      <span class=\"timehead\">
        ";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 24), "d-m-Y H:i"), "html", null, true);
                echo "
      </span>

      <!-- <span class=\"views\">0</span> -->
      <!-- /.views -->

      <!-- Текст объявления -->
      <div class=\"record-text\">
        ";
                // line 32
                echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 32);
                echo "
      </div>

      
      ";
                // line 36
                if (twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 36)) {
                    // line 37
                    echo "      <div class=\"advert__imgs-wrap\">
        <div class=\"advert__image\"><img src=\"";
                    // line 38
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 38));
                    echo "\" alt=\"Фото1\"></div>

        ";
                    // line 40
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 40)) {
                        // line 41
                        echo "        <div class=\"advert__image\"><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 41));
                        echo "\" alt=\"Фото2\"></div>
        ";
                    }
                    // line 43
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 43)) {
                        // line 44
                        echo "        <div class=\"advert__image\"><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 44));
                        echo "\" alt=\"Фото3\"></div>
        ";
                    }
                    // line 46
                    echo "
      </div>
      ";
                }
                // line 49
                echo "
    </div>
  </li>
  ";
            }
            // line 53
            echo "

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "  <li class=\"advert-none\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
</ul>

";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 61) > 1)) {
            // line 62
            echo "<ul class=\"pagination\">
  ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 63) > 1)) {
                // line 64
                echo "  <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 64), "baseFileName", [], "any", false, false, false, 64), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 64) - 1)]);
                echo "\">&larr; Prev</a></li>
  ";
            }
            // line 66
            echo "
  ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 67)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 68
                echo "  <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 68) == $context["page"])) ? ("active") : (null));
                echo "\">
    <a href=\"";
                // line 69
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 69), "baseFileName", [], "any", false, false, false, 69), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
  </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
  ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 73) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 73))) {
                // line 74
                echo "  <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 74), "baseFileName", [], "any", false, false, false, 74), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 74) + 1)]);
                echo "\">Next &rarr;</a></li>
  ";
            }
            // line 76
            echo "</ul>
";
        }
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
        return array (  222 => 76,  216 => 74,  214 => 73,  211 => 72,  200 => 69,  195 => 68,  191 => 67,  188 => 66,  182 => 64,  180 => 63,  177 => 62,  175 => 61,  170 => 58,  161 => 56,  154 => 53,  148 => 49,  143 => 46,  137 => 44,  134 => 43,  128 => 41,  126 => 40,  121 => 38,  118 => 37,  116 => 36,  109 => 32,  98 => 24,  94 => 22,  88 => 20,  86 => 19,  80 => 16,  73 => 15,  67 => 14,  64 => 13,  62 => 12,  59 => 11,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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
  {% for record in records %}

  {% if record.category == 'on-on' and record.type != 'xvip' %}

  <li class=\"{% if record.type == 'vip' %}vip{% elseif record.type == 'basic' %}basic{% endif %}
  {% if record.highlight == 'on' %}gold{% endif %}\">
    <div id=\"{{ record.id }}\" class=\"sms\">
      <!-- Время добавления объявления -->

      {% if record.type == 'vip' %}
      <img src=\"{{ 'assets/images/vip.png'|theme }}\" alt=\"vip\">
      {% endif %}

      <span class=\"timehead\">
        {{ record.created_at|date('d-m-Y H:i') }}
      </span>

      <!-- <span class=\"views\">0</span> -->
      <!-- /.views -->

      <!-- Текст объявления -->
      <div class=\"record-text\">
        {{ record.text|raw }}
      </div>

      
      {% if record.image1 %}
      <div class=\"advert__imgs-wrap\">
        <div class=\"advert__image\"><img src=\"{{ record.image1|media }}\" alt=\"Фото1\"></div>

        {% if record.image2 %}
        <div class=\"advert__image\"><img src=\"{{ record.image2|media }}\" alt=\"Фото2\"></div>
        {% endif %}
        {% if record.image3 %}
        <div class=\"advert__image\"><img src=\"{{ record.image3|media }}\" alt=\"Фото3\"></div>
        {% endif %}

      </div>
      {% endif %}

    </div>
  </li>
  {% endif %}


  {% else %}
  <li class=\"advert-none\">{{ noRecordsMessage }}</li>
  {% endfor %}

</ul>

{% if records.lastPage > 1 %}
<ul class=\"pagination\">
  {% if records.currentPage > 1 %}
  <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
  {% endif %}

  {% for page in 1..records.lastPage %}
  <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
    <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
  </li>
  {% endfor %}

  {% if records.lastPage > records.currentPage %}
  <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
  {% endif %}
</ul>
{% endif %}", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/categories/on-on.htm", "");
    }
}
