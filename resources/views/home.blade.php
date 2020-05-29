<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bank App</title>
    <link rel="stylesheet" href="dist/css/main.css">
    <link rel="stylesheet" href="dist/css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="#">Bank App</a>
               
        </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
        <div class="jumbotron">
            <h1>Bank App</h1>
            <p>Store and organise your Bank accounts in bank app and Bank web app makes this easier than ever</p>
            <p>
                <a class="btn btn-lg btn-primary" href="{{route('bankaccounts')}}" role="button">Your Bank Accounts</a>
            </p>
        </div>
    </div>
    <!-- /container -->

    <script src="dist/js/jquery3.min.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</body>

</html>
