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
        .done(function(res) {
            var o = JSON.parse(res);
            console.log(o);
        })
        .fail(function(res) {
            var o = JSON.parse(res.responseText);
            console.log(o);

        });
    })

});