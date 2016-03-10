<?php namespace App\Http\Controllers\Panel;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\ss_node;
use Auth,Input;
use Request;


class IndexController extends Controller {

	/**
	 * 显示panel视图，输出用户基本套餐信息
	 *
	 * @return Response
	 */
	public function index()
	{
        $gb = 1024*1024*1024;

        $user = User::find(Auth::id());
        $nodelist = ss_node::all();
        $userinfo['username'] = $user->user_name;
        $userinfo['plan'] = $user->hasOnePlan->code_type_name;
        $userinfo['uid'] = $user->id;
        $userinfo['exp_date'] = $user->exp_date;
        $userinfo['transfer'] = $user->transfer_enable/$gb;
        $userinfo['sspasswd'] = $user->passwd;
        $userinfo['used'] = round(($user->d+$user->u)/$gb,1);

        $time = time()-3600;
        $count = User::where('t', '>', $time)->count();

        //获得服务器实时在线人数（一小时）

        $info = [
          'userinfo' => $userinfo,
          'nodelist' => $nodelist,
          'onlineCount' => $count
        ];

		return view('panel.index')->with('info',$info);
	}

	/**
	 * 获得详细连接参数
	 *
	 * @return ResponseJson
	 */


    public function getSSInfo()
    {
        if (Request::ajax())
        {
            $id = Input::get('node_id');
            $node = ss_node::find($id);
            return response()->json([
                'node_name' => $node->node_name,
                'node_server' => $node->node_server,
                'node_port' => User::find(Auth::id())->port,
                'node_passwd' => User::find(Auth::id())->passwd,
                'node_method' => $node->node_method,
                'enbale' => User::find(Auth::id())->enable,
                'msg' => 1
            ]);
        }
        else{
            echo 'Invalid request';
        }
    }



}
