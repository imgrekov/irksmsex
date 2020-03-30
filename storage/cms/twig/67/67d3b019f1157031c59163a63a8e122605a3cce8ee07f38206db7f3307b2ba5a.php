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
        echo "<div class=\"sms3 help-page\">
\t<a class=\"btn btn-light btn-sm\" href=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">К объявлениям</a>
</div>


<div class=\"description\">
\t<h2 class=\"description__title\">Описание всего</h2>
\t<h4 class=\"text-center mb-3\">Тип объявления</h4>
\t<!-- /.description__title -->

\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<ul class=\"description__list\">

\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>basic</span> — Обычное объявление.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/basic.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->

\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>xvip</span> — Поднимает объявление выше всех. Существовать может только одно такое объявление.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/xvip.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->

\t\t\t</ul>
\t\t\t<!-- /.description__list -->
\t\t</div>
\t\t<!-- /.col-md-6 -->


\t\t<div class=\"col-md-6\">
\t\t\t<ul class=\"description__list\">

\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>vip</span> — добаляет сердечко. Стоит выше basic.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/vip.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->


\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>Экстра выделение</span> — Выделяет объявление фоном.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/example/basic.jpg");
        echo "\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->

\t\t\t</ul>
\t\t\t<!-- /.description__list -->
\t\t</div>
\t\t<!-- /.col-md-6 -->
\t</div>
\t<!-- /.row -->

</div>
<!-- /.description -->


<div class=\"howadd\">
\t<h2>Как добавить объявление?</h2>
\t<div class=\"howadd-wrap\">
\t\t<ol>
\t\t\t<li>Зарегистрируйтесь.</li>
\t\t\t<li>В личном кабинете нажмите кнопку \"Создать объявление\"</li>
\t\t\t<li>Создайте объявление: напишите текст и выберите категорию</li>
\t\t\t<li>Вернитесь в личный кабинет и нажмите на кнопку \"Редактировать объявление\"</li>
\t\t\t<li>На странице необходимо выбрать тип объявления, </li>
\t\t\t<li>По желанию добавте изображения и дополнительно выделите объявление</li>
\t\t\t<li>Нажмите на кнопку \"Готово\", затем оплатите</li>
\t\t\t<li>Profit! Осталось только ждать, пока на него ответят</li>
\t\t</ol>
\t</div>
\t<!-- /.howadd-wrap -->
</div>
<!-- /.howadd -->


<div class=\"rules\">
\t<ol>
\t\t<li>
\t\t\t<p>
\t\t\t\tАдминистрация сервиса не&nbsp;несёт ответственности за&nbsp;достоверность информации и&nbsp;содержание
\t\t\t\tобъявлений.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<p>
\t\t\t\tОтправитель объявления полностью отвечает перед третьими лицами за&nbsp;достоверность информации
\t\t\t\tв&nbsp;размещаемых объявлениях.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<p>Не&nbsp;принимаются к&nbsp;публикации объявления: содержащие рекламу иных сайтов, платных коротких номеров,
\t\t\t\tнецензурные выражения, а также безграмотные, бессмысленные, оскорбительные, клеветнические и мошеннические.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<p>Запрещены к&nbsp;публикации объявления, комментирующие действия администрации сервиса.</p>
\t\t</li>
\t\t<li>
\t\t\t<p>Запрещены к&nbsp;публикации фотографии женских и&nbsp;мужских гениталий.</p>
\t\t</li>
\t</ol>

\t<hr class=\"my-3\">


\t<div class=\"rules-desc\">
\t\t<p>
\t\t\tВ&nbsp;вышеперечисленных случаях администрация сервиса оставляет за&nbsp;собой право
\t\t\tна&nbsp;свое усмотрение <strong>удалить объявление или его&nbsp;часть</strong>, изменить
\t\t\tобъявление: <strong>сменить рубрику</strong>, <strong>внести изменения в&nbsp;текст объявления</strong>.
\t\t</p>

\t\t<p>
\t\t\tАдминистрация сервиса оставляет за&nbsp;собой право
\t\t\t<strong>блокировать аккаунты пользователей</strong>, с&nbsp;которых размещаются объявления, постоянно нарушающие
\t\t\tправила.
\t\t</p>
\t</div> <!-- /.rules-desc -->


