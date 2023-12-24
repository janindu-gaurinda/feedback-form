<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <link rel="stylesheet" href="../assets/navi bar/navigation_bar.css">
    <!-- <link rel="stylesheet" href="./feedb.css"> -->
    <link rel="stylesheet" href="./fb.css">

    <link rel="stylesheet" href="../assets/footer/footer.css">

</head>

<body>
    <div class="main_feedback_page_container">
        <!-- Navigation bar -->
        <nav class="navigation_bar_main_container">
            <div class="company_logo">
                <img src="../assets/navi bar/logo.png" alt="company_logo">
            </div>
            <div>
                <div class="navbar" id="myNavbar">
                    <a href="../home1.html">Home</a>
                    <a href="../about.html">About</a>
                    <a href="./chef.html">Chef</a>
                    <a href="../menu.html">Menu</a>
                    <a href="../gallery/gallery_main.php">Gallery</a>
                    <a href="../event.html">Event</a>
                    <a href="../contact.html">Contact Us</a>
                    <a href="../feedback/feedback.php">Feedback</a>
                    <a href="../book/book.html">Book</a>
                    <a class="icon" onclick="myFunction()">&#9776;</a>
                </div>
                <script src="./assets/navi bar/header.js"></script>
            </div>
            <div class="user_logo">
                <a href="../user/log_in.html"> <img src="../assets/navi bar/user.png" alt="user_logo"></a>
            </div>
        </nav>
        <!-- ----------------------------------------------------------------------------------- -->
        <div class="add_feedback_box">
            <h1>Customer Rate & Review</h1> <br>
            <a href="./feedback_form.html">Write a Review</a>
        </div>
        <div class="feedback_post_container">
            <div class='fb_continer'>
                <?php
                // Define the displayStarRating function here
                function displayStarRating($rating)
                {
                    $stars = '';
                    $maxRating = 5; // Change this if your rating scale is different
                    $roundedRating = round($rating);

                    for ($i = 1; $i <= $maxRating; $i++) {
                        if ($i <= $roundedRating) {
                            $stars .= '<i>&#9733;</i>';
                        } else {
                            $stars .= '<i>&#9734;</i>';
                        }
                    }

                    return $stars;
                }
                // <!-- ---------------------------------------------------------------------- -->

                $conn = mysqli_connect('localhost', 'root', '', 'ceylon paradies');
                $query = "SELECT * FROM `feedback` ORDER BY id DESC";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<div class='feedback_post_background'>
                    <h1>{$row['name']}</h1>
                    <h4>{$row['date']}   " . "<div class='star-rating-container'>" . displayStarRating($row['rate']) . "</div>"   . " {$row['rate']}/5</h4>
                    <p>{$row['feedback_msg']}</p>
                </div>";
                }
                ?>
            </div>

        </div>
        <!-- ----------------------------------------------------------------------------------- -->


        <!-- fotter -------------------------------------------->
        <footer>
            <div class="footer_page_main_container">
                <div class="footer_about">
                    <h1>Ceylon Paradies</h1>
                    <br>
                    <p>Welcome to Ceylon Paradise,<br>
                        your seaside dining destination!
                        <br>Explore our menu, prices, <br>and event arrangements.
                        <br>Register to reserve tables or <br>plan special events.
                    </p>
                    <br>
                    <p>© 2023 Ceylon Paradise</p>
                </div>
                <!-- --------------------------------------------------------- -->
                <div class="open_hours">
                    <h3>Open Hours</h3>
                    <br>
                    <p>7 days a week</p>
                    <br>
                    <p>9 AM - 10 PM</p>
                </div>
                <!-- --------------------------------------------------------- -->
                <div class="footer_Contact">
                    <h3>Contact</h3>
                    <br>
                    <p>39 1st Flr 3rd Cross Street, 11,Colombo</p><br>
                    <p>(+94) ( 011) 2440768</p><br>
                    <p>ceylonparadise123@gmail.com</p><br>
                    <p><a href="mailto:ceylonparadise123@gmail.com">Send email</a></p>
                </div>
                <!-- --------------------------------------------------------- -->
                <div class="footer_links">
                    <h3>Quick Links</h3><br>
                    <a href="https://maps.google.com">Google Maps</a><br><br>
                    <a href="../book/book.html">Book</a><br><br>
                    <a href="../user/log_in.html">User Login</a><br><br>
                    <a href="../admin/admin.html">Admin Login</a>
                    <!-- --------------------------------------------------------- -->
                </div>
            </div>
</foote>
    </div>

</body>

</html>