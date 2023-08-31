<?php

namespace Mja\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use Mja\Contact\Mail\ContactMailable;

class ContactController extends Controller
{
  public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
  {
    return view('contact::mja');
    
  }
  public function send(Request $request)
  {
    Mail::to($request->email)->send(new ContactMailable(message: $request->message, name: $request->name));
    return redirect(route('contact'));
    
  }
}
