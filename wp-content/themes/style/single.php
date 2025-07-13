<?php get_header(); ?>

<?php
while (have_posts()) {
    the_post(); ?>
    <main class="main">
        <div class="container article-container">
            <section class="main-inner">
                <!-- Хлебные крошки  -->

                <ol class="breadcrumb text-muted">
                    <li class="breadcrumb-item">
                        <a class="breadcrumb-item-link" href="<?php echo home_url(); ?>">Главная</a>
                    </li>

                    <?php if (is_category() || is_single()) : ?>
                        <li class="breadcrumb-item">
                            <a class="breadcrumb-item-link" href="<?php echo get_category_link(get_queried_object()->term_id); ?>">
                                <?php single_cat_title(); ?>
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if (is_single()) : ?>
                        <li class="breadcrumb-item text-muted"><?php the_title(); ?></li>
                    <?php elseif (is_page()) : ?>
                        <li class="breadcrumb-item text-muted"><?php the_title(); ?></li>
                    <?php elseif (is_category()) : ?>
                        <li class="breadcrumb-item text-muted"><?php single_cat_title(); ?></li>
                    <?php endif; ?>
                </ol>

                <div class="article-head">

                    <div class="intro-heading intro-heading__article">
                        <h1 class="intro-heading__title"><?php single_post_title(); ?></h1>
                    </div>

                    <div class="article-head__post-info"><div class="article-author">
                        <div class="article-author__info">
                            <div class="article-author__name"><?php echo get_the_author(); ?></div>
                            <div class="article-meta__bottom">
                                <!-- <span class="reading-time"><?php //echo get_reading_time(); ?> читать</span>
                                <span class="dot-separator">•</span> -->
                                <span class="article-date"><?php echo get_the_date('j F Y'); ?></span>
                            </div>
                        </div>

                    </div>

                    <div class="post-category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            // Выводим первую категорию
                            echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                        }
                        ?>
                    </div></div>

                </div>

                <div class="article-img"><img class="main-blog-item__img" src="<?php the_post_thumbnail_url(); ?>" alt=""></div>


                <div class="content article-content">

                    <div class="articleNavigation">
                        <ul>

                        </ul>
                    </div>
                    <?php the_content(); ?>


                    <?php /*
                    $similarPosts = get_field('post_similar');
                    //                                echo count($similarPosts);
                    if (isset($similarPosts) && count($similarPosts) > 0) {
                    ?>
                        <div class="other-article">
                            <h3 class="title_size-3">Похожие статьи:</h3>
                            <ul class="theme-list">
                                <?php foreach ($similarPosts as $key => $similar) {

                                    //                                            echo '<pre>';
                                    //                                            print_r($similar['post_similar_item']);
                                    //                                            echo '</pre>';
                                ?>
                                    <li class="theme-list__item"><a class="article-link" href="<?= get_the_permalink($similar['post_similar_item']) ?>"><?= get_the_title($similar['post_similar_item']) ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    <?php } */?>

                </div>

            </section>


            <?php /*
            <div class="sidebar-categories">
                <ul class="sidebar-category-list">
                    <?php
                    // Получаем все категории
                    $categories = get_categories(array(
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    ));

                    // Для каждой категории выводим ссылку и иконку
                    foreach ($categories as $category) :
                        // Получаем ссылку на категорию
                        $category_link = get_category_link($category->term_id);
                        $category_name = $category->name;

                        // Получаем иконку из ACF поля
                        $category_icon = get_field('category_icon', 'category_' . $category->term_id); // 'category_icon' — это название поля

                        // Если иконка не установлена, используем дефолтную иконку
                        if (!$category_icon) {
                            $category_icon = 'fa fa-folder'; // Или любую другую дефолтную иконку
                        }
                    ?>
                        <li class="sidebar-category-item">
                            <a href="<?php echo $category_link; ?>" class="sidebar-category-link">
                                <i class="<?php echo esc_attr($category_icon); ?>"></i> <!-- Выводим иконку -->
                                <?php echo $category_name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div> */ ?>


        </div>
    </main>




