<?php  /*Template Name: sitemap*/ ?>

<?php get_header(); ?>



    <div class="container">
        <div class="row">
            <!--breadcrumbs-->
            <div class="col-12 col-5">
            <div class="breadcrumbs">
                <ul class="breadcrumbs__list">
                    <li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="/">главная</a>
                    </li>
                    <li class="breadcrumbs__item"><a class="breadcrumbs__item-link breadcrumbs_active"
                                                     href="#"><?php the_title() ?></a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-7">
            <h1 class="main__title">Содержание <span class="highlighted">Сайта</span></h1>
        </div>
        </div>

        <div class="row">

            <div class="col-12 col-lg-5">

                <?php
                $categories = get_categories( [
                    'taxonomy'     => 'category',
                    'type'         => 'post',
                    'hide_empty'   => 1,
                    'hierarchical' => 1,
                ] );

                if( $categories ){ ?>
                    <span class="sidebar__title">Рубрики</span>
                    <div class="sidebar-list">
                        <?php foreach( $categories as $cat ){ ?>
                            <a href="/category/<?= $cat->slug ?>/"  class="sidebar-list__item"><?= $cat->name ?></a>
                        <?php } ?>
                    </div>
                <?php } ?>


                <p class="category-text">Категория: <span>Название категории</span></p>
                <ul class="theme-list">
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                </ul>



                <p class="category-text">Страницы:</p>
                <ul class="theme-list">
                    <li class="theme-list__item"><a class="article-link" href="#">Главная</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Об авторе</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Онлайн курсы</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Контакты</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Политика конфиденциальности</a></li>
                </ul>
            </div>
            <div class="col-12 col-lg-4">
                <p class="category-text">Категория: <span>Название категории</span></p>
                <ul class="theme-list">
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                    <li class="theme-list__item"><a class="article-link" href="#">Красота и
                            здоровье</a></li>
                </ul>


                <?php
                $pages = get_pages( [
                    'sort_order'   => 'ASC',
                    'sort_column'  => 'post_title',
                    'hierarchical' => 1,
                    'exclude'      => '',
                    'include'      => '',
                    'meta_key'     => '',
                    'meta_value'   => '',
                    'authors'      => '',
                    'child_of'     => 0,
                    'parent'       => -1,
                    'exclude_tree' => '',
                    'number'       => '',
                    'offset'       => 0,
                    'post_type'    => 'page',
                    'post_status'  => 'publish',
                ] );
                foreach( $pages as $page ){
                    // формат вывода?>
                    <a href=""><?= get_page_link($page-> post_title);?></a>



<!--                    --><?php
//                    $pages = get_pages( $args );
//                    echo '<pre>';
//                    print_r($post);
//                    echo '</pre>';


                }
                wp_reset_postdata();
                ?>


            </div>
        </div>
    </div>


<?php get_footer(); ?>