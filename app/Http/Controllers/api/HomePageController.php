<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankResource;
use App\Http\Resources\NasabahCollection;
use App\Models\Nasabah;
use App\Models\Setor_Sampah;
use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function __construct()
    {
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function getAll()
    {

        $bank = auth()->user();

        $nasabah = Nasabah::where('kelurahan_id', $bank->kelurahan_id)->get();

        $from = now()->subDays(30);
        $to = now();
        $setoran  = Setor_Sampah::whereBetween('tgl_setor', [$from, $to])->get();

        return response([
            'total' => $nasabah->count(),
            'messages' => 'Retrieved successfuly',
            'chart' => [
                'spot1' =>  0,
                'spot2' =>  0,
                'spot3' =>  0,
                'spot4' =>  0,
                'spot5' =>  0,
                'spot6' =>  0,
                'spot7' =>  1
            ],
            'bank' => $bank,
            'data' => NasabahCollection::collection($nasabah),
            'setoran' => BankResource::collection($setoran)
        ], 200);
    }
}
