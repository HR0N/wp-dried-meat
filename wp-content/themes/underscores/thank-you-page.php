<?php
    /*
     Template Name: Thank you page
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

    $brand = null;
    $site_phone = isset(get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]->post_content : false;


    $first_name = $_POST['us_name'];
    $second_name = $_POST['us_s_name'];
    $post_address = $_POST['us_post'];
    $user_phone = $_POST['us_phone'];
    $order = $_POST['us_order'];
    $id = $_POST['us_id'];

    $import_post = get_post($id);
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $import_post->post_content, $matches);
    $post_img = $matches [1] [0];
    $post_text = $import_post->post_title.", ".get_field('price', $id).", ".get_field('weight', $id).", ".get_field('count', $id);


?>
<div class="thank_you_page">
    <div class="header">
        <div class="col-1">
            <div class="brand">Джеронімо</div>
            <a href="<?php echo wp_get_referer(); ?>" class="back"><i class="fa-solid fa-left-long"></i> Повернутись до покупок</a>
        </div>
        <div class="col-2">
            <a href="tel:<?php echo wp_strip_all_tags($site_phone); ?>" class="phone"><i class="fa-solid fa-square-phone-flip"></i> <?php echo $site_phone; ?></a>
        </div>
    </div>
    <div class="main">
        <div class="title">Ваше замовлення отримано</div>
        <div class="pack">
            <div class="info">
                <div class="info-title">Наш клієнт-менеджер зв'яжеться з вами для уточнення деталей.</div>
                <div class="name"><span>Ім'я та прізвище</span><span><?php echo $second_name.", ".$first_name; ?></span></div>
                <div class="phone"><span>Телефон</span><span><?php echo $user_phone; ?></span></div>
                <div class="post"><span>Адреса</span><span><?php echo $post_address; ?></span></div>
            </div>
            <div class="order">
                <div class="order-title">Ваше замовлення</div>
                <div class="order-info">
                    <div class="image">
                        <img src="<?php echo $post_img; ?>" alt="img">
                    </div>
                    <div class="text"><?php echo $post_text;?>
<!--                        <div class="text-price">545 грн</div>-->
                    </div>
                </div>
                <div class="order-post"><span>Доставка</span><span>за тарифами перевізника</span></div>
                <div class="order-price"><?php echo get_field('price', $id); ?></div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

