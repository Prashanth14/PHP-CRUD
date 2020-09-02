<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'CRUD operation using Laravel')</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container well">
        <h2 class="text-center" style="margin-top: 5px; padding-top: 0;">CRUD operation on MySQL using Laravel</h2>
        <h3 class="text-center" style="margin-top: 5px; padding-top: 0;">Prashanth Reddy Kadire</h3>
    </div>

    <div class="container">
        @yield('mainContent')
    </div>

    <div style="position: fixed; bottom: 10px; right: 10px; color: green;">
        <strong>
           Prashanth Reddy Kadire
        </strong>
    </div>
</body>
</html>