import {animationStart} from "../animation/animation";
import {animation} from "../animation/animation";

const axios = require('axios');

const $wrapper = document.querySelector('.loader');
const $animation = document.querySelector('.animation');

if ($wrapper) {


    if (document.querySelector('body').classList.contains('body-case')) {
        loadImages();
    } else {
        loadIntro();
    }
} else {
    startVideo();

}

function loadIntro() {
    const $video = document.querySelector('.intro__video-item');
    const $loaderText = document.querySelector('.loader__progress');
    const $loaderLine = document.querySelector('.loader__line-progress');

    setLoadProgress();

    // Функция рекурсии алгоритмического скролла
    function setLoadProgress() {

        axios.get('/assets/video/intro-video.mp4',
            {
                headers:
                    {
                        Accept: 'video/mp4;charset=UTF-8'
                    },
                responseType: 'blob',
                onDownloadProgress: (progressEvent) => {
                    let progress = parseInt(progressEvent.loaded / (progressEvent.total / 100));
                    $loaderText.innerText = '';
                    $loaderText.innerText = `${progress}%`;
                    $loaderLine.style.transform = `scaleX(0${progress / 100})`;
                },
            }
        )
            .then((response) => {
                const videoBlob = (window.URL || window.webkitURL).createObjectURL(new Blob([response.data], {type: "video/mp4"}));
                $video.setAttribute('src', videoBlob);
                startVideo();
            });
    }
}

function loadImages() {
    const $loaderText = document.querySelector('.loader__progress');
    const $loaderLine = document.querySelector('.loader__line-progress');
    const all = Array.from(document.querySelectorAll(`[data-loader-img]`)).length;


    const checkImagesLoad = setInterval(() => {
        let loaded = window.loadState.length;

        if (loaded < all) {
            let progress = parseInt(loaded / (all / 100));
            $loaderText.innerText = `${progress}%`;
            $loaderLine.style.transform = `scaleX(0${progress / 100})`;
        } else {
            startVideo();
            clearInterval(checkImagesLoad);
        }

    }, 50);


}

function startVideo() {
    animationStart($animation);
}

