<!doctype html>
<html lang="{!! LaravelLocalization::getCurrentLocale() !!}">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="{{ elixir('css/bootstrap.min.css', 'themes/carwash') }}" rel="stylesheet" />

    <script src="{{ elixir('js/jquery.min.js', 'themes/carwash') }}"></script>
    <script src="{{ elixir('js/foundation.min.js', 'themes/carwash') }}"></script>
    <script src="{{ elixir('js/semantic.min.js', 'themes/carwash') }}"></script>

</head>
<body>
    <header>
        <nav class="navbar navbar-default" style="margin-bottom: 0;">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
        </nav>
    </header>

    @include('pages/home/slider')

    <section class="content">
        <div class="container">
            test
        </div>
    </section>

    <footer>
        footer
    </footer>

@stack('scripts')
@stack('js_inline')

</body>
</html>
