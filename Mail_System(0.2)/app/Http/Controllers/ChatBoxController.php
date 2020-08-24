<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sender;
use DB;
use App\Receiver;
use App\Message;
class ChatBoxController extends Controller
{
    public function viewChatFile($senderEmail,$receiverEmail){
       //echo "Sender Email: ".$senderEmail."<br>";
       //echo "Receiver Email : ".$receiverEmail;
       $senderDetails = DB::table('senders')->where('userEmail',$senderEmail)->first();
       $receiverDetails = DB::table('senders')->where('userEmail',$receiverEmail)->first();
       $senderId = $senderDetails->id;
       $senderMail = Sender::find($senderId);
       $allSenderMessage = $senderMail->messages;
       $myMessage = array();
       $index = 0;
       foreach($allSenderMessage as $msg){
           if($msg->receiverEmail == $receiverEmail){
               $myMessage[$index] = $msg;
               $index++;
           }
       }

       return view('User.chatbox',compact('myMessage'));











    }
}
