import './bootstrap';

import '../sass/app.scss'

import * as bootstrap from 'bootstrap'

$(document).ready(function () {
    setTimeout(() => {
        $('#alert').collapse('hide');
    }, 1000);

    $('#my_form').submit(function (e) {
        e.preventDefault();

        let name = $('#name').val();
        let lastName = $('#lastName').val();
        let email = $('#email').val();
        let pass1 = $('#pass1').val();
        let pass2 = $('#pass2').val();

        let data = {
            name: name
            , lastName: lastName
            , email: email
            , password: pass1
            , password_confirmation: pass2
        }

        $.post("/api/users", data)
            .done(function (res) {

                console.log(res);

                if (res.id > 0) {

                    $('#my_form').collapse('hide')

                    $('.alert')
                        .text('success')
                        .removeClass()
                        .addClass('alert alert-success');
                    $('#alert').collapse('show');

                }

            })
            .fail(function (res) {
                var o = JSON.parse(res.responseText);
                console.log(o);

                $('.alert')
                    .text(JSON.stringify(o.fails))
                    .removeClass()
                    .addClass('alert alert-danger');
                $('#alert').collapse('show');

            });
    })

});