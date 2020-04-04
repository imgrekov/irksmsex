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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/home.htm */
class __TwigTemplate_6019dd62b25eb10083cf25bdd81117b7ed8182a93db24fa66170faebcabf7d14 extends \Twig\Template
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
        echo "<div class=\"infblock\">
  <h1>Сайт знакомств и доска объявлений в Иркутске</h1>
</div>

";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Знакомства в Иркутске"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "<!-- title -->

<div class=\"cats\">

  <a class=\"main-link\" href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/ona-on");
        echo "\">
    <span class=\"arrow\">
      Девушка ищет парня
      <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/f-m.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/on-ona");
        echo "\">
    <span class=\"arrow\">
      Парень ищет девушку
      <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/m-f.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/on-on");
        echo "\">
    <span class=\"arrow\">
      Парень ищет парня
      <img src=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/m-m.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/ona-ona");
        echo "\">
    <span class=\"arrow\">
      Дувешка ищет девушку
      <img src=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/f-f.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/free");
        echo "\">
    <span class=\"arrow\">
      Досуг в Иркутске
      <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/dosug.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/services");
        echo "\">
    <span class=\"services\">
      Услуги массажа
      <img src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/services.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/family");
        echo "\">
    <span class=\"arrow\">
      Семейные пары
      <img src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/family.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 80
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/flirt");
        echo "\">
    <span class=\"arrow\">
      Свободные отношения, флирт
      <img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/free.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

</div>
<!-- /.cats -->



";
        // line 95
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Мобильная доска объявлений"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 96
        echo "<!-- /.title -->

<!-- Доска объявлений -->
<div class=\"cats\">

  <a class=\"main-link\" href=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/realty");
        echo "\">
    <span class=\"arrow\">
      Недвижимость
      <img alt='мобильные смс знакомства' src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/realty.png");
        echo "\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 112
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/arenda");
        echo "\">
    <span class=\"arrow\">
      Аренда квартир (суточно)
      <img alt='мобильные смс знакомства' src=\"";
        // line 115
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/arenda.png");
        echo "\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 123
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/work");
        echo "\">
    <span class=\"arrow\">
      Работа
      <img alt=\"мобильные смс знакомства\" src=\"";
        // line 126
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/work.png");
        echo "\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

</div>

";
        // line 136
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/socials"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 136,  239 => 126,  233 => 123,  222 => 115,  216 => 112,  205 => 104,  199 => 101,  192 => 96,  187 => 95,  172 => 83,  166 => 80,  156 => 73,  150 => 70,  140 => 63,  134 => 60,  124 => 53,  118 => 50,  108 => 43,  102 => 40,  92 => 33,  86 => 30,  76 => 23,  70 => 20,  60 => 13,  54 => 10,  48 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"infblock\">
  <h1>Сайт знакомств и доска объявлений в Иркутске</h1>
</div>

{% partial 'second/title' text = \"Знакомства в Иркутске\" %}
<!-- title -->

<div class=\"cats\">

  <a class=\"main-link\" href=\"{{ 'categories/ona-on'|page }}\">
    <span class=\"arrow\">
      Девушка ищет парня
      <img src=\"{{ 'assets/images/cats/f-m.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/on-ona'|page }}\">
    <span class=\"arrow\">
      Парень ищет девушку
      <img src=\"{{ 'assets/images/cats/m-f.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/on-on'|page }}\">
    <span class=\"arrow\">
      Парень ищет парня
      <img src=\"{{ 'assets/images/cats/m-m.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/ona-ona'|page }}\">
    <span class=\"arrow\">
      Дувешка ищет девушку
      <img src=\"{{ 'assets/images/cats/f-f.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/free'|page }}\">
    <span class=\"arrow\">
      Досуг в Иркутске
      <img src=\"{{ 'assets/images/cats/dosug.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/services'|page }}\">
    <span class=\"services\">
      Услуги массажа
      <img src=\"{{ 'assets/images/cats/services.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/family'|page }}\">
    <span class=\"arrow\">
      Семейные пары
      <img src=\"{{ 'assets/images/cats/family.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/flirt'|page }}\">
    <span class=\"arrow\">
      Свободные отношения, флирт
      <img src=\"{{ 'assets/images/cats/free.png'|theme }}\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

</div>
<!-- /.cats -->



{% partial 'second/title' text = \"Мобильная доска объявлений\" %}
<!-- /.title -->

<!-- Доска объявлений -->
<div class=\"cats\">

  <a class=\"main-link\" href=\"{{ 'categories/realty'|page }}\">
    <span class=\"arrow\">
      Недвижимость
      <img alt='мобильные смс знакомства' src=\"{{ 'assets/images/cats/realty.png'|theme }}\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/arenda'|page }}\">
    <span class=\"arrow\">
      Аренда квартир (суточно)
      <img alt='мобильные смс знакомства' src=\"{{ 'assets/images/cats/arenda.png'|theme }}\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"{{ 'categories/work'|page }}\">
    <span class=\"arrow\">
      Работа
      <img alt=\"мобильные смс знакомства\" src=\"{{ 'assets/images/cats/work.png'|theme }}\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

</div>

{% partial 'second/socials' %}", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/home.htm", "");
    }
}
