<html>
<head>
<title>Simple PHP directory lister</title>
<?php
$currentdir = getcwd();
$dir = scandir($currentdir, 1);
$dirs = sizeof($dir);
?>
</head>
<body>

	<h1>Directory <?php echo $currentdir; ?></h1>
	<hr />
	<ul>
		<?php
		for ($i = 0; $i < $dirs - 2; $i++) {
			echo "<li>" . "<a href=" . '"' . $dir[$i] . '"'  . ">" . $dir[$i] . "\n";
		}	
		?>
	</ul>
</body>
</html>
