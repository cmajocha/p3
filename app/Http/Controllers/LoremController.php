<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Badcow\LoremIpsum\Generator as Generate;
class LoremController extends Controller {

    public function __construct() {
    }
    /**
         * Responds to requests to GET /lorem/create
         */
    public function getCreate() {
           return view('lorem.create');
}

/**
     * Responds to requests to POST /lorem/create
     */

  public function postCreate(Request $request) {
    // generates paragraphs of lorem ipsum text determined by how many users selects
    $generator = new Generate();
    if (!isset($total)) {
    $paragraphs = $generator->getParagraphs(\Input::get('total'));
    return view('lorem.create')->with('paragraphs', $paragraphs);
  }
}
}
