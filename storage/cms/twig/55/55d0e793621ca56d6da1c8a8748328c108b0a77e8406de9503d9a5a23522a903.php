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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/layouts/advert.htm */
class __TwigTemplate_60daa6a3e3287acb4832be96ddadeae70aa2bd10172c5876f6c7d89d777a96b7 extends \Twig\Template
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
\t<title>
\t\t";
        // line 6
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6)) {
            // line 7
            echo "\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "title", [], "any", false, false, false, 7), "html", null, true);
            echo "
\t\t";
        } else {
            // line 9
            echo "\t\tСайт знакомств irksmsex.ru
\t\t";
        }
        // line 11
        echo "\t</title>
\t<meta http-equiv=\"content-type\" content=\"charset=utf-8\">
\t<meta name=\"keywords\" content=\"знакомства для девушек, парни иркутска, ищу парня, ищу мужчину\">
\t<meta name=\"description\" content=\"Размещение объявлений для поиска девушек\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic\" rel=\"stylesheet\">

\t";
        // line 19
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 20
        echo "
\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

\t<link rel=\"stylesheet\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.min.css");
        echo "\">
\t<link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"120x120\"
\t\thref=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon/apple-touch-icon.png");
        echo "\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon/favicon-32x32.png");
        echo "\">
\t<link rel=\"mask-icon\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/favicon/safari-pinned-tab.svg");
        echo "\" color=\"#5bbad5\">

</head>

<body>

\t";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("user-status"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "
\t";
        // line 36
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "
\t";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/add-advert"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "
\t<ul class=\"xvip-record\">
\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            if (((twig_get_attribute($this->env, $this->source, $context["record"], "type", [], "any", false, false, false, 41) == "xvip") && (twig_get_attribute($this->env, $this->source, $context["record"], "category", [], "any", false, false, false, 41) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 41), "attr", [], "any", false, false, false, 41)))) {
                // line 42
                echo "
\t\t<li class=\"xvip-record-item\">
\t\t\t<div id=\"";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" class=\"sms\">
\t\t\t\t<!-- Время добавления объявления -->


\t\t\t\t<span class=\"timehead\">
\t\t\t\t\t";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "created_at", [], "any", false, false, false, 49), "d-m-Y H:i"), "html", null, true);
                echo "
\t\t\t\t</span>

\t\t\t\t<!-- <span class=\"views\">0</span> -->
\t\t\t\t<!-- /.views -->

\t\t\t\t<!-- Текст объявления -->
\t\t\t\t<div class=\"sms__text\">
\t\t\t\t\t";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["record"], "text", [], "any", false, false, false, 57);
                echo "
\t\t\t\t</div>


\t\t\t\t";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 61)) {
                    // line 62
                    echo "\t\t\t\t<div class=\"advert__imgs-wrap\">
\t\t\t\t\t<div class=\"advert__image\"><img src=\"";
                    // line 63
                    echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image1", [], "any", false, false, false, 63));
                    echo "\" alt=\"Фото1\"></div>

\t\t\t\t\t";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 65)) {
                        // line 66
                        echo "\t\t\t\t\t<div class=\"advert__image\"><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image2", [], "any", false, false, false, 66));
                        echo "\" alt=\"Фото2\"></div>
\t\t\t\t\t";
                    }
                    // line 68
                    echo "\t\t\t\t\t";
                    if (twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "\t\t\t\t\t<div class=\"advert__image\"><img src=\"";
                        echo $this->extensions['System\Twig\Extension']->mediaFilter(twig_get_attribute($this->env, $this->source, $context["record"], "image3", [], "any", false, false, false, 69));
                        echo "\" alt=\"Фото3\"></div>
\t\t\t\t\t";
                    }
                    // line 71
                    echo "
\t\t\t\t</div>
\t\t\t\t";
                }
                // line 74
                echo "

\t\t\t</div>
\t\t</li>

\t\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
\t</ul>

\t";
        // line 83
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "
\t";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/tohome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 86
        echo "
\t<div class=\"adverts-list\">
\t\t";
        // line 88
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 89
        echo "\t</div>

