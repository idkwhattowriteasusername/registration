<?php 

include_once "db.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>რეგისტრაცია</title>
</head>
<body>
    <div class="fullcontent">
        <img src="./logo/logo3.png" alt="logo" class="logo">
        <div class="content">
            <form action="registration.php" method="post" class="registration-form">
                <p class="registration-headline">
                    <span class="smallheadline">ისევ კონსპექტი გინდა ხო?</span>
                    <span class="mainheadline loginheadline">კეთილი იყოს შენი დაბრუნება!</span>
                </p>
                <div class="registration-input">
                    <input type="text" name="username" id="username" placeholder="იუზერნეიმი ან უნივერსიტეტის მეილი">
                    <!-- <div class="namelastnamerow">
                        <input type="text" name="name" id="name" class="name" placeholder="სახელი">
                        <input type="text" name="lastname" id="lastname" class="lastname" placeholder="გვარი">
                    </div> -->
                    <!-- <input type="email" name="email-form" id="email-form" class="email-form" placeholder="უნივერსიტეტის მეილი"> -->
                    <input type="password" name="password" id="password" class="passwrd" placeholder="პაროლი">
                    <!-- <input type="password" name="confirm-password" id="confirm-password" class="confirm-passwrd" placeholder="გაიმეორე პაროლი"> -->
                    <input type="submit" value="რეგისტრაცია" class="registration-btn">
                    <a href="registration.php" class="doyouhaveaccalready">არ გაქვს ექაუნთი? შექმენი რას უცდი?!</a>
                </div>
            </form>
        </div>
    </div>


</body>
</html>
