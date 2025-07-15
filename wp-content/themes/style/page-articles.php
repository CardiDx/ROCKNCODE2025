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
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post(); ?>

          <a href="<?php the_permalink(); ?>" class="article-item">
            <div class="article-item__image-wrapper">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium_large', ['class' => 'article-item__image']); ?>
              <?php endif; ?>
              <div class="article-item__date">
                <span class="article-item__day"><?php echo get_the_date('d'); ?></span>
                <span class="article-item__month"><?php echo mb_strtolower(get_the_date('M')); ?></span>
              </div>
            </div>

            <div class="article-item__content">
              <h2 class="article-item__title"><?php the_title(); ?></h2>
              <p class="article-item__excerpt"><?php echo get_the_excerpt(); ?></p>
            </div>
          </a>

      <?php endwhile; wp_reset_postdata(); else : ?>
        <p>Пока нет статей.</p>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>

<style>.articles-page {
  padding: 60px 20px;
  color: #fff;
}

.articles-page__container {
  max-width: 1280px;
  margin: 0 auto;
}

.articles-page__title {
  font-size: 36px;
  margin-bottom: 40px;
}

.articles-page__list {
  display: flex;
  flex-direction: column;
  gap: 40px;
}

.article-item {
  display: flex;
  align-items: flex-start;
  gap: 32px;
  text-decoration: none;
  color: inherit;
}

.article-item:hover .article-item__title{
  color: #C6FF00;
}

.article-item__image-wrapper {
  position: relative;
  flex-shrink: 0;
  width: 200px;
  border-radius: 16px;
  overflow: hidden;
}

.article-item__image {
  display: block;
  width: 100%;
  height: auto;
  border-radius: 16px;
}

.article-item__date {
  position: absolute;
  top: 12px;
  right: 12px;
  background-color: #000;
  color: #fff;
  width: 48px;
  height: 48px;
  border-radius: 50%;
  font-size: 12px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

.article-item__day {
  font-size: 14px;
  font-weight: bold;
  line-height: 1;
}

.article-item__month {
  text-transform: uppercase;
  font-size: 10px;
  line-height: 1;
}

.article-item__content {
  flex: 1;
}

.article-item__title {
  font-size: 20px;
  letter-spacing: 0; 
  margin-bottom: 10px;
}

.article-item__excerpt {
  font-size: 14px;
  color: #ccc;
  line-height: 1.6;
}

/* Адаптив */
@media (max-width: 768px) {
  .article-item {
    flex-direction: column;
  }

  .article-item__image-wrapper {
    width: 100%;
  }
}
</style>