<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sender;
use App\Receiver;
use App\Message;
use DB;
class MessageController extends Controller
{
    public function sendMessage(Request $request,$senderEmail){
       $message = new Message();
       $message->messageTitle = $request->messageTitle;
       $message->messageSubject = $request->messageSubject;
       $message->messageDescription = $request->messageDescription;
       $message->senderEmail  = $senderEmail;
       $message->receiverEmail = $request->receiverEmail;
       $senderInfo = DB::table('senders')->where('userEmail',$senderEmail)->first();
       $receiverInfo = DB::table('senders')->where('userEmail',$request->receiverEmail)->first();
       $message->sender_id = $senderInfo->id;
       $message->receiver_id = $receiverInfo->id;
       $message->save();
       return "Message Sent Successfully !! ";
    }
}
