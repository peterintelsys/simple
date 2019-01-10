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
<h2>Forms</h2>
<p>

<form>
    <label>Namn</label>
    <input type="text" name="test">
    <label>Adress</label>
    <input type="text" name="adress">
    <button type="submit" class="button-primary">Spara</button>
</form>

</p>

<p>

<h4 id="js">Form html</h4>
<pre><code><xmp>
<form>
    <label>Namn</label>
    <input type="text" name="test">
    <label>Adress</label>
    <input type="text" name="adress">
    <button type="submit" class="button-primary">Spara</button>
</form>
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