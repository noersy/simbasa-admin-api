<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NasabahCollection;
use App\Models\Nasabah;
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

        $bank = auth() -> user();

        $nasabah = Nasabah::where('kelurahan_id', $bank -> kelurahan_id) -> get();

        return response([
            'total' => $nasabah->count(),
            'messages' => 'Retrieved successfuly',
            'data' => NasabahCollection::collection($nasabah)
        ], 200);
    }
}
