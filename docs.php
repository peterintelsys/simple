<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
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

<h2 id="text">Text</h2>

<h1>Välkommen</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<h2>Hej 123456789</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<hr>

<h2 id="buttons">Buttons</h2>

<p>Måste ändra skillnaden på ankare och button</p>

<p>
	<button>Om oss</button>
	<button class="button-primary">Om oss</button>
	<button class="btn-danger">Om oss</button>
	<a href="" class="button btn-danger">Test</a>
	<a href="" class="button">Test</a>
</p>
<p><pre><code>class="button", class="button-primary", class="button btn-danger"</code></pre></p>
<a href="" class="u-pull-right">Tillbaka</a>
<br>
<hr>

<a href="javascript:void(0);" onclick="showid('one')">Testar hide</a>

<br><br>

<div id="one" class="hide">Detta är gömd text</div>

</div>


<div>

<?php include('sidebar.php') ?>

</div>

</div>

<script type="text/javascript" src="assets/js/simple.js"></script>
</body>

</html>