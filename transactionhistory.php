<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <style>
    #logo{
        
        margin-top:10px;
        margin-left:10px;
        float:left;
        font-size:46px;
        font-family: Arial, Helvetica, sans-serif;
        background-color:slateblue;
        border-color: slateblue;
        color:white;
        letter-spacing:1px;
        border-radius:40px;
        padding:4px 6px;
        text-transform:uppercase;
        

    }
    
     .topnav-right{
         float:right;
         display:inline;
         /*border:1px solid black;*/
         margin-right:20px;
         margin-top:20px;
     }
     li{
         display:inline;
         float:left;
         /*border:1px solid black;*/
         margin-top:10px;
         margin-right:40px;
         margin-left:10px;
         font-size:18px;
         border-radius:30px;
         text-transform:uppercase;
         background-color:slateblue;
         color:white;
         border-color:white;
         padding-left: 8px;
         padding-right: 8px;
         text-align: center;
         
     }
     a{
        color:inherit;
         text-decoration:none;
         
     }
     a:hover{
        color:inherit;
         text-decoration:none;
         
     }
        footer{
                background-color: #222;
                color:#fff;
                font-size: 14px;
                bottom: 0;
                position:fixed;
                left:0;
                right:0;
                text-align: center;
                z-index:999;
            }
            
            </style>
</head>

<body style="background-color : #Fff;">
<header>
            
            <div class="topnav">
                <a href="home.php" id="logo"class="navbar">Sparks Bank</a></div>
                <div class="topnav-right">
                <ul>
                    <li><a href="home.php" id="nav-r" class="navbar">Home</a></li>
                    <li><a href="about.php" id="nav-r" class="navbar">About</a></li>
                    
                </div><br>
        </div>
    </header>


	<div class="container">
        <h2 class="text-center pt-4" style="color : black; margin-top:40px;">TRANSACTION HISTORY</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead style="color : black;">
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
              
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer>
        <p>
    |  Copyright © 2021 Sparks Bank  |   All Rigths Reserved|
        <br>
        | Back to top | Privacy | Terms</p>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
