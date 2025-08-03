<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<main class="about">
    <section class="about__hero">
        <div class="container">
            <ol class="breadcrumb text-muted">
                <li class="breadcrumb-item">
                    <a class="breadcrumb-item-link" href="<?php echo home_url(); ?>">Главная</a>
                </li>

                <li class="breadcrumb-item text-muted"><?php the_title(); ?></li>
            </ol>
            <h1 class="about__title">О компании Rockncode</h1>
            <p class="about__text">
                Нам доверяют стартапы, e-commerce-компании, медтех и игровые платформы. И мы гордимся тем, что
                большинство клиентов приходят по рекомендации — за качеством, за ответственностью и за честной работой
                без воды.
            </p>
        </div>
    </section>

    <section class="about__who">
        <div class="container about__who-inner">
            <div class="about__who-left">
                <h2 class="about__subtitle">Кто мы?<br><span>и почему нам доверяют клиенты</span></h2>
            </div>
            <div class="about__who-right">
                <p class="about__desc">
                    Молодая студия, специализирующаяся на UX-дизайне и разработке интерфейсов под ключ. Разрабатываем
                    сайты для e-commerce, медицинских платформ и игровых сервисов.
                </p>
                <ul class="about__benefits">
                    <li>Фиксированные цены, которые известны до начала работы</li>
                    <li>Уникальность, которая поможет выделиться среди конкурентов</li>
                    <li>Чистота и адекватность на любой стадии разработки проекта</li>
                </ul>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>