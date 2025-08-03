<?php get_header(); ?>



<section class="site-main portfolio-archive ">
  <div class="container">
  <!-- Хлебные крошки -->
        <ol class="breadcrumb text-muted">
          <li class="breadcrumb-item">
            <a class="breadcrumb-item-link" href="<?php echo home_url(); ?>">Главная</a>
          </li>

          <li class="breadcrumb-item text-muted">Портфолио</li>
        </ol>

    <div class="portfolio-archive__header">
      <h1 class="portfolio-archive__title">Портфолио</h1>
      <p class="portfolio-archive__description">
        Посмотрите примеры наших работ: от лендингов и интернет-магазинов до сложных интерфейсов. В портфолио студии
        Rockncode — реальные проекты, которые приносят результат.
      </p>
    </div>

    <div class="portfolio-archive__grid">
      <?php if (have_posts()):
        while (have_posts()):
          the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="portfolio-card">
            <div class="portfolio-card__image">
              <?php
              $cover = get_field('cover_image');
              if ($cover):
                echo wp_get_attachment_image($cover['ID'], 'large', false, ['class' => 'portfolio-card__img']);
              endif;
              ?>
            </div>
            <div class="portfolio-card__info">
              <h3 class="portfolio-card__title"><?php the_title(); ?></h3>
              <span class="portfolio-card__year">
                <?php the_field('project_time'); // можно вывести только год через PHP если нужно ?>
              </span>
            </div>
          </a>

        <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>