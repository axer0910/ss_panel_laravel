@extends('auth.auth')
@section('contents')
    <body class="bg-color center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <section class="panel panel-default">
                    <header class="panel-heading">登录</header>
                    <div class="bg-white user pd-md">
                        <h6>
                            <strong>从这里开始 </strong>MarisaGo</h6>
                        <form role="form" method="POST" action="{{ url('/auth/login') }}" >
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="form-control mg-b-sm" name="email" placeholder="用户名" autofocus required>
                            <input type="password" name="password" class="form-control" placeholder="密码" required>
                            <div id="error center-block">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger fade in">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <label class="checkbox pull-left">
                                <input type="checkbox" name="remember">记住我
                            </label>
                            <div class="text-right mg-b-sm mg-t-sm">
                                <a href="resetpwd.html">忘记密码？</a>
                            </div>
                            <button class="btn btn-info btn-block" type="submit" id="login">登陆</button>
                        </form>
                        <p class="center-block mg-t mg-b text-right">没有账号？
                            <a href="{{url('/auth/register')}}">点击注册</a>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </body>
@endsection
