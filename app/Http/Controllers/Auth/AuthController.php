<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
     */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'user_first_name_th' => 'required|max:255',
            'user_last_name_th'  => 'required|max:255',
            'user_first_name_en' => 'max:255',
            'user_last_name_en'  => 'max:255',
            'username'           => 'required|max:255',
            'email'              => 'required|email|max:255|unique:users',
            'password'           => 'required|min:6|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        print_r($data);
        return User::create([
            
            'username'           => $data['username'],
            'email'              => $data['email'],
            'password'           => bcrypt($data['password']),
            'user_first_name_th' => $data['user_first_name_th'],
            'user_last_name_th'  => $data['user_last_name_th'],
            'user_first_name_en' => $data['user_first_name_en'],
            'user_last_name_en'  => $data['user_last_name_en']
        ]);
    }
}
