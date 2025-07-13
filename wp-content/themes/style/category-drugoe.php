<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="/">главная</a></li>
                    <li class="breadcrumbs__item"><span class="breadcrumbs__item-link breadcrumbs_active"><?= get_the_category_by_ID(1); ?></span></li>
                </ul>
            </div>
            <h2 class="main__title">Категория: <span class="highlighted"><?= get_the_category_by_ID(1); ?></span></h2>
        </div>
    </div>
</div>
<div class="page-content">
    <div class="container">
        <?php
        $args = array(
            'post_type' => 'post',
            'category_name' => 'drugoe',
        );
        $result = new WP_Query($args);

        if ($result->have_posts()) {
            while ($result->have_posts()) {
                $result->the_post();
        ?>

                <div class="main-blog-item">
                    <a href="<?= get_the_permalink(); ?>" class="main-blog-item__img-wrapper">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="main-blog-item__img">
                    </a>
                    <div class="main-blog-item-content">
                        <h2><a href="<?= get_the_permalink(); ?>"
                                class="main-blog-item__title"><?= get_the_title(); ?></a></h2>
                        <p class="main-blog-item__text"><?php echo implode(' ', array_slice(explode(' ', wp_strip_all_tags(get_the_content())), 0, 20)); ?>
                            <!-- <a href="<? //echo get_the_permalink(); 
                                            ?>" class="main-blog-item__text-more">Читать&nbsp;дальше<img
                                    src="/wp-content/themes/style/img/icons/long-arrow.svg"
                                    class="main-blog-item__text-more-img" alt=""></a> -->
                        </p>
                        <div class="main-blog-item-meta mt30">
                            <span class="main-blog-item-meta-item"><?php echo get_the_author(); ?></span>
                            <span class="main-blog-item-meta-item"><img
                                    src="/wp-content/themes/style/img/icons/vision.svg"
                                    class="main-blog-item-meta-item__img"
                                    alt=""> <?= get_field('post_views') ?></span>
                        </div>
                    </div>
                </div>

        <?php }
        } ?>

    </div>
</div>


<?php get_footer(); ?>