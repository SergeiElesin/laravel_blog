<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Login Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Theme style -->
    {{--    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">--}}
    <link rel="stylesheet" href="{{asset('public/assets/admin/css/admin.css')}}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <b>Login</b>
    </div>

    <div class="card">
        <div class="card-body register-card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif


            <p class="login-box-msg">Register a new membership</p>
            <form action="{{route('login')}}" method="post">
                @csrf


                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="row">

                </div>
                <!-- /.col -->
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
            </form>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('public/assets/admin/js/admin.js')}}"></script>
</body>
</html>


