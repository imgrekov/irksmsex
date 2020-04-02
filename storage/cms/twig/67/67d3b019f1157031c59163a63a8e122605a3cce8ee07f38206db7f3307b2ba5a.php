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

/* D:\OSPanel\domains\irksmsex.ru/themes/irksmsex/pages/help.htm */
class __TwigTemplate_39be55843eaa69e448d1936c6a6c587498e9eaffa33fdc0914a8c166e0d76361 extends \Twig\Template
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
        echo "<div class=\"help-block\">
\t<p class=\"help-block__title\">Рубрика: Смс знакомства > Парень ищет девушку</p>

\t<a class=\"help-block__line\" href=\"#simple\">
\t\tКак разместить обычное объявление?
\t</a>

\t<a class=\"help-block__line\" href=\"#vip\">
\t\tКак разместить VIP объявление?
\t</a>

\t<a class=\"help-block__line\" href=\"#pravila\">
\t\tПравила публикаций объявлений <span>&darr;</span>
\t</a>
</div>

<div class=\"sms3\">
\t<a class=\"btn btn-light btn-sm\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">К объявлениям</a>
</div>

<div class=\"title\">
\t<h2 id=\"simple\">Как разместить обычное объявление?</h2>
</div>

<div class=\"content\">

\t<p class=\"help-desc\">
\t\tДля размещения обычного объявления, отправьте смс сообщение:
\t\t<br>
\t\t<span class=\"bfs15\">
\t\t\tvot1</span>&nbsp;(пробел)&nbsp;<b>сообщение</b> на&nbsp;номер&nbsp;<span
\t\t\tclass=\"bfs15\">9009</span>&nbsp;смс&nbsp;сообщения (10 рублей)
\t</p>

\t<div style=\"text-align: center;padding: 5px;\">
\t\t<div class=\"help\">
\t\t\t<img src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/sms_example11.jpg");
        echo "\">
\t\t</div>

\t\t<div class=\"help\">
\t\t\t<img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/sms_example21.jpg");
        echo "\">
\t\t</div>
\t</div>
</div>


<div class=\"title\">
\t<h2 id=\"vip\">Как разместить VIP объявление</h2>
</div>

<div class=\"content\">
\t<div class=\"help-desc\">
\t\t<p>VIP объявление отличается от&nbsp;обычного объявления тем, что держится
\t\t\tв&nbsp;<b>первых</b> позициях на&nbsp;<b>главной странице</b>
\t\t\tрубрики&nbsp;течение 2-х&nbsp;суток&nbsp;обозначается&nbsp;значком&nbsp;
\t\t\t<img src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/vip2.png");
        echo "\" alt=\"ТОП сообщение\">.
\t\t</p>
\t\t<p>Ваше объявление не&nbsp;останется незамеченным!</p>
\t\t<p>Для размещения&nbsp;объявления отправьте смс&nbsp;сообщение:</p>
\t\t<span class=\"bfs15\">votvip1</span>&nbsp;(пробел)&nbsp;<b>сообщение</b>
\t\tна&nbsp;номер&nbsp;<span class=\"bfs15\">9009</span>&nbsp;смс&nbsp;сообщения
\t\t(~90 рублей)
\t</div>

\t<div style=\"text-align: center;padding: 5px;\">
\t\t<div class=\"help\">
\t\t\t<img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/vip_example11.jpg");
        echo "\">
\t\t</div>

\t\t<div class=\"help\">
\t\t\t<img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/vip_example21.jpg");
        echo "\">
\t\t</div>


\t</div>
\t<div style=\"text-align: center;padding: 5px;\">
\t\t<div class=\"help\">
\t\t\t<p>Пример отображения VIP объявления:</p><img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/vipsample.jpg");
        echo "\">
\t\t</div>
\t</div>
</div>

<div class=\"title\">
\t<h2 id=\"pravila\">Правила публикации объявлений</h2>
</div>

<div class=\"content\">
\t<div class=\"red\">
\t\t<ol class=\"rules\">
\t\t\t<li>
\t\t\t\t<p>
\t\t\t\t\tАдминистрация сервиса не&nbsp;несёт ответственности за&nbsp;достоверность информации и&nbsp;содержание
\t\t\t\t\tобъявлений.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>
\t\t\t\t\tОтправитель объявления полностью отвечает перед третьими лицами за&nbsp;достоверность информации
\t\t\t\t\tв&nbsp;размещаемых объявлениях.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>Не&nbsp;принимаются к&nbsp;публикации объявления: содержащие рекламу иных сайтов, платных коротких номеров,
\t\t\t\t\tнецензурные выражения, а также безграмотные, бессмысленные, оскорбительные, клеветнические и мошеннические.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>Запрещены к&nbsp;публикации объявления, комментирующие действия администрации сервиса.</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>Запрещены к&nbsp;публикации фотографии женских и&nbsp;мужских гениталий.</p>
\t\t\t</li>
\t\t</ol>

\t\t<hr>

\t\t<div class=\"rules-desc\">В&nbsp;вышеперечисленных случаях администрация сервиса оставляет за&nbsp;собой право
\t\t\tна&nbsp;свое усмотрение
\t\t\tудалить
\t\t\tобъявление или его&nbsp;часть, проводить модерацию объявлений, такую как: смена рубрики &nbsp;соответствии
\t\t\tсо&nbsp;смыслом
\t\t\tобъявления, внесение изменений в&nbsp;текст объявления &nbsp;целью приведения его в&nbsp;соответствие
\t\t\tс&nbsp;правилами
\t\t\tпубликации. Администрация сервиса оставляет за&nbsp;собой право <strong>блокировать телефонные номера</strong>,
\t\t\tс&nbsp;которых размещаются объявления, постоянно нарушающие правила публикации смс&nbsp;объявлений.</div>

