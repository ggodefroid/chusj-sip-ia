<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="{{asset('js/jquery.cycle.all.js')}}"></script>
    <script type="text/javascript" src=" {{asset('js/script.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <title>SIP-IA - @yield('titre')</title>
</head>
<body>
    @include('incs.navbar')

    <div class="container justify-content-center mt-3">
        @include('incs.flash')
    </div>
 
    @yield('content')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://kit.fontawesome.com/aa1bfd926c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>