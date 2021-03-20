<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
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
      
      button{
        background-color:slateblue;
        color: white;
      }
      button:hover{
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        
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

<body style="background-color : #fff">
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
<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>



<div class="container">
        <h2 class="text-center pt-4" style="color : black; margin-top:40px;">TRANSFER MONEY</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black;">
                        <thead style="color : black;">
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : slateblue;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
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