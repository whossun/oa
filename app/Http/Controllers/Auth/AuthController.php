<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\Request;
use App\Models\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;

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
    protected $username = 'username';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'rea' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * @param LoginRequest $request
     *
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $auth = $request->only('username', 'password');
        $user = User::where('username', $auth['username'])->first();
        if ($user) {
            if (1 === $user->status) {
                if (Auth::attempt($auth, $request->has('remember'))) {
                    return redirect()->intended('/');
                }

                return redirect()->back()->withInput()->withErrors('用户名或密码错误,请重新输入!');
            } else {
                return redirect()->back()->withInput()->withErrors('该用户被锁定禁止登陆,请联系系统管理员!');
            }
        }

        return redirect()->back()->withInput()->withErrors('用户不存在,请先注册!');
    }
}
