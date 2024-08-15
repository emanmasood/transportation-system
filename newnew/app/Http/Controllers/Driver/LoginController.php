<?php

namespace App\Http\Controllers\Driver {


    use App\Models\Admin;
    use App\Models\Driver;
    use App\User;
    use Illuminate\Foundation\Auth\RegistersUsers;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Illuminate\Support\Facades\Auth;

    use Illuminate\Support\Facades\Hash;


    class LoginController extends Controller
    {
        use RegistersUsers;

        protected $redirectTo = '/driver';

        public function __construct()
        {
            $this->middleware('guest:driver')->except('logout');
        }

        public function getlogin()
        {
            return view('driver.driverlogin');
        }

        public function getregister()
        {

            return view('driver.driverregister');
        }

        protected function register(Request $data)
        {
            Driver::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'mobile' => $data['mobile'],
            ]);
            return redirect('/driver');
        }

        private function loginFailed()
        {
            return redirect()
                ->back()
                ->withInput()
                ->with('error','login failed!!');
        }

        public function login(Request $request)
        {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ]);

            if (Auth::guard('driver')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                return redirect()->route('driver.dashboard');

            }
           return $this->loginFailed();
           
        }

        protected function guard()
        {
            return Auth::guard();
        }

        public function logout()
        {
            Auth::guard('driver')->logout();
            return redirect('/driver/login');

        }
    }
}
