import svg4everybody from 'svg4everybody';
import LazyLoad from 'vanilla-lazyload';
import Nav from '../../components/nav/nav';
import { map } from '../../components/contacts/contacts';
import { modal } from '../../components/modal/modal';
import { inputMask } from '../../components/form/form';

document.addEventListener('DOMContentLoaded', function (event) {

    svg4everybody();

    let styles = [
        'padding: 2px 9px',
        'background: #2948ff',
        'color: #fff',
        'line-height: 1.56',
        'font-size: 16px',
    ].join('');

    console.log('%c Developed by igor gorlov https://igorlov.ru', styles);

    /*
        Lazyload images
    */

    let lazyLoadInstance = new LazyLoad({
        elements_selector: '.lazy',
        threshold: 0,
        // load_delay: 300,
        use_native: true
    });

    if (lazyLoadInstance) {
        lazyLoadInstance.update();
    }

    /*
        Nav
    */

    let nav = new Nav();

    /*
        Map
    */

    // let mapSelector = document.querySelector('.map');

    // if (mapSelector) {
    map();
    // }

    /*
        Modal
    */

    let modalSelector = document.querySelector('.modal');

    if (modalSelector) {
        modal();
    }

    /*
        Phone mask
    */

    inputMask();

});
