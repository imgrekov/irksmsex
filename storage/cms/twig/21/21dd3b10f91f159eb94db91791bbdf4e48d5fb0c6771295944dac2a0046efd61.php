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

<!-- Знакомства -->
<div class='title'>
  <h2>Знакомства в Иркутске</h2>
</div>

<div class=\"cats\">

  <a class=\"main-link\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/ona-on");
        echo "\">
    <span class=\"arrow\">
      Девушка ищет парня
      <img src=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/f-m.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/on-ona");
        echo "\">
    <span class=\"arrow\">
      Парень ищет девушку
      <img src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/m-f.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/on-on");
        echo "\">
    <span class=\"arrow\">
      Парень ищет парня
      <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/m-m.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/ona-ona");
        echo "\">
    <span class=\"arrow\">
      Дувешка ищет девушку
      <img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/f-f.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/free");
        echo "\">
    <span class=\"arrow\">
      Досуг в Иркутске
      <img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/dosug.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/services");
        echo "\">
    <span class=\"services\">
      Услуги массажа
      <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/services.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/family");
        echo "\">
    <span class=\"arrow\">
      Семейные пары
      <img src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/family.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/flirt");
        echo "\">
    <span class=\"arrow\">
      Свободные отношения, флирт
      <img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/free.png");
        echo "\" alt=\"Картинка категории\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i><span>1</span>
      </span>
    </span>
  </a>

</div>
<!-- /.title -->



<!-- Доска объявлений -->
<div class='title'>
  <h2>Мобильная доска объявлений</h2>
</div>
<!-- /.title -->


<div class=\"cats\">

  <a class=\"main-link\" href=\"";
        // line 106
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/realty");
        echo "\">
    <span class=\"arrow\">
      Недвижимость
      <img alt='мобильные смс знакомства' src=\"";
        // line 109
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/realty.png");
        echo "\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 117
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/arenda");
        echo "\">
    <span class=\"arrow\">
      Аренда квартир (суточно)
      <img alt='мобильные смс знакомства' src=\"";
        // line 120
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cats/arenda.png");
        echo "\">
      <span class=\"count\">
        <i class=\"fa fa-comment-o\"></i>
        <span>1</span>
      </span>
    </span>
  </a>

  <a class=\"main-link\" href=\"";
        // line 128
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("categories/work");
        echo "\">
    <span class=\"arrow\">
      Работа
      <img alt=\"мобильные смс знакомства\" src=\"";
        // line 131
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
        // line 141
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
        return array (  245 => 141,  232 => 131,  226 => 128,  215 => 120,  209 => 117,  198 => 109,  192 => 106,  168 => 85,  162 => 82,  152 => 75,  146 => 72,  136 => 65,  130 => 62,  120 => 55,  114 => 52,  104 => 45,  98 => 42,  88 => 35,  82 => 32,  72 => 25,  66 => 22,  56 => 15,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"infblock\">
  <h1>Сайт знакомств и доска объявлений в Иркутске</h1>
</div>

<!-- Знакомства -->
<div class='title'>
  <h2>Знакомства в Иркутске</h2>
</div>

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
<!-- /.title -->



<!-- Доска объявлений -->
<div class='title'>
  <h2>Мобильная доска объявлений</h2>
</div>
<!-- /.title -->


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
