// import JustValidate from 'just-validate';
import Inputmask from "inputmask";

export function inputMask() {

    let telSelector = document.querySelector('.form__field_phone input');

    if (telSelector) {
        const inputMask = new Inputmask('+7 (999) 999-99-99');
        inputMask.mask(telSelector);
    }
}