<?php } ?>
<script>
    // Auto menu for articles
    $(document).ready(function() {
        // Auto menu for articles
        let articleContentTitles = $(".article-content h2");
        let articleNavigationObject = $(".articleNavigation ul");

        // Функции для генерации идентификаторов и заголовков
        function removeSpecialCharactersFromTitle(title) {
            return title.replace(/[^а-яА-Я ]/g, "");
        }

        function createIdFromTitle(title) {
            let titleId = title.toLowerCase();
            titleId = titleId.replace(/ /g, "_");
            return titleId;
        }

        function generateNavForTitle(title, titleId) {
            return '<li><a href="#' + titleId + '">' + title + "</a></li>";
        }

        let currentTitleIndex = 0;

        // Для каждого заголовка создаем ссылку в оглавлении
        articleContentTitles.each(function() {
            let title = $(this).text();
            let listTitle = removeSpecialCharactersFromTitle(title);
            let titleId = createIdFromTitle(listTitle);

            // Устанавливаем ID для заголовков
            $(this).attr("id", titleId);

            // Генерируем навигацию
            articleNavigationObject.append(generateNavForTitle(title, titleId));
        });

        // Устанавливаем активный элемент в навигации
        $(".articleNavigation li").eq(currentTitleIndex).addClass("active");

        // Добавляем маркер активного заголовка
        $(".articleNavigation").append('<div class="articleNavigationArrow"></div>');

        // Функция для вычисления и установки позиции маркера
        function calculateAndSetMarkerTopPosition(targetTitle) {
            let previousTitlesHeight = 0;
            $(".articleNavigation li").each(function(i) {
                if (i < targetTitle.index()) {
                    previousTitlesHeight += $(this).height();
                }
            });

            const listItemMargin = 24,
                ulPadding = 36,
                markerAlign = 3;

            let topValue =
                ulPadding +
                targetTitle.index() * listItemMargin +
                previousTitlesHeight +
                (targetTitle.height() - 9) / 2 -
                markerAlign;
            $(".articleNavigationArrow").css("top", topValue + "px");
        }

        // Инициализируем позицию маркера для активного заголовка
        calculateAndSetMarkerTopPosition($(".articleNavigation li.active"));

        // Обработчик события для прокрутки
        $(window).scroll(function() {
            let currentTitle = $(".articleNavigation li.active");
            let scroll = $(window).scrollTop(); // Получаем текущую позицию скролла

            let currentTitleObj = currentTitle.children().attr("href");
            let nextTitle = $(".articleNavigation li.active").next();
            let prevTitle = $(".articleNavigation li.active").prev();

            // Если прокручиваем вверх
            if (scroll > $(this).scrollTop()) {
                if (prevTitle.length) {
                    if (
                        $(this).scrollTop() <
                        $(prevTitle.children().attr("href")).offset().top
                    ) {
                        currentTitle.removeClass("active");
                        prevTitle.addClass("active");
                        calculateAndSetMarkerTopPosition(prevTitle);
                    }
                }
            } else {
                // Если прокручиваем вниз
                if (nextTitle.length) {
                    if ($(this).scrollTop() > $(currentTitleObj).offset().top) {
                        currentTitle.removeClass("active");
                        nextTitle.addClass("active");
                        calculateAndSetMarkerTopPosition(nextTitle);
                    }
                }
            }
        });

        // Обработчик клика по оглавлению
        $(document).on("click", ".articleNavigation li a", function(e) {
            e.preventDefault();

            $(this).parent().siblings("li.active").removeClass("active");
            $(this).parent().addClass("active");

            calculateAndSetMarkerTopPosition($(this).parent());

            const titleMarginTop = 16;
            $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top - titleMarginTop,
                },
                500
            );

            return false;
        });
    });
</script>
<?php get_footer(); ?>