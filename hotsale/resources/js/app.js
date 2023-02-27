import './bootstrap';

import '../sass/app.scss'

import * as bootstrap from 'bootstrap'

$(document).ready(function () {
    setTimeout(() => {
        $('#alert').collapse('hide');
    }, 1000);
});