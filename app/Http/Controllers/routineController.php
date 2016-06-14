<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Routine;

use DB;

class routineController extends Controller
{

	/**
	* This controller function will take user input for routine name
	* then save it to the database
	* 
	* @param string $request Request object
	* @return view laravel function returns routine form page
	*/
    public function index(Request $request)
    {

    	// Grabs request data
		$routineName = $request->name;

		// Saves user input for a routine name to the database
		$Routine = Routine::create(array(
				'name' => $routineName
			));


		return view('makeRoutineForm', [

				'routineName' => $routineName
			]);

	}
}
