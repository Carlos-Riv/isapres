<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JoinFormRequest;
use App\JoinForm;
use App\Mail\NewJoin;
use Illuminate\Support\Facades\Mail;

class JoinFormController extends Controller
{
    public function store(JoinFormRequest $request)
    {
        $validated = $request->validated();
        $joinform = JoinForm::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'],
            'isapre' => $validated['isapre']
        ]);

        Mail::to('contacto@isapreschileasesores.cl')->send(new NewJoin($joinform));

        return response('success', 200);
    }
}
