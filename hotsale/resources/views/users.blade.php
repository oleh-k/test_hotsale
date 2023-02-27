<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @vite('resources/js/users.js')
</head>

<body class="antialiased">
    <div class="container">

        <table id="users" class="table">
            <tbody></tbody>
        </table>


    </div>
</body>

</html>