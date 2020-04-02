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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/user/account.htm */
class __TwigTemplate_b29aaca7adad6f28ea4b5eebbd7caf9b9bb4a58e458239894372bc244dbde0fe extends \Twig\Template
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
        echo "<div class=\"user-hero\">


\t";
        // line 4
        if ( !($context["user"] ?? null)) {
            // line 5
            echo "\t<div class=\"row\">
\t\t<div class=\"col-md-5\">
\t\t\t<h2 class=\"user-form__title\">Вход</h2>
\t\t\t";
            // line 8
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 9
            echo "\t\t</div>

\t\t<div class=\"col-md-7\">
\t\t\t";
            // line 12
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::register")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 13
            echo "\t\t</div>
\t</div>


\t";
        } else {
            // line 18
            echo "
\t<div class=\"profile-edit\">
\t\t<h1 class=\"profile-edit__title\">Настройки аккаунта</h1>
\t\t<small>Здесь ты можешь обновить пароль или деактивировать аккаунт.</small>

\t\t<hr>
\t\t
\t\t<div class=\"profile-edit__update\">";
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::update")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo "</div>
\t\t<hr>
\t\t";
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["account"] ?? null) . "::deactivate_link")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "\t</div>


\t";
        }
        // line 32
        echo "

</div><!-- /.user-hero -->";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/user/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 32,  89 => 28,  85 => 27,  78 => 25,  69 => 18,  62 => 13,  58 => 12,  53 => 9,  49 => 8,  44 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"user-hero\">


\t{% if not user %}
\t<div class=\"row\">
\t\t<div class=\"col-md-5\">
\t\t\t<h2 class=\"user-form__title\">Вход</h2>
\t\t\t{% partial account ~ '::signin' %}
\t\t</div>

\t\t<div class=\"col-md-7\">
\t\t\t{% partial account ~ '::register' %}
\t\t</div>
\t</div>


\t{% else %}

\t<div class=\"profile-edit\">
\t\t<h1 class=\"profile-edit__title\">Настройки аккаунта</h1>
\t\t<small>Здесь ты можешь обновить пароль или деактивировать аккаунт.</small>

\t\t<hr>
\t\t
\t\t<div class=\"profile-edit__update\">{% partial account ~ '::update' %}</div>
\t\t<hr>
\t\t{% partial account ~ '::deactivate_link' %}
\t</div>


\t{% endif %}


</div><!-- /.user-hero -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/user/account.htm", "");
    }
}
