<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator as Generate;
class LoremController extends Controller {

    public function __construct() {
    }

    public function getCreate() {
           return view('lorem.create');
}
    /**
    * Responds to requests to GET /lorem
    */
  public function postCreate(Request $request) {
    $generator = new Generate();
    if (!isset($total)) {
    $paragraphs = $generator->getParagraphs(\Input::get('total'));
    return view('lorem.create')->with('paragraphs', $paragraphs);
  }
}
}
