<?php
namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
class UserController extends Controller {
    public function __construct() {
        # Put anything here that should happen before any of the other actions
    }
    /**
    * Responds to requests to GET /users
    */
    public function getIndex() {
        return 'Get Some Users';
    }
}
