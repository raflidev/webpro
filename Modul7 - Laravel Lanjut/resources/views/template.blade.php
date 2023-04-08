<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="{{ asset('assets/jquery.js') }}"></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body style="width:95%">
    @auth
    <div class="row justify-content-end" style="margin-top:2%">
        <div class="col-3">
        {{ Auth::user()->name }}
        <a href="/logout" class="btn btn-warning">Logout</a>
        </div>
    </div>
    @endauth
    <div class="row justify-content-center" style="margin-top:13%">
    @yield('content')
    </div>
</body>
</html>
