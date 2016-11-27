<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected $redirectTo = '/admin/admin';
    protected $redirectAfterLogout = '/admin/login';
    use AuthenticatesUsers;


    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }

    /**
     * 自定义认证驱动
     * @return mixed
     */
    public function guard()
    {
        return auth()->guard('admin');
    }

    /**
     * 重写登陆视图
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * 重写退出
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();
        $request->session()->forget($this->guard()->getName());
        $request->session()->regenerate();
        return redirect($this->redirectAfterLogout);
    }

    /**
     * 重写登陆字段
     * @return string
     */
    public function username()
    {
        return 'name';
    }
}
