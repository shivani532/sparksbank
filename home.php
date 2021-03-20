 <html>
    <head>
        <title>
            Banking
        </title>

        <style>
            header{
               /* border: 1px solid black;*/
                height:80px;
                left: 0;
                top:0;
                right:0;  
                z-index: 999;
                position: fixed;
               
                text-transform: uppercase;
                letter-spacing:1px;

                /*margin-bottom:10px;  */         
            }
            .topnav{
                
                float:left;
                text-decoration: none;
                padding: 14px 16px;
                font-size: 46px;
                color:white;
                font-family: Arial, Helvetica, sans-serif;
                
                /*border:1px solid black;*/
            }
            
            .topnav-right{
                float:right;
                font-size: 20px;
                margin-top: 10px;
                margin-right: 40px;
                padding: 20px;
                color:white;
                font-family: Arial, Helvetica, sans-serif;
                /*border: 1px solid black;*/
                 
            }
            .navbar{
                color: inherit;
                text-decoration: none;
                padding-left: 28px;
                padding-right: 20px;
                padding-top: 5px;
                padding-bottom: 5px;
                border:1px solid slateblue;
                background-color:slateblue;
            }
            #logo{
                border-radius:30px;
            }
            #nav-r{
                border-radius:20px;
            }
            .body-contents{
               /* border:1px solid black;*/
                height:500px;
                margin-top:100px;
            }
            #text1{
                font-size:30px;
                text-align:center;
            }
            .i1{
                margin-top: 20px;
                margin-left: 250px;
                height: 350px;
                width: 420px;
                float: left;
                align-items: center;
               /* border: 2px solid black;*/
                
            }
            .i2{
                margin-top: 20px;
                margin-left: 120px;
                height: 350px;
                width: 450px;
                float: left;
                align-items: center;
               /*border: 2px solid black;*/
                
            }
           
            .buttons{
                margin-top:400px;
            }
            .button{
                border-radius:20px;
                padding:15px 32px;
                text-align: center;
                text-decoration:none;
                display:inline-block;
                font-size:18px;
                float:left;
                color:white;
                background-color:slateblue;
                border:1px solid slateblue;
                text-transform:uppercase;
            }
            button:focus{
                outline:none;
            }
            .b1{
                margin-left:400px;
            }
            .b2{
                margin-left:400px;
            }
            a{
                color: inherit;
                text-decoration: none;
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

    <body>
    <header>
            
            <div class="topnav">
                <a href="home.php" id="logo"class="navbar">Sparks Bank</a></div>
                <div class="topnav-right">
                    <a href="home.php" id="nav-r" class="navbar">Home</a>
                    <a href="about.php" id="nav-r" class="navbar">About</a>
                    
                </div><br>
        </div>
    </header>

    <div class="body-contents">
        <h2 id="text1">Welcome to  Sparks Bank!</h2>
        <img src="users.png" class="i1">
        <img src="transfer.jpg" class="i2">
        
        <div class="buttons">
            <button class="button b1"><a href="transfermoney.php">Users</a></button>
            <button class="button b2" ><a href="transactionhistory.php">Transfer History</a></button>
            
        </div>
    </div>

    <footer>
        <p>
    |  Copyright © 2021 Sparks Bank  |   All Rigths Reserved|
        <br>
        | Back to top | Privacy | Terms</p>
    </footer>
</body>
    </html>


    

        
