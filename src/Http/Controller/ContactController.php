<?php


namespace Codestacx\Contact\Http\Controller;


use App\Http\Controllers\Controller;
use Codestacx\Contact\model\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller{

    public function index(Request $request){
        $contacts = DB::table('contacts')->get();
        return view('codestacx::contact',compact('contacts'));
    }
    public function send(Request $request){
       DB::table('contacts')->insert(['username'=>$request->username]);
       return redirect()->back()->with(['success'=>'done']);
    }
}
