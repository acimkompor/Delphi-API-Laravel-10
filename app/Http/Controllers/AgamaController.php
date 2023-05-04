<?php

namespace App\Http\Controllers;

use App\Models\Agama;

class AgamaController extends Controller
{
    public function index()
    {
        $religion = Agama::all();
        return response()->json([
            'status' => 'sukses',
            'data' => $religion
        ], 200);
    }
}
