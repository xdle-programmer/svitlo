class Modals {

    constructor(options) {
        this.transitionDuration = 500;
        this.modalClass = 'modal';
        this.modalOpenClass = 'modal--open';
        this.modalShowClass = 'modal--show';
        this.modalCloseCurrentClass = 'modal--close-current';

        this.init();
    }

    init() {
        this.setup();
    }


    setup() {
        this.$modals = Array.from(document.getElementsByClassName(this.modalClass));

        console.log(this.modalClass);
        console.log(this.$modals);

        this.modalsArray = new Map();
        this.$modals.forEach(($modal) => {
            let closeAttr = 'data-modal-close';

            if ($modal.classList.contains(this.modalCloseCurrentClass)) {
                closeAttr = 'data-modal-close-current';
            }

            this.transitionDuration = parseFloat(window.getComputedStyle($modal.querySelector(`.${this.modalClass}__background`)).transitionDuration) * 1000;

            this.modalsArray.set($modal.id, $modal);
        });

        this.$openButtons = document.querySelectorAll('[data-modal-open]');
        this.$closeButtons = document.querySelectorAll('[data-modal-close]');
        this.$closeCurrentButtons = document.querySelectorAll('[data-modal-close-current]');

        this.clickOpenHandler = this.clickOpenHandler.bind(this);
        this.clickCloseHandler = this.clickCloseHandler.bind(this);
        this.clickCloseCurrentHandler = this.clickCloseCurrentHandler.bind(this);

        this.$openButtons.forEach(($button) => {
            $button.addEventListener('click', this.clickOpenHandler);
        });

        this.$closeButtons.forEach(($button) => {
            $button.addEventListener('click', this.clickCloseHandler);
        });

        this.$closeCurrentButtons.forEach(($button) => {
            $button.addEventListener('click', this.clickCloseCurrentHandler);
        });
    }

    clickOpenHandler(event) {


        if (event.target.dataset.modalOpen) {
            this.open(event.target.dataset.modalOpen);
        } else {
            this.open(event.target.closest('[data-modal-open]').dataset.modalOpen);
        }
    }

    clickCloseHandler() {
        this.close();
    }

    clickCloseCurrentHandler(event) {
        this.closeCurrent(event.target.closest(`.${this.modalClass}`));
    }

    open(id) {
        document.querySelector('html').classList.add('open-modal');

        console.log(this.modalsArray);
        console.log(this.modalOpenClass);

        this.modalsArray.get(id).classList.add(this.modalOpenClass);

        setTimeout(() => {
            this.modalsArray.get(id).classList.add(this.modalShowClass);

            if (this.modalsArray.get(id).querySelector('.modal__youtube-wrapper')) {
                const $clone = document.importNode(this.modalsArray.get(id).querySelector('.modal__youtube-template').content, true);

                this.modalsArray.get(id).querySelector('.modal__youtube').appendChild($clone);
            }
        }, this.transitionDuration);
    }

    closeCurrent($modal) {
        $modal.classList.remove(this.modalShowClass);

        if ($modal.querySelector('.modal__youtube-wrapper')) {
            $modal.querySelector('.modal__youtube').innerHTML = '';
        }

        setTimeout(() => {
            $modal.classList.remove(this.modalOpenClass);
        }, this.transitionDuration);


        $modal.dispatchEvent(new Event('close', {bubbles: true}));
    }

    close() {

        this.$modals.forEach(($modal) => {
            this.closeCurrent($modal);
        });

        document.querySelector('html').classList.remove('open-modal');
    }

}

window.modals = new Modals();
