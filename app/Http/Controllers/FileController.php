<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\file;
use App\home_file;
use Input;

class FileController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

	

    public function show() {
    	return view('file');
    }



    public function store(Request $request) {

  
  if ($request->hasFile('file')) {
      $files = $request->file('file');
      foreach($files as $file){
  	
      // $files = $request->file('file');
      $filename = $file->getClientOriginalName();
    $fileSize = $file -> getClientSize();
      $destinationPath = base_path() . '\public\images';
      $file->move($destinationPath, $filename);

     		$user = new file;
    		$user -> name = $filename;
    		$user -> size = $fileSize;
    		$user -> save();
      }
	}
  return "data saved successfully";
}

}