<?php

namespace App\Http\Controllers;

use App\User;
use App\Email;
use App\Mail\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class EmailController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth')->except('storeEmailAjax');
    }
    public function create()
    {
        return view('sendemail');
    }

    public function store(Request $request)
    {
        $emails=Email::pluck('email')->toArray();
        $user_emails=User::pluck('email')->toArray();
        $emails=array_unique(array_merge($emails,$user_emails),SORT_REGULAR);

        foreach ($emails as $email) {
            Mail::to($email)->send(new Notification( $request->input('title'), $request->input('email')));
        }
        return redirect()->back()->with('message','Successfully sent');
    }
    public function storeEmailAjax(Request $request)
    {
        $rules = array('email' => 'required|email|unique:emails');
        $validator = Validator::make(Input::all(), $rules);
        // Validate the input and return correct response
        if ($validator->fails()) {
            return Response::json(array(
                'success' => false,
                'errors' => $validator->getMessageBag()->toArray()

            )); // 400 being the HTTP code for an invalid request.
        }
        $email = new Email;
        $email->email = $request->input('email');
        $email->save();
        return Response::json(array('success' => true, 'errors' => 'Now, you will be notified about new dramas.'));
    }
}
