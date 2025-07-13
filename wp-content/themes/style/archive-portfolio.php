<?php get_header(); ?>

<section class="portfolio-archive">
  <div class="portfolio-archive__header">
    <h1 class="portfolio-archive__title">Все проекты</h1>
    <p class="portfolio-archive__description">
      Подведу итог анализа вашей задачи и сообщу о стоимости разработки проекта и сроках.
      А для начала работы над дизайном сайта вам необходимо внести предоплату 50% от стоимости проекта
    </p>
  </div>

  <div class="portfolio-archive__grid">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="portfolio-card">
        <div class="portfolio-card__image">
          <?php
          $cover = get_field('cover_image');
          if ($cover) :
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
</section>

<?php get_footer(); ?>

<style>
    .portfolio-archive {
  padding: 60px 20px;
  max-width: 1280px;
  margin: 0 auto;
  color: #fff;
}

.portfolio-archive__header {
  max-width: 600px;
  margin-bottom: 40px;
}

.portfolio-archive__title {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 16px;
}

.portfolio-archive__description {
  font-size: 16px;
  line-height: 1.6;
  color: #ccc;
}

.portfolio-archive__grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 32px;
}

.portfolio-card {
  background: #121212;
  border-radius: 16px;
  overflow: hidden;
  text-decoration: none;
  color: inherit;
  transition: transform 0.3s ease;
  display: flex;
  flex-direction: column;
}

.portfolio-card:hover {
  transform: translateY(-5px);
}

.portfolio-card__image {
  overflow: hidden;
}

.portfolio-card__img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 16px 16px 0 0;
}

.portfolio-card__info {
  padding: 20px;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.portfolio-card__title {
  font-size: 18px;
  font-weight: 600;
  margin: 0;
}

.portfolio-card__text {
  font-size: 14px;
  color: #aaa;
  margin: 0;
}

.portfolio-card__year {
  font-size: 12px;
  color: #777;
  margin-top: auto;
  align-self: flex-end;
}

</style>