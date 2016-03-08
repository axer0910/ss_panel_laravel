@extends('auth.auth')

@section('contents')
    <body class="bg-color center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <section class="panel panel-default">
                    <header class="panel-heading">找回密码</header>
                    <div class="bg-white user pd-md">
                        <h6>
                            <strong>找回丢失的密码</strong></h6>
                        <form role="form" method="POST" action="{{url('/password/email')}}">
                            <div id="check">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text" name="email" class="form-control mg-b-sm " placeholder="输入注册的邮箱" autofocus="" required/>
                                <button type="submit" id="do" class="btn btn-block btn-info">发送找回邮件</button>
                            </div>
                            <div id="error">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </form>
                        <p class="center-block mg-t mg-b text-right">又记得密码了？
                            <a href="{{url('/auth/login')}}">点击登陆</a>
                        </p>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#do').click(function(){
                alert("请在邮箱中确认找回密码的邮件！");
            });
        });
    </script>
    </body>
@endsection
