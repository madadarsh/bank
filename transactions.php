<?php
	include "conn.php";
	$sql = "SELECT * FROM transfers";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang = "en">

	<head>
		<meta charset = "utf-8">
		<title>All Transactions</title>

		<link rel = "stylesheet" type = "text/css" href = "style.css">
		<!---     <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet"  href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<style>
body{
	background: url(background.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
	overflow: visible;
}
</style>
	</head>

	<body>
	<header>
            <nav>
                <input type="checkbox" id="checknav">

                <label for="checknav" class="checkbtnnav">
                    <i class="fas fa-bars"></i>
                </label>

                <label for="" class="logo">
                    Bankinger

                </label>

                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="vrs.php">View All Customers</a></li>
                    <li><a href="trf.php">Money Transfer</a></li>
                </ul>

            </nav>
        </header>
		<center>

				
		<div class="container" style="margin: 0px; padding: 31px;" >
			<div class="table-responsive" style="font-size: 1rem;background: #dcd4b8cf;">

			<h1 class = "hfont">List of all Transactions</h1>

                    <table class="table table-striped">
                     <thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Sender</th>
						<th>Recever</th>
						<th>Amount</th>
					</tr>
</thead>
<?php
					if($num > 0)
					{
						while($row = mysqli_fetch_assoc($result))
						{
                            echo "<tr>
                            <td>" .$row['t_id']. "</td>
                            <td>" .$row['sender']. "</td>
                            <td>" .$row['recever']. "</td>
                            <td>" .$row['ad_amnt']. "</td>
                            </tr>";
						}
					}

					mysqli_close($conn);
				?>

				</table>
</div>
</div>
			
	</body>
</html>