<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Sender;
use App\Receiver;
class AccessController extends Controller
{
    public function logVarify(Request $req){
       $email = $req->userEmail;
       $fuser = DB::table('senders')->where('userEmail',$email)->get();
       if(count($fuser)>0){
           $senderDetails =DB::table('senders')->where('userEmail',$email)->first();
           session()->put('handleInfo',$senderDetails);
           //return view('User.userIndex',compact('senderDetails'));
           $receiver = Receiver::find($senderDetails->id);
           $who_mailed_me =$receiver->messages;

           return view('User.userIndex')->with(array('senderDetails'=>$senderDetails,'who_mailed_me'=>$who_mailed_me));
       }

    }
    public function registerUser(Request $request){
        $sender = new Sender();
        $sender->userName = $request->userName;
        $sender->userEmail = $request->userEmail;
        $sender->userPassword = $request->userPassword;
        $sender->save();


        $receiver = new Receiver();
        $receiver->userName = $request->userName;
        $receiver->userEmail = $request->userEmail;
        $receiver->userPassword = $request->userPassword;
        $receiver->save();

        return "registration is done successfully!";
    }
}
