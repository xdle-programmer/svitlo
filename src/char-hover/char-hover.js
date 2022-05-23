const charHoverAll = Array.from(document.querySelectorAll('.char-hover'));

charHoverAll.forEach(($charHover) => {
    charHover($charHover);
});

function charHover($wrapper) {
    let items = $wrapper.querySelectorAll('.char-hover__item');

    items.forEach(($item) => {
        const text = $item.innerHTML.trim();

        $item.innerHTML = '';

        let $itemInner = document.createElement('div',);
        $itemInner.classList.add('char-hover__item-inner');

        let $itemInnerHover = document.createElement('div',);
        $itemInnerHover.classList.add('char-hover__item-inner-hover');

        for (let index = 0; index < text.length; index++) {
            let char = text[index];
            let $itemInnerChar = document.createElement('div');
            $itemInnerChar.classList.add('char-hover__item-inner-char');
            $itemInnerChar.innerText = char;

            if (char === ' ') {
                $itemInnerChar.innerText = '\u2009';
            }

            $itemInnerChar.style.cssText = `--char-index:${text.length - index}`;
            $itemInner.insertAdjacentElement('beforeend', $itemInnerChar);
        }

        for (let index = 0; index < text.length; index++) {
            let char = text[index];
            let $itemInnerCharHover = document.createElement('div');
            $itemInnerCharHover.classList.add('char-hover__item-inner-char-hover');
            $itemInnerCharHover.innerText = char;

            if (char === ' ') {
                $itemInnerCharHover.innerText = '\u2009';
            }

            $itemInnerCharHover.style.cssText = `--char-index:${text.length - index}`;
            $itemInnerHover.insertAdjacentElement('beforeend', $itemInnerCharHover);
        }

        $item.insertAdjacentElement('beforeend', $itemInner);
        $item.insertAdjacentElement('beforeend', $itemInnerHover);
    });


}