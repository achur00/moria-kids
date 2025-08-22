<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Contact;
// use App\Models\Submenu;
// use App\Models\Message;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\Sendmail;

class ContactController extends Controller
{
    public function index()
    {
        // $contact = Contact::first();
        // $services = Submenu::where('menu_id', '3')->get();
        return view('contact');
          
    }

    // public function store(Request $request)
    // {
    //     // Verify reCAPTCHA first
    //     $recaptchaResponse = $request->input('g-recaptcha-response');
    //     $secretKey = config('services.recaptcha.secret');

    //      if (!$recaptchaResponse) {
    //     return back()->withErrors(['captcha' => 'Please complete the reCAPTCHA.']);
    // }

    //     $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
    //         'secret' => $secretKey,
    //         'response' => $recaptchaResponse,
    //         'remoteip' => $request->ip(),
    //     ]);

    //     $responseBody = $response->json();

    //     if (!$responseBody['success']) {
    //         return back()->withErrors(['captcha' => 'ReCAPTCHA verification failed. Please try again.']);
    //     }

    //     // only Validate form data if recapcha passes
    //     $data = $request->validate([
    //         'username' => 'required|min:4',
    //         'email' => 'required|email|max:100',
    //         'message' => 'required|string|max:255',
    //         'phone' => ['required', 'regex:/^(\+?|0)[1-9]\d{1,14}$/'],
    //         'service' => 'required',
    //     ]);

    //     try {
    //         $contact = Contact::first();

    //         $message = new Message();
    //         $message->username = $request->username;
    //         $message->email = $request->email;
    //         $message->mobile = $request->phone;
    //         $message->content = $request->message;
    //         $message->service_type = $request->service;

    //         if ($message->save()) {

    //             return back()->with('success', 'Your message has been sent successfully!');
    //             // Use contact email or fallback to default
    //             $toEmail = $contact->email;
    //             Mail::to($toEmail)->send(new Sendmail($request->all(), $contact));

    //         }

    //         return back()->with('error', 'Failed to save your message. Please try again.');

    //     } catch (\Exception $e) {
    //         return back()->with('error', 'An error occurred: '.$e->getMessage());
    //     }
    // }
}
