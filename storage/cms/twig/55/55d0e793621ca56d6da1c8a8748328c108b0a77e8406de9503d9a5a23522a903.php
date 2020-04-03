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
        echo "\t
\t";
        // line 40
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/xvip-record"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 41
        echo "
\t";
        // line 42
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 43
        echo "
\t";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/tohome"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "
\t<div class=\"adverts-list\">
\t\t";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 48
        echo "\t</div>

\t";
        // line 50
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 51
        echo "
\t<!-- Версия jquery — 3.3.1 -->
\t<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>

\t<!-- Popper.js -->
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
\t\tintegrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
\t</script>

\t<!-- Bootstrap-4.4.1.js -->
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
\t</script>

\t<!-- My scripts -->
\t<script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/app.js");
        echo "\"></script>

\t<!-- OctoberCMS scripts -->
\t";
        // line 69
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
        // line 70
        echo "\t";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 71
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
        return array (  188 => 71,  184 => 70,  173 => 69,  167 => 66,  150 => 51,  146 => 50,  142 => 48,  140 => 47,  136 => 45,  132 => 44,  129 => 43,  125 => 42,  122 => 41,  118 => 40,  115 => 39,  111 => 38,  108 => 37,  104 => 36,  101 => 35,  97 => 34,  88 => 28,  84 => 27,  80 => 26,  75 => 24,  69 => 20,  66 => 19,  56 => 11,  52 => 9,  46 => 7,  44 => 6,  37 => 1,);
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
\t
\t{% partial 'adverts/xvip-record' %}

\t{% partial 'adverts/title' %}

\t{% partial 'adverts/tohome' %}

\t<div class=\"adverts-list\">
\t\t{% page %}
\t</div>

\t{% partial 'footer' %}

\t<!-- Версия jquery — 3.3.1 -->
\t<script src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>

\t<!-- Popper.js -->
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\"
\t\tintegrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\">
\t</script>

\t<!-- Bootstrap-4.4.1.js -->
\t<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\"
\t\tintegrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\">
\t</script>

\t<!-- My scripts -->
\t<script src=\"{{ 'assets/js/app.js'|theme }}\"></script>

\t<!-- OctoberCMS scripts -->
\t{% framework extras %}
\t{% scripts %}

</body>

</html>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/layouts/advert.htm", "");
    }
}
