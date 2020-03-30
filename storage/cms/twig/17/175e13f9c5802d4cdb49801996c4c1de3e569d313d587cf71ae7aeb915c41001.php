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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/advert/create-success.htm */
class __TwigTemplate_05fc2318ca28cc6bce57a2e65c2fc66eb0f578dcec33e180caaefe171027e691 extends \Twig\Template
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
        // line 2
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = "Объявление создано успешно"        ;
        $context['__cms_partial_params']['text'] = "Сейчас оно неактивно. Его необходимо активировать в личном кабинете"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/success"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/advert/create-success.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{%
  partial 'adverts/success'
  title = \"Объявление создано успешно\"
  text = \"Сейчас оно неактивно. Его необходимо активировать в личном кабинете\"
%}", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/advert/create-success.htm", "");
    }
}
