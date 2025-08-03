<?php
/**
 * Template Name: Contacts Page
 */
get_header();
?>

<main class="contacts">
  <div class="container">
    <section class="contacts__inner">

      <div class="contacts__content">

        <div class="contacts__info">
          <h1 class="contacts__title"><?php the_title(); ?></h1>
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

          <div class="modal" id="modal">
            <div class="modal__body">
              <form method="post" enctype="multipart/form-data" id="callback_form">

                <div class="modal__body-title">Тип проекта:</div>
                <div class="modal__wrapper-tags" id="TagsContainer">
                  <div data-id="landing" class="modal__tag modal__tag--active">Лендинг</div>
                  <div data-id="website" class="modal__tag">Многостраничный сайт</div>
                  <div data-id="ecommece" class="modal__tag">Интернет-магазин</div>
                  <div data-id="dashboard" class="modal__tag">MVP системы/сервисы</div>
                  <div data-id="advert" class="modal__tag">Упаковка соц.сетей</div>
                  <div data-id="app" class="modal__tag">Мобильное приложение</div>
                  <div data-id="logo" class="modal__tag">Брендинг</div>
                  <div data-id="other" class="modal__tag">Другое</div>
                </div>
                <div class="modal__form">
                  <div class="modal__body-title">Описание проекта:</div>
                  <label class="modal__form-label" for="clientMessage">
                    <textarea id="clientMessage" name="about" required="" class="als-expressform-textarea"
                      style="overflow: hidden; overflow-wrap: break-word;"
                      placeholder="Несколько слов о проекте и примерный бюджет"></textarea>
                  </label>
                </div>
                <div class="modal__form">
                  <div class="modal__body-title">Оставьте контакт:</div>
                  <label class="modal__form-label" for="clientContact">
                    <input id="clientContact" name="name" type="text" placeholder="Почта или любая соц. сеть" required
                      autocomplete="off">
                  </label>
                </div>
                <div class="modal__form-submit">
                  <button type="submit" class="form__btn">Получить оценку</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>