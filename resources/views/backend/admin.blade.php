<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Need-for-home  @yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

        <style>
            body {
                font-family: Open Sans;
            }

            .clear { clear: both;}
            .topNav {  }

        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                
                <a class="navbar-brand" href="#">
                    N4H.org
                </a>

                <ul class="nav navbar-nav">
                    <li><a href="/backend/">Начало</a></li>
                    <li><a href="/backend/pages/list">Страници</a></li>
                    <li><a href="/">Любимци</a></li>
                </ul>
            </div>
        </nav>
        <div class="clear"></div>
        
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>