<?php

namespace App\Http\Controllers;

use App\Models\OneLiner;
use Illuminate\Http\Request;

class OneLinerController extends Controller
{
    public function randomOneLiner()
    {
        $oneLiner = OneLiner::all()->first();

        return response()->json($oneLiner);
    }
}
