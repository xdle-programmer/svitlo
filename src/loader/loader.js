import {animationStart} from "../animation/animation";
import {animation} from "../animation/animation";

const axios = require('axios');

const $wrapper = document.querySelector('.loader');
const $animation = document.querySelector('.animation');

if ($wrapper) {
    loadIntro();
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

                    console.log(progress);

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

    function startVideo() {
        animationStart($animation);
    }
}

