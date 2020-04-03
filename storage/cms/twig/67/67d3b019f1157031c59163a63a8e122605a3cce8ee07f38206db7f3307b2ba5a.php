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
        echo "<div class=\"sms3\">
\t<a class=\"btn btn-light btn-sm\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">К объявлениям</a>
</div>

";
        // line 5
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Описание элементов"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/help-title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "
<div class=\"help-desc\">
\t<h3 class=\"text-center mt-3 profile-hero__title\">Типы объявлений</h3>
\t<ul class=\"help-page-list\">

\t\t<li class=\"help-page-item\">
\t\t\t<h4 class=\"help-desc__title\">Basic</h4>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Обычное объявление</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/basic.jpg");
        echo "\" alt=\"Пример обычного объявления\"
\t\t\t\tclass=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t\t<li class=\"help-page-item\">
\t\t\t<h4 class=\"help-desc__title\">VIP</h4>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Вип объявление. Оно находится выше обычных</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/vip.jpg");
        echo "\" alt=\"Пример vip объявления\" class=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t\t<li class=\"help-page-item\">
\t\t\t<h5 class=\"help-desc__title\">xVip</h3>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Назодится в самом верху страницы. Существовать может только одно объявление такого типа</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/xvip.jpg");
        echo "\" alt=\"Пример объявления типа xvip\" class=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t\t<li class=\"help-page-item\">
\t\t\t<h4 class=\"help-desc__title\">Экстра выделение</h4>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Экстра выделение</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/highlight.jpg");
        echo "\" alt=\"Пример экстра выделенного объявления\" class=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t</ul>
\t<!-- /.help-page-list -->
</div>
<!-- /.help-desc -->

";
        // line 53
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Как разместить объявление?"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/help-title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "
<div class=\"help-instruction\">
\t<ol class=\"add-advert\">
\t\t
\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Зарегистрируйтесь</h5>
\t\t\t<img src=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/1-register.jpg");
        echo "\" alt=\"Страница регистрации\">
\t\t</li>
\t\t<!-- /.add-advert__item -->
\t\t
\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Создайте объявление</h5>
\t\t\t<p>Это можно сделать перейдя по ссылке из личного кабинета</p>
\t\t\t<img src=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/2-lk.jpg");
        echo "\" alt=\"Личный кабинет без объявлений\">
\t\t\t<hr>
\t\t\t<img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/2-create.jpg");
        echo "\" alt=\"Страница «Создать объявление»\">
\t\t</li>
\t\t<!-- /.add-advert__item -->

\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Активируйте объявление</h5>
\t\t\t<p>Это делается на странице редактирования объявления. Туда можно попасть из личного кабинета</p>
\t\t\t<img src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/3-advert.jpg");
        echo "\" alt=\"Объявление в личном кабинете\">
\t\t\t<hr>
\t\t\t<img src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/3-activate.jpg");
        echo "\" alt=\"Страница «Редактировать объявление»\">
\t\t</li>
\t\t<!-- /.add-advert__item -->

\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Посмотрите на него</h5>
\t\t\t<p>Для этого перейдите на страницу со всеми объявлениями выбранной категории</p>
\t\t\t<img src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/help-page/4-look.jpg");
        echo "\" alt=\"Главная страница\">
\t\t</li>
\t\t<!-- /.add-advert__item -->
\t
\t</ol>
\t<!-- /.add-advert -->
</div>
<!-- /.help-desc -->

