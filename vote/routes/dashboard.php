<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}

    $userdata = $_SESSION['userdata'];

?>


<html>
    <title>
        dashboard
    </title>
    <link rel="stylesheet" href="../css/stylesheet.css ">
    <style>
        #backbtn{
            padding: 5px;
            border-radius: 5px;
            color: white ;
            background-color: #3498db ;
            border-radius: 5px;
            float: left;
        }
        #logoutbtn{
            padding: 5px;
            border-radius: 5px;
            color: white ;
            background-color: #3498db ;
            border-radius: 5px;
            float: right;
        }
        #profile{
            float: left;
        }
    </style>
    <body>
        <div id="mainsection">
            <div id="headersection">
                <button id="backbtn">back</button>
                <button id="logoutbtn">Log Out</button>
                <center>
                <h1>Online Voting System</h1>
                </center>
            </div>
            <hr>
            <div id="profile">
                <img src="../upload/<?php echo $userdata['tmp_name']?> " alt="error loading image"><br><br>
                <b>Name:</b><?php echo $userdata['name'] ?><br><br>
                <b>Mobile::</b><?php echo $userdata['mobile'] ?><br><br>
                <b>Address:</b><?php echo $userdata['address'] ?><br><br>
                <b>Status:</b><?php echo $userdata['status'] ?>
            </div>
            <div id="group"></div>
        </div>

    
    </body>
</html>