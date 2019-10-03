<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\single_almirah;
use App\double_almirah;

class FurnitureController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function show_almirah() {
    	return view('almirah_upload');
    }

    public function store_single_almirah(Request $request) {

        $input = Input::all();

        if ($request->hasFile('file')) {

        $file  = $request->file('file');

        foreach ($file as $key => $file) {

         $filename = $file->getClientOriginalName();
         $fileSize = $file -> getSize();
         $destinationPath = base_path() . '\public\furniture\single_almirah';
         $file->move($destinationPath, $filename);

         $user = new single_almirah;
          
         $user -> name  = $filename; 
         $user -> size  = $fileSize;
         $user -> title = $input['title'][$key];

         $user -> save();

        }

      return back();
    }
    
  }

  public function store_double_almirah(Request $request) {

        $input = Input::all();

        if ($request->hasFile('file')) {

        $file  = $request->file('file');

        foreach ($file as $key => $file) {

         $filename = $file->getClientOriginalName();
         $fileSize = $file -> getSize();
         $destinationPath = base_path() . '\public\furniture\double_almirah';
         $file->move($destinationPath, $filename);

         $user = new double_almirah;
          
         $user -> name  = $filename; 
         $user -> size  = $fileSize;
         $user -> title = $input['title'][$key];

         $user -> save();

        }

      return back();
    }
    
  }


}