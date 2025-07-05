<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package style
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>
<!-- 
<aside id="secondary" class="widget-area">
	<?php //dynamic_sidebar( 'sidebar-1' ); 
    ?>
</aside> #secondary -->

<!--<div class="col-12 offset-lg-1 col-md-5 col-lg-2">-->
<div class="col-12 col-md-5 col-lg-3">
    <div class="sidebar">
        <span class="sidebar__title">Курсы</span>
        <span class="sidebar__subtitle"><span class="text-block">Стильной быть просто -</span>просто начни</span>
        <a class="sidebar__btn" target="_blank" href="https://calendly.com/bestyleacademy">Онлайн консультация</a>
        <?php
        $categories = get_categories([
            'taxonomy'     => 'category',
            'type'         => 'post',
            'hide_empty'   => 1,
            'hierarchical' => 1,
        ]);

        if ($categories) { ?>
            <span class="sidebar__title">Рубрики</span>
            <div class="sidebar-list">
                <?php foreach ($categories as $cat) { ?>
                    <a href="/category/<?= $cat->slug ?>/" class="sidebar-list__item"><?= $cat->name ?></a>
                <?php } ?>
            </div>
        <?php } ?>
        <?php if (!empty(get_field('sidebar_banner', 'options'))) { ?>
            <a href="<?php echo get_field('sidebar_banner_link', 'options'); ?>" target="_blank" class="sidebar__banner-link">
                <img src="<?php echo get_field('sidebar_banner', 'options')['url']; ?>" alt="sidebar banner" class="sidebar__banner">
            </a>
        <?php } ?>
    </div>
</div>