</div> <!-- /.rules -->";
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
        return array (  105 => 55,  92 => 45,  71 => 27,  59 => 18,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sms3 help-page\">
\t<a class=\"btn btn-light btn-sm\" href=\"{{ 'home'|page }}\">К объявлениям</a>
</div>


<div class=\"description\">
\t<h2 class=\"description__title\">Описание всего</h2>
\t<h4 class=\"text-center mb-3\">Тип объявления</h4>
\t<!-- /.description__title -->

\t<div class=\"row\">
\t\t<div class=\"col-md-6\">
\t\t\t<ul class=\"description__list\">

\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>basic</span> — Обычное объявление.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/example/basic.jpg'|theme }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->

\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>xvip</span> — Поднимает объявление выше всех. Существовать может только одно такое объявление.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/example/xvip.jpg'|theme }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->

\t\t\t</ul>
\t\t\t<!-- /.description__list -->
\t\t</div>
\t\t<!-- /.col-md-6 -->


\t\t<div class=\"col-md-6\">
\t\t\t<ul class=\"description__list\">

\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>vip</span> — добаляет сердечко. Стоит выше basic.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/example/vip.jpg'|theme }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->


\t\t\t\t<li class=\"description__item\">
\t\t\t\t\t<p><span>Экстра выделение</span> — Выделяет объявление фоном.</p>
\t\t\t\t\t<div class=\"description__item-img-wrap\">
\t\t\t\t\t\t<img src=\"{{ 'assets/images/example/basic.jpg'|theme }}\" alt=\"\">
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.description__item-img-wrap -->
\t\t\t\t</li>
\t\t\t\t<!-- /.description__item -->

\t\t\t</ul>
\t\t\t<!-- /.description__list -->
\t\t</div>
\t\t<!-- /.col-md-6 -->
\t</div>
\t<!-- /.row -->

</div>
<!-- /.description -->


<div class=\"howadd\">
\t<h2>Как добавить объявление?</h2>
\t<div class=\"howadd-wrap\">
\t\t<ol>
\t\t\t<li>Зарегистрируйтесь.</li>
\t\t\t<li>В личном кабинете нажмите кнопку \"Создать объявление\"</li>
\t\t\t<li>Создайте объявление: напишите текст и выберите категорию</li>
\t\t\t<li>Вернитесь в личный кабинет и нажмите на кнопку \"Редактировать объявление\"</li>
\t\t\t<li>На странице необходимо выбрать тип объявления, </li>
\t\t\t<li>По желанию добавте изображения и дополнительно выделите объявление</li>
\t\t\t<li>Нажмите на кнопку \"Готово\", затем оплатите</li>
\t\t\t<li>Profit! Осталось только ждать, пока на него ответят</li>
\t\t</ol>
\t</div>
\t<!-- /.howadd-wrap -->
</div>
<!-- /.howadd -->


<div class=\"rules\">
\t<ol>
\t\t<li>
\t\t\t<p>
\t\t\t\tАдминистрация сервиса не&nbsp;несёт ответственности за&nbsp;достоверность информации и&nbsp;содержание
\t\t\t\tобъявлений.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<p>
\t\t\t\tОтправитель объявления полностью отвечает перед третьими лицами за&nbsp;достоверность информации
\t\t\t\tв&nbsp;размещаемых объявлениях.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<p>Не&nbsp;принимаются к&nbsp;публикации объявления: содержащие рекламу иных сайтов, платных коротких номеров,
\t\t\t\tнецензурные выражения, а также безграмотные, бессмысленные, оскорбительные, клеветнические и мошеннические.
\t\t\t</p>
\t\t</li>
\t\t<li>
\t\t\t<p>Запрещены к&nbsp;публикации объявления, комментирующие действия администрации сервиса.</p>
\t\t</li>
\t\t<li>
\t\t\t<p>Запрещены к&nbsp;публикации фотографии женских и&nbsp;мужских гениталий.</p>
\t\t</li>
\t</ol>

\t<hr class=\"my-3\">


\t<div class=\"rules-desc\">
\t\t<p>
\t\t\tВ&nbsp;вышеперечисленных случаях администрация сервиса оставляет за&nbsp;собой право
\t\t\tна&nbsp;свое усмотрение <strong>удалить объявление или его&nbsp;часть</strong>, изменить
\t\t\tобъявление: <strong>сменить рубрику</strong>, <strong>внести изменения в&nbsp;текст объявления</strong>.
\t\t</p>

\t\t<p>
\t\t\tАдминистрация сервиса оставляет за&nbsp;собой право
\t\t\t<strong>блокировать аккаунты пользователей</strong>, с&nbsp;которых размещаются объявления, постоянно нарушающие
\t\t\tправила.
\t\t</p>
\t</div> <!-- /.rules-desc -->


</div> <!-- /.rules -->", "D:\\OSPanel\\domains\\irksmsex.ru/themes/irksmsex/pages/help.htm", "");
    }
}
