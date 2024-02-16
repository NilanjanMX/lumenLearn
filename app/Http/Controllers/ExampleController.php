<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function loginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $email = $request->email;
        $user = User::where('email', $email)->first();
        if (!$user || ! Hash::check($request->password, $user->password)) {
            return redirect('/home');
        } else {
            $_SESSION['name'] = $user->name;
            return redirect('/home');
        }
    }
    
    public function home()  
    {  
        return view('home');
    }

    public function ajaxLogin(Request $request)
    {

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return response()->json(['token' => $token], 200);

    }
}
