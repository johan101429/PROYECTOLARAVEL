<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactUsController extends Controller
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
        return view('contactUs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
     
    public function store(Request $request)
    {             
      
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->description =$request->description;  
        $contact->save();  
                     
        Mail::send('notificaciones/mailUser',['Contact'=>$contact], function($message) use ($contact){
            message->from('pruebalaravelnataly@gmail.com','Programando Ando...');
            message->to('natavanegas1014@gmail.com');
            message->subject('has recibido un mensaje'.$contact->name);
        });
        Mail::send('notificaciones/mailClient',['Contact'=>$contact], function($message) use ($contact){
        message->from('pruebalaravelnataly@gmail.com','Programando Ando...');
        message->to($contact->email);
        message->subject('Mensaje enviado a'.$contact->name);
        }); 
        $request->session()->flash('success', "el mensaje se envio correctamente");
        return redirect()->back();    
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    
     public function show(Contact $contact)
   
    {
        //
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
   