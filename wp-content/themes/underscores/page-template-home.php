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
//    $gallery_posts_1 = isset(get_posts(['post_type'=>'gallery_grid', 'order'=>'ASC', 'numberposts'=>4])[0]) ? get_posts(['post_type'=>'gallery_grid', 'order'=>'ASC', 'numberposts'=>4]) : false;
    $site_phone = isset(get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]->post_content : false;
    $site_address = isset(get_posts(['post_type'=>'us_address', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_address', 'numberposts'=>1])[0]->us_address : false;
    $site_email = isset(get_posts(['post_type'=>'us_email', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_email', 'numberposts'=>1])[0]->us_email : false;
//    $prices = isset(get_posts(['post_type'=>'us_prices', 'order'=>'ASC', 'numberposts'=>20])[0]) ? get_posts(['post_type'=>'us_prices', 'order'=>'ASC', 'numberposts'=>20]) : false;
    $prices_v2 = isset(get_posts(['post_type'=>'us_prices_v2', 'order'=>'ASC', 'numberposts'=>20])[0]) ? get_posts(['post_type'=>'us_prices_v2', 'order'=>'ASC', 'numberposts'=>20]) : false;
    $about_product = isset(get_posts(['post_type'=>'us_about_product', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_about_product', 'numberposts'=>1])[0] : '';
    $why_are_we = isset(get_posts(['post_type'=>'us_why_are_we', 'numberposts'=>3, 'order'=>'ASC'])[0]) ? get_posts(['post_type'=>'us_why_are_we', 'numberposts'=>3, 'order'=>'ASC']) : false;
    $gallery_owl = get_posts(['post_type'=>'us_gallery_owl', 'numberposts'=>40, 'order'=>'ASC']);
    $faq = isset(get_posts(['post_type'=>'us_faq', 'numberposts'=>20, 'order'=>'ASC'])[0]) ? get_posts(['post_type'=>'us_faq', 'numberposts'=>20, 'order'=>'ASC']) : false;
    $reviews = isset(get_posts(['post_type'=>'us_reviews', 'numberposts'=>20, 'order'=>'ASC'])[0]) ? get_posts(['post_type'=>'us_reviews', 'numberposts'=>20, 'order'=>'ASC']) : false;
    $site_social = isset(get_posts(['post_type'=>'us_social', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_social', 'numberposts'=>1])[0] : false;




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
                <div class="button"><button class="custom-button-1 request">Замовити дзвінок</button></div>
            </div>
        </div>



        <!--<div class="frame gallery-grid">
            <div class="grid-wrap">
                <?php
/*                if(isset($gallery_posts_1)):
                foreach ($gallery_posts_1 as $g_post_1):*/?>
                <div class="grid-item grid-item-1"><?/*= $g_post_1->post_content; */?></div>
                <?php /*endforeach; endif; */?>
            </div>
        </div>-->
        <?php /*if(isset($prices)): */?><!--
        <div class="frame prices" id="prices">
            <div class="prices-wrap">
                <div class="prices-info">
                    <div class="prices-title">Ціни</div>
                    <div class="prices-description">Виберіть м'ясо на смак</div>
                </div>
                <div class="prices-items">
                    <?php /*foreach ($prices as $price): */?>
                        <div class="prices-item">
                            <div class="name"><?php /*echo $price->post_title */?></div>
                            <div class="price">
                                <?php /*echo get_field('price', $price->ID) */?>
                            </div>
                            <div class="option-1">
                                <div class="option-1-title">Вага</div>
                                <?php /*echo get_field('weight', $price->ID) */?>
                            </div>
                            <div class="option-2">
                                <div class="option-2-title">Кіл-ть</div>
                                <?php /*echo get_field('count', $price->ID) */?>
                            </div>
                            <div class="button"><button class="custom-button-1 application">Залишити заявку</button></div>
                        </div>
                    <?php /*endforeach;*/?>
                </div>
            </div>
        </div>
        --><?php /*endif; */?>


        <?php if($prices_v2): ?>
            <div class="frame prices_v2" id="prices">
                <div class="prices-items">

                    <?php foreach ($prices_v2 as $price): ?>
                    <div class="prices-item">
                        <div class="image">
                            <div class="owl-carousel owl-carousel-prices-v2 owl-theme">
                                <?php echo $price->post_content; ?>
                            </div>
                        </div>
                        <div class="info">
                            <div class="title"><?php echo $price->post_title; ?></div>
                            <div class="price"><?php echo get_field('price', $price->ID); ?></div>
                            <div class="pack">
                                <div class="weight">
                                    <div class="weight-title">Вага</div>
                                    <?php echo get_field('weight', $price->ID); ?>
                                </div>
                                <div class="count">
                                    <div class="count-title">Кіл-ть</div>
                                    <?php echo get_field('count', $price->ID); ?>
                                </div>
                            </div>
                            <div class="post_id" hidden><?php echo $price->ID; ?></div>
                            <div class="button"><button class="custom-button-1 application">Замовити</button></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        <?php endif; ?>


        <?php if($about_product): ?>
        <div class="frame extra-info" id="about_product">
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
        <?php endif; ?>

        <?php if($why_are_we): ?>
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
        <?php endif; ?>


        <?php if($gallery_owl): ?>
        <div class="frame gallery-owl">
            <div class="owl-carousel owl-carousel-gallery-1 owl-theme">
                <?php foreach ($gallery_owl as $owl): ?>
                    <div>
                        <?php echo $owl->post_content; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

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


        <?php if($faq): ?>
        <div class="frame faq" id="faq">
            <div class="faq-wrap">
                <div class="faq-title">Поширені запитання</div>
                <div class="faq-questions">
                    <?php foreach ($faq as $key=>$fa): ?>
                        <div class="faq-question">
                            <div class="row-1">
                                <div class="faq-question__num"><?php echo $key < 10 ? '0'.($key+1) : $key+1; ?></div>
                                <div class="faq-question__title"><?php echo $fa->post_title; ?></div>
                                <div class="faq-question__arrow-icon"><i class="fa-solid fa-angle-up"></i></div>
                            </div>
                            <div class="row-2">
                                <div class="faq-question__description"><?php echo $fa->post_content; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!--<div class="faq-question">
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
                    </div>-->
                </div>
                <div class="faq-card">
                    <div class="logo"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3472.jpg'?>" alt="alt_img"></div>
                    <div class="description">Запитати</div>
                    <div class="title">В'ялині джерки</div>
                    <div class="button"><button class="custom-button-1 question">Своє питання</button></div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if($reviews): ?>
        <div class="frame reviews" id="reviews">
            <div class="review-wrap">
                <div class="owl-carousel owl-carousel-reviews owl-theme">
                    <?php foreach ($reviews as $rev): ?>
                        <div><div class="item">
                                <div class="photo"><img src="<?php echo get_field('photo', $rev->ID)['url']; ?>" alt="alt_img"></div>
                                <div class="name"><?php echo get_field('name', $rev->ID); ?></div>
                                <div class="service"><?php echo $rev->post_title; ?></div>
                                <div class="review">
                                    <div class="quote">„</div>
                                    <div class="text">
                                        <?php echo $rev->post_content; ?>
                                    </div>
                                    <div class="quote">“</div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <!--<div><div class="item">
                            <div class="photo"><img src="<?php /*echo get_template_directory_uri().'/media/reviews-photo/1.jpg'*/?>" alt="alt_img"></div>
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
                            <div class="photo"><img src="<?php /*echo get_template_directory_uri().'/media/reviews-photo/2.jpg'*/?>" alt="alt_img"></div>
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
                            <div class="photo"><img src="<?php /*echo get_template_directory_uri().'/media/reviews-photo/3.jpg'*/?>" alt="alt_img"></div>
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
                    </div>-->
                </div>
            </div>
        </div>
        <?php endif; ?>


        <div class="back-drop-modal-2">
            <div class="callback-wrap">

                <div class="callback-form request">
                    <div class="pack">
                        <div class="close"><i class="fa-solid fa-xmark"></i></div>
                        <div class="image"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3418.jpg'?>" alt="logo_alt"></div>
                        <div class="content">
                            <div class="title">Замовити дзвінок</div>
                            <div class="description">Введіть дані для замовлення зворотного дзвінка</div>
                            <div class="form">
                                <label>Ім'я
                                    <input class="form-control" type="text" name="us_name">
                                </label>
                                <label><span>* </span>Телефон
                                    <input required class="form-control" type="tel" name="us_phone">
                                </label>
                            </div>
                            <div class="buttons"><button class="send-request custom-button-1">Надіслати</button></div>
                        </div>
                    </div>
                </div>

                <div class="callback-form application">
                    <div class="pack">
                        <div class="close"><i class="fa-solid fa-xmark"></i></div>
                        <div class="image"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3419.jpg'?>" alt="logo_alt"></div>
                        <div class="content">
                            <div class="title">Замовити</div>
                            <div class="description">Введіть дані для замовлення зворотного дзвінка</div>
                            <form class="form form-application" method="POST" action="thank-you-page">
                                <label>Ім'я
                                    <input class="form-control" type="text" name="us_name">
                                </label>
                                <label>Прізвище
                                    <input class="form-control" type="text" name="us_s_name">
                                </label>
                                <label>Відділення нової пошти
                                    <input class="form-control" type="text" name="us_post">
                                </label>
                                <label><span>* </span>Телефон
                                    <input required class="form-control" type="tel" name="us_phone">
                                </label>
                                <label class="order">
                                    <input class="form-control" type="text" name="us_id">
                                </label>
                                <div class="buttons"><button class="send-application custom-button-1" type="submit">Надіслати</button></div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="callback-form question">
                    <div class="pack">
                        <div class="close"><i class="fa-solid fa-xmark"></i></div>
                        <div class="image"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3456.jpg'?>" alt="logo_alt"></div>
                        <div class="content">
                            <div class="title">Консультація</div>
                            <div class="description">Введіть дані для замовлення зворотного дзвінка</div>
                            <div class="form">
                                <label>Ім'я
                                    <input class="form-control" type="text" name="us_name">
                                </label>
                                <label><span>* </span>Телефон
                                    <input required class="form-control" type="tel" name="us_phone">
                                </label>
                                <label>Коментар
                                    <textarea class="form-control" name="us_comment"></textarea>
                                </label>
                            </div>
                            <div class="buttons"><button class="send-question custom-button-1">Надіслати</button></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="thank-you">
                <div class="pack">
                    <div class="image"><img src="<?php echo get_template_directory_uri().'/media/images/IMG_3456.jpg'?>" alt="logo_alt"></div>
                    <div class="text">Дякуємо, ми з вами зв'яжемося!</div>
                </div>
            </div>
        </div>

    </main><!-- #main -->

<?php
get_footer();

