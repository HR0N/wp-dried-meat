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
<?php
    $gallery_posts_1 = get_posts(['post_type'=>'gallery_grid', 'order'=>'ASC', 'numberposts'=>4]);
    $site_phone = get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]->post_content;
    $prices = get_posts(['post_type'=>'us_prices', 'order'=>'ASC', 'numberposts'=>20]);
    $about_product = get_posts(['post_type'=>'us_about_product', 'numberposts'=>1])[0];
    $why_are_we = get_posts(['post_type'=>'us_why_are_we', 'numberposts'=>3, 'order'=>'ASC']);
    $gallery_owl = get_posts(['post_type'=>'us_gallery_owl', 'numberposts'=>40, 'order'=>'ASC']);


    echo '<pre>';
    echo var_dump($gallery_owl);
    echo '</pre>';


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
                <div class="phone"><?php echo $site_phone;?></div>
                <div class="button"><button class="custom-button-1">Замовити дзвінок</button></div>
            </div>
        </div>



        <div class="frame gallery-grid">
            <div class="grid-wrap">
                <?php

                foreach ($gallery_posts_1 as $g_post_1):?>
                <div class="grid-item grid-item-1"><?= $g_post_1->post_content; ?></div>
<!--                <div class="grid-item grid-item-1"><img src="--><?php //echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?><!--" alt="alt_img"></div>-->
<!--                <div class="grid-item grid-item-2"><img src="--><?php //echo get_template_directory_uri().'/media/images/IMG_3426.jpg'?><!--" alt="alt_img"></div>-->
<!--                <div class="grid-item grid-item-3"><img src="--><?php //echo get_template_directory_uri().'/media/images/IMG_3472.jpg'?><!--" alt="alt_img"></div>-->
<!--                <div class="grid-item grid-item-4"><img src="--><?php //echo get_template_directory_uri().'/media/images/IMG_3422.jpg'?><!--" alt="alt_img"></div>-->
                <?php endforeach; ?>
            </div>
        </div>

        <div class="frame prices">
            <div class="prices-wrap">
                <div class="prices-info">
                    <div class="prices-title">Ціни</div>
                    <div class="prices-description">Виберіть м'ясо на смак</div>
                </div>
                <div class="prices-items">
                    <?php foreach ($prices as $price): ?>
                        <div class="prices-item">
                            <div class="name"><?php echo $price->post_title ?></div>
                            <div class="price">
                                <?php echo get_field('price', $price->ID) ?>
                            </div>
                            <div class="option-1">
                                <div class="option-1-title">Вага</div>
                                <?php echo get_field('weight', $price->ID) ?>
                            </div>
                            <div class="option-2">
                                <div class="option-2-title">Кіл-ть</div>
                                <?php echo get_field('count', $price->ID) ?>
                            </div>
                            <div class="button"><button class="custom-button-1">Залишити заявку</button></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="frame extra-info">
            <div class="extra-info-wrap">
                <div class="extra-info-col-1">
                    <div class="title"><?php echo $about_product->post_title; ?></div>
                    <div class="text">
                        <?php echo $about_product->post_content; ?>
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
                <?php foreach ($why_are_we as $why): ?>
                    <div class="why-item">
                        <div class="icon"><i class="fa-solid fa-check"></i></div>
                        <div class="group">
                            <div class="item-title"><?php  echo $why->post_title?></div>
                            <div class="item-description"><?php  echo $why->post_content?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="frame gallery-owl">
            <div class="owl-carousel owl-carousel-gallery-1 owl-theme">
                <?php foreach ($gallery_owl as $owl): ?>
                    <div>
                        <?php echo $owl->post_content; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="frame gallery-show">
            <div class="photo-count">0 / 0</div>
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

        <div class="frame faq">
            <div class="faq-wrap">
                <div class="faq-title">Поширені запитання</div>
                <div class="faq-questions">
                    <div class="faq-question">
                        <div class="row-1">
                            <div class="faq-question__num">01</div>
                            <div class="faq-question__title">Як довго триває редагування?</div>
                            <div class="faq-question__arrow-icon"><i class="fa-solid fa-angle-up"></i></div>
                        </div>
                        <div class="row-2">
                            <div class="faq-question__description">Все залежить від кількості знятого матеріалу та
                                кількості фотографій, що пройшли ретуш.</div>
                        </div>
                    </div>
                    <div class="faq-question">
                        <div class="row-1">
                            <div class="faq-question__num">02</div>
                            <div class="faq-question__title">Якесь питання номер два?</div>
                            <div class="faq-question__arrow-icon"><i class="fa-solid fa-angle-up"></i></div>
                        </div>
                        <div class="row-2">
                            <div class="faq-question__description">Все залежить від кількості знятого матеріалу та
                                кількості фотографій, що пройшли ретуш.</div>
                        </div>
                    </div>
                    <div class="faq-question">
                        <div class="row-1">
                            <div class="faq-question__num">03</div>
                            <div class="faq-question__title">Якесь питання номер два?</div>
                            <div class="faq-question__arrow-icon"><i class="fa-solid fa-angle-up"></i></div>
                        </div>
                        <div class="row-2">
                            <div class="faq-question__description">Все залежить від кількості знятого матеріалу та
                                кількості фотографій, що пройшли ретуш.</div>
                        </div>
                    </div>
                    <div class="faq-question">
                        <div class="row-1">
                            <div class="faq-question__num">04</div>
                            <div class="faq-question__title">Якесь питання номер два?</div>
                            <div class="faq-question__arrow-icon"><i class="fa-solid fa-angle-up"></i></div>
                        </div>
                        <div class="row-2">
                            <div class="faq-question__description">Все залежить від кількості знятого матеріалу та
                                кількості фотографій, що пройшли ретуш.</div>
                        </div>
                    </div>
                </div>
                <div class="faq-card">
                    <div class="logo"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3472.jpg'?>" alt="alt_img"></div>
                    <div class="description">Запитати</div>
                    <div class="title">В'ялині джерки</div>
                    <div class="button"><button class="custom-button-1">Своє питання</button></div>
                </div>
            </div>
        </div>

        <div class="frame reviews">
            <div class="review-wrap">
                <div class="owl-carousel owl-carousel-reviews owl-theme">
                    <div><div class="item">
                            <div class="photo"><img src="<?php echo get_template_directory_uri().'/media/reviews-photo/1.jpg'?>" alt="alt_img"></div>
                            <div class="name">Маргарита</div>
                            <div class="service">Корисні джерки</div>
                            <div class="review">
                                <div class="quote">„</div>
                                <div class="text">
                                    Дуже смачний снек, після першої пачки на "пробу"
                                    відразу захотілося взяти ще. + відмінно підходить як "снек",
                                    якщо ти на дієті - багато білка, а калорій - не особливо!
                                </div>
                                <div class="quote">“</div>
                            </div>
                        </div>
                    </div>
                    <div><div class="item">
                            <div class="photo"><img src="<?php echo get_template_directory_uri().'/media/reviews-photo/2.jpg'?>" alt="alt_img"></div>
                            <div class="name">Елена</div>
                            <div class="service">Смачні джерки</div>
                            <div class="review">
                                <div class="quote">„</div>
                                <div class="text">
                                    Дуже сподобалися, постійно купую.
                                    Висока якість, ситість відчуваю після вживання 1 пачки. Багато білка та мінімум
                                    вуглеводів.
                                </div>
                                <div class="quote">“</div>
                            </div>
                        </div>
                    </div>
                    <div><div class="item">
                            <div class="photo"><img src="<?php echo get_template_directory_uri().'/media/reviews-photo/3.jpg'?>" alt="alt_img"></div>
                            <div class="name">Свiтлана</div>
                            <div class="service">Смачні джерки</div>
                            <div class="review">
                                <div class="quote">„</div>
                                <div class="text">
                                    Смачне м'ясо, в дорогу якраз! Відразу захотілося взяти ще.
                                </div>
                                <div class="quote">“</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();

