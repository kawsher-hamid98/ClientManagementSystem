<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Door;
use App\file;
use App\single_door_file;
use App\double_door_file;
use App\single_almirah;
use App\double_almirah;

class majumderController extends Controller
{

    public function timber() {

    	$user = file::all();
    	return view('majumder.majumder_timber', compact('user'));
    	// return view('home', compact('user'));
    }

    public function furniture1() {

        return view('majumder.majumder_furniture');

    }

    public function home() {

    	$user = file::all();

    	return view('home', compact('user'));
    }


	public function furniture() {

        $door = Door::all();
        return view('furniture.Door', compact('door'));
    }

    public function double_door() {

        $double_door = double_door_file::all();
        $double_door = double_door_file::paginate(10);
        return view('furniture.double_door', compact('double_door'));
    }

    public function single_door() {

        $single_door = single_door_file::all();
        $single_door = single_door_file::paginate(5);
        return view('furniture.single_door', compact('single_door'));
    }

    public function single_almirah() {

        $single_almirah = single_almirah::all();
        $single_almirah = single_almirah::paginate(5);
        return view('furniture.single_almirah', compact('single_almirah'));
    }

    public function double_almirah() {

        $double_almirah = double_almirah::all();
        $double_almirah = double_almirah::paginate(5);
        return view('furniture.double_almirah', compact('double_almirah'));
    }
}



