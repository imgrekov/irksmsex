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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/create-advert.htm */
class __TwigTemplate_3797170cee66a7cad58cbc6d7dbc189b465926ac30807e4ae4b0a0ca81d59c58 extends \Twig\Template
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
\t<a class=\"btn btn-secondary\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("help");
        echo "\">Как добавлять объявления?</a>
</div>

";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Добавить объявление"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/to_home"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "
<main class=\"main\">
\t";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("createAdvert"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "</main>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/create-advert.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  62 => 10,  58 => 8,  54 => 7,  51 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"infblock\">
\t<a class=\"btn btn-secondary\" href=\"{{ 'help'|page }}\">Как добавлять объявления?</a>
</div>

{% partial 'second/title' text = \"Добавить объявление\" %}

{% partial 'second/to_home' %}

<main class=\"main\">
\t{% component 'createAdvert' %}
</main>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/create-advert.htm", "");
    }
}
