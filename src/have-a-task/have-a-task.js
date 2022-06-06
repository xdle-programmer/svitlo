const axios = require('axios');
const haveTask = Array.from(document.querySelectorAll('.have-a-task'));

haveTask.forEach(($haveTask) => {
    haveTaskSend($haveTask);
});

function haveTaskSend($wrapper) {

    const $button = $wrapper.querySelector('.have-a-task__form-button');
    const $form = $wrapper.querySelector('.form-check');
    const id = $form.id;

    const $name = $wrapper.querySelector('[data-form-name="name"]');
    const $phone = $wrapper.querySelector('[data-form-name="phone"]');
    const $mail = $wrapper.querySelector('[data-form-name="mail"]');
    const $message = $wrapper.querySelector('[data-form-name="message"]');

    $button.addEventListener('click', () => {

        if ($button.classList.contains('form-check__button--disabled')) {
            return;
        }

        let config = {
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            }
        };

        let params = new URLSearchParams();

        const name = `Name: ${$name.value}\n\n`;
        const phone = `Phone: ${$phone.value}\n\n`;
        const mail = `Mail: ${$mail.value}\n\n`;
        const message = `Message: ${$message.value}\n\n`;

        params.append('lead', name + phone + mail + message);

        $name.value = '';
        $phone.value = '';
        $mail.value = '';
        $message.value = '';
        $name.dispatchEvent(new Event('input'));
        $phone.dispatchEvent(new Event('input'));
        $mail.dispatchEvent(new Event('input'));
        $message.dispatchEvent(new Event('input'));
        modals.open('modal-thank-you');
        window.formsArray.get(id).refresh();

        axios.post('/send.php', params, config).then((response) => {
            console.log(response);
        }).catch((error) => {
            console.log(error);
        });

    });

}