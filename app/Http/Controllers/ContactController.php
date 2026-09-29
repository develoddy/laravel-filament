<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Mail\ContactMail;
use App\Models\ContactForm;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function sendMail(Request $request)
    {
        // Honeypot anti-spam
        if ($request->filled('website')) {
            return redirect()->back()
                ->with('success', '✅ Tu mensaje ha sido enviado correctamente.')
                ->withFragment('contact-form-feedback');
        }

        $validatedData = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:3000',
            'cf-turnstile-response' => 'required|string|max:2048',
        ]);

        try {
            $turnstile = Http::asForm()
                ->timeout(10)
                ->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
                    'secret'   => config('services.turnstile.secret_key'),
                    'response' => $validatedData['cf-turnstile-response'],
                    'remoteip' => $request->ip(),
                ]);
        } catch (\Throwable $e) {
            report($e);

            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'turnstile' => 'No se pudo verificar el formulario. Inténtalo de nuevo.',
                ])
                ->withFragment('contact-form-feedback');
        }

        if (!$turnstile->successful() || !$turnstile->json('success')) {
            return redirect()->back()
                ->withInput()
                ->withErrors([
                    'turnstile' => 'La verificación de seguridad ha fallado. Inténtalo de nuevo.',
                ])
                ->withFragment('contact-form-feedback');
        }

        unset($validatedData['cf-turnstile-response']);

        ContactForm::create($validatedData);

        return redirect()->back()
            ->with('success', '✅ Tu mensaje ha sido enviado correctamente.')
            ->withFragment('contact-form-feedback');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
