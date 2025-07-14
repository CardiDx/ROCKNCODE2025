<?php get_header(); ?>

<main class="portfolio-case site-main">
  <?php while (have_posts()):
    the_post(); ?>

    <div class="container">
      <section class="case-header">

        <!-- Хлебные крошки -->
        <ol class="breadcrumb text-muted">
          <li class="breadcrumb-item">
            <a class="breadcrumb-item-link" href="<?php echo home_url(); ?>">Главная</a>
          </li>

          <li class="breadcrumb-item">
            <a class="breadcrumb-item-link" href="<?php echo get_post_type_archive_link('portfolio'); ?>">Портфолио</a>
          </li>

          <li class="breadcrumb-item text-muted"><?php the_title(); ?></li>
        </ol>

        <h1><?php the_title(); ?></h1>

        <?php if ($cover = get_field('cover_image')): ?>
          <div class="case-header__image"><img src="<?php echo esc_url($cover['url']); ?>"
              alt="<?php echo esc_attr($cover['alt']); ?>"></div>
        <?php endif; ?>


        <div class="case-details">

          <div class="info-block">
            <h4>Клиент</h4>
            <p><strong>Имя:</strong> <?php the_field('client_name'); ?></p>
            <p><strong>Website:</strong> <a href="<?php the_field('client_website'); ?>"
                target="_blank"><?php the_field('client_website'); ?></a></p>
          </div>

          <div class="info-block">
            <h4>Услуги</h4>
            <p><?php the_field('client_services'); ?></p>
          </div>

          <div class="info-block">
            <h4>Время на разработку</h4>
            <p><?php the_field('project_time'); ?></p>
          </div>

          <div class="info-block">
            <h4>Инструменты и технологии</h4>
            <p><?php the_field('tools_technologies'); ?></p>
          </div>
        </div>

      </section>


      <!-- 🔽 Блок основного контента -->
      <section class="case-full-content">
        <?php the_content(); ?>
      </section>



    <?php endwhile; ?>
</main>

<?php get_footer(); ?>