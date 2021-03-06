<?php

function createSlider($exclude)
{

    $html = '';

    $desktopHtml = '<div class="swiper swiper--desktop"><div class="swiper-pagination"></div><div class="swiper-wrapper">';

    $slides = ['globalis', 'alliance', 'traffic', 'other', 'voodoo', 'target', 'crypto', 'edu', 'garant'];

    if (array_search($exclude, $slides)) {
        unset($slides[array_search($exclude, $slides)]);
    }

    foreach ($slides as $slide) {
        $desktopHtml .= '
            <div class="swiper-slide">
                <a href="/portfolio/' . $slide . '/" class="portfolio__slider-link">
                    <img class="portfolio__slider-img" src="/assets/cases/' . $slide . '.png">
                </a>
            </div>';
    }

    $desktopHtml .= '</div>';
    $desktopHtml .= '</div>';
    $desktopHtml .= '<div class="portfolio__slider-nav">';
    $desktopHtml .= '<div class="portfolio__slider-nav-button portfolio__slider-nav-button--prev"></div>';
    $desktopHtml .= '<div class="portfolio__slider-nav-button portfolio__slider-nav-button--next"></div>';
    $desktopHtml .= '</div>';

    $mobileHtmlTop = '<div class="swiper swiper--mobile"><div class="swiper-pagination"></div><div class="swiper-wrapper">';

    foreach (array_chunk($slides, ceil(count($slides) / 2))[0] as $slide) {
        $mobileHtmlTop .= '
            <div class="swiper-slide">
                <a href="/portfolio/' . $slide . '/" class="portfolio__slider-link">
                    <img class="portfolio__slider-img" src="/assets/cases/' . $slide . '.png">
                </a>
            </div>';
    }

    $mobileHtmlTop .= '</div></div>';

    $mobileHtmlBottom = '<div class="swiper swiper--mobile"><div class="swiper-pagination"></div><div class="swiper-wrapper">';

    foreach (array_chunk($slides, ceil(count($slides) / 2))[1] as $slide) {
        $mobileHtmlBottom .= '
            <div class="swiper-slide">
                <a href="/portfolio/' . $slide . '/" class="portfolio__slider-link">
                    <img class="portfolio__slider-img" src="/assets/cases/' . $slide . '.png">
                </a>
            </div>';
    }

    $mobileHtmlBottom .= '</div></div>';

    $html .= $desktopHtml;
    $html .= $mobileHtmlTop;
    $html .= $mobileHtmlBottom;

    return $html;
}

?>