<!doctype html>
<html>
<head>
    <title>LOREM IPSUM GENERATOR</title>
    <meta charset='utf-8'>
    <link href="/css/styles.css" type='text/css' rel='stylesheet'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- A Google Font: Open Sans -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>


</head>
<body>
    <div class="container">
  		<div class="row">
<h1 class="site-title"><strong>P3: LOREM TEXT</strong></h1>
      </div>

<div class="body-content">
    <section>

      <form method="POST" action="lorem/create" accept-charset="UTF-8">
      <input type='hidden' name='_token' value='{{ csrf_token() }}'>
<p>
  <label for="paragraphs">How many paragraphs do you want?:</label>
  <select name="number">
    <option value="0">0</option>
    <option value="1" selected="selected">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
<p>
    <input class="btn btn-success" type="submit" value="lorem-paragraph-generator">
</form>

    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</div>
</body>
</html>
