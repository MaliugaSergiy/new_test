<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)  die(); // поверка
IncludeTemplateLangFile(__FILE__); // переаод файлов
?>

    <section id="footer" data-pos="pos-7">
        <div class="wr">
            <p id="rights" class="wow zoomIn">&copy;<?=GetMessage('COPY_INFO')?></p>
            <p id="rights" class="wow zoomIn"><?=GetMessage('FOOTER_ADDRESS')?></p>

                <a href="tel:+380800309945" class="phone headerFI hvr-underline-from-left"><b>
                        <?$APPLICATION->IncludeFile(
                            SITE_DIR."include/phone.php",
                            array(),
                            array(
                                "MODE" => "html"
                            )
                        );?>

                    </b></a>
        </div>
    </section>
</div>

<div class="remodal remodal-img" data-remodal-id="popImg">
  <button data-remodal-action="close" class="remodal-close"></button>
    <img src="img/icons/popUp.jpg" alt="">
</div>

<div class="remodal remodal_form" data-remodal-id="modal6" data-remodal-options="hashTracking: true, closeOnOutsideClick: true" id="js_register_form">
    <button data-remodal-action="close" class="remodal-close"></button>
    <form action="" class="mater_x form_request" id="js_register_form2">
        <div class="form_headName">Оставьте заявку</div>
        <div class="input_container">
            <div class="input-field">
                <input id="form_name" type="text" name="form_name" class="validate">
                <label for="form_name"><span>*</span>Имя</label>
            </div>
            <div class="input-field ">
                <input id="form_phone2" name="form_phone" type="tel" class="validate">
                <label for="form_phone"><span>*</span>Телефон</label>
            </div>
            <div class="input-field">
                <input id="form_email" name="form_email" type="email" class="validate">
                <label for="form_email  wow fadeInLeft"><span>*</span>Email</label>
            </div>

            <div class="input-field">
                <textarea id="textarea1" name="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1" class="label_textarea">Комментарии</label>
            </div>
        </div>
        <button type="submit" class="send_form">Отправить заявку</button>
    </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="lib/parallax.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

<script src="<?echo SITE_TEMPLATE_PATH?>/lib/remodal.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/jquery.slideandswipe.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/jquery.maskedinput.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/jquery.touchSwipe.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/vue.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/vue-carousel-3d.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/jquery.validate.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/slick.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/slick-lightbox.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/Headroom.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/jQuery.headroom.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/wow.min.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/flipclock.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/lib/settings.js"></script>
<script src="<?echo SITE_TEMPLATE_PATH?>/js/common.min.js"></script>

<?if($GLOBALS["USER"]->IsAuthorized()):?>
    <script>

        $( document ).ready(function() {
            BX.ready(function () {
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
                    window.onscroll = FxPanel;
                    BX.addCustomEvent('onTopPanelCollapse', BX.delegate(FxPanel, this));
                    BX.addCustomEvent('onTopPanelFix', BX.delegate(FxPanel, this));
                }
            });
        });

    </script>
<?endif;?>

<?/*
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/remodal.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/jquery.slideandswipe.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/jquery.maskedinput.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/jquery.touchSwipe.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/vue.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/vue-carousel-3d.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/jquery.validate.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/slick.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/slick-lightbox.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/Headroom.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/jQuery.headroom.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/wow.min.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/flipclock.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/settings.js');
$APPLICATION->AddHeadScricpt(SITE_TEMPLATE_PATH.'/lib/common.min.js');
*/?>
</body>
</html>


