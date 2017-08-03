<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>
    <body>
        <i class="fa fa-address-book" aria-hidden="true"></i>
        <nav>
            <ul>
                <li>Menu</li>
            </ul>
        </nav>
        <div class="container">
            <h1>Bootstrap CSS</h1>
            <span class="glyphicon glyphicon-trash"></span>
            <div class="alert alert-warning" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                <strong>Holy guacamole!</strong> Best check yo self, you're not looking too good.
            </div>
        </div>
        <footer>Rodapé</footer>
        <script type="text/javascript" src="{{asset('/js/scripts.js')}}"></script>
        <!--<script>
            $(document).ready(function(){
               alert('Olá Mundo!');
            });
        </script>-->
    </body>
</html>
