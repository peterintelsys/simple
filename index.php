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

<div class="main-nav">

<div style="font-size: 26px;">Simple</div>
<div style="display: flex; align-items: center;">

<div id="navi" class="hide">
<div>About</div>
<div>Contact</div>
</div>	
	
<div id="top-bar" class="bar-container" onclick="change()">
<div id="barone" class="bar1"></div>
<div id="bartwo" class="bar2"></div>
<div id="barthree" class="bar3"></div>
</div>	

</div>

</div>

<div class="container">
<h1>Välkommen</h1>
<h2>Hej 123456789</h2>

<a href="javascript:void(0);" onclick="showid('one')">Testar hide</a>

<br><br>

<div id="one" class="hide">Detta är gömd text</div>

</div>	
<script type="text/javascript" src="assets/js/simple.js"></script>
</body>

</html>