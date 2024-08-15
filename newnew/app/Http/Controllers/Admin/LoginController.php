<?php

namespace App\Http\Controllers\Admin {


    use App\Models\Admin;
    use App\User;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\Auth;

    use Illuminate\Support\Facades\Hash;


    class LoginController extends Controller
    {
        use RegistersUsers;

        protected $redirectTo = '/admin';

        public function __construct()
        {
            $this->middleware('guest:admin')->except('logout');
        }

        public function getlogin()
        {
            return view('admin.adminlogin');
        }

        public function getregister()
        {
            return view('admin.adminregister');
        }

        protected function register(Request $data)
        {
            Admin::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
            return redirect('/admin');
        }

        private function loginFailed()
        {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Login failed, please try again!');
        }

        public function login(Request $request)
        {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                return redirect()->route('admin.dashboard');

            }

            return $this->loginFailed();
        }

        protected function guard()
        {
            return Auth::guard();
        }

        public function logout()
        {
            Auth::guard('admin')->logout();
            return redirect('/admin/login');

        }


    }
}
