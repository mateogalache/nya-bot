<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Codes;


class CreateCodeController extends Controller
{
    public function createCode(Request $request){
        return view('create-code',compact('request'));
    }
    public function postCode(Request $request){

        $user = auth()->user();


        $newCode = $user->codes()->create([
            'code' => $request->code,
            'title' => $request->title,
            'description' => $request->description,
            'keyword' => $request->keyword,
            'type' => $request->type
        ]);

        return redirect()->route('profile');
    }
}
