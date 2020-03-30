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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/test.htm */
class __TwigTemplate_661389b2819dabe978df91c16a517ca2e916e49dcea6a6c67f8f60703ad37cee extends \Twig\Template
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
        echo "<div class=\"jumbotron\">

  ";
        // line 3
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onLol", ["data-request-flash" => true]]);
        echo "
  <input type=\"text\" class=\"form-control mb-2\" name=\"text\" id=\"text\">
  <button type=\"submit\" class=\"btn btn-success btn-sm\">Отправить</button>
  ";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
        echo "
  
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"jumbotron\">

  {{ form_ajax('onLol', { 'data-request-flash': true }) }}
  <input type=\"text\" class=\"form-control mb-2\" name=\"text\" id=\"text\">
  <button type=\"submit\" class=\"btn btn-success btn-sm\">Отправить</button>
  {{ form_close() }}
  
</div>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/test.htm", "");
    }
}
