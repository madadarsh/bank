<?php
	require 'conn.php';
	$sql = "SELECT * FROM customers";

	$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang = "en">

	<head>
		<meta charset = "utf-8">
		<title>Transfer Money</title>

		<link rel = "stylesheet" type = "text/css" href = "style.css">

		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
               <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body{
	background: url(background.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
	overflow: hidden;
}

input[type=text], select {
	width: 50%;
    padding: 12px 20px;
    margin: -5px 0;
    display: block;
    border: 1px solid #486493;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
width: 50%;
    background-color: #55524c;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
     background-color: #204b53
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
                    <li><a href="transactions.php">All Transaction</a></li>
                    <li><a href="vrs.php">View All Customers</a></li>
                </ul>

            </nav>
    </header>

<main>
	<div class="form">
		<div class="container">
		<form method="POST" class="form" name="" style="font-size: 2rem;">
		
	  <label for="sender">Sender's name:</label>
	  <input type="text" name="sender" class="inpt" placeholder="Adarsh" value=""/><br><br>
		<label for="recever">Recever's name:</label>



	
		<select name="recever" class="inpt" id="recever">
		<?php
                    
                     if(mysqli_num_rows($result) > 0)  
                     {      
                    while($row = mysqli_fetch_assoc($result))                                 
                    { 
                        ?>
						<option><?php echo $row["name"];?> </option>
					
                        <?php    
                    }   
                    }

                        ?>
		
		</select>
<br>
		<label for="lname">Amount Transfer:</label>
		<input type="text" class="inpt" name="ad_amnt"/>
		<br>

	<input type="submit" name="trsfm"  value="Add Money"></p>
<?php
				 if(isset($_POST["trsfm"]))
				 {
				 	$sender = mysqli_real_escape_string($conn, $_REQUEST['sender']);
				 	$recever = mysqli_real_escape_string($conn, $_REQUEST['recever']);
					$ad_amnt = mysqli_real_escape_string($conn, $_REQUEST['ad_amnt']);
					 
				 	$sql0 = "SELECT * FROM customers WHERE name='$sender'";
				 	$result0 = mysqli_query($conn, $sql0);
					 
					while($row = mysqli_fetch_assoc($result0))
				 	{
				 		if($amt <= $row['curr_bal'])
				 		{
				 			$sql = "INSERT INTO transfers (sender, recever, ad_amnt) VALUES ('$sender', '$recever', '$ad_amnt')";
				 			$result = mysqli_query($conn, $sql);
		

				 			$sql1 = "UPDATE customers SET curr_bal = curr_bal + $ad_amnt WHERE name='$recever'";
				 			$result1 = mysqli_query($conn, $sql1);
		

				 			$sql2 = "UPDATE customers SET curr_bal = curr_bal - $ad_amnt WHERE name='$sender'";
				 			$result2 = mysqli_query($conn, $sql2);

				 			echo "<script> alert('Transaction Complete!');	window.location.href = 'transactions.php';</script>";
				 		}
				 		else
				 		{
				 			echo "<script>alert('Balance Low in your Account. Please try again.'); window.location.href = 'details.php'; </script>";
				 		}
				 	}
				 }
				 mysqli_close($conn);
			?>
			</form>
		
	</div>
	</div>
		</main>
	</body>
</html>

