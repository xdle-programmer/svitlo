<div class="modal" id="modal-form">
    <div class="modal__content">
        <div class="modal__close" data-modal-close>
            <svg viewBox="0 0 100 100" class="modal__close-icon-hover">
                <circle cx="50" cy="50" r="48" stroke="white" stroke-width="1" fill="none"/>
            </svg>
            <svg class="modal__close-icon" viewBox="0 0 20.22 20.22">
                <polygon points="18.8 0 10.11 8.7 1.41 0 0 1.41 8.7 10.11 0 18.8 1.41 20.22 10.11 11.52 18.8 20.22 20.22 18.8 11.52 10.11 20.22 1.41 18.8 0"/>
            </svg>
        </div>

        <div class="have-a-task have-a-task--modal">
            <div class="have-a-task__block layout">

                <div class="have-a-task__title-wrapper">
                    <div class="have-a-task__title">Have a task?</div>
                </div>
                <div class="have-a-task__subtitle">We are ready to provide you with a solution</div>

                <?php require($_SERVER['DOCUMENT_ROOT'] . '/parts/form.php'); ?>

            </div>
        </div>
    </div>
</div>
