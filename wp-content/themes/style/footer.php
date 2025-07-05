<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package style
 */

?>
<!-- Footer -->
<footer class="footer" id="footer">
    <div class="container">
        <div class="footer__wrapper">
            <div class="footer__col footer__col-text">
                rockncode<br>digital студия
            </div>
            <div class="footer__col">
                <div class="footer__col-title">Студия</div>
                <div class="footer__col-menu">
                    <a href="#how-work" class="footer__link" data-scroll>Как мы работаем</a>
                    <a href="#portfolio" class="footer__link" data-scroll>Портфолио</a>
                    <a href="#reviews" class="footer__link" data-scroll>Отзывы</a>
                    <a href="#blog" class="footer__link" data-scroll>Блог</a>
                    <a href="#footer" class="footer__link" data-scroll>Контакты</a>
                </div>
            </div>

            <div class="footer__col">
                <div class="footer__col-title">Контакты</div>
                <div class="footer__col-menu">
                    <a href="mailto:info@rockncode.net" class="footer__link">info@rockncode.net</a>
                    <a href="tel:+375333218368" class="footer__link">80 33 321 83 68</a>
                </div>
            </div>

            <div class="footer__col">
                <div class="footer__col-title">Медийность</div>
                <div class="footer__col-menu social-menu">
                    <a href="https://vc.ru/u/928996-rockncode" class="social-link footer__link" target="_blank" rel="noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                            <path d="M12.8491 9.33928C12.8415 9.23491 12.8324 9.16185 12.8317 9.0888C12.8296 8.83205 12.831 8.57461 12.831 8.29421H15.1066C15.1386 10.1193 15.0684 11.9241 15.1768 13.7589H16V14.779H14.2827C14.2271 14.4561 14.1715 14.1354 14.1068 13.7589C14.0283 13.8633 13.9831 13.9183 13.9434 13.9767C13.3705 14.8304 12.5348 15.1554 11.4857 14.932C10.5846 14.74 9.93735 14.0317 9.78509 13.0583C9.75033 12.837 9.73295 12.6116 9.73156 12.3875C9.7253 11.4879 9.72878 10.5882 9.72878 9.68857C9.72878 9.59116 9.72878 9.49375 9.72878 9.3532H8.74707V8.28864C9.44928 8.25872 10.1418 8.26289 10.8655 8.28725C10.8655 8.41597 10.8655 8.51407 10.8655 8.61218C10.8655 9.81172 10.86 11.0113 10.8697 12.2108C10.8718 12.4662 10.9045 12.7271 10.9629 12.9755C11.1388 13.7234 11.7339 14.134 12.6099 13.9141C13.3733 13.7221 13.9497 12.9838 13.9712 12.16C13.9942 11.2777 13.9768 10.3941 13.9761 9.51114C13.9761 9.47844 13.9664 9.44643 13.9546 9.36572C13.593 9.35737 13.2266 9.34902 12.8491 9.34067V9.33928Z" fill="black" />
                            <path d="M14.7353 4.89414C15.0357 5.12445 15.3048 5.3304 15.5919 5.55097C15.3924 5.82163 15.1775 6.03732 14.9342 6.22519C13.2148 7.54858 10.2773 6.92376 9.54941 4.37926C8.85763 1.96209 10.91 -0.331236 13.3942 0.0396198C14.0811 0.142597 14.7194 0.354812 15.2665 0.797334C15.3048 0.828645 15.3409 0.862738 15.3771 0.895441V2.5208H14.3293V1.46042C14.2772 1.40476 14.264 1.3818 14.2431 1.36927C13.0042 0.644261 11.0609 0.99633 10.6674 2.95637C10.5089 3.744 10.6848 4.46832 11.2201 5.07574C12.0774 6.04915 13.5979 6.06168 14.5372 5.11679C14.6012 5.05209 14.6582 4.98111 14.7353 4.89414Z" fill="black" />
                            <path d="M5.97365 6.80735H4.9259C4.26332 4.96072 3.59865 3.10923 2.92703 1.23825H1.79932V0.179956H3.81765C4.3676 1.77958 4.92242 3.3952 5.47724 5.01082C5.50018 5.0136 5.52312 5.01639 5.54607 5.01917C6.10228 3.40703 6.65848 1.79558 7.21747 0.175781H9.09676V1.22851H8.05874C7.36139 3.09323 6.67169 4.93637 5.97226 6.80596L5.97365 6.80735Z" fill="black" />
                            <path d="M2.29704 8.29627H4.27019C4.29939 8.69983 4.3279 9.09782 4.3564 9.49582C4.37378 9.50695 4.39186 9.51878 4.40924 9.52991C5.10937 8.35611 6.18702 8.13137 7.43571 8.28862V10.2173H6.381V9.26412C6.09246 9.2175 5.8533 9.29056 5.6322 9.3998C4.92095 9.75117 4.52883 10.3509 4.48294 11.1226C4.43358 11.9526 4.47182 12.7876 4.4739 13.6211C4.4739 13.6608 4.4885 13.7012 4.5031 13.7777H7.25355C7.32446 14.1305 7.30778 14.4471 7.27093 14.7852H2.29565V13.7638H3.3309V9.26064H2.29635V8.29627H2.29704Z" fill="black" />
                            <path d="M1.0554 14.8217H0V13.7578H1.0554V14.8217Z" fill="black" />
                        </svg></a>
                    <a href="https://www.instagram.com/artem_uiux/" class="social-link footer__link" target="_blank" rel="noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8 0C5.82725 0 5.555 0.00925 4.7015 0.04825C3.4015 0.1075 2.2595 0.426 1.3425 1.34275C0.42625 2.25925 0.1075 3.401 0.04825 4.7015C0.00925 5.555 0 5.82725 0 8C0 10.1728 0.00925 10.445 0.04825 11.2985C0.1075 12.5985 0.426 13.7405 1.34275 14.6575C2.25925 15.574 3.40125 15.8927 4.70175 15.952C5.555 15.9907 5.82725 16 8 16C10.1728 16 10.445 15.9907 11.2985 15.9517C12.5983 15.8925 13.7405 15.574 14.6575 14.6573C15.574 13.7408 15.8927 12.5988 15.952 11.2983C15.9907 10.445 16 10.1728 16 8C16 5.82725 15.9907 5.555 15.9517 4.7015C15.8925 3.4015 15.574 2.2595 14.6573 1.3425C13.7408 0.426 12.5988 0.10725 11.2983 0.048C10.445 0.00925 10.1728 0 8 0Z" fill="#0D0E0B" />
                            <path d="M7.99985 3.89258C5.7311 3.89258 3.89185 5.73183 3.89185 8.00058C3.89185 10.2693 5.7311 12.1086 7.99985 12.1086C10.2686 12.1086 12.1078 10.2693 12.1078 8.00058C12.1078 5.73183 10.2686 3.89258 7.99985 3.89258ZM7.99985 10.6673C6.5271 10.6673 5.3331 9.47333 5.3331 8.00058C5.3331 6.52783 6.5271 5.33383 7.99985 5.33383C9.4726 5.33383 10.6666 6.52783 10.6666 8.00058C10.6666 9.47333 9.4726 10.6673 7.99985 10.6673Z" fill="#E4E3DB" />
                            <path d="M12.2703 4.68954C12.8005 4.68954 13.2303 4.25973 13.2303 3.72954C13.2303 3.19934 12.8005 2.76953 12.2703 2.76953C11.7401 2.76953 11.3103 3.19934 11.3103 3.72954C11.3103 4.25973 11.7401 4.68954 12.2703 4.68954Z" fill="#E4E3DB" />
                        </svg></a>
                    <a href="https://t.me/+Tj82QhXGyIw5MGI6" class="social-link footer__link" target="_blank" rel="noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M15.1465 3.07013L12.9772 13.3004C12.8136 14.0225 12.3868 14.2021 11.7802 13.8621L8.47498 11.4264L6.88017 12.9603C6.70373 13.1368 6.55608 13.2844 6.21592 13.2844L6.45336 9.91813L12.5793 4.3826C12.8457 4.14516 12.5216 4.01357 12.1654 4.25104L4.59217 9.0196L1.33183 7.99916C0.622639 7.77773 0.609827 7.28995 1.47942 6.94982L14.232 2.03685C14.8224 1.81545 15.339 2.16838 15.1465 3.07013Z" fill="#0D0E0B" />
                        </svg></a>
                    <a href="https://vk.com/designcubestudio" class="social-link footer__link" target="_blank" rel="noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.12471 1.12471C0 2.24942 0 4.05961 0 7.68L0 8.32C0 11.9404 0 13.7506 1.12471 14.8753C2.24942 16 4.05961 16 7.68 16H8.32C11.9404 16 13.7506 16 14.8753 14.8753C16 13.7506 16 11.9404 16 8.32V7.68C16 4.05961 16 2.24942 14.8753 1.12471C13.7506 0 11.9404 0 8.32 0L7.68 0C4.05961 0 2.24942 0 1.12471 1.12471ZM2.70002 4.8667C2.78669 9.0267 4.86667 11.5267 8.51334 11.5267H8.72004V9.14669C10.06 9.28002 11.0733 10.26 11.48 11.5267H13.3734C12.8534 9.63336 11.4866 8.58669 10.6333 8.18669C11.4866 7.69335 12.6866 6.49337 12.9733 4.8667H11.2532C10.8799 6.1867 9.77338 7.38669 8.72004 7.50002L8.72004 4.8667H6.99999V9.48002C5.93332 9.21336 4.58668 7.92003 4.52668 4.8667L2.70002 4.8667Z" fill="#0D0E0B" />
                        </svg></a>

                </div>
            </div>


        </div>
        <div class="footer__bottom">
            <div class="footer__text">©2021-<span id="currentYear"></span> Rockncode. Все права защищены</div>
            <div class="footer__text">
                <a href="#" class="footer__link footer__link--secondary">Политика конфиденциальности</a>
                <a href="#" class="footer__link footer__link--secondary">Пользовательское соглашение</a>
            </div>
        </div>
    </div>

