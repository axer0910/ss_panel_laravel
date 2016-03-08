@extends('auth.auth')

@section('contents')
    <body class="bg-color center-wrapper">
    <div class="center-content">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <section class="panel panel-default">
                    <header class="panel-heading">注册</header>
                    <div class="bg-white pd-md">
                        <form method="POST" action="{{ url('/auth/register') }}" >
                            <h6>
                                <strong>⭐专偷金坷垃daze</strong></h6>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" class="form-control mg-b-sm" name="name" placeholder="选择用户名" autofocus>
                            <input type="text" class="form-control mg-b-sm" name="email" placeholder="邮箱地址">
                            <input type="password" class="form-control mg-b-sm" name="password" placeholder="密码">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="确认密码">
                            <div id="msg-error">
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
                            <label class="checkbox pull-left ">
                                <input type="checkbox" value="remember-me" id="chk">我同意
                                MarisaGo<a href="tos.php">使用条款</a>
                            </label>
                            <button class="btn btn-primary btn-block" type="submit" id="reg">注册</button>
                            <p class="center-block mg-t mg-b text-center">已有账号?</p>
                            <a class="btn btn-primary btn-block mg-b-sm" href="{{url('/auth/login')}}">登陆</a>
                            </form>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <!-- jQuery 2.1.3 -->
    <script src="{{asset('/asset/js/jQuery.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#chk").click(function(){
                if($("#chk").attr('checked')==undefined){
                    $("#chk").attr("checked",true);
                }
                else{
                    $("#chk").removeAttr("checked");
                }
            });

            $("#reg").click(function(){
                if($("#chk").attr('checked')==undefined){
                    alert("请先同意用户条款");
                    location.href='{{url('/auth/register')}}}';
                }
                else{

                }

            })
        })
    </script>
    </body>

@endsection
