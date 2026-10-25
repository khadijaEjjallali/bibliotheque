<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function envoyer(Request $request)
    {
        $data = $request->validate([
            'sujet' => 'required|string|max:150',
            'message' => 'required|string',
        ]);

        $user = $request->user();

        Mail::to($user->email)->send(
            new ContactMail(
                $data['sujet'],
                $data['message'],
                $user->name
            )
        );

        return back()->with(
            'success',
            'Le mail a été envoyé.'
        );
    }
}