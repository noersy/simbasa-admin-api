<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BankResource;
use App\Models\Bank_Sampah;
use Illuminate\Http\Request;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function getAll()
    {
        $nasabah = Bank_Sampah::all();

        return response([
            'total' => $nasabah->count(),
            'messages' => 'Retrieved successfuly',
            'data' => BankResource::collection($nasabah)
        ], 200);
    }
}
