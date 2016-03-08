<?php namespace App\Http\Controllers\Panel;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\ss_code_type;
use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $gb = 1024*1024*1024;

        $user = User::find(Auth::id());
        $userinfo['username'] = $user->user_name;
        $userinfo['plan'] = $user->hasOnePlan->code_type_name;
        $userinfo['uid'] = $user->id;
        $userinfo['exp_date'] = $user->exp_date;
        $userinfo['transfer'] = $user->transfer_enable/$gb;
        $userinfo['sspasswd'] = $user->passwd;
		return view('panel.index')->with('userinfo',$userinfo);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
