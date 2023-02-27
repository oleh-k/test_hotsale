<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/js/users.js')
</head>

<body class="antialiased">
    <div class="container">

        <div class="row">
            <div id="alert" class="form-group show" class="collapse multi-collapse">
                <a href="/" class=""><< Go to main</a>
            </div>
        </div>

        <table id="users" class="table">
            <tbody></tbody>
        </table>


    </div>
</body>

</html>