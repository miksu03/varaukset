<!DOCTYPE html>
<?php $conn = mysqli_connect('localhost','root','root','varaukset'); 
$query="SELECT varaus FROM nyt WHERE nimi='tettapaikka1'"; 
$result = mysqli_query($conn,$query); 
$row = mysqli_fetch_array($result); 
 ?>
<html>
	<link rel="stylesheet" href="styleshit.css">
	<head>
		<h1>hello world</h1>
		<div class="box-wrapper">
		<div id="box1" style="<?php if ($row["varaus"] == 1) {echo 'background-color: blue;';} if ($row["varaus"] == 2) {echo 'background-color: red;';} ?>"> test</div>
		</div> 
		<form action="vara.php" method="get">
        <input type="submit" value="Run me now!"></input>
    </form>
	<?php 
	
	?>
	</head>
</html>