<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use App\Services\SendGridMailService;


class GenericPageController extends Controller {

    protected $sendGridService;

    public function __construct(SendGridMailService $sendGridService) {
        $this->sendGridService = $sendGridService;
    }
    
    public function index() {
        return view('index');
    }

    public function about() {
        return view('about');
    }

    public function services() {
        return view('services');
    }

    public function contact() {
        return view('contact');
    }

    public function sendContactEmail(Request $request)
    {
        // dd($request->all());
        $validatedInputs = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            // 'phone' => 'required|numeric',
            // 'subject' => 'required',
            'message' => 'required',
            'assist_type' => 'required|in:1,2,3',
        ]);
    
        // Determine the recipient based on assist_type
        $recipient = 'info@arabictarjamat.com'; // Default recipient
        if ($validatedInputs['assist_type'] == 1) {
            $recipient = 'quote@arabictarjamat.com';
        } elseif ($validatedInputs['assist_type'] == 2) {
            $recipient = 'applications@arabictarjamat.com';
        }

        // Send the email
       // Mail::to($recipient)->send(new ContactUsEmail($validatedInputs));
       
       $to = $recipient;
       $subject = 'New email from Tarjamat website';
       $data = $validatedInputs;
		$content = view('emails.contact_us', compact('data'))->render();

       
        try {
            $status = $this->sendGridService->sendEmail($to, $subject, $content);
            return response()->json(['message' => 'Email sent successfully!', 'status' => $status]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    
        return redirect(route('website.index'))->with('success', 'msg_sent');
    }
    
    
}
