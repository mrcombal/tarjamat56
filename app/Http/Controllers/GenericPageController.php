<?php

namespace App\Http\Controllers;

use App\GenericContent;
use App\Mail\ContactUsEmail;
use Illuminate\Http\Request;
use App\Services\SendGridMailService;


class GenericPageController extends Controller {

    protected $sendGridService;

    public function __construct(SendGridMailService $sendGridService) {
        $this->sendGridService = $sendGridService;
    }

    public function index() {

        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value', 'key')->toArray();

        return view('index', compact('contentsArray'));
    }  public function about() {
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value', 'key')->toArray();

        return view('about', compact('contentsArray'));
    }

    public function services() {
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value', 'key')->toArray();

        return view('services', compact('contentsArray'));
    }

    public function contact() {
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value', 'key')->toArray();

        return view('contact', compact('contentsArray'));
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
            return redirect()->back()->with('success', 'msg_sent');
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

        return redirect()->back()->with('success', 'msg_sent');
    }
    
     public function indexAr() {
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value_ar', 'key')->toArray();
        return view('arabic.index', compact('contentsArray'));
    }  
    
    public function aboutAr() {
    
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value_ar', 'key')->toArray();
        return view('arabic.about', compact('contentsArray'));
    }

    public function servicesAr() {
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value_ar', 'key')->toArray();

        return view('arabic.services', compact('contentsArray'));
    }

    public function contactAr() {
        $contents = GenericContent::all();
        $contentsArray = $contents->pluck('value_ar', 'key')->toArray();

        return view('arabic.contact', compact('contentsArray'));
    }



}
