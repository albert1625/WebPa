<?php

namespace WebPa\Http\Controllers\Auth;

use WebPa\User;
use WebPa\Privilege;
use WebPa\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \WebPa\User
     */
    protected function create(array $data)
    {

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        //'privileges' => $data['privileges'],
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

        return $user;

        // return User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password']),
        //     //'privileges' => $data['privileges'],
        //     'privileges' => $data['privileges'],
        // ]);
    }
}
