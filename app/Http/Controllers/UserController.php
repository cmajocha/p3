<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
class UserController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }

    public function getCreate() {
           return view('users.create');
       }

    public function postCreate(Request $request) {

      $num = \Input::get("totalusers");
      $myusers = Array();
      $faker = Faker::create();
      for ($i=0; $i < $num; $i++) {
      $myusers[$i] = Array("name" => $faker->name, "address" => $faker->address, "email" => $faker->email);
    }
return view('users.create')->with('myusers', $myusers);
}

}
