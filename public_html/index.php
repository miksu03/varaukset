<html>
	<link rel="stylesheet" href="styleshit.css">
	<head>
		</h1>hello world</h1>
		<div class="box-wrapper">
		<div id="box1" <?php $conn = mysqli_connect('localhost','root','root','varaukset'); $query="SELECT varaus FROM nyt WHERE nimi='tettapaikka1'"; $result = mysqli_query($conn,$query); if ($result=="1") {echo 'style="background-color: coral;"';} if ($result=="2") {echo 'background-color: red;"'} ?> > test</div>
		</div> 
		<form action="vara.php/?@=tettapaikka1" method="get">
        <input type="submit" value="Run me now!">
    </form>
	</head>
</html>