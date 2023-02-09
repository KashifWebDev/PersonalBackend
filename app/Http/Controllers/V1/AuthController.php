<?php

namespace App\Http\Controllers\V1;

use App\Http\Requests\v1\login;
use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ApiResponser;
    public function login(login $request){
        try{
            if(!Auth::validate($request->only(['email', 'password']))){
                return $this->error('Credentials does not match with our record.',401);
            }

            $user = User::whereEmail($request->email)->first();
            return $this->success(
                [
                '   token' => auth()->user()->createToken('API Token')->plainTextToken
                ],
                'User Logged In Successfully'
            );
        } catch (\Throwable $th){
            return $this->error($th->getMessage(),500);
        }
    }
}
