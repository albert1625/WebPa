<?php

namespace WebPa\Http\Controllers;

use WebPa\Privilege;
use WebPa\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users_show', array( 'users' => User::all() ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $rules = $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        );

        $this->validate($request, $rules);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->privileges = $data['privileges'];
        $user->save();

        if ($data['privileges']==1){
            $privileges = new Privilege();
            $privileges->view_general=$data['view_general'];
            $privileges->view_contact=$data['view_contact'];
            $privileges->view_technical=$data['view_technical'];
            $privileges->edit_general=$data['edit_general'];
            $privileges->edit_contact=$data['edit_contact'];
            $privileges->edit_technical=$data['edit_technical'];
            $privileges->user()->associate(User::find($user->id));
            $privileges->save();
        }

        return redirect()->action('UserController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view( 'users_edit', array('user' => User::findOrFail($id), 'privileges' => Privilege::where('user_id', $id)) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = $request->all();

        $rules = $rules = array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,id,'.$id,
            'password' => 'sometimes|nullable|string|min:6|confirmed',
        );

        $this->validate($request, $rules);

        $user = User::findOrFail($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        if ($data['password'] <> '')
            $user->password = bcrypt($data['password']);
        $user->privileges = $data['privileges'];
        $user->save();

        if (Privilege::where('user_id', $id) && ($data['privileges']!=1)) //delete privileges if user is no more moderator
                Privilege::where('user_id', $id)->delete();

        if ($data['privileges']==1){
            if (Privilege::where('user_id', $id)->first())
                $privileges = Privilege::where('user_id', $id)->first();
            else
                $privileges = new Privilege();
            $privileges->view_general=$data['view_general'];
            $privileges->view_contact=$data['view_contact'];
            $privileges->view_technical=$data['view_technical'];
            $privileges->edit_general=$data['edit_general'];
            $privileges->edit_contact=$data['edit_contact'];
            $privileges->edit_technical=$data['edit_technical'];
            $privileges->user()->associate(User::find($user->id));
            $privileges->save();
        }

        return redirect()->action('UserController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
