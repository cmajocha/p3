<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
use Faker\Factory as Faker;
class UserController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }
    /**
    * Responds to requests to GET /users
    */
    public function getIndex() {
      $faker = Faker::create();
      return view('users.get')->with('faker->name . " " . faker->address ', $faker->name . " " . $faker->address );
        //
    }
}
