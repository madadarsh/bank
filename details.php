<?php 

require 'conn.php'; 
$id = $_GET['id'];
$sql = "SELECT * FROM customers WHERE id=$id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
               <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

<!----    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet"  href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">--->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>		
		<title>Banking Project </title>
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
                    <li><a href="transactions.php">All Transaction</a></li>
                    <li><a href="trf.php">Money Transfer</a></li>
                </ul>

            </nav>
    </header>
    <section>
    
        <div class="container" >
			<div class="table-responsive" style="font-size: 2rem;background: #dcd4b8cf;">
                    <table class="table table-striped">
                     <thead class="thead-dark">
                
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Balance</th>
</tr>
</thead>
<tbody> 
        <form id="trs" method="POST">
            <?php
            if(mysqli_num_rows($result) > 0)  
                    {      
                    while($row = mysqli_fetch_assoc($result))                                 
                    { 
                        ?>
            <td> <?php echo $row["name"];?></td>
            <br>
            <td><?php echo $row["email"];?></td>
            <br>
            <td><?php echo $row["curr_bal"];?></td>

                    <?php    
                        }   
                        }

                        ?>
            </tbody>
            </table>
             <button name="trfs"><a href="trf.php">Money Transfer</a></button>
            </form>
        </div>   
    </div>
    </section>
</body>

</html>
