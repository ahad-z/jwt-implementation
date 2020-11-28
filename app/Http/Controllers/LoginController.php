<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'registrtation', 'store','index']]);
    }

    public function index()
    {
    	return view('User.login');

    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (! $token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


        return $this->respondWithToken($token);

    }

    public function registrtation()
    {
    	return view('User.registration');

    }

    public function store(Request $request)
    {
        

    	$request->validate([
			'name'       => 'required',
			'email'      => 'required|email',
			'password'   => 'required',
			'c_password' => 'same:password',
    	]);

    	try {
    		User::Create(array_merge(
    		$request->except('_token', 'password','c_password'),
    		[
    			'password' => bcrypt($request->password)

    		]
    	));

    	return redirect()->back()->with('success', 'registration success');  
    		
    	} catch (Exception $e) {
    		return response([
    			'message' => $e->getMessage()

    		]);
    	}

    }

    
    public function me()
    {
        $user = User::all();
        return response()->json(['data' => $user]);
    }



    /**
     * Log the user out (Invalidate the token)
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
       Auth::logout();
        return redirect()->intended('/');
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken($this->guard()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
       return response()->json([
            'user' => auth('api')->user(),
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 120 * 60
        ]);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard();
    }
}
