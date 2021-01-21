<?php 

require 'conn.php'; 
$sql = "SELECT * FROM customers ";

$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
               <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Banking Project </title>
<style>
body{
	background: url(background.jpg) no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;
	overflow: hidden;
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
                    <li><a href="trf.php">Money Transfer</a></li>
                </ul>

            </nav>
        </header>
        <center>
        <div class="container" style="margin: 0px; padding: 31px;" >
			<div class="table-responsive" style="font-size: 2rem;background: #dcd4b8cf;">
                    <table class="table table-striped" style="margin-block: 84px;">
                     <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th> 
                            <th>Current Balance</th>
                            <th>Get Info</th>
                        </tr>
                    </thead>
                    
                    <?php
                    
                    if(mysqli_num_rows($result) > 0)  
                    {      
                    while($row = mysqli_fetch_assoc($result))                                 
                    { 
                        ?>
                    <tbody>
                        <tr>
                        <td><?php echo $row["name"];?></td>
                        <th><?php echo $row["email"];?></th>
                        <th><?php echo $row["curr_bal"];?></th>  
                        <th> <a href = "details.php?id=<?php echo $row["id"]; ?>" >Details </a></th>
                        </tr>
                        </tbody>
                        <?php    
                        }   
                        }

                        ?>
                
                </table>

            </div>   
        </div>
        </center>

    </body>
</html>