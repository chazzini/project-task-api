<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use TheSeer\Tokenizer\Exception;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email'    => 'email|required',
                'password' => 'required',
            ]);

            $credentials = request(['email', 'password']);

            if (!Auth::attempt($credentials)) {
                return response()->json([
                    'status_code' => 500,
                    'message'     => 'Unauthorized',
                ]);
            }

            $user = Auth::user();
            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status_code'  => 200,
                'access_token' => $tokenResult,
                'token_type'   => 'bearer'
            ]);
        }
        catch (Exception $error) {
            return response()->json([
                'status_code' => 500,
                'message'     => 'Error in Login',
                'error'       => $error
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
