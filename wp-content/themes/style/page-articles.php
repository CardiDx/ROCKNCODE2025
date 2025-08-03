<?php
/* Template Name: Articles Page */
get_header(); ?>

<section class="site-main articles-page">
  <div class="articles-page__container container">
    <ol class="breadcrumb text-muted">
      <li class="breadcrumb-item">
        <a class="breadcrumb-item-link" href="<?php echo home_url(); ?>">Главная</a>
      </li>

      <li class="breadcrumb-item text-muted"><?php the_title(); ?></li>
    </ol>
    <h1 class="articles-page__title">Статьи</h1>

    <div class="articles-page__list">
      <?php
      $query = new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => -1
      ]);
      if ($query->have_posts()):
        while ($query->have_posts()):
          $query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="article-item">
            <div class="article-item__image-wrapper">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium_large', ['class' => 'article-item__image']); ?>
              <?php endif; ?>
              <div class="article-item__date">
                <span class="article-item__day"><?php echo get_the_date('d'); ?></span>
                <span class="article-item__month"><?php echo mb_strtolower(get_the_date('M')); ?></span>
              </div>
            </div>

            <div class="article-item__content">
              <h2 class="article-item__title"><?php the_title(); ?></h2>
              <p class="article-item__excerpt"> <?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...'); ?></p>
            </div>
          </a>

        <?php endwhile;
        wp_reset_postdata(); else: ?>
        <p>Пока нет статей.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>