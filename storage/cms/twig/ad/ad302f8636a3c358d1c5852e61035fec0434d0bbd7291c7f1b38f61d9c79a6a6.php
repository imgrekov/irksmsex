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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/layouts/home.htm */
class __TwigTemplate_f562038c5c01144369bf2dbee545be63b2f90a944322553148ed24935d48a2b4 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <title>
    ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6)) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
            echo "
    ";
        } elseif (        // line 8
($context["title"] ?? null)) {
            // line 9
            echo "    ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
    ";
        } else {
            // line 11
            echo "    Сайт знакомств irksmsex.ru
    ";
        }
        // line 13
        echo "  </title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
  <meta name=\"keywords\" content=\"знакомства для девушек, парни иркутска, ищу парня, ищу мужчину\">
  <meta name=\"description\" content=\"Размещение объявлений для поиска девушек\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic\" rel=\"stylesheet\">

  ";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 23
        echo "
  <!-- Bootstrap -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

  <!-- FontAwesome -->
  <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

  <!-- Мои стили -->
  <link href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.min.css");
        echo "\" rel=\"stylesheet\">

  <link rel=\"apple-touch-icon\" type=\"image/png\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon/apple-touch-icon.png");
        echo "\">
  <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon/favicon-32x32.png");
        echo "\">

</head>

<body>

  ";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("user-status"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "
  ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
  ";
        // line 46
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 47
        echo "
  ";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/footer-home"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "
  <!-- Версия jquery — 3.3.1 -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>

  <!-- Popper.js -->
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
    integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
  </script>

  <!-- Bootstrap-4.4.1.js -->
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
    integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
  </script>

  <!-- My scripts -->
  <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>

  <!-- OctoberCMS scripts -->
  ";
        // line 67
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 68
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 69
        echo "  
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/layouts/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 69,  164 => 68,  153 => 67,  147 => 64,  130 => 49,  126 => 48,  123 => 47,  121 => 46,  118 => 45,  114 => 44,  111 => 43,  107 => 42,  98 => 36,  94 => 35,  89 => 33,  77 => 23,  74 => 22,  63 => 13,  59 => 11,  53 => 9,  51 => 8,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
  <title>
    {% if this.page.title %}
    {{ this.page.title }}
    {% elseif title %}
    {{ title }}
    {% else %}
    Сайт знакомств irksmsex.ru
    {% endif %}
  </title>
  <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
  <meta name=\"keywords\" content=\"знакомства для девушек, парни иркутска, ищу парня, ищу мужчину\">
  <meta name=\"description\" content=\"Размещение объявлений для поиска девушек\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic\" rel=\"stylesheet\">

  {% styles %}

  <!-- Bootstrap -->
  <link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

  <!-- FontAwesome -->
  <link href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\"
    integrity=\"sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN\" crossorigin=\"anonymous\">

  <!-- Мои стили -->
  <link href=\"{{ 'assets/css/style.min.css'|theme }}\" rel=\"stylesheet\">

  <link rel=\"apple-touch-icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon/apple-touch-icon.png'|theme }}\">
  <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/favicon/favicon-32x32.png'|theme }}\">

</head>

<body>

  {% partial 'user-status' %}

  {% partial 'header' %}

  {% page %}

  {% partial 'second/footer-home' %}

  <!-- Версия jquery — 3.3.1 -->
  <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>

  <!-- Popper.js -->
  <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
    integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
  </script>

  <!-- Bootstrap-4.4.1.js -->
  <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
    integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
  </script>

  <!-- My scripts -->
  <script src=\"{{ 'assets/js/app.js'|theme }}\"></script>

  <!-- OctoberCMS scripts -->
  {% framework extras %}
  {% scripts %}
  
</body>

</html>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/layouts/home.htm", "");
    }
}
