<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'getMessages']);
    }



    public function postMessages(Request $request)
    {
        $message = new Message;

        $email = $request->input('email');
        $name = $request->input('name');
        $phone = $request->input('phone');
        $mmessage = $request->input('message');

        $message->email = request('email');
        $message->name = request('name');
        $message->phone = request('phone');
        $message->message = request('message');

        $message->save();

        //return response()->json(["email"=>$email, "name"=>$name, "phone"=>$phone, "message"=>$mmessage,]);
        return response()->json($message);

    }


    public function getMessages(Request $request)
    {
        $this->middleware('auth');
        $messages = Message::all();
        return view('messages', compact('messages'));

    }
}
