<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\user;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::Dashboard;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /* public function login(Request $request)
{
    $this->validateLogin($request);

    // If the class is using the ThrottlesLogins trait, we can automatically throttle
    // the login attempts for this application. We'll key this by the username and
    // the IP address of the client making these requests into this application.
    if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);

        return $this->sendLockoutResponse($request);
    }

    // Check if user is active
    $user = User::where('email', $request->email)->first();
    if ($user && !$user->status==1) {
        abort(403, 'Your account has been disabled by an administrator.');
    }

    if ($this->attemptLogin($request)) {
        return $this->sendLoginResponse($request);
    }

    // If the login attempt was unsuccessful we will increment the number of attempts
    // to login and redirect the user back to the login form. Of course, when this
    // user surpasses their maximum number of attempts they will get locked out.
    $this->incrementLoginAttempts($request);

    return $this->sendFailedLoginResponse($request);
} */
public function login(Request $request){
    $this->validateLogin($request);

    if (method_exists($this, 'hasTooManyLoginAttempts') &&
        $this->hasTooManyLoginAttempts($request)) {
        $this->fireLockoutEvent($request);

        return $this->sendLockoutResponse($request);
    }

    if($this->guard()->validate($this->credentials($request))) {
        // Check if user is active, else return error message
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => '1'])) {
            return redirect()->intended('dashboard');
        }  else {
            // This will return the message required as desired
            abort(403, '???????????? ???????????????? ?????? ?????????? ????????????');
        }
    } else {
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }
}

// Error massage for inactive credential
private function inactiveCredential(Request $request){
    throw ValidationException::withMessages([
        // auth.not-active can be added in resources/lang/en/auth.php
        $this->username() => [trans('auth.not-active')],
    ]);
}
}
