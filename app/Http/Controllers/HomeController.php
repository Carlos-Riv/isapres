<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $bgSlide = asset('img/bg-slide.png');
        $slideData = collect([
            [
                'title' => 'Asesoría sin costo. Obtén el mejor plan de isapres del mercado',
                'lead' => 'Te entregaremos la mejor opción respondiendo a tus necesidades.',
                'btn' => [
                    'call' => '¡Cotiza ahora!',
                    'link' => '#'
                ],
                'imgUrl' => $bgSlide,
            ],

        ]);
        return view('front.home.index')->with('slideData', $slideData);
    }
}
