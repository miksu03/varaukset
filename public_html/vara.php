<?php
	$conn = mysqli_connect('localhost','root','root','varaukset'); 
	switch ( $_GET["valinta"]) 
		{
		case "Aitta1":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta01'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta01';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta01';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta01';";}
			break;
		case "aitta2":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta02'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta02';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta02';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta02';";}
			break;
		case "aitta3":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta03'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta03';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta03';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = aitta03;";}
			break;
		case "aitta4":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta04'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta04';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta04';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta04';";}
			break;
		case "aitta5":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta05'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta05';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta05';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta05';";}
			break;
		case "aitta6":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta6'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta6';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta6';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta6';";}
			break;
		case "aitta7":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta7'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta7';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta7';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta7';";}
			break;
		case "aitta9":
		$query="SELECT varaus FROM aitta WHERE nimi='aitta8'";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row["varaus"]==1) {$query ="UPDATE aitta SET varaus = '2' WHERE nimi = 'aitta9';";}
		if ($row["varaus"]==2) {$query ="UPDATE aitta SET varaus = '3' WHERE nimi = 'aitta9';";}
		if ($row["varaus"]==3) {$query ="UPDATE aitta SET varaus = '1' WHERE nimi = 'aitta9';";}
			break;

		default:
			$query = "SELECT * FROM `nyt`";
			break;
		}

    $result_insert = mysqli_query($conn,$query);
    header("Refresh:0; url=index.php");
?>