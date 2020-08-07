<?php

namespace App\Http\Controllers;

use App\Isapre;
use Illuminate\Http\Request;

class IsapreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data_isapres= Isapre::all();

        return response()->json([
            'isapres' => $data_isapres
        ]);
    }
}
