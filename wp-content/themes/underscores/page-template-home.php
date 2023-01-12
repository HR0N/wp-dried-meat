<?php
    /*
     Template Name: Home Template
     */
?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

    <main id="primary" class="site-main">
        <div class="back-drop-modal"></div>
        <div class="frame call-request">
            <div class="col-left">
                <div class="logo"><img src="<?php echo get_template_directory_uri().'/media/logo_alt.png'?>" alt="logo_alt"></div>
                <div class="info">
                    <div class="info-title">Джеронімо</div>
                    <div class="info-description">Сушено-копчене м’ясо</div>
                </div>
            </div>
            <div class="col-right">
                <div class="phone">+38 (050) 745-35-25</div>
                <div class="button"><button class="custom-button-1">Замовити дзвінок</button></div>
            </div>
        </div>

        <div class="frame gallery-grid">
            <div class="grid-wrap">
                <div class="grid-item grid-item-1"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img"></div>
                <div class="grid-item grid-item-2"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3426.jpg'?>" alt="alt_img"></div>
                <div class="grid-item grid-item-3"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3472.jpg'?>" alt="alt_img"></div>
                <div class="grid-item grid-item-4"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img"></div>
            </div>
        </div>

        <div class="frame prices">
            <div class="prices-wrap">
                <div class="prices-info">
                    <div class="prices-title">Ціни</div>
                    <div class="prices-description">Виберіть м'ясо на смак</div>
                </div>
                <div class="prices-items">
                    <div class="prices-item">
                        <div class="name">Назва</div>
                        <div class="price">
                            130₴
                        </div>
                        <div class="option-1">
                            <div class="option-1-title">Вага</div>
                            30гр
                        </div>
                        <div class="option-2">
                            <div class="option-2-title">Кіл-ть в упаковці</div>
                            15шт
                        </div>
                        <div class="button"><button class="custom-button-1">Залишити заявку</button></div>
                    </div>
                    <div class="prices-item">
                        <div class="name">Назва</div>
                        <div class="price">
                            130₴
                        </div>
                        <div class="option-1">
                            <div class="option-1-title">Вага</div>
                            30гр
                        </div>
                        <div class="option-2">
                            <div class="option-2-title">Кіл-ть в упаковці</div>
                            15шт
                        </div>
                        <div class="button"><button class="custom-button-1">Залишити заявку</button></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame extra-info">
            <div class="extra-info-wrap">
                <div class="extra-info-col-1">
                    <div class="title">Про продукт</div>
                    <div class="text">
                        <p>Джеронімо - крафтове виробництво сушено-копченого м’яса із шматочків свіжого курячого філе.
                            Тоненькі шматочки курячого філе маринуються за рецептурою українських професійних технологів.</p>
                        <p>Мариновані тоненькі шматочки м’яса висушуються і коптяться у професійному європейському
                            обладнанні. Копчення відбувається натуральним способом на диму із фруктових дерев. Копчення
                            надає унікального смаку, а також виконує головну функцію - натурального консерванту як сіль.
                            Цей процес дає можливість зберігати продукт без використання холодильного обладнання, та
                            доставляти продукт в звичайних температурних умовах, навіть поштою. Процес приготування від
                            нарізки м’яса до готовності для споживання триває 24 години. Кожен день готується нова
                            партія продукції і реалізується. Ви отримуєте лише свіжий продукт.</p>
                    </div>
                </div>
                <div class="extra-info-col-2">
                    <div class="photo"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3458.jpg'?>" alt="alt_img"></div>
                    <div class="info">
                        <div class="info-title">Джерки</div>
                        <div class="info-description">На ваш смак</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame why_are_we">
            <div class="why_are_we-wrap">
                <div class="title">Чому ми?</div>
                <div class="why-items">
                    <div class="why-item item-1">
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="group">
                            <div class="item-title">Величезний досвід</div>
                            <div class="item-description">Цей процес дає можливість зберігати продукт без використання
                                холодильного обладнання, та доставляти продукт в звичайних температурних умовах,
                                навіть поштою.</div>
                        </div>
                    </div>
                    <div class="why-item item-2">
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="group">
                            <div class="item-title">Величезний</div>
                            <div class="item-description">Процес приготування від нарізки м’яса до готовності для
                                споживання триває 24 години.</div>
                        </div>
                    </div>
                    <div class="why-item item-3">
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="group">
                            <div class="item-title">Досвід</div>
                            <div class="item-description">Кожен день готується нова партія продукції і реалізується.
                                Ви отримуєте лише свіжий продукт. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="frame gallery-owl">
            <div class="owl-carousel owl-theme">
                <div>
                    <img class="mgs-p2" data-idx="1" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="2" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="3" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="4" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="5" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="6" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="7" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="8" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="9" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="10" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="11" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="12" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="13" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="14" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="15" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="16" src="<?php echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?>" alt="alt_img">
                </div>
                <div>
                    <img class="mgs-p2" data-idx="17" src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="alt_img">
                    <img class="mgs-p2" data-idx="18" src="<?php echo get_template_directory_uri().'/media/images/IMG_3472.jpg'?>" alt="alt_img">
                </div>
            </div>
        </div>

        <div class="frame gallery-show">
            <div class="photo-count">1 / 4</div>
            <div class="close"><i class="fa-solid fa-xmark"></i></div>
            <div class="window-photo">
<!--                <div class="gallery-show-frame frame-1"><img src="" alt="alt_img"></div>-->
                <div class="gallery-show-frame frame-2"><img class="no_close" src="" alt="alt_img"></div>
<!--                <div class="gallery-show-frame frame-3"><img src="" alt="alt_img"></div>-->
            </div>
            <div class="buttons">
                <div class="button prev"><i class="fa-solid fa-chevron-left"></i></div>
                <div class="button next"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();

