<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package style
 */

get_header();
?>


    <section class="wrap-error">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error">
                        <h1 class="error__title">404</h1>
                        <p class="error__subtitle">Страница Не Найдена</p>
                            <p class="error__desc">Похоже, мы не можем найти нужную вам страницу</p>
                        <a class="error__btn btn btn-gradient" href="/">На главную</a>
                    </div>
                </div>
            </div>
        </div>

    </section>


<?php
get_footer();
