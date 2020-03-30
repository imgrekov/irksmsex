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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/categories/on-ona.htm */
class __TwigTemplate_79add2e3f64682b40677abfe95b790b973b9bd8c16777501b1adac73bbd495c7 extends \Twig\Template
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
            if (((twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 12) == "on-ona") && (twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 12) != "xvip"))) {
                // line 13
                echo "
  <li class=\"";
                // line 14
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 14) == "vip")) {
                    echo " vip ";
                } elseif ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 14) == "basic")) {
                    echo " basic ";
                }
                echo "\">
    <div id=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 15), "html", null, true);
                echo "\" class=\"sms\">
      <!-- Время добавления объявления -->

      ";
                // line 18
                if ((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 18) == "vip")) {
                    // line 19
                    echo "      <img src=\"";
                    echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/vip.png");
                    echo "\" alt=\"vip\" class=\"id\">
      ";
                }
                // line 21
                echo "
      <span class=\"timehead\">
        ";
                // line 23
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 23), "d-m-Y H:i"), "html", null, true);
                echo "
      </span>

      <!-- <span class=\"views\">0</span> -->
      <!-- /.views -->

      <!-- Текст объявления -->
      <div class=\"sms__text\">
        ";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 31);
                echo "
      </div>


      ";
                // line 35
                if (twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 35)) {
                    // line 36
                    echo "      <div class=\"advert__imgs-wrap\">
        <img class=\"advert__image\" src=\"";
                    // line 37
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 37));
                    echo "\" alt=\"Фото1\">

        ";
                    // line 39
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 39)) {
                        // line 40
                        echo "        <img class=\"advert__image\" src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 40));
                        echo "\" alt=\"Фото2\">
        ";
                    }
                    // line 42
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 42)) {
                        // line 43
                        echo "        <img class=\"advert__image\" src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 43));
                        echo "\" alt=\"Фото3\">
        ";
                    }
                    // line 45
                    echo "
      </div>
      ";
                }
                // line 48
                echo "
    </div>
  </li>
  ";
            }
            // line 52
            echo "

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 55
            echo "  <li class=\"advert-none\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/categories/on-ona.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 57,  156 => 55,  149 => 52,  143 => 48,  138 => 45,  132 => 43,  129 => 42,  123 => 40,  121 => 39,  116 => 37,  113 => 36,  111 => 35,  104 => 31,  93 => 23,  89 => 21,  83 => 19,  81 => 18,  75 => 15,  67 => 14,  64 => 13,  62 => 12,  59 => 11,  54 => 10,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
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

  {% if record.category == 'on-ona' and record.type != 'xvip' %}

  <li class=\"{% if record.type == 'vip' %} vip {% elseif record.type == 'basic' %} basic {% endif %}\">
    <div id=\"{{ record.id }}\" class=\"sms\">
      <!-- Время добавления объявления -->

      {% if record.type == 'vip' %}
      <img src=\"{{ 'assets/images/vip.png'|theme }}\" alt=\"vip\" class=\"id\">
      {% endif %}

      <span class=\"timehead\">
        {{ record.created_at|date('d-m-Y H:i') }}
      </span>

      <!-- <span class=\"views\">0</span> -->
      <!-- /.views -->

      <!-- Текст объявления -->
      <div class=\"sms__text\">
        {{ record.text|raw }}
      </div>


      {% if record.image1 %}
      <div class=\"advert__imgs-wrap\">
        <img class=\"advert__image\" src=\"{{ record.image1|media }}\" alt=\"Фото1\">

        {% if record.image2 %}
        <img class=\"advert__image\" src=\"{{ record.image2|media }}\" alt=\"Фото2\">
        {% endif %}
        {% if record.image3 %}
        <img class=\"advert__image\" src=\"{{ record.image3|media }}\" alt=\"Фото3\">
        {% endif %}

      </div>
      {% endif %}

    </div>
  </li>
  {% endif %}


  {% else %}
  <li class=\"advert-none\">{{ noRecordsMessage }}</li>
  {% endfor %}

</ul>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/categories/on-ona.htm", "");
    }
}
