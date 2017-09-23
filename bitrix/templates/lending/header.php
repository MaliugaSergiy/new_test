<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); // поверка
IncludeTemplateLangFile(__FILE__); // переаод файлов
IncludeTemplateLangFile($_SERVER["DOCUMENT_ROOT"] . "/bitrix/templates/" . SITE_TEMPLATE_ID . "/header.php");
CJSCore::Init(array("fx"));
$curPage = $APPLICATION->GetCurPage(true);
$theme = COption::GetOptionString("main", "wizard_eshop_bootstrap_theme_id", "blue", SITE_ID);
?>

<? if (ERROR_404 == "Y"): ?>

    <script>
        alert("Такой страницы не существует");
    </script>

<? endif; ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <? $APPLICATION->ShowHead(); //подключение скриптов состраницы шаблона ?>
    <title> <? $APPLICATION->ShowTitle(); //титл стрпаницы ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href=" <? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
          href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
          href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
          href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
          href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
          href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
          href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<? echo SITE_TEMPLATE_PATH ?>/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<? SITE_TEMPLATE_PATH ?>/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script src="https://use.fontawesome.com/1e915ed25e.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<? echo SITE_TEMPLATE_PATH ?>/css/mate-x.css">
</head>
<body>

<? if ($GLOBALS["USER"]->IsAuthorized()): ?>
    <? $APPLICATION->ShowPanel(); ?>
    <script>BX.ready(function () {
            var MyPanel = BX("header"),
                BxPanel = BX.admin.panel,
                FxPanel = function () {
                    if (window.pageYOffset >= BxPanel.DIV.clientHeight && BxPanel.isFixed() === false) {
                        MyPanel.style.top = 0;
                    } else if (BxPanel.isFixed() === true) {
                        MyPanel.style.top = BxPanel.DIV.clientHeight + "px";
                    } else {
                        MyPanel.style.top = BxPanel.DIV.clientHeight - window.pageYOffset + "px";
                    }
                };
            if (!!MyPanel) {
                FxPanel();
                window.onscr
                oll = FxPanel;
                BX.addCustomEvent('onTopPanelCollapse', BX.delegate(FxPanel, this));
                BX.addCustomEvent('onTopPanelFix', BX.delegate(FxPanel, this));
            }
        });</script>
<? endif; ?>

