<?php

function separator_shortcode(){
    return "<div class=\"paragraph-arrow\"></div>";
}

add_shortcode( 'separator', 'separator_shortcode' );

function about_advantages_shortcode(){
    return "<div class=\"row\">
                <div class=\"col-12 col-md-6 col-xl-4\">
                    <div class=\"advantages\">
                        <img class=\"advantages__icon\"
                             src=\"/wp-content/themes/style/img/icons/about/pencil.svg\" alt=\"\">
                        <span class=\"advantages__text\">Пишу статьи об имидже, моде и стиле, делаю обзоры магазинов. Веду экспертные страницы в социальных сетях.</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-xl-4\">
                    <div class=\"advantages\">
                        <img class=\"advantages__icon\"
                             src=\"/wp-content/themes/style/img/icons/about/dress.svg\" alt=\"\">
                        <span class=\"advantages__text\">Учу создавать стильные и функциональные гардеробы для реальной жизни. Преподаю конструирование и дизайн одежды.</span>
                    </div>
                </div>
                <div class=\"col-12 col-md-6 col-xl-4 \">
                    <div class=\"advantages\">
                        <img class=\"advantages__icon\"
                             src=\"/wp-content/themes/style/img/icons/about/certificate.svg\" alt=\"\">
                        <span class=\"advantages__text\">Стилист, имидж-консультант: Scuola Italiana di Moda e Stile. Стильный имидж -теория и дизайн: BOGOMOLOV image school.</span>
                    </div>
                </div>
            </div>";
}

add_shortcode( 'about_advantages', 'about_advantages_shortcode' );

function articte_quote_shortcode( $attr, $content ){
    return "<div class=\"quote\">
        <div class=\"quote__icon\">
            <svg id=\"Capa_1\" fill=\"#ffffff\"
                 enable-background=\"new 0 0 409.294 409.294\"
                 height=\"512\" viewBox=\"0 0 409.294 409.294\" width=\"512\"
                 xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"m0 204.647v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941v-58.471c-96.728 0-175.412 78.684-175.412 175.412z\"/>
                <path d=\"m409.294 87.706v-58.471c-96.728 0-175.412 78.684-175.412 175.412v175.412h175.412v-175.412h-116.941c0-64.48 52.461-116.941 116.941-116.941z\"/>
            </svg>
        </div>
        <div class=\"says\">
            <p>". $content ."</p>
        </div>
    </div>";
}

add_shortcode( 'article_quote', 'articte_quote_shortcode' );