<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];

    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Subject: " . $subject . "<br><br><br>";


}
?>

<button onclick="window.location.href = 'connect-me.html';">Go Back</button>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .social-icons {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        .social-icons li {
            margin: 0 10px;
        }

        .social-icons a {
            color: #555;
            font-size: 20px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #007bff;
        }
    </style>
</head>
<body>
    <footer>
        <ul class="social-icons">
            <li><a href="https://www.linkedin.com/in/naahi-mumtaj-rihan-a173001b0"><i class="fab fa-linkedin"></i></a></li>
            <li><a href="https://github.com/naahi-rihan"><i class="fab fa-github"></i></a></li>
            <li><a href="https://www.facebook.com/naahi.rihan"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.researchgate.net/profile/Naahi-Rihan"><i class="fab fa-researchgate"></i></a></li>
            <li><a href="https://devpost.com/nahi-mumtaj"><i class="fab fa-dev"></i></a></li>
            <li><a href="https://instagram.com/naahi_mumtaj_rihan"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/RihanNaahi"><i class="fab fa-twitter"></i></a></li>
        </ul>
    </footer>
</body>
</html>

