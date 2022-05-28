<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChatModel;
use App\Models\User;
use DB;

class ChatController extends Controller
{
    //
    public function index(){
        if(!auth()->check()){
            return redirect('login')->with('error','Anda harus login terlebih dahulu');
        }
        $data = ChatModel::leftJoin('users', 'users.id', '=', 'chat.sender_id')
        ->LeftJoin('users as r', 'r.id', '=', 'chat.receiver_id')
        ->select('chat.*', 'users.name as sender_name','r.name as receiver_name',DB::raw('IF(chat.status=0, "true", "false") as is_sender'))
        ->where('chat.sender_id',2)
        ->get();

        $sender = ChatModel::leftJoin('users', 'users.id', '=', 'chat.sender_id')
        ->select('users.name as sender_name','users.id as sender_id')
        ->distinct()
        ->get();
        return view('chat.chat',compact('data','sender'));
    }
    public function getList($id){
        $data = ChatModel::leftJoin('users', 'users.id', '=', 'chat.sender_id')
        ->LeftJoin('users as r', 'r.id', '=', 'chat.receiver_id')
        ->select('chat.*', 'users.name as sender_name','r.name as receiver_name',DB::raw('IF(chat.status=0, "true", "false") as is_sender'))
        ->where('chat.sender_id',$id)
        ->get();
        return response()->json([
            "data"=>$data,
            'status'=>'success',
            'count'=>count($data)
        ]);
    }
    public function sendchat(Request $request){
        $data = new ChatModel();
        $data->sender_id = $request->sender;
        $data->receiver_id = 1;
        $data->message = $request->message;
        $data->status = $request->level=="admin"?0:1;
        if($data->save()){
            return response()->json([
                'status'=>'success',
            ]);
        }else{
            return response()->json([
                'status'=>'error',
            ]);
        }
    }
}
