<?php get_header(); ?>

    <div class="page-about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12">
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="#">главная</a></li>
                            <li class="breadcrumbs__item"><a class="breadcrumbs__item-link breadcrumbs_active" href="#">об
                                    авторе</a></li>
                        </ul>
                    </div>
                    <h2 class="main__title">Об <span class="highlighted">авторе</span></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--content-text-->
                <div class="col-12 col-md-9">
                    <div class="about__meet">
                        <div class="about__wrap-img-me">
                            <img src="/wp-content/themes/style/img/elena-belyaeva.jpg" alt="elena belyaeva">
                        </div>
                        <div class="about__info-text">
                            <h3 class="about__name-text">Елена Беляева</h3>
                            <span class="about__role">Стилист, модельер и преподаватель</span>
                            <p class="about__history-me">
                                <?php the_field('about_intro');?>
                            </p>
                        </div>
                    </div>

                    <?php
                    $about_theses = get_field('about_theses');
                    if(isset( $about_theses ) && !empty( $about_theses )) {
                        ?>
                        <ul class="role__list">
                            <?php foreach ($about_theses as $about_thesis) { ?>
                                <li><?= $about_thesis['about_thesis']; ?></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>

                    <h2 class="main__title">Моя <span class="highlighted">история</span></h2>
                    <article class="about-story-me">
                        <?php the_content(); ?>
                    </article>


                </div>
                <!--sidebar-->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>