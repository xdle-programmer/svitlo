class Modals {

    constructor(options) {
        this.init();
    }

    init() {
        this.#setup();
    }

    static modalClass = 'modal';
    static modalOpenClass = 'modal--open';
    static modalShowClass = 'modal--show';
    static modalCloseCurrentClass = 'modal--close-current';

    #setup() {
        this.$modals = Array.from(document.getElementsByClassName(Modals.modalClass));
        this.modalsArray = new Map();
        this.$modals.forEach(($modal) => {
            let closeAttr = 'data-modal-close';

            if ($modal.classList.contains(Modals.modalCloseCurrentClass)) {
                closeAttr = 'data-modal-close-current';
            }

            let background = `<div class="modal__background" ${closeAttr}></div>`;
            $modal.insertAdjacentHTML('afterbegin', background);
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
        this.modalsArray.get(id).classList.add(Modals.modalOpenClass);
        this.modalsArray.get(id).classList.add(Modals.modalShowClass);
        document.querySelector('html').classList.add('open-modal')
    }

    closeCurrent($modal) {
        $modal.classList.remove(Modals.modalOpenClass);
        $modal.classList.remove(Modals.modalShowClass);
        $modal.dispatchEvent(new Event('close', {bubbles: true}));
    }

    close() {

        this.$modals.forEach(($modal) => {
            this.closeCurrent($modal);
        });

        document.querySelector('html').classList.remove('open-modal')
    }

}

window.modals = new Modals();
