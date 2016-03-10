<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *auth主表定义为user
	 * @var string
	 */
	protected $table = 'user';

    /**
     * user模型中主键设置为uid
     * @var string
     */

	protected $primaryKey = 'uid';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_name', 'email', 'password','passwd','transfer_enable','enable','switch','port','exp_date','plan'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    /**
     * 套餐一对一联系
     */

    public function hasOnePlan()
    {
        return $this->hasOne('App\ss_code_type','code_type','plan');
    }
}
