<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankResource;
use App\Models\Jenis_Sampah;
use App\Models\Nasabah;
use App\Models\Setor_Sampah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SetorSampahController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'jumlah' => 'required',
            'sampah_id' => 'required',
            'jenis_id' => 'required',
            'sub_total' => 'required',
            'total' => 'required',
            'kg' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'success' => false,
                'error' => $validator->errors()->toArray()
            ], 400);
        }

        $nasabah = Nasabah::where('username', $request->input('username'))->get();

        $setor = Setor_Sampah::create([
            'nasabah_id' => $nasabah[0]->id,
            'tgl_setor' => now(),
            'total_setor' => 1
        ]);

        return response()->json([
            'message' => 'setoran has been created!',
            'setoran' => $setor
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function show()
    {
        // $setoran = Setor_Sampah::all();

        $from = now() -> subDays(30);
        $to = now();

        $setoran  = Setor_Sampah::whereBetween('tgl_setor', [$from, $to])->get();

        return response()->json([
            'total' => $setoran->count(),
            'messages' => 'Retrieved successfuly',
            'setoran' => BankResource::collection($setoran)
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function jenis()
    {
        $jenis = Jenis_Sampah::all();

        return response([
            'total' => $jenis->count(),
            'messages' => 'Retrieved successfuly',
            'data' => BankResource::collection($jenis)
        ], 200);
    }
}
