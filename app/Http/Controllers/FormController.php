<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FormController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'g-recaptcha-response' => 'required',
        ]);

        $recaptchaResponse = $request->input('g-recaptcha-response');
        $secretKey = config('services.recaptcha.secret'); // Ensure this is set in config/services.php

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secretKey,
            'response' => $recaptchaResponse,
            'remoteip' => $request->ip(),
        ]);

        $responseBody = $response->json();

        if (!$responseBody['success']) {
            return back()->withErrors(['captcha' => 'ReCAPTCHA verification failed. Please try again.']);
        }

        // Proceed with form submission logic
        return back()->with('success', 'Form submitted successfully!');
    }
}
