<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li class="breadcrumbs__item"><a class="breadcrumbs__item-link" href="#">главная</a></li>
                        <li class="breadcrumbs__item"><a class="breadcrumbs__item-link breadcrumbs_active" href="#">контакты</a>
                        </li>
                    </ul>
                </div>
                <h2 class="main__title">Контакты</h2>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact__adress">
                                <h3 class="contact__name">ИП Беляева Елена Борисовна</h3>
                                <?php echo get_the_content(); ?>
                            </div>
                            <div class="contact__message">
                                <h3 class="contact__name">Смело звоните и пишите нам:</h3>
                                <ul class="contact__social-list">
                                    <li><img class="contact__soc-icon"
                                             src="/wp-content/themes/style/img/icons/envelope.svg"
                                             alt=""><span>elenabel-style@ya.ru</span></li>
                                    <li><img class="contact__soc-icon"
                                             src="/wp-content/themes/style/img/icons/phone-call.svg" alt=""><span>+375 29 586 38 31</span>
                                    </li>
                                    <li><img class="contact__soc-icon"
                                             src="/wp-content/themes/style/img/icons/messenger/instagram.svg"
                                             alt=""><span>@elenabel_style</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="contact__working">
                                <h3 class="contact__name">Режим работы: </h3>
                                <span><?php the_field('contacts_work_time'); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="form__title main__title">Остались <span class="highlighted">вопросы?</span></h2>
                            <span class="form__subtitle">Оставьте заявку и я свяжусь с Вами в ближайшее время</span>
                            <div class="wrap-form-img">
                                <form class="form">
                                    <input class="form__input" type="text" placeholder="Ваше имя" required>
                                    <input class="form__input" type="text" placeholder="Ваш телефон" required>
                                    <input class="form__btn btn-gradient" type="submit" value="Оставить заявку">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--sidebar-->
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>