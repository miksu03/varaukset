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
		<select id="cars" name="cars">
		<?php 
	$query = "SELECT * FROM `nyt`";
	$result = mysqli_query($conn,$query);
        while ($row = mysqli_fetch_array($result)) {
        echo "<option>".$row["nimi"]."</option>";}
	?>
	<select>
        <input type="submit" value="Run me now!"></input>
    </form>
	</head>
</html>