<div class="remodal-bg">
    <header class="z-depth-4" id="header">

        <div class="wr">
            <nav>
                <ul>
                    <li><a class="link-1 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#opportunities">Возможности</a></li>
                    <li><a class="link-2 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#support">Поддержка</a></li>
                    <li><a class="link-3 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#unique_design">Дизайн</a></li>
                    <li><a class="link-4 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#control_panel">Управление</a></li>
                    <li><a class="link-5 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#site_examples">Примеры</a></li>
                    <li><a class="link-6 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#fiveDays">Этапы работы</a></li>
                    <li><a class="link-7 side_link ssm-toggle-nav link-anchor hvr-underline-from-left"
                           data-target="anchor" href="#form_container">Контакты</a></li>

                </ul>
            </nav>
            <main>
                <a class="ssm-toggle-nav" href="#" title="Open / close"><i class="fa fa-bars"
                                                                           aria-hidden="true"></i></a>
            </main>
            <div class="ssm-overlay ssm-toggle-nav"></div>
            <a href="index.html" class="logo icon-logo_vt headerFI"><span class="logo_img "></span></a>
            <div class=" headerFI main-navigation">
                <ul>
                    <li><a class="link-1  link-anchor hvr-underline-from-left" data-target="anchor"
                           href="#opportunities">Возможности</a></li>
                    <li><a class="link-2  link-anchor hvr-underline-from-left" data-target="anchor" href="#support">Поддержка</a>
                    </li>
                    <li><a class="link-3  link-anchor hvr-underline-from-left" data-target="anchor"
                           href="#unique_design">Дизайн</a></li>
                    <li><a class="link-4  link-anchor hvr-underline-from-left" data-target="anchor"
                           href="#control_panel">Управление</a></li>
                    <li><a class="link-5  link-anchor hvr-underline-from-left" data-target="anchor"
                           href="#site_examples">Примеры</a></li>
                    <li><a class="link-6  link-anchor hvr-underline-from-left" data-target="anchor" href="#fiveDays">Этапы
                            работы</a></li>
                    <li><a class="link-7  link-anchor hvr-underline-from-left" data-target="anchor"
                           href="#form_container">Контакты</a></li>

                </ul>
            </div>
            <a href="tel:+38<? $APPLICATION->IncludeFile(
                SITE_DIR . "include/phone.php",
                array(),
                array(
                    "MODE" => "html"
                )
            ); ?>" class="phone headerFI"><b><? $APPLICATION->IncludeFile(
                        SITE_DIR . "include/phone.php",
                        array(),
                        array(
                            "MODE" => "html"
                        )
                    ); ?></b></a>


        </div>


    </header>


    <section class="parallax-container bg" id="start" data-pos="pos-1">
        <!--   <div class="overlay"></div>-->
        <!--         <div class="parallax">
            <img src="img/banner.jpg">
        </div> -->
        <div class="overlay1"></div>
        <div class="wr">
            <div class="container wow fadeInDown">
                <div class="roww roww1">
                    <? $APPLICATION->IncludeFile(
                        SITE_DIR . "include/slogan.php",
                        array(),
                        array(
                            "MODE" => "html"
                        )
                    ); ?>

                </div>
                <div class="roww roww2"><span>VTrende</span> – shop</div>
                <div class="roww roww3">Создайте красивый интернет-магазин!</div>
                <div class="roww roww4">Просто и быстро за 60 h</div>
                <div class="btn_cont">
                    <div data-remodal-target="modal6" class="btnn btn_tr">Oтправить заявку</div>
                    <a href="#" class="btnn btn_tr">DEMO</a>
                </div>
            </div>
            <a href="#opportunities" data-target="anchor" class="icon-Arrows"></a>
        </div>
    </section>

    <? $APPLICATION->IncludeComponent(
        "bitrix:menu",
        "menu",
        array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "COMPONENT_TEMPLATE" => "menu",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "N"
        ),
        false
    ); ?><br>

    <? if ($curPage != SITE_DIR . "index.php"): ?>
        <? $APPLICATION->IncludeComponent(
            "bitrix:breadcrumb",
            "breadcrumb",
            array(
                "PATH" => "",
                "SITE_ID" => "cg",
                "START_FROM" => "0",
                "COMPONENT_TEMPLATE" => "breadcrumb"
            ),
            false
        ); ?>
    <? endif; ?>
    <section id="opportunities">
        <div class="wr">
            <div class="head_main_text wow fadeInUp"><?= GetMessage('OPORTUNITIES') ?></div>
            <div class="under_head_main_text wow fadeInUp">Все необходимые функции для интернет-магазина – <span>30 модулей!</span>
            </div>
            <div class="under_head_main_text wow fadeInUp">Индивидуальные функции можно добавлять.</div>
            <div class="fl_opp">
                <div class="item item1 wow fadeIn"><span>1С-Битрикс (Малый бизнес)</span></div>
                <div class="item item2 wow fadeIn"><span>Выгрузка товаров на прайс агрегаторы</span></div>
                <div class="item item3 wow fadeIn"><span>Современная Корзина</span></div>
            </div>
        </div>
    </section>

    <div id="modules">
        <div class="bg"></div>
        <div class="wr">
            <div class="head_main_text wow fadeInUp"><span><?= GetMessage('MODULES') ?></span></div>
            <div class="fl_container">
                <div class="fl_coll">
                    <div class="item it_1 it_x wow fadeInDown"><span>Главный модуль</span></div>
                    <div class="item it_2 it_x wow fadeInUp"><span>А/В тестерование</span></div>
                </div>
                <div class="fl_coll">
                    <div class="item it_3 it_x  wow fadeInDown"><span>SEO-модуль</span></div>
                    <div class="item it_4 it_x  wow fadeInUp"><span>Торговый каталог</span></div>
                </div>
                <div class="fl_coll">
                    <div class="item it_5 it_x  wow fadeInDown"><span>E-mail маркетинг</span></div>
                    <div data-remodal-target="popImg" class="item it_6   wow fadeInUp">
                        <div class="first">смотреть</div>
                        <div class="up">все</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="price_of_shop">
        <div class="wr">

            <div class="price_container">
                <div class="head_main_text qqq"><?= GetMessage('PRICE_OF_SHOP_1') ?>
                    <span><?= GetMessage('PRICE_OF_SHOP_2') ?></span></div>
                <div class="roww roww1 under_head_main_text wow fadeInLeft" data-wow-delay="0s"><b>Что входит в
                        стоимость?</b></div>
                <div class="roww roww2 under_head_main_text wow fadeInLeft" data-wow-delay="0.1s">Лицензия 1С—Битрикс
                    малый бизнес
                </div>
                <div class="roww roww3 under_head_main_text wow fadeInLeft" data-wow-delay="0.2s">Профессиональный
                    дизайн с адаптивной версткой
                </div>
                <div class="roww roww4 under_head_main_text wow fadeInLeft" data-wow-delay="0.3s">Все необходимые
                    функции для интернет-магазина
                </div>
                <div class="roww roww5 under_head_main_text wow fadeInLeft" data-wow-delay="0.4s">Поддержка и
                    консультация
                </div>
                <div class="bottom_section">
                    <div class="head_main_text wow flash">Цена <span>10 000 грн</span></div>
                    <div data-remodal-target="modal6" class="btnn wow rubberBand">Отправить заявку</div>
                </div>
            </div>
        </div>
    </section>

    <section id="stock">
        <div class="wr">
            <div class="cont_wr">
                <div class="stock_flex_container">
                    <div class="img_counter img1 flex_item wow zoomIn">
                        <div class="descr">Разработка</div>
                        <img class="pic" src="<? echo SITE_TEMPLATE_PATH ?>/img/stock2.png" alt="">
                        <div class="descr">Lending Page</div>
                    </div>
                    <div class="plus mathSymb flex_item ">+</div>
                    <div class="img_counter img2 flex_item wow zoomIn" data-wow-delay="0.1s">
                        <div class="descr">Продвижение</div>
                        <img class="pic" src="<? echo SITE_TEMPLATE_PATH ?>/img/stock1.png" alt="">
                        <div class="descr">Google AdWords</div>
                    </div>
                    <div class="equal mathSymb flex_item">=</div>
                    <div class="price flex_item wow zoomIn" data-wow-delay="0.2s">
                        <div class="up">1 900<span> грн</span></div>
                        <div class="down">*разовая оплата</div>
                    </div>
                </div>
                <div class="stock_counter">
                    <div class="counter_header">Акция до конца июня</div>
                    <div class="your-clock">
                        <div class="clock"></div>
                        <div class="message"></div>
                    </div>
                </div>

            </div>
            <div class="note wow fadeInUp">* В эту стоимость включено лендинг, хостинг, домен, настройка контекстной и
                медийной рекламы
            </div>
        </div>
    </section>

    <div class="strip">
        <div class="wr">
            <div class="under_head_main_text wow fadeInLeft"><?= GetMessage('STRIP1') ?></div>
            <div data-remodal-target="modal6" class="btnn btn_red wow fadeInRight">Отправить заявку</div>
        </div>
    </div>

    <section id="support" data-pos="pos-2">
        <div class="wr">
            <div class="head_main_text wow fadeInDown"><?= GetMessage('SUPPORT') ?></div>
            <div class="under_head_main_text wow fadeInUp">Мы поможем изучить и настроить все возможности
                <span>VTrende</span> <b>– shop</b>,чтобы Вы смогли использовать их эффективно
            </div>
            <img class="img_main wow swing-in-top-fwd" src="<? echo SITE_TEMPLATE_PATH ?>/img/icons/tiket.png" alt="">
            <img class="img_420" src="<? echo SITE_TEMPLATE_PATH ?>/img/icons/tiket-420.jpg" alt="">
        </div>
    </section>

    <section id="unique_design" data-pos="pos-3">
        <div class="wr">
            <div class="head_main_text"><?= GetMessage('UNUQUE_DESIGN_1') ?>
                <span><?= GetMessage('UNUQUE_DESIGN_2') ?></span></div>
            <div class="under_head_main_text">Мы поможем сделать дизайн Вашего интернет-магазина приятным и
                запоминающемся
            </div>
        </div>
        <div id="example">
            <carousel-3d class="blurred-bottom" :autoplay="autoplayEnabled" :autoplay-timeout="autoplayTimeout"
                         :display="visible" :controls-visible="carouselControls" :controls-prev-html="controlsPrevHtml"
                         :controls-next-html="controlsNextHtml" :controls-width="controlsWidth"
                         :controls-height="controlsHeight" :width="slideWidth" :height="slideHeight" :space="slideSpace"
                         :border="slideBorder" :perspective="slidePerspective" :loop="infinite" :dir="direction">
                <slide v-for="(slide, i) in slides" :index="i">
                    <figure>
                        <img :src="<? echo SITE_TEMPLATE_PATH ?>/slide.src">
                    </figure>
                </slide>
            </carousel-3d>
            <!-- <div id="arrayOfImages" class="btnn btn_white">Каталог дизайна</div> -->
        </div>
    </section>

    <div class="strip strip2">
        <div class="wr">
            <div class="under_head_main_text wow fadeInLeft"><?= GetMessage('STRIP2') ?></div>
            <div data-remodal-target="modal6" class="btnn btn_white wow fadeInRight">Отправить заявку</div>
        </div>
    </div>

    <section id="control_panel" data-pos="pos-4">
        <div class="wr">
            <div class="head_main_text wow fadeInDown"><?= GetMessage('CONTROL_PANEL_1') ?>
                <span><?= GetMessage('CONTROL_PANEL_2') ?> </span></div>
            <div class="under_head_main_text wow fadeInUp">Удобная панель управления сайтом</div>
            <div class="under_head_main_text wow fadeInUp">Понятная панель управления для ежедневного пользования и
                учета товара
            </div>
            <div class="fl_container">

                <div class="item it_1 it_x wow slide-in-elliptic-top-fwd" data-wow-delay="0s">
                    <span>Каталог товаров</span></div>
                <div class="item it_2 it_x wow slide-in-elliptic-top-fwd" data-wow-delay="0.2s">
                    <span>Обработка заказов</span></div>
                <div class="item it_3 it_x wow slide-in-elliptic-top-fwd" data-wow-delay="0.4s"><span>Привлечение клиентов</span>
                </div>
                <div class="item it_4 it_x wow slide-in-elliptic-top-fwd" data-wow-delay="0.6s"><span>Статистика</span>
                </div>

                <!--                 <a href="#" class="item it_4 it_x wow slide-in-elliptic-top-fwd" data-wow-delay="0.6s">
                                    <div class="first">DEMO</div>
                                    <div class="up">админки</div>
                                </a> -->
            </div>
        </div>
    </section>
    <section id="site_examples" data-pos="pos-5">
        <div class="wr">
            <div class="head_main_text"><?= GetMessage('SITE_EXAMPLES') ?></div>
            <div class="examples_slide">
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/01.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/02.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/03.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/04.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/05.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/06.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/07.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/08.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/09.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/10.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/11.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/12.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/13.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/14.jpg" alt=""></div>
                <div class="wrap_img_slider"><img src="<? echo SITE_TEMPLATE_PATH ?>/img/examples/15.jpg" alt=""></div>
            </div>
        </div>
    </section>

    <section class="price_of_shop">
        <div class="wr">

            <div class="price_container">
                <div class="head_main_text qqq"><?= GetMessage('PRICE_OF_SHOP_1') ?>
                    <span><?= GetMessage('PRICE_OF_SHOP_2') ?></span></div>
                <div class="roww roww1 under_head_main_text wow slide-in-blurred-tl"><b>Что входит в стоимость?</b>
                </div>
                <div class="roww roww2 under_head_main_text wow slide-in-blurred-left">Лицензия 1С—Битрикс малый
                    бизнес
                </div>
                <div class="roww roww3 under_head_main_text wow slide-in-blurred-left">Профессиональный дизайн с
                    адаптивной версткой
                </div>
                <div class="roww roww4 under_head_main_text wow slide-in-blurred-left">Все необходимые функции для
                    интернет-магазина
                </div>
                <div class="roww roww5 under_head_main_text wow slide-in-blurred-left">Поддержка и консультация</div>
                <div class="bottom_section">
                    <div class="head_main_text wow bounce-in-bck">Цена <span>10 000 грн</span></div>
                    <div data-remodal-target="modal6" class="btnn wow bounce-in-fwd ">Отправить заявку</div>
                </div>
            </div>
        </div>
    </section>

    <section id="fiveDays" data-pos="pos-6">
        <div class="wr">
            <div class="head_main_text"><?= GetMessage('FIVE_DAYS') ?></div>
            <div class="under_head_main_text">Полностью готовый сайт для работы</div>
            <div class="fl_container">
                <div class="item it_1 it_x wow slide-in-elliptic-left-fwd"><span>Быстрый старт</span></div>
                <div class="item it_2 it_x wow slide-in-elliptic-top-fwd" data-wow-delay="0.5s">
                    <span>Адаптивный дизайн</span></div>
                <div class="item it_3 it_x wow slide-in-elliptic-bottom-fwd" data-wow-delay="0.5s"><span>Магазин с высокой конверсией</span>
                </div>
                <div class="item it_4 it_x wow slide-in-elliptic-right-fwd"><span>Возможность доработки</span></div>
            </div>
        </div>
    </section>

    <section id="form_container" data-pos="pos-7">
        <div class="wr">
            <div class="head_main_text wow fadeInDown"><?= GetMessage('FORM_CONTAINER') ?></div>
            <div class="under_head_main_text">Задавайте любые вопросы по телефону или напишите письмо</div>
            <form action="" class="mater_x form_request" id="js_register_form">
                <div class="input_container">
                    <div class="colll">
                        <div class="input-field  wow fadeInLeft">
                            <input id="form_name" type="text" name="form_name" class="validate">
                            <label for="form_name"><span>*</span>Имя</label>
                        </div>
                        <div class="input-field  wow fadeInLeft" data-wow-delay="0.1s">
                            <input id="form_phone" name="form_phone" type="tel" class="validate">
                            <label for="form_phone"><span>*</span>Телефон</label>
                        </div>
                        <div class="input-field  wow fadeInLeft" data-wow-delay="0.2s">
                            <input id="form_email" name="form_email" type="email" class="validate nomargin">
                            <label for="form_email"><span>*</span>Email</label>
                        </div>
                    </div>
                    <div class="colll colll2">
                        <div class="input-field wow fadeInRight">
                            <textarea id="textarea1" name="textarea1" class="materialize-textarea"></textarea>
                            <label for="textarea1" class="label_textarea">Комментарии</label>
                        </div>
                        <button type="submit" class="send_form btnn btn_red  wow fadeInRight" data-wow-delay="0.2s">
                            Отправить заявку
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </section>


