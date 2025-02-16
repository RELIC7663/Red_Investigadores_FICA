<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email',
                'message' => 'required|min:10'
            ]);
    
            Mail::to('contacto@redinvestigadores.org')->send(new ContactFormMail($validated));
    
            return $request->wantsJson() 
                ? response()->json(['success' => true, 'message' => '¡Mensaje enviado correctamente!'])
                : back()->with('success', '¡Mensaje enviado correctamente!');
    
        } catch (\Exception $e) {
            return $request->wantsJson()
                ? response()->json(['success' => false, 'message' => 'Error al enviar el mensaje'], 500)
                : back()->with('error', 'Error al enviar el mensaje');
        }
    }
}