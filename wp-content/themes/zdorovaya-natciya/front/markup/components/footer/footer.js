function footerNavToggle() {

    const $footerContainer = document.querySelector('.footer__container');
    const $items = $footerContainer.querySelectorAll('.footer__col_nav');

    for (var i = 0; i < $items.length; i++) {
        $items[i].addEventListener('click', function (e) {
            var highlight = e.target;

            // trying to achieve this
            this.classList.add('footer__col_nav_active');
            addClassSiblings.bind(this, 'footer__col_nav_active')();
        });
    }

    function addClassSiblings(classNames) {
        var cs = this.nextElementSibling;
        while (cs) {
            cs.classList.remove(classNames);
            cs = cs.nextElementSibling;
        }

        cs = this.previousElementSibling;
        while (cs) {
            cs.classList.remove(classNames);
            cs = cs.previousElementSibling;
        }
    }

}

export default footerNavToggle;
