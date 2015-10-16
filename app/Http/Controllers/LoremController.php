<?php

namespace p3\Http\Controllers;
use p3\Http\Controllers\Controller;
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
    public function postCreate() {
      $generator = new Generate();
      $paragraphs = $generator->getParagraphs(3);
      return view('lorem.get')->with('paragraphs', $paragraphs);
    }
}
