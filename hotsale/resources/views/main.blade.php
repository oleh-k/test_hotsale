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
                <a href="/users">Go to users >></a>
            </div>
        </div>

        <div class="row">
            <div class="form-group">

                <form id="my_form" class="collapse multi-collapse show">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last name</label>
                        <input id="lastName" class="form-control" type="text" placeholder="Last name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" id="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="pass1">Password</label>
                        <input type="password" class="form-control" id="pass1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="pass2">Confirm Password</label>
                        <input type="password" class="form-control" id="pass2" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary" id="send_data">Submit</button>
                </form>

            </div>
        </div>





    </div>
</body>

</html>