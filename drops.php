<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Simple</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="assets/css/simple.css">

</head>

<body>

<?php include('main-nav.php')?>

<div class="container">
	
<div class="grid-responsive grid-2-1">

<div>
<h2>Dropdowns</h2>
<p>


<div class="navi">


<a href="">Hej</a>
<a href="">Test</a>

<div class="dropdown">

  <div class="drop-btn">Klicka</div>
  <div id="drop" class="drop-content drop-left">
    <a href="">Test</a>
    <a href="">Hej</a>
    <a href="">Då</a>
  </div>

</div>

<a href="">Hej</a>
<a href="">Test</a>

<div class="dropdown">

  <div class="drop-btn" onclick="showid('drop1')">Klicka</div>
  <div id="drop1" class="drop-content drop-right">
    <a href="">Test</a>
    <a href="">Hej</a>
    <a href="">Då</a>
  </div>

</div>


</div><!-- End navi -->


</p>

<p>

<h5 id="js">html</h5>
<pre><code><xmp>
<div class="navi">

<div class="dropdown">

  <div class="drop-btn" onclick="showid('drop')">Klicka</div>
  <div id="drop" class="drop-content">
    <a href="">Test</a>
    <a href="">Hej</a>
    <a href="">Då</a>
  </div>

</div>

<a href="">Hej</a>

<div class="dropdown">

  <div class="drop-btn" onclick="showid('drop1')">Klicka</div>
  <div id="drop1" class="drop-content">
    <a href="">Test</a>
    <a href="">Hej</a>
    <a href="">Då</a>
  </div>

</div>

</div>
</xmp></code></pre>

</p>

</div>

<div>
    
<?php include('sidebar.php') ?>

</div>

</div><!-- End of container -->

<script type="text/javascript" src="assets/js/simple.js"></script>
</body>

</html>