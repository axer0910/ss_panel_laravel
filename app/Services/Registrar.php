<?php namespace App\Services;

use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:user',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */


    /**
     * 注册逻辑
     *
     * @param array $data
     * @return static
     */
	public function create(array $data)
	{
        //生成注册过期日期
        $days = "+".Config::get('sspanel.init_exp_days')." Days";
        $days = strtotime($days);
        $exp_date = date("Y-m-d H:i:s",$days);

        $max_port = DB::table('user')->select('port')->orderBy('uid','desc')->take(1)->get();
        $max_port = $max_port[0]->port + 1;
		return User::create([
			'user_name' => $data['name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'plan' => 'ss_trail',
            'passwd' => Str::random(8),//随机生成初始服务连接密码
            'transfer_enable' => Config::get('sspanel.init_transfer'),
            'exp_date' => $exp_date,
            'type' => 1,
            'enable' => -(Config::get('sspanel.init_validate_email')),//验证邮箱选项
            'switch'=> 1,
            'port' => $max_port
		]);
	}

}
