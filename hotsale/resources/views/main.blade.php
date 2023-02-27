<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    @vite('resources/js/app.js')
</head>

<body class="antialiased">
    <div class="container">

        <div class="row" style="height: 100px;">
            <div id="alert" class="form-group show" class="collapse multi-collapse">
                <div class="alert alert-primary">
                    Loading...
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                asdadas
            </div>
        </div>





    </div>
</body>

</html>