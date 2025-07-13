<?php get_header(); ?>

<main class="portfolio-case">
<?php while ( have_posts() ) : the_post(); ?>

  <section class="case-header">
    <h1><?php the_title(); ?></h1>

    <?php if ($cover = get_field('cover_image')): ?>
      <img src="<?php echo esc_url($cover['url']); ?>" alt="<?php echo esc_attr($cover['alt']); ?>">
    <?php endif; ?>

    <?php if ($desc = get_field('short_description')): ?>
      <div class="short-description">
        <?php echo wp_kses_post($desc); ?>
      </div>
    <?php endif; ?>
  </section>

  <div class="info-block">
    <p><?php the_field('project_decr'); ?></p>
  </div>

  <section class="case-details">
    <div class="info-block">
      <h4>Клиент</h4>
      <p><strong>Name:</strong> <?php the_field('client_name'); ?></p>
      <p><strong>Website:</strong> <a href="<?php the_field('client_website'); ?>" target="_blank"><?php the_field('client_website'); ?></a></p>
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
  </section>

  <!-- 🔽 Блок основного контента -->
  <section class="case-full-content">
    <?php the_content(); ?>
  </section>

<?php endwhile; ?>
</main>

<?php get_footer(); ?>


<style>
    .portfolio-case {
  max-width: 1200px;
  margin: 0 auto;
  padding: 40px 20px;
  color: #fff;
}
.case-header img {
  max-width: 100%;
  border-radius: 12px;
  margin-bottom: 20px;
}
.case-details {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 32px;
  margin-top: 40px;
}
.case-gallery img {
  width: 100%;
  margin-bottom: 20px;
  border-radius: 10px;
}
.about-client {
  margin-top: 60px;
}

.case-content__client-title {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 20px;
}

.case-content__client-text {
  font-size: 16px;
  line-height: 1.6;
  margin-bottom: 30px;
}

.case-content__client-img {
  max-width: 100%;
  border-radius: 10px;
}
</style>

<?php get_footer(); ?>