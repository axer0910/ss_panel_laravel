@extends('panel.panel')
@section('contents')
        <!--After the header-->
<!-- main content -->
<section class="main-content">
    <!-- content wrapper -->
    <div class="content-wrap">
        <div class="row mg-b">
            <div class="col-xs-6">
                <h3 class="no-margin">仪表盘</h3>
                <small>欢迎回来 , {{$info['userinfo']['username']}}</small>
            </div>
            <div class="col-xs-6 text-right">
                <a href="javascript:;" class="fa fa-flash pull-right pd-sm toggle-sidebar" data-toggle="off-canvas" data-move="rtl">
                    <span class="badge bg-danger animated flash"></span>
                </a>
            </div>
            <div class="col-xs-6 text-right hidden-md hidden-lg hidden-sm"><a href="../d/shadowsocks.apk">android客户端下载</a></div>
        </div>
        <div class = "row">
            <div class = "col-md-8">
                <div class="row">

                    <div class="col-md-8 ">
                        <div class="panel-body">
                            <h4> {{$info['userinfo']['username']}}
                            </h4>
                            <p class="mg-t-xs">
                                <span class="label label-primary" id="box-plan">{{$info['userinfo']['plan']}}</span>
                                <span class="label label-info" id="box-all_transfer">可用{{$info['userinfo']['transfer']}}GB</span>
                                <span class="label label-danger">有效期至<span id="box-exp_date">{{$info['userinfo']['exp_date']}}</span></span>
                            </p>
                            <i class="fa fa-circle text-primary mg-r-xs"></i>请在合法的范围内使用ShadowSocks服务，遵守相关法律法规。
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <section class="panel panel-success dashboard-chart">
                            <div class="panel-heading">
                                <small class="pull-left text-white">
                                    <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="javascript:;"></a>
                                    <a class="fa fa-refresh panel-refresh pd-r-xs" href="javascript:;"></a>
                                    &nbsp;&nbsp;服务器列表
                                </small>
                            </div>
                            <div class="panel-body no-padding">

                                <div class="col-md-12">
                                    <section class="panel">
                                        <br/>
                                        <div class="col-md-12">
                                            <div class="panel-body no-padding">
                                                <table class="table table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th class="col-md-2 pd-l-lg">
                                                            <span class="pd-l-sm"></span>服务器名称</th>
                                                        <th class="col-md-1">编号</th>
                                                        <th class="col-md-2">类型</th>
                                                        <th class="col-md-1">状态</th>
                                                        <th class="col-md-1">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($info['nodelist'] as $n)
                                                        <tr>
                                                            <td>{{$n->node_name}}</td>
                                                            <td>#{{$n->id}}</td>
                                                            <td>{{$n->node_info}}</td>
                                                            @if($n->node_status == 1)
                                                                <td>畅通</td>
                                                            @else
                                                                <td>暂停使用</td>
                                                            @endif
                                                            <td><button type="button" class="btn btn-sm btn-info" onclick="Switch({{$n->id}})">切换</button></td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="panel-footer text-center">
                                <div class="row text-center">
                                    <div class="col-xs-6 col-sm-3">
                                        <i class="fa fa-circle text-default"></i>
                                        <span class="h4 mg-r-xs" id="KeepAlive_now">loading...</span>
                                        <small class="text-muted">服务器在线人数</small>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <i class="fa fa-circle text-primary"></i>
                                        <span class="h4 mg-r-xs" id="KeepAlive_Past1H">loading...</span>
                                        <small class="text-muted" >过去一小时在线人数</small>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <span class="h4 mg-r-xs" id="KeepAlive_Past5Min">loading...</span>
                                        <small class="text-muted" >过去五分钟在线人数</small>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <span class="h4 mg-r-xs" id="now">loading...</span>
                                        <small class="text-muted">当前系统时间</small>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>



            <div class="col-md-4">

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        服务器公告
                        <small class="pull-right text-white">
                            <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="javascript:;"></a>
                            <a class="fa fa-refresh panel-refresh pd-r-xs" href="javascript:;"></a>
                            <a class="fa fa-times panel-remove" href="javascript:;"></a>
                        </small>
                    </div>
                    <div class="panel-body">
                        <p> <i class="fa fa-circle text-primary mg-r-xs"></i>站长的qq是235840046火石，使用上有问题可以加下qq具体咨询_(:з」∠)_</p>
                        <p> <i class="fa fa-circle text-primary mg-r-xs"></i>页面左下角有使用教程，可以根据自己的需求配置SS服务。</p>
                        <p> <i class="fa fa-circle text-primary mg-r-xs"></i>由于域名提供商问题，原tk结尾的ss服务器暂停使用，重新获取一下配置即可正常使用_(:з」∠)_</p>
                        <p> <i class="fa fa-circle text-primary mg-r-xs"></i>新增cisco anyconnect ，vpn全局代理模式，可用于海外游戏网络优化等，测试地址是servicejp03.marisago.com:999和servicejp01.marisago.com:999，用户名为邮箱，密码为你的SS连接密码（上方绿框内）,ios可在appstore中下载使用 </p>
                        <p> <i class="fa fa-circle text-primary mg-r-xs"></i>第一次使用可以在修改资料中将随机的连接密码改成自己方便记忆的密码方便使用_(:з」∠)_</p>

                    </div>
                </div>



                <div class="panel panel-primary">
                    <div class="panel-heading">
                        二维码
                        <small class="pull-right text-white">
                            <a class="fa fa-chevron-down panel-collapsible pd-r-xs" href="javascript:;"></a>
                            <a class="fa fa-refresh panel-refresh pd-r-xs" href="javascript:;"></a>
                            <a class="fa fa-times panel-remove" href="javascript:;"></a>
                        </small>
                    </div>
                    <div class="panel-body" id="qrcode" style="height: 285px;">
                        读取二维码中...
                    </div>
                </div>
            </div>

        </div>

        <!-- /content wrapper -->
