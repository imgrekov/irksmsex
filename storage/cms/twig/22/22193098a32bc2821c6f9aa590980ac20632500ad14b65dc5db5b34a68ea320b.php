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

<div class='title'>
\t<h2>Добавить объявление</h2>
</div>


<div class=\"sms3\">
\t<a class=\"btn btn-light btn-sm\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">На главную</a>
</div>

<main class=\"main\">
\t<div class=\"container\">
\t\t";
        // line 16
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("createAdvert"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 17
        echo "\t</div>
</main>";
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
        return array (  64 => 17,  60 => 16,  52 => 11,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"infblock\">
\t<a class=\"btn btn-secondary\" href=\"{{ 'help'|page }}\">Как добавлять объявления?</a>
</div>

<div class='title'>
\t<h2>Добавить объявление</h2>
</div>


<div class=\"sms3\">
\t<a class=\"btn btn-light btn-sm\" href=\"{{ 'home'|page }}\">На главную</a>
</div>

<main class=\"main\">
\t<div class=\"container\">
\t\t{% component 'createAdvert' %}
\t</div>
</main>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/create-advert.htm", "");
    }
}
