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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/advert/edt-success.htm */
class __TwigTemplate_18f5b3f349196d69b1a1d968a76f44cce4cdd89f8d832c09b4d9c643ef825c2c extends \Twig\Template
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
        $context['__cms_partial_params']['title'] = "Объявление изменено успешно"        ;
        $context['__cms_partial_params']['text'] = "Посмотри в личном кабинете. Если вы активировали объявление, оно появится в общем списке"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("adverts/success"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/advert/edt-success.htm";
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
  title = \"Объявление изменено успешно\"
  text = \"Посмотри в личном кабинете. Если вы активировали объявление, оно появится в общем списке\"
%}", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/advert/edt-success.htm", "");
    }
}
