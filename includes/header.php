<?php 
require_once("includes/config.php");
require_once("includes/classes/User.php"); 
require_once("includes/classes/Video.php"); 

$userLoggedIn = isset($_SESSION["userLoggedIn"]) ? $_SESSION["userLoggedIn"] : "";
$userLoggedInObj = new User($con, $userLoggedIn);

?>

<!DOCTYPE html>
<html>
<head>
    <title>VideoTube</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
    <script src="assets/js/commonActions.js"></script>
    <script src="assets/js/userActions.js"></script>

</head>
<body>
    
    <div id="pageContainer">

        <div id="mastHeadContainer">
            <button class="navShowHide">
                <img src="assets/images/icons/menu.png">
            </button>
            <a href="index.php" class="logoContainer">
                <img src="assets/images/icons/VideoTubeLogo.png" title="logo" alt="Site logo">
            </a>
            <div class="searchBarContainer">
                <form action="search.php" method="GET">
                    <input type="text" name="term" class="searchBar" placeholder="Search...">
                    <button class="searchButton">
                        <img src="assets/images/icons/search.png">
                    </button>
                </form>
            </div>

            <div class="rightIcons">
                <a href="upload.php">
                    <img src="assets/images/icons/upload.png" class="upload">
                </a>
                <a href="#">
                    <img src="assets/images/profilePictures/default.png">
                </a>
            </div>
        </div>

        <div id="sideNavContainer" style="display:none;">
        
        </div>

        <div id="mainSectionContainer">
        
            <div id="mainContentContainer">