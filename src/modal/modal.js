class Modals {

    constructor(options) {
        this.init();
        this.transitionDuration = 500;
    }

    init() {
        this.setup();
    }

    static modalClass = 'modal';
    static modalOpenClass = 'modal--open';
    static modalShowClass = 'modal--show';
    static modalCloseCurrentClass = 'modal--close-current';

    setup() {
        this.$modals = Array.from(document.getElementsByClassName(Modals.modalClass));
        this.modalsArray = new Map();
        this.$modals.forEach(($modal) => {
            let closeAttr = 'data-modal-close';

            if ($modal.classList.contains(Modals.modalCloseCurrentClass)) {
                closeAttr = 'data-modal-close-current';
            }

            this.transitionDuration = parseFloat(window.getComputedStyle($modal.querySelector(`.${Modals.modalClass}__background`)).transitionDuration) * 1000;

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
        this.closeCurrent(event.target.closest(`.${Modals.modalClass}`));
    }

    open(id) {
        document.querySelector('html').classList.add('open-modal');

        this.modalsArray.get(id).classList.add(Modals.modalOpenClass);

        setTimeout(() => {
            this.modalsArray.get(id).classList.add(Modals.modalShowClass);

            if (this.modalsArray.get(id).querySelector('.modal__youtube-wrapper')) {
                const $clone = document.importNode(this.modalsArray.get(id).querySelector('.modal__youtube-template').content, true);

                this.modalsArray.get(id).querySelector('.modal__youtube').appendChild($clone);
            }
        }, this.transitionDuration);
    }

    closeCurrent($modal) {
        $modal.classList.remove(Modals.modalShowClass);

        if ($modal.querySelector('.modal__youtube-wrapper')) {
            $modal.querySelector('.modal__youtube').innerHTML = '';
        }

        setTimeout(() => {
            $modal.classList.remove(Modals.modalOpenClass);
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
