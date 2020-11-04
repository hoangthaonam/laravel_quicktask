<html lang="en">
    <head>
        <title>{{ trans('layout_title') }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" 
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
            crossorigin="anonymous">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class ="row">
            <nav class="navbar navbar-default container-fluid">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./">{{ trans('task') }}</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="">{{ trans('home') }}</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=""><span class="glyphicon glyphicon-user"></span> {{ trans('signup') }}</a></li>
                        <li><a href=""><span class="glyphicon glyphicon-log-in"></span> {{ trans('login') }}</a></li>                      
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">{{ trans('language') }}
                                <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                  <li><a href="{{route('task.change-language',["language"=>"en"])}}">English</a></li>
                                  <li><a href="{{route('task.change-language',["language"=>"vi"])}}">Vietnamese</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row">
            @yield('content')
        </div>
    </body>
</html>
