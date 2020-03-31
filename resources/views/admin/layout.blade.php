<!DOCTYPE html>
<html lang="es">
<head>
    <title>Dashboard FIMe</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="manifest" href="{{asset('manifest.json')}}">
    
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('bootadmin/css/bootadmin.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="{{ asset('bootadmin/css/fontawesome-all.min.css') }}">
    <!--===============================================================================================-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha256-nbyata2PJRjImhByQzik2ot6gSHSU4Cqdz5bNYL2zcU=" crossorigin="anonymous" />
    <!--===============================================================================================-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" integrity="sha256-zFnNbsU+u3l0K+MaY92RvJI6AdAVAxK3/QrBApHvlH8=" crossorigin="anonymous" />
    <!--===============================================================================================-->
    @yield('stylesheet')
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand navbar-dark bg-primary">
        @include('admin.includes.navbar')
    </nav>

    <div class="d-flex">
        <div class="sidebar sidebar-dark bg-dark">
            @include('admin.includes.sidebar')
        </div>

        <div class="content p-4">
            @include('admin.includes.flashmessage')
            @yield('content')
        </div>
    </div>

    <!---------------------------
    // SECCION SCRIPT.
    ---------------------------->
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!--===============================================================================================-->
    <script src="{{ mix('js/app.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('vendors/ckeditor/ckeditor.js') }}" charset="utf-8"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('bootadmin/js/bootadmin.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <!--===============================================================================================-->
   
    @yield('script')

</body>
</html>