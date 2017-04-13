@extends('layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('my_style')
    <style>
        body {
            background: #F4F6F9;
        }
        .form-div {
            position: absolute;
            left: 0;
            height: 100%;
            min-height: 660px;
        }
        .background-div {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: absolute;
            right: 0;
            height: 100%;
            padding: 0;
        }
        .background-div .row {
            position: absolute;
            bottom: 0;
            right: 15px;
            left: 15px;
            background-color: rgba(0,0,0,0.5);
            padding-bottom: 10px;
        }
        .btn {
            border-radius: 0.2rem;
        }
        .btn .glyphicon {
            font-size: 3rem;
            color: #fff;
        }
        .full-width {
            width: 100%;
        }
        .input-group {
            margin:15px 0;
        }
        .text-forgot-pass {
            font-size:140%;
        }
        .form-wrapper {
            background-color: #fff;
            margin: 50px auto;
            padding: 0;
            padding-bottom: 25px;
        }
        .container-fluid {
            margin: 0!important;
        }
        footer {
            width: 100%;
            margin-bottom: 20px;
            height: 40px;
            font-size: 120%;
            padding-top: 8px;
        }
        .footer {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }
        label {
            margin-bottom:0px;
            margin-top:15px;
        }
        .my-toggle {
            background: transparent;
            border: 0;
            border-radius: 0.25em;
            color: #888;
            cursor: pointer;
            font-size: 0.8em;
            font-weight: bold;
            margin-right: 0.5em;
            padding: 0.5em;
            margin-top:10px!important;
            text-transform: uppercase;
            -moz-appearance: none;
            -webkit-appearance: none;
            z-index: 3;
        }
    </style>


@endsection

@section('content')
<body >
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-1 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0 text-center form-div">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/home') }}"><b>Conal</b>gi</a>


                <img scr="/img/backgrounds/conalgi.gif" height="42" width="42" />


            </div><!-- /.login-logo -->

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="login-box-body">
        <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>
        <form action="{{ url('/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="{{ trans('adminlte_lang::message.password') }}" name="password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('adminlte_lang::message.remember') }}
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('adminlte_lang::message.buttonsign') }}</button>
                </div><!-- /.col -->
            </div>
        </form>

        <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
        <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

    </div><!-- /.login-box-body -->

    </div><!-- /.login-box -->
        </div>
        <div class="col-lg-6 hidden-md hidden-sm hidden-xs background-div"
             style='background-image: url("/img/backgrounds/42.jpg");'>
        </div>
    </div>
</div>
    @include('layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
