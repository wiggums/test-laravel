<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{asset("/assets/css/bootstrap.css")}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
                background-image: url("/assets/img/salvia.jpg");
            }
        </style>
    </head>
    <body>
        <form method="POST" action="{{route("submit-login")}}">
            @csrf
            <div class="container">
                <div class="d-flex align-items-center justify-content-center" style="height: 500px;">
                    <div class="p-2 bd-highlight">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email address" />
                    </div>
                    <div class="p-2 bd-highlight">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" />
                    </div>
                </div>
            </div>
        </form>
        {{--
        <div class="d-flex align-items-center justify-content-center" style="height: 500px;">
            <div class="p-2 bd-highlight">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email address" />
            </div>
            <div class="p-2 bd-highlight">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
            </div>
        </div>
        --}}
        <script src="{{asset("/assets/js/bootstrap.js")}}"></script>
    </body>
</html>
