<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function index()
            {
                $user = User::orderByDesc('id')->get();
                return  $user->toJson(JSON_PRETTY_PRINT);
            }

    /**
     *register
     * @param Request $request
     *@return JsonResponse
    */
    public function register(Request $request)
    {
        $validatedData = array(
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required',
            'confirmed_password' => ['required','same:password'],
            'role' => 'required',
            'telephone' => 'required'
        );
        $data = $request->all();
        $validatedData = Validator::make($data,$validatedData);
        if ($validatedData->fails()){
            return response()->json([ 'error' => 'Contrainte de donnee'], 510);
        }else{
            $data['password'] = bcrypt($request->password);

            $user = User::create($data);
            $user->token = $this->generateToken($user);
           // return response()->json([ 'user' => $user], 200);
            return response()->json([
                'success' => 'lutilisateur à ete crée avec success',
                'user'=> $user
            ], 200);
        }
    }

    private  function generateToken($user){
        return  $user->createToken('authToken')->accessToken;
      }


      public function login(Request $request)
    {
        $loginData = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($loginData)) {
            return response()->json(['error' => 'Username ou Mot de passe est incorrect !!!'],401);
        }

//        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        $user = auth()->user();
        $user->token = $this->generateToken($user);
        return response()->json([ 'user' => $user], 200);
       // return response(['user' => auth()->user(), 'access_token' => $accessToken]);

    }
    public function logout()
    {
        $user = User::findOrFail(Auth::guard('api')->id());
        if ($user) {
            $user->logout($user);
            return response()->json(['message' => 'User logged out.'], 200);
        }

    }


    public function show()
    {
        return response()->json([ 'user' => auth()->user()], 200);
    }

    public function test()
    {
        return response()->json([ 'user' => array()], 200);
    }
    public function destroy(User $user)
    {
        if(!auth()->user() == true){
            if($user->delete()){
                return response()->json([
                    'success' => 'Suppression avec success',
                ], 200);
            }
        }else{
            return response()->json([
                'success' => 'lutilisateur est connecter !!!',
            ], 200);
        }
    }

    public function update(User $user){
        $data = $this->validator();
      //  $user->fill($data);
        var_dump($data);
         die();
    }
    public function validator(){
        return request()->validate([
            'name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'telephone' => 'required'
        ]);
    }

}