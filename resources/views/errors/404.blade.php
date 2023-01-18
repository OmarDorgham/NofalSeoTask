<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 | Page Not Found</title>

    <!-- Scripts -->
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"
            integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
          integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
        .content {
            width: 50%;
            height: 100px;
            position: absolute; /*Can also be `fixed`*/
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            /*Solves a problem in which the content is being cut when the div is smaller than its' wrapper:*/
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
        }
    </style>
</head>
<body>

<div class="min-vh-100">
    <div class=" text-secondary  align-content-center">
        <div class="content text-center h1">
            {{strtoupper('This is the custom 404 error page.')}}<br>
            {{'404 | Page Not Found'}}
        </div>
    </div>
</div>
</body>
</html>