</footer>

<!-- Modal -->
<div class="modal__wrapper">
    <div class="overlay"></div>
    <div class="modal" id="modal">
        <div class="modal__close"> <img src="/wp-content/themes/style/img/close.svg" alt="cancel"></div>
        <div class="modal__title">Оставить заявку</div>
        <div class="modal__desc">Заполните данные и мы свяжемся с вами для обсуждения.</div>
        <div class="modal__body">
            <form method="post" enctype="multipart/form-data" id="callback_form">

                <div class="modal__body-title-number">1</div>
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
                    <div class="modal__body-title-number">2</div>
                    <div class="modal__body-title">Описание проекта:</div>
                    <label class="modal__form-label" for="clientMessage">
                        <textarea id="clientMessage" name="about" required="" class="als-expressform-textarea" style="overflow: hidden; overflow-wrap: break-word; height: 58px;" placeholder="Несколько слов о проекте и примерный бюджет"></textarea>
                    </label>
                </div>
                <div class="modal__form">
                    <div class="modal__body-title-number">3</div>
                    <div class="modal__body-title">Оставьте контакт:</div>
                    <label class="modal__form-label" for="clientContact">
                        <input id="clientContact" name="name" type="text" placeholder="Почта или любая соц. сеть" required autocomplete="off">
                    </label>
                </div>
                <div class="modal__form-submit">
                    <button type="submit" class="form__btn">Получить оценку</button>
                </div>
            </form>
        </div>
    </div>
</div>


<link rel="stylesheet" href="/wp-content/themes/style/css/style.min.css">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="/wp-content/themes/style/js/common.min.js"></script>


<!-- <div id="video-popup" class="mfp-hidden">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->

<?php wp_footer(); ?>

</body>

</html>