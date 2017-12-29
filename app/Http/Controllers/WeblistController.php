<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Weblist;

class WeblistController extends Controller
{
    public function getlist(){
      $list = Weblist::all();
      return response($list);
    }

    public function postlist(Request $request){
      $weblist = new Weblist;
      $weblist->description = $request->todo;
      $weblist->save();
      if($weblist->id){
        return response("Success Adding Data",200);
      }else{
        return response("Error Adding Data",400);
      }
    }

    public function deletelist($id){
      $weblist = Weblist::find($id);
      $weblist->delete();
      if($weblist){
        return response("Success Delete Data",200);
      }else{
        return response("Error Delete Data",400);
      }
    }

    public function deleteselectedlist(Request $request){
      $decode = json_decode($request->selected);
      $weblist = Weblist::whereIn("id",$decode);
      $weblist->delete();
      if($weblist){
        return response("Success Delete Data",200);
      }else{
        return response("Error Delete Data",400);
      }
    }
}
