<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankResource;
use App\Models\Bank_Sampah;
use App\Models\Nasabah;
use DateTime;
use Exception;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthBankController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt.verify', ['except' => ['login', 'create']]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kelurahan_id' => 'required',
            'nm_banksampah' => 'required',
            'almt_banksampah' => 'required',
            'telp' => 'required',
            'jenis_sampah' => 'required',
            'nm_penggurus' => 'required',
            'jml_karyawan' => 'required',
            'jml_nasabah' => 'required',
            'jml_simpanan' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $bank = Bank_Sampah::create([
            'kelurahan_id' => $request->get('kelurahan_id'),
            'nm_banksampah' => $request->get('nm_banksampah'),
            'almt_banksampah' => $request->get('almt_banksampah'),
            'telp' => $request->get('telp'),
            'tgl_berdiri' => now(),
            'jenis_sampah' => $request->get('jenis_sampah'),
            'nm_penggurus' => $request->get('nm_penggurus'),
            'jml_karyawan' => $request->get('jml_karyawan'),
            'jml_nasabah' => $request->get('jml_nasabah'),
            'jml_simpanan' => $request->get('jml_simpanan'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        $token = JWTAuth::fromUser($bank);

        return response()->json([
            'messages' => 'Bank successfuly create',
            'token' => $token,
            'data' => $bank
        ], 201);
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

    public function login()
    {
        $credentials = request(['email', 'password']);


        if (!$token = auth()->guard('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }


        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
