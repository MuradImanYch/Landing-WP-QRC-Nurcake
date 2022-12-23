<php /* Template Name: страница RU */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurcake</title>
    <?php wp_head() ?>
</head>
<body>
    <div class="wrap">
        <img id="bg" src="<?php load_images('bg.jpg') ?>" alt="bg" />
        <img id="logo" src="<?php load_images('logo.png') ?>" alt="logo" />
        <div class="langWrap"><a href="/">AZ</a><a href="/ru" style="text-decoration: underline; font-weight: bold;">RU</a></div>
        <div id="wpInsta"><a href="https://www.instagram.com/nur.cake/" target="_blank"><img src="<?php load_images('instagram.png') ?>" alt="instagram" /></a><a href="https://api.whatsapp.com/send/?phone=994514780578&text&type=phone_number&app_absent=0" target="_blank"><img src="<?php load_images('wp.png') ?>" alt="wp" /></a></div>
        <ul>
            <?php
                            global $post;

                            $myposts = get_posts([ 
                                'numberposts' => -1,
                                'category_name'    => 'products'
                            ]);

                            if( $myposts ){
                                foreach( $myposts as $post ){
                                    setup_postdata( $post );
                        ?>
                                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                                    <li>
                                        <div class="nameDescrPrice">
                                            <span class="name"><?php the_field('name_ru'); ?></span> <span class="descr"><?php the_field('description_ru'); ?></span> <span class="price"><?php the_field('price'); ?></span>
                                        </div>
                                        <div class="img">
                                            <?php the_post_thumbnail( $size, $attr ); ?>
                                        </div>
                                    </li>
                        <?php 
                                }
                            } else {
                                // Постов не найдено
                            }

                            wp_reset_postdata(); // Сбрасываем $post
                        ?>
        </ul>
    </div>
    <?php wp_footer(); ?>
</body>
</html>