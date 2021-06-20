<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NasabahCollection;
use App\Models\Bank_Sampah;
use App\Models\Nasabah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function getAll()
    {
        $nasabah = Nasabah::all();

        return response([
            'total' => $nasabah->count(),
            'messages' => 'Retrieved successfuly',
            'data' => NasabahCollection::collection($nasabah)
        ], 200);
    }

    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'kelurahan_id' => 'required',
            'nama_nasabah' => 'required',
            'almt_nasabah' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pekerjaan' => 'required',
            'no_rekening' => 'required',
            'saldo' => 'required',
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'error' => $validator->errors()->toArray()
            ], 400);
        }

        $nasabah = Nasabah::create([
            'username' => $request->input('username'),
            'kelurahan_id' => $request->input('kelurahan_id'),
            'nama_nasabah' => $request->input('nama_nasabah'),
            'almt_nasabah' => $request->input('almt_nasabah'),
            'no_hp' => $request->input('no_hp'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tmpt_lahir' => $request->input('tmpt_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            'pekerjaan' => $request->input('pekerjaan'),
            'no_rekening' => $request->input('no_rekening'),
            'saldo' => $request->input('saldo'),
            'password' => $request->input('password')
        ]);

        return response()->json([
            'message' => 'Nasabah has been created!',
            'user' => $nasabah
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sewa = Nasabah::find($id);
        if ($sewa != null) {
            $sewa->delete();
            return response(['message' => 'Nasabah has been deleted!']);
        } else {
            return response([
                'message' => 'No data found!',
            ], 403);
        }
    }
}
