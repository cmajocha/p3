@extends('layouts.master')

@section('title')
    P3: User Generator
@stop


<!--This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.-->
@section('head')
@stop

@section('content')
<div class="container">
  <div class="row">
<div class="body-content">
      <form method="POST" action="/lorem/create" accept-charset="UTF-8">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
<p>
  <label for="total">How many total paragraphs do you want?:</label>
  <select name="total" id="total">
    <option value="1" selected="selected">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
  </select>
<p>
    <input class="btn btn-primary" type="submit" value="Get Some Text!">
</form>
<br />
<hr />
<b>Lorem Text...</b>
<br /><br />

@if(isset($paragraphs))
                @foreach($paragraphs as $paragraph)
                    <p> {!! $paragraph !!} </p>
                @endforeach
    @endif
  </div>
  </div>
</div>
@stop

<!--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
-->
@section('body')
@stop
