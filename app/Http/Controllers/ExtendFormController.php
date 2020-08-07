<?php

namespace App\Http\Controllers;

use App\ExtendForm;
use App\Http\Requests\ExtendFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewExtendForm;

class ExtendFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExtendFormRequest $request)
    {
        $validated = $request->validated();
        $form = ExtendForm::create([
            'name' => $validated['name'],
            'last_name' => $validated['last_name'],
            'email' => $validated['email'],
            'rut' => $validated['rut'],
            'phone' => '+569'. $validated['phone'],
            'salary' => $validated['salary'],
            'work' => $validated['work'],
            'responsibilities' => $validated['responsibilities'],
            'city' => $validated['city'],
            'commune' => $validated['commune'],
            'isapre_id' => $validated['isapre_id'],
            'message' => $validated['message']
        ]);

        Mail::to($_ENV['EMAIL_RECIPIENT'])->send(new NewExtendForm($form));

        return response('success', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExtendForm  $extendForm
     * @return \Illuminate\Http\Response
     */
    public function show(ExtendForm $extendForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExtendForm  $extendForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ExtendForm $extendForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExtendForm  $extendForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExtendForm $extendForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExtendForm  $extendForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExtendForm $extendForm)
    {
        //
    }
}
