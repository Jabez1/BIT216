﻿<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Testing History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="assignment.css" rel="stylesheet" type="text/css"/>
</head>

<body onload="getPatientTest.php">
<header>
<img src="Images/logo.png" alt="LOGO" id="logo">
</header>
<nav class="navbar justify-content-end p-0"> 
    <a href="Logout.php">Log Out </a> 
</nav>

<main>
    <div id="container" class="container bg-light">
        <div class="d-flex justify-content-md-between p-4 col-12 col-sm-10">
            <div class="d-flex flex-column align-items-center p-4 col-12 col-sm-12 col-md-7">
                <h1>Profile Details</h1>
                <div id="picFrame">
                    <img src="Images/picture.jpg" onError="this.onerror=null;this.src='Images/defaultPfp.jpg';" />
                </div>    
                <label class="align-self-start" id= "name">Patient Name: <?php echo $_SESSION['info']['fullName']; ?></label>
                <label class="align-self-start" id="id">Patient ID:  <?php echo $_SESSION['info']['patientID']; ?></label>
                <label class="align-self-start" id="status">Patient Status:  <?php echo $_SESSION['info']['type']; ?></label>
                <br>
                <a class="btn button" href="Logout.php">Log Out</a>
            </div>
        
            <div class="bg-custom table col col-sm-12 col-md-7 p-0" id="patientTable">
                <table id="patTable" class= "text-light">
                    <thead>
                        <tr>
                            <th> Test ID </th>
                            <th> Test Date </th>
                            <th> Result </th>
                            <th> Result Date </th>
                            <th> Status </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($_SESSION['testArray'] as $index => $arrayRow) {
                            echo '<tr>';
                            echo '<td>'. $arrayRow['testID'] .'</td>';
                            echo '<td>'. $arrayRow['testDate'] .'</td>';
                            if($arrayRow['result'] == null){
                                echo '<td>TBD</td>';
                                echo '<td>TBD</td>';
                            }else{
                                echo '<td>'. $arrayRow['result'] .'</td>';
                                echo '<td>'. $arrayRow['resultDate'] .'</td>';
                            }
                            echo '<td>'. $arrayRow['status'] .'</td>';
                            echo '</tr>';
                        }
                        ?>
                        <tr>
                        </tr>    
                    </tbody>
                </table>
            </div>
        </div>    
    </div>
    
</main>
<footer>
    <p>If there are any issues, contact us at: 012983312
    </p>
    Copyright &copy; 2020
    </footer>
</div>

    
</body>


</html>