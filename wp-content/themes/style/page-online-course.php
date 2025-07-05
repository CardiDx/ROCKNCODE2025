<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="/">главная</a></li>
                        <li class="breadcrumbs__item"><span class="breadcrumbs__item-link breadcrumbs_active"><?php the_title() ?></span></li>
                    </ul>
                </div>
                <h2 class="main__title">Онлайн <span class="highlighted">курсы</span></h2>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 mb-30 col-lg-3">
                    <div class="card-course">
                        <img class="card-course__img" src="/wp-content/uploads/2021/07/Marafon-1.png"
                             alt="course">
                        <h3 class="card-course__title">Стильная перезагрузка</h3>

                        <a class="card-course__btn btn-gradient" target="_blank" rel="noopener" href="https://bestyleacademy.com/marafon-messenger">Подробнее</a>

                        <div class="card-course__meta">
                            <span>3 урока</span>
                            <span>по 20 минут</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-30 col-lg-3">
                    <div class="card-course">
                        <img class="card-course__img" src="/wp-content/uploads/2021/06/Praktikum-1.png"
                             alt="course">
                        <h3 class="card-course__title">Секреты образов</h3>

                        <a class="card-course__btn btn-gradient" target="_blank" rel="noopener" href="https://bestyleacademy.com/practikum">Подробнее</a>

                        <div class="card-course__meta">
                            <span>10 уроков</span>
                            <span>по 20 минут</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-30 col-lg-3">
                    <div class="card-course">
                        <img class="card-course__img" src="/wp-content/uploads/2021/06/Garderob-s-umom.png"
                             alt="course">
                        <h3 class="card-course__title">Гардероб с умом</h3>

                        <a class="card-course__btn btn-gradient" target="_blank" rel="noopener" href="https://bestyleacademy.com/garderob-s-ymom">Подробнее</a>

                        <div class="card-course__meta">
                            <span>12 уроков</span>
                            <span>по 25 минут</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-30 col-lg-3">
                    <div class="card-course">
                        <img class="card-course__img" src="/wp-content/uploads/2021/07/Marafon-1.png"
                             alt="course">
                        <h3 class="card-course__title">Годовой коучинг</h3>

                        <a class="card-course__btn btn-gradient" target="_blank" rel="noopener" href="https://bestyleacademy.com/couch">Подробнее</a>

                        <div class="card-course__meta">
                            <span>Безлимит</span>
                        </div>
                    </div>
                </div>





<!--                --><?php
//                $args = array(
//                    'post_type' => 'landing',
//                );
//                $result = new WP_Query( $args );
//                if ($result->have_posts()) {
//                    while ($result->have_posts()) {
//                        $result->the_post();
//                        ?>
<!--                        <div class="col-12 col-md-6 mb-30 col-lg-3">-->
<!--                            <div class="card-course">-->
<!--                                <img class="card-course__img" src="--><?php //the_post_thumbnail_url(); ?><!--"-->
<!--                                     alt="course">-->
<!--                                <h3 class="card-course__title">--><?php //the_title(); ?><!--</h3>-->
<!---->
<!--                                <a class="card-course__btn btn-gradient" target="_blank" rel="noopener" href="--><?//= get_the_permalink(); ?><!--">Подробнее</a>-->
<!---->
<!--                                <div class="card-course__meta">-->
<!--                                    --><?php
//                                    $lesson = 'уроков';
//                                    $countLessons = get_field('course_num_of_videos');
//
//                                    if ($countLessons === 1) {
//                                        $lesson = 'урок';
//                                    } else if ($countLessons >= 2 && $countLessons <= 4 || $countLessons === 22 || $countLessons === 23 || $countLessons === 24) {
//                                        $lesson = 'урока';
//                                    } else {
//                                        $lesson = 'уроков';
//                                    }
//                                    ?>
<!--                                    <span>--><?//= $countLessons ?><!-- <span id="lesson">--><?//= $lesson ?><!--</span></span>-->
<!---->
<!--                                    <span>по --><?php //the_field('course_videos_duration'); ?><!-- минут</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    --><?php //}
//                } ?>

            </div>
        </div>
    </div>


<?php get_footer(); ?>