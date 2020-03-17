<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use App\Http\Validation\NewsletterValidation;
use App\Mail\NewsletterMail;



class NewsletterController extends Controller
{
    use NewsletterValidation;
    public function show(){
        return view('frontend.news.index');
    }
    public function store(Request $request){
        $this->newsletterFormValidation($request->all());

        $email=$request->email;
        $username = strstr($email, '@', true);
        \Mail::to($request->email)->send(new NewsletterMail($username));

        Newsletter::create($request->all());

        $request->session()->flash('message', 'Thanks for Joining .');

        return redirect('newsletter');

    }
}

