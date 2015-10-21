<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
class UserController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    /**
         * Responds to requests to GET /users/create
         */
    public function getCreate() {
           return view('users.create');
       }

       /**
            * Responds to requests to POST /users/create
            */

    public function postCreate(Request $request) {
      // get the value from my form input and store it un a variable
      $num = \Input::get("totalusers");
      // set up an array variable to store the restuls of my Faker::create function
      $myusers = Array();
      // run my faker create function store the itterative data in my array variable
      $faker = Faker::create();
      for ($i=0; $i < $num; $i++) {
      $myusers[$i] = Array("name" => $faker->name, "address" => $faker->address, "email" => $faker->email);
    }
    //pass my array variable until my view
return view('users.create')->with('myusers', $myusers);
}

}
