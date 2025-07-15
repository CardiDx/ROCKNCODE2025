<?php
/**
 * Template Name: Contacts Page
 */
get_header();
?>

<main class="contacts">
  <div class="container">
    <section class="contacts__inner">
      <h1 class="contacts__title"><?php the_title(); ?></h1>

      <div class="contacts__content">
        <div class="contacts__info">
          <ul class="contacts__list">
            <li class="contacts__item">
              <span class="contacts__label">Email:</span>
              <a href="mailto:info@rockncode.net" class="contacts__link">info@rockncode.net</a>
            </li>
            <li class="contacts__item">
              <span class="contacts__label">Телефон:</span>
              <a href="tel:+375291112233" class="contacts__link">+375 33 321 83 68</a>
            </li>
            <li class="contacts__item">
              <span class="contacts__label">Telegram:</span>
              <a href="https://t.me/WebTutorialis" class="contacts__link">@WebTutorialis</a>
            </li>
          </ul>
        </div>

        <div class="contacts__form">
          <?php echo do_shortcode('[contact-form-7 id="123" title="Контактная форма"]'); ?>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
