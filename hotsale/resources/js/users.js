import './bootstrap';

import '../sass/app.scss'
import jQuery from 'jquery';
window.$ = jQuery;

import * as bootstrap from 'bootstrap'

$(document).ready(function () {

    $.get("/api/users")
        .done(function (res) {

            console.log(res);

            var table = $('#users > tbody');
            var row = $('<tr></tr>');
            table.append(row);
            var td = $('<th></th>').text('name');
            row.append(td);
            td = $('<th></th>').text('email');
            row.append(td);

            res.forEach(element => {
                console.log(element)
                var row = $('<tr></tr>');
                var td = $('<td></td>').text(element.name);
                table.append(row);
                row.append(td);

                td = $('<td></td>').text(element.email);
                row.append(td);
            });
        });

});