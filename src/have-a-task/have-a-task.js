const axios = require('axios');
const haveTask = Array.from(document.querySelectorAll('.have-a-task'));

haveTask.forEach(($haveTask) => {
    haveTaskSend($haveTask);
});

function haveTaskSend($wrapper) {
    const $button = $wrapper.querySelector('.have-a-task__form-button');

    $button.addEventListener('click', () => {
        axios.defaults.headers.common['Content-Type'] = 'application/json';
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

        axios.post('/send.php', {
            answers: 'answers!answers'
        }).then((response) => {
            console.log(response);
        }).catch((error) => {
            console.log(error);
        });

    });

}