";
        // line 94
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['text'] = "Правила сервиса"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("second/help-title"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 95
        echo "

<div class=\"rules\">
\t<ol class=\"rules-list\">
\t\t<li class=\"rules-item\">
\t\t\t<p>
\t\t\t\tАдминистрация сервиса не&nbsp;несёт ответственности за&nbsp;достоверность информации и&nbsp;содержание
\t\t\t\tобъявлений.
\t\t\t</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>
\t\t\t\tОтправитель объявления полностью отвечает перед третьими лицами за&nbsp;достоверность информации
\t\t\t\tв&nbsp;размещаемых объявлениях.
\t\t\t</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>Не&nbsp;принимаются к&nbsp;публикации объявления: содержащие рекламу иных сайтов, платных коротких номеров,
\t\t\t\tнецензурные выражения, а также безграмотные, бессмысленные, оскорбительные, клеветнические и мошеннические.
\t\t\t</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>Запрещены к&nbsp;публикации объявления, комментирующие действия администрации сервиса.</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>Запрещены к&nbsp;публикации фотографии женских и&nbsp;мужских гениталий.</p>
\t\t</li>
\t\t<!-- /.rules-item -->
\t</ol>
\t<!-- /.rules-list -->


\t<hr>

\t<div class=\"rules-desc\">
\t\t<p>
\t\t\tВ&nbsp;вышеперечисленных случаях администрация сервиса оставляет за&nbsp;собой право на&nbsp;свое усмотрение
\t\t\tудалить
\t\t\tобъявление или его&nbsp;часть, проводить модерацию объявлений: смена рубрики &nbsp;соответствии
\t\t\tсо&nbsp;смыслом объявления, внесение изменений в&nbsp;текст объявления &nbsp;целью приведения его
\t\t\tв&nbsp;соответствие
\t\t\tс&nbsp;правилами публикации.
\t\t</p>
\t\t<p>
\t\t\tАдминистрация сервиса оставляет за&nbsp;собой право <strong>блокировать аккаунты</strong> постоянно нарушающие
\t\t\tправила, с&nbsp;которых размещаются объявления.
\t\t</p>
\t</div>
\t<!-- /.rules-desc -->

</div>
<!-- /.rules -->";
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
        return array (  182 => 95,  177 => 94,  165 => 85,  155 => 78,  150 => 76,  140 => 69,  135 => 67,  125 => 60,  117 => 54,  112 => 53,  100 => 44,  88 => 35,  76 => 26,  63 => 16,  51 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sms3\">
\t<a class=\"btn btn-light btn-sm\" href=\"{{ 'home'|page }}\">К объявлениям</a>
</div>

{% partial 'second/help-title' text = \"Описание элементов\" %}

<div class=\"help-desc\">
\t<h3 class=\"text-center mt-3 profile-hero__title\">Типы объявлений</h3>
\t<ul class=\"help-page-list\">

\t\t<li class=\"help-page-item\">
\t\t\t<h4 class=\"help-desc__title\">Basic</h4>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Обычное объявление</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"{{ 'assets/images/help-page/basic.jpg'|theme }}\" alt=\"Пример обычного объявления\"
\t\t\t\tclass=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t\t<li class=\"help-page-item\">
\t\t\t<h4 class=\"help-desc__title\">VIP</h4>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Вип объявление. Оно находится выше обычных</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"{{ 'assets/images/help-page/vip.jpg'|theme }}\" alt=\"Пример vip объявления\" class=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t\t<li class=\"help-page-item\">
\t\t\t<h5 class=\"help-desc__title\">xVip</h3>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Назодится в самом верху страницы. Существовать может только одно объявление такого типа</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"{{ 'assets/images/help-page/xvip.jpg'|theme }}\" alt=\"Пример объявления типа xvip\" class=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t\t<li class=\"help-page-item\">
\t\t\t<h4 class=\"help-desc__title\">Экстра выделение</h4>
\t\t\t<!-- /.help-desc__title -->
\t\t\t<p class=\"help-desc__desc\">Экстра выделение</p>
\t\t\t<!-- /.help-desc__desc -->
\t\t\t<img src=\"{{ 'assets/images/help-page/highlight.jpg'|theme }}\" alt=\"Пример экстра выделенного объявления\" class=\"help-desc__image\">
\t\t</li>
\t\t<!-- /.help-page-item -->

\t</ul>
\t<!-- /.help-page-list -->
</div>
<!-- /.help-desc -->

{% partial 'second/help-title' text = \"Как разместить объявление?\" %}

<div class=\"help-instruction\">
\t<ol class=\"add-advert\">
\t\t
\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Зарегистрируйтесь</h5>
\t\t\t<img src=\"{{ 'assets/images/help-page/1-register.jpg'|theme }}\" alt=\"Страница регистрации\">
\t\t</li>
\t\t<!-- /.add-advert__item -->
\t\t
\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Создайте объявление</h5>
\t\t\t<p>Это можно сделать перейдя по ссылке из личного кабинета</p>
\t\t\t<img src=\"{{ 'assets/images/help-page/2-lk.jpg'|theme }}\" alt=\"Личный кабинет без объявлений\">
\t\t\t<hr>
\t\t\t<img src=\"{{ 'assets/images/help-page/2-create.jpg'|theme }}\" alt=\"Страница «Создать объявление»\">
\t\t</li>
\t\t<!-- /.add-advert__item -->

\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Активируйте объявление</h5>
\t\t\t<p>Это делается на странице редактирования объявления. Туда можно попасть из личного кабинета</p>
\t\t\t<img src=\"{{ 'assets/images/help-page/3-advert.jpg'|theme }}\" alt=\"Объявление в личном кабинете\">
\t\t\t<hr>
\t\t\t<img src=\"{{ 'assets/images/help-page/3-activate.jpg'|theme }}\" alt=\"Страница «Редактировать объявление»\">
\t\t</li>
\t\t<!-- /.add-advert__item -->

\t\t<li class=\"add-advert__item\">
\t\t\t<h5>Посмотрите на него</h5>
\t\t\t<p>Для этого перейдите на страницу со всеми объявлениями выбранной категории</p>
\t\t\t<img src=\"{{ 'assets/images/help-page/4-look.jpg'|theme }}\" alt=\"Главная страница\">
\t\t</li>
\t\t<!-- /.add-advert__item -->
\t
\t</ol>
\t<!-- /.add-advert -->
</div>
<!-- /.help-desc -->

{% partial 'second/help-title' text = \"Правила сервиса\" %}


<div class=\"rules\">
\t<ol class=\"rules-list\">
\t\t<li class=\"rules-item\">
\t\t\t<p>
\t\t\t\tАдминистрация сервиса не&nbsp;несёт ответственности за&nbsp;достоверность информации и&nbsp;содержание
\t\t\t\tобъявлений.
\t\t\t</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>
\t\t\t\tОтправитель объявления полностью отвечает перед третьими лицами за&nbsp;достоверность информации
\t\t\t\tв&nbsp;размещаемых объявлениях.
\t\t\t</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>Не&nbsp;принимаются к&nbsp;публикации объявления: содержащие рекламу иных сайтов, платных коротких номеров,
\t\t\t\tнецензурные выражения, а также безграмотные, бессмысленные, оскорбительные, клеветнические и мошеннические.
\t\t\t</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>Запрещены к&nbsp;публикации объявления, комментирующие действия администрации сервиса.</p>
\t\t</li>
\t\t<!-- /.rules-item -->

\t\t<li class=\"rules-item\">
\t\t\t<p>Запрещены к&nbsp;публикации фотографии женских и&nbsp;мужских гениталий.</p>
\t\t</li>
\t\t<!-- /.rules-item -->
\t</ol>
\t<!-- /.rules-list -->


\t<hr>

\t<div class=\"rules-desc\">
\t\t<p>
\t\t\tВ&nbsp;вышеперечисленных случаях администрация сервиса оставляет за&nbsp;собой право на&nbsp;свое усмотрение
\t\t\tудалить
\t\t\tобъявление или его&nbsp;часть, проводить модерацию объявлений: смена рубрики &nbsp;соответствии
\t\t\tсо&nbsp;смыслом объявления, внесение изменений в&nbsp;текст объявления &nbsp;целью приведения его
\t\t\tв&nbsp;соответствие
\t\t\tс&nbsp;правилами публикации.
\t\t</p>
\t\t<p>
\t\t\tАдминистрация сервиса оставляет за&nbsp;собой право <strong>блокировать аккаунты</strong> постоянно нарушающие
\t\t\tправила, с&nbsp;которых размещаются объявления.
\t\t</p>
\t</div>
\t<!-- /.rules-desc -->

</div>
<!-- /.rules -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/help.htm", "");
    }
}
