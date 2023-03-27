<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Publication_details;
use App\Models\Message;

class MessageController extends Controller
{
    public function createMessage(Request $request, $id){
 
        $message = new Message();
 
        $message->username = $request->username;
        $message->content = $request->content;
        $message->Id_Reference_Publication = $request->Id_Reference_Publication;
        

        $message->save();
        return redirect('homePage');
     } 
}
