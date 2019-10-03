<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\single_door_file;
use App\double_door_file;

class DoorController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function show_door() {
    	return view('double_door_file');
    }

	public function store_single_door(Request $request) {

        $input = Input::all();

        if ($request->hasFile('file')) {

        $file  = $request->file('file');

        foreach ($file as $key => $file) {

         $filename = $file->getClientOriginalName();
         $fileSize = $file -> getSize();
         $destinationPath = base_path() . '\public\furniture\single_door';
         $file->move($destinationPath, $filename);

         $user = new single_door_file;
          
         $user -> name  = $filename; 
         $user -> size  = $fileSize;
         $user -> title = $input['title'][$key];

         $user -> save();

        }

      return back();
    }
    
  }
    
   public function store_double_door(Request $request) {

        $input = Input::all();

        if ($request->hasFile('file')) {

        $file  = $request->file('file');

        foreach ($file as $key => $file) {

         $filename = $file->getClientOriginalName();
         $fileSize = $file -> getSize();
         $destinationPath = base_path() . '\public\furniture\doubledoor';
         $file->move($destinationPath, $filename);

         $user = new double_door_file;
          
         $user -> name  = $filename; 
         $user -> size  = $fileSize;
         $user -> title = $input['title'][$key];

         $user -> save();

        }

      return back();
    }
    
  }

}
