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
        <!-- <img src="./logo/logo3.png" alt="logo" class="logo"> -->
         <div class="aboutwebsite">
            <p class="headline-aboutwebsite">
               <span class="website-title"> ტურნიკეტი —</span> დამოუკიდებელი საიტი სტუდენტებისთვის 
            </p>
            <div class="aboutwebsite-paragraphs">
                <p class="paragraph">
                <span class="blackparagraph">[ რა არის ტურნიკეტი? ]</span> <br>
                    ტურნიკეტი არის სტუდენტებისთვის შექმნილი პლატფორმა, შექმნილია დამოუკიდებლად, სტუდენტის მიერ, რომელიც მიზნად ისახავს სტუდენტებს შორის 
                    კონსპექტების გაცვლას,
                    საიტი მხოლოდ და მხოლოდ შეიქმნა იმისათვის, რომ სტუდენტებს წვდომა ჰქონდეთ ყველა ფაკულტეტის, ყველა კურსის, ყველა კონსპექტზე!
                </p>
                <p class="paragraph">
                    <span class="blackparagraph">[ როგორ დავრეგისტრირდე? ]</span> <br>
                    საიტზე დასარეგისტრირებლად საჭიროა მოცემული რეგისტრაციის ველების შევსება, რაც შეეხება მეილს, უნივერსიტეტის მეილით უნდა მოხდეს რეგისტრაცია წინააღმდეგ შემთხვევაში უბრალოდ ვერ დარეგისტრირდებით, რადგან მხოლოდ უნივერსიტეტის მეილისთვის არის მორგებული.
                    მეილზე მოგივათ ვერიფიკაციის კოდი, შეიყვანეთ და მზად ხართ! <br> <span class="blackparagraph">[ P.S გთხოვთ არ შეიყვანოთ თქვენი უნივერისტეტის მეილი აქ! ]</span>
                </p>
                <!-- <p class="paragraph">
                    <span class="blackparagraph">კონტაქტი — Feedback</span> <br>
                    საიტის გაუმჯობესებისთვის (ან საიტის გათიშვისთვის, ამა თუ იმ შესაძლო პრობლემის გამო) <br> დამიკავშირდით უნივერსიტეტის მეილზე: makats2026@agruni.edu.ge
                </p> -->

                <div class="startingpagelinks">
                    <a href="aboutme.php" class="aboutme">[ ჩემს შესახებ ]</a> 
                    <a href="contactme.php" class="contactme">[ საკონტაქტო ]</a>
                    <a href="feedback.php" class="feedback">[ ფიდბექი ]</a>
                </div>
            </div>

            <p class="paragraph warningparagraph">
                <!-- <span class="blackparagraph">გაფრთხილება:</span> <br> -->
                <span class="warning">>> საიტი არ არის შექმნილი პლაგიატიზმის წახალისებისთვის! <br> >> საიტზე არ ვაზიარებთ დავალებებს! <br> >> საიტზე განთავსებული კონსპექტები/მასალები არ არის ჩემი ნაწერი!<br> >> საიტზე მხოლოდ (ჩვენი) სტუდენტები დაიშვებიან! <br> <br>  დავეხმაროთ ერთმანეთს სწავლაში, პლაგიატიზმისა და ტყუილების გარეშე!
                </span> 
            </p>
         </div>
        <div class="content">
            <form action="registration.php" method="post" class="registration-form">
                <p class="registration-headline">
                    <span class="smallheadline">გინდა კონსპექტი?</span>
                    <span class="mainheadline">დარეგისტრირდი!</span>
                </p>
                <div class="registration-input">
                    <input type="text" name="username" id="username" placeholder="იუზერნეიმი">
                    <div class="namelastnamerow">
                        <input type="text" name="name" id="name" class="name" placeholder="სახელი">
                        <input type="text" name="lastname" id="lastname" class="lastname" placeholder="გვარი">
                    </div>
                    <input type="email" name="email-form" id="email-form" class="email-form" placeholder="უნივერსიტეტის მეილი">
                    <input type="password" name="password" id="password" class="passwrd" placeholder="პაროლი">
                    <input type="password" name="confirm-password" id="confirm-password" class="confirm-passwrd" placeholder="გაიმეორე პაროლი">
                    <input type="submit" value="რეგისტრაცია" class="registration-btn">
                    <a href="login.php" class="doyouhaveaccalready">გაქვს უკვე ექაუნთი? შემოდი რას ელოდები!</a>
                </div>
            </form>
        </div>
    </div>

    <!-- <p class="copyrighted">© Made by MK</p> -->

</body>
</html>
