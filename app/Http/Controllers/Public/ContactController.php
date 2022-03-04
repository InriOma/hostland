<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.contact');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'tel' => 'required',
            'message' => 'required',
        ]);

        $storeContact = Contact::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'tel' => $request->tel,
            'message' => $request->message,
        ]);

        /* Mail::send('emails.template', $data, function ($message) use ($user) {
            $message->subject('Asunto del correo');

            $message->to('jorge@hostland.com.mx');
        }); */

        //Mail::to('jorge@hostland.com.mx')->send(new ContactForm());

        return redirect()->route('publicContact')->with('success', 'Contacto enviado exitosamente!');
    }
}
