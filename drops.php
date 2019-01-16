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

<div id="modal1" class="modal">
  
  <div class="modal-content">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

</div>

<div id="modal2" class="modal">
  
  <div class="modal-content">
    <h2>Modal 2</h2>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  </div>

</div>


<div class="container">
	
<div class="grid-responsive grid-2-1">

<div>
<h2>Dropdowns</h2>

<p>
  <button onclick="openModal('modal1')">Open modal</button>
  <button onclick="openModal('modal2')">Open modal 2</button>
</p>
<p>


<div class="navi">


<a href="">Hej</a>
<a href="">Test</a>

<div class="dropdown">

  <a href="#" class="drop-btn">Klicka</a>
  <div class="drop-content drop-left">
    <a href="forms.php">Forms</a>
    <a href="tables.php">Tables</a>
    <a href="">Då</a>
    <a href="forms.php">Ny</a>
  </div>

</div>

<a href="">Hej</a>
<a href="">Test</a>

<div class="dropdown">

  <a href="#" class="drop-btn">Klicka</a>
  <div class="drop-content drop-right">
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


<a href="">Hej</a>
<a href="">Test</a>

<div class="dropdown">

  <a href="#" class="drop-btn">Klicka</a>
  <div class="drop-content drop-left">
    <a href="">Test</a>
    <a href="">Hej</a>
    <a href="">Då</a>
    <a href="">Ny</a>
  </div>

</div>

<a href="">Hej</a>
<a href="">Test</a>

<div class="dropdown">

  <a href="#" class="drop-btn">Klicka</a>
  <div class="drop-content drop-right">
    <a href="">Test</a>
    <a href="">Hej</a>
    <a href="">Då</a>
  </div>

</div>


</div><!-- End navi -->
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