</section>
<!-- /main content -->
<!-- Validate success Modal -->

<div class="modal fade" id="need-validatemail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">需要验证邮箱</h4>
            </div>
            <div class="modal-body" align="center">
                <i class="fa fa-envelope fa-2x"></i>
                <h4>验证Email地址来使用MarisaGo！</h4>
                <p>验证了邮箱才能科学上网哦</p>
                <a class="btn btn-warning btn-lg mg-t-md"  href="./UpdateProfile.php">验证邮箱</a>

                <div class="mg-t-lg" align="center">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="pd-md">
                                <a href="javascript:;" class="pull-left mg-r-md">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle fa-stack-2x text-info"></i>
                                                            <i class="fa fa-anchor fa-stack-1x fa-inverse"></i>
                                                        </span>
                                </a>
                                <p class="text-left">
                                    <a href="help.php"><span class="text-success">使用方法</span></a>
                                    <small class="center-block">Tutorial</small>
                                </p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="pd-md">
                                <a href="javascript:;" class="pull-left mg-r-md">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle fa-stack-2x text-success"></i>
                                                            <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                                                        </span>
                                </a>
                                <div class="text-left">
                                    <a href="../d/shadowsocks.rar"><span class="text-success">下载客户端</span></a>
                                    <small class="center-block">Client for Windows</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6">
                            <div class="pd-md">
                                <a href="javascript:;" class="pull-left mg-r-md">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle fa-stack-2x text-color"></i>
                                                            <i class="fa fa-download fa-stack-1x fa-inverse"></i>
                                                        </span>
                                </a>
                                <div class="text-left">
                                    <a href="../d/shadowsocks.apk"><span class="text-success">下载客户端</span></a>
                                    <small class="center-block">Client for Android</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="pd-md">
                                <a href="javascript:;" class="pull-left mg-r-md">
                                                        <span class="fa-stack fa-lg">
                                                            <i class="fa fa-circle fa-stack-2x text-warning"></i>
                                                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                                                        </span>
                                </a>
                                <div class="text-left">
                                    <a href="pricing.php"><span class="text-success">了解套餐</span></a>
                                    <small class="center-block">Choose your plan</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="show-ssinfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-keyboard="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">连接信息</h4><br>
                <i class="fa fa-circle text-primary mg-r-xs"></i>请在合法的范围内使用ShadowSocks服务，遵守相关法律法规。
            </div>
            <div class="modal-body">
                <table class="table no-margin">
                    <thead></thead>
                    <tbody>
                    <tr>
                        <td><strong>节点名称：</strong></td>
                        <td><span class="label label-primary" id="box-node_name"><strong>loading...</strong></span></td>
                    </tr>
                    <tr>
                        <td>服务器：</td>
                        <td><span class="label label-primary" id="box-server">loading...</span></td>
                    </tr>
                    <tr>
                        <td>端口：</td>
                        <td><span class="label label-primary" id="box-port">loading...</span></td>
                    </tr>
                    <tr>
                        <td>SS与anyconnect连接密码：</td>
                        <td><span class="label label-success" id="box-pass">loading...</span></td>
                    </tr>
                    <tr>
                        <td>加密方式</td>
                        <td><span class="label label-danger" id="box-method">loading...</span></td>
                    </tr>
                    <tr style="display: none;" >
                        <td>uid</td>
                        <td id="uid">uid</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button class="btn btn-info">关闭</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    $(document).ready(function () {
       // $('#show-ssinfo').modal('show');
    });

    function Switch(id){

        $("#qrcode").html("读取二维码中");

        $.ajax({
            type: "POST",
            url: "/panel/getSSInfo",
            dataType: "json",
            data: {
                uid: $("#uid").text(),
                node_id: id
            },
            success: function (data) {
                //document.getElementById("ShowCode").innerHTML = data.code;
                /*$('#need-validatemail').on('hidden.bs.modal', function (e) {
                    window.location = 'UpdateProfile.php';
                })*/

                if (data.msg == '1') {
                    if(data.type == 0){
                        $('#show-ssinfo').modal('show');

                    }
                    else{
                        if(data.enable == 0){
                            alert("套餐失效了，点击确定购买套餐");
                            window.location = 'pricing.php';
                        }
                        else if (data.enable == -1){
                            alert("请先验证邮箱！");
                            window.location = 'UpdateProfile.php';
                        }
                        else{
                            $("#qrcode").html("");
                           // jQuery('#qrcode').qrcode(data.ssqr);
                            $("#box-node_name").html(data.node_name);
                            $("#box-port").html(data.node_port);
                            $("#box-pass").html(data.node_passwd);
                            $("#box-plan").html(data.node_plan);
                            $("#box-server").html(data.node_server);
                            $("#box-method").html(data.node_method);
                            //pie();
                            $('#show-ssinfo').modal('show');
                        }
                    }

                }
                else if (data.msg == '-1') {
                    alert("查询node失败!");
                    $("#qrcode").html("");
                }
                else if (data.msg == '-2') {
                    $("#qrcode").html("输入正确的使用码...");
                    $("#info-box").attr("style", "display:none;");
                }
                else {
                    alert("未知错误");
                }
            }
        })
    }

    function GetSys(){
        $.ajax(
                {
                    type: "POST",
                    url: "_sys.php",
                    dataType: "json",
                    data: {
                    },
                    success: function(data){
                        $("#KeepAlive_Past1H").html(data.KeepAlive_Past1H);
                        $("#KeepAlive_now").html(data.KeepAlive_now);
                        $("#KeepAlive_Past5Min").html(data.KeepAlive_Past5Min);
                        $("#now").html(data.now);
                    },
                    error: function(jqXHR){
                        alert("发生错误"+jqXHR.status);
                    }
                }
        );
    }

    function pie(){
        $('#used_100').easyPieChart({
            size: 200,
            lineWidth: 20,
            barColor: '#2dcb73',
            trackColor: false,
            lineCap: 'round',
            easing: 'easeOutBounce',
            onStep: function (from, to, percent) {
                $(this.el).find('.percent').text(Math.round(percent));
            }
        });
    }


</script>
@endsection