\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/help.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 78,  124 => 71,  117 => 67,  103 => 56,  85 => 41,  78 => 37,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"help-block\">
\t<p class=\"help-block__title\">Рубрика: Смс знакомства > Парень ищет девушку</p>

\t<a class=\"help-block__line\" href=\"#simple\">
\t\tКак разместить обычное объявление?
\t</a>

\t<a class=\"help-block__line\" href=\"#vip\">
\t\tКак разместить VIP объявление?
\t</a>

\t<a class=\"help-block__line\" href=\"#pravila\">
\t\tПравила публикаций объявлений <span>&darr;</span>
\t</a>
</div>

<div class=\"sms3\">
\t<a class=\"btn btn-light btn-sm\" href=\"{{ 'home'|page }}\">К объявлениям</a>
</div>

<div class=\"title\">
\t<h2 id=\"simple\">Как разместить обычное объявление?</h2>
</div>

<div class=\"content\">

\t<p class=\"help-desc\">
\t\tДля размещения обычного объявления, отправьте смс сообщение:
\t\t<br>
\t\t<span class=\"bfs15\">
\t\t\tvot1</span>&nbsp;(пробел)&nbsp;<b>сообщение</b> на&nbsp;номер&nbsp;<span
\t\t\tclass=\"bfs15\">9009</span>&nbsp;смс&nbsp;сообщения (10 рублей)
\t</p>

\t<div style=\"text-align: center;padding: 5px;\">
\t\t<div class=\"help\">
\t\t\t<img src=\"{{ 'assets/images/example/sms_example11.jpg'|theme }}\">
\t\t</div>

\t\t<div class=\"help\">
\t\t\t<img src=\"{{ 'assets/images/example/sms_example21.jpg'|theme }}\">
\t\t</div>
\t</div>
</div>


<div class=\"title\">
\t<h2 id=\"vip\">Как разместить VIP объявление</h2>
</div>

<div class=\"content\">
\t<div class=\"help-desc\">
\t\t<p>VIP объявление отличается от&nbsp;обычного объявления тем, что держится
\t\t\tв&nbsp;<b>первых</b> позициях на&nbsp;<b>главной странице</b>
\t\t\tрубрики&nbsp;течение 2-х&nbsp;суток&nbsp;обозначается&nbsp;значком&nbsp;
\t\t\t<img src=\"{{ 'assets/images/example/vip2.png'|theme }}\" alt=\"ТОП сообщение\">.
\t\t</p>
\t\t<p>Ваше объявление не&nbsp;останется незамеченным!</p>
\t\t<p>Для размещения&nbsp;объявления отправьте смс&nbsp;сообщение:</p>
\t\t<span class=\"bfs15\">votvip1</span>&nbsp;(пробел)&nbsp;<b>сообщение</b>
\t\tна&nbsp;номер&nbsp;<span class=\"bfs15\">9009</span>&nbsp;смс&nbsp;сообщения
\t\t(~90 рублей)
\t</div>

\t<div style=\"text-align: center;padding: 5px;\">
\t\t<div class=\"help\">
\t\t\t<img src=\"{{ 'assets/images/example/vip_example11.jpg'|theme }}\">
\t\t</div>

\t\t<div class=\"help\">
\t\t\t<img src=\"{{ 'assets/images/example/vip_example21.jpg'|theme }}\">
\t\t</div>


\t</div>
\t<div style=\"text-align: center;padding: 5px;\">
\t\t<div class=\"help\">
\t\t\t<p>Пример отображения VIP объявления:</p><img src=\"{{ 'assets/images/example/vipsample.jpg'|theme }}\">
\t\t</div>
\t</div>
</div>

<div class=\"title\">
\t<h2 id=\"pravila\">Правила публикации объявлений</h2>
</div>

<div class=\"content\">
\t<div class=\"red\">
\t\t<ol class=\"rules\">
\t\t\t<li>
\t\t\t\t<p>
\t\t\t\t\tАдминистрация сервиса не&nbsp;несёт ответственности за&nbsp;достоверность информации и&nbsp;содержание
\t\t\t\t\tобъявлений.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>
\t\t\t\t\tОтправитель объявления полностью отвечает перед третьими лицами за&nbsp;достоверность информации
\t\t\t\t\tв&nbsp;размещаемых объявлениях.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>Не&nbsp;принимаются к&nbsp;публикации объявления: содержащие рекламу иных сайтов, платных коротких номеров,
\t\t\t\t\tнецензурные выражения, а также безграмотные, бессмысленные, оскорбительные, клеветнические и мошеннические.
\t\t\t\t</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>Запрещены к&nbsp;публикации объявления, комментирующие действия администрации сервиса.</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<p>Запрещены к&nbsp;публикации фотографии женских и&nbsp;мужских гениталий.</p>
\t\t\t</li>
\t\t</ol>

\t\t<hr>

\t\t<div class=\"rules-desc\">В&nbsp;вышеперечисленных случаях администрация сервиса оставляет за&nbsp;собой право
\t\t\tна&nbsp;свое усмотрение
\t\t\tудалить
\t\t\tобъявление или его&nbsp;часть, проводить модерацию объявлений, такую как: смена рубрики &nbsp;соответствии
\t\t\tсо&nbsp;смыслом
\t\t\tобъявления, внесение изменений в&nbsp;текст объявления &nbsp;целью приведения его в&nbsp;соответствие
\t\t\tс&nbsp;правилами
\t\t\tпубликации. Администрация сервиса оставляет за&nbsp;собой право <strong>блокировать телефонные номера</strong>,
\t\t\tс&nbsp;которых размещаются объявления, постоянно нарушающие правила публикации смс&nbsp;объявлений.</div>

\t</div>
</div>", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/help.htm", "");
    }
}
