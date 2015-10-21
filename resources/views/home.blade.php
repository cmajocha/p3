@extends('layouts.master')

@section('title')
    P3: Home
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}
@section('head')
@stop

@section('content')
<div class="container">
  <div class="row">
<div class="body-content">
    <p>This is my random data generator project for P3. You have two types of data that you can get from this project</p>
<ol>
  <li><a href="/lorem/create"><strong>Get Some Lorem Ipsum Text:</strong></a></li> Need to plug in some content? I can help. Pick how many paragraphs you want, and get all the lorem ipsum text you can handle.</p>
  <li><a href="/users/create"><strong>Get Some Users:</strong></a></li> Randomly generate some fake folks to help you flesh out your program.
</ol>
</div>
</div>
</div>

@stop

{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')
@stop
