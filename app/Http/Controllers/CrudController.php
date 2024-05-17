<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Dotenv\Validator;s
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
   public function adddata(){

    return view('adddata');
   }
   public function submit(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|min:4|max:50',
        //     'email' => 'required|email|unique:users',
        //     'contact'=>'required|min:10|max:10',
        //     'image'=>'required',
            
        // ]);

        // if ($validator->passes()) {

            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->contact = $request->contact;
            
            // if($request->hasFiles('images')){
            //     $allowedfileExtension=['jpg','jpeg','png'];
            //     $files = $request->file('images');
            //     foreach($files as $file){
            //         $filename = $file->getClientOriginalName();
            //         $extension = $file->getClientOriginalExtension();
            //        $check=in_array($extension,$allowedfileExtension);
            //        if($check)
            //        {
            //        $users= User::create($request->all());
            //        foreach ($request->images as $photo) {
            //        $filename = $photo->store('images');
            //        User::create([
            //        'images' => $filename
            //        ]);
            //        }
            //     }

            // }
            $user->save();
            return redirect()->route('user.adddata')->with('success', 'You have registered successfully');
    //     } else {
    //         return redirect()->route('user.submit')
    //             ->withInput()
    //             ->withErrors($validator);
    //     }
    }
    }
   