\t";
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 92
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
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>

  <!-- OctoberCMS scripts -->
  ";
        // line 110
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
        // line 111
        echo "  ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 112
        echo "  
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/layouts/advert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 112,  262 => 111,  251 => 110,  245 => 107,  228 => 92,  224 => 91,  220 => 89,  218 => 88,  214 => 86,  210 => 85,  207 => 84,  203 => 83,  198 => 80,  186 => 74,  181 => 71,  175 => 69,  172 => 68,  166 => 66,  164 => 65,  159 => 63,  156 => 62,  154 => 61,  147 => 57,  136 => 49,  128 => 44,  124 => 42,  119 => 41,  115 => 39,  111 => 38,  108 => 37,  104 => 36,  101 => 35,  97 => 34,  88 => 28,  84 => 27,  80 => 26,  75 => 24,  69 => 20,  66 => 19,  56 => 11,  52 => 9,  46 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
\t<title>
\t\t{% if this.page.title %}
\t\t{{ this.page.title }}
\t\t{% else %}
\t\tСайт знакомств irksmsex.ru
\t\t{% endif %}
\t</title>
\t<meta http-equiv=\"content-type\" content=\"charset=utf-8\">
\t<meta name=\"keywords\" content=\"знакомства для девушек, парни иркутска, ищу парня, ищу мужчину\">
\t<meta name=\"description\" content=\"Размещение объявлений для поиска девушек\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">

\t<link href=\"https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic\" rel=\"stylesheet\">

\t{% styles %}

\t<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
\t\tintegrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">

\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/style.min.css'|theme }}\">
\t<link rel=\"apple-touch-icon\" type=\"image/png\" sizes=\"120x120\"
\t\thref=\"{{ 'assets/images/favicon/apple-touch-icon.png'|theme }}\">
\t<link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"{{ 'assets/images/favicon/favicon-32x32.png'|theme }}\">
\t<link rel=\"mask-icon\" href=\"{{ 'assets/images/favicon/safari-pinned-tab.svg'|theme }}\" color=\"#5bbad5\">

</head>

<body>

\t{% partial 'user-status' %}

\t{% partial 'header' %}

\t{% partial 'adverts/add-advert' %}

\t<ul class=\"xvip-record\">
\t\t{% for record in records if record.type == 'xvip' and record.category == this.page.attr %}

\t\t<li class=\"xvip-record-item\">
\t\t\t<div id=\"{{ record.id }}\" class=\"sms\">
\t\t\t\t<!-- Время добавления объявления -->


\t\t\t\t<span class=\"timehead\">
\t\t\t\t\t{{ record.created_at|date('d-m-Y H:i') }}
\t\t\t\t</span>

\t\t\t\t<!-- <span class=\"views\">0</span> -->
\t\t\t\t<!-- /.views -->

\t\t\t\t<!-- Текст объявления -->
\t\t\t\t<div class=\"sms__text\">
\t\t\t\t\t{{ record.text|raw }}
\t\t\t\t</div>


\t\t\t\t{% if record.image1 %}
\t\t\t\t<div class=\"advert__imgs-wrap\">
\t\t\t\t\t<div class=\"advert__image\"><img src=\"{{ record.image1|media }}\" alt=\"Фото1\"></div>

\t\t\t\t\t{% if record.image2 %}
\t\t\t\t\t<div class=\"advert__image\"><img src=\"{{ record.image2|media }}\" alt=\"Фото2\"></div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{% if record.image3 %}
\t\t\t\t\t<div class=\"advert__image\"><img src=\"{{ record.image3|media }}\" alt=\"Фото3\"></div>
\t\t\t\t\t{% endif %}

\t\t\t\t</div>
\t\t\t\t{% endif %}


\t\t\t</div>
\t\t</li>

\t\t{% endfor %}

\t</ul>

\t{% partial 'adverts/title' %}

\t{% partial 'adverts/tohome' %}

\t<div class=\"adverts-list\">
\t\t{% page %}
\t</div>

\t{% partial 'footer' %}

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

</html>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/layouts/advert.htm", "");
    }
}
