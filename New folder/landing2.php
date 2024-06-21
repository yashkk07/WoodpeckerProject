<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="arriveoclock,travel,alarm,tracker">
    <meta name="description" content="Your Go-To App for Stress Free Travel Arrivals">
    <title>Arrive O"Clock - Your Ultimate Travel Companion</title>
    <link rel="icon" type="image/x-icon" href="whitelogo.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
         * {
            box-sizing: border-box;
        }
        :root {
            --primary-color: #007cb9;
            --font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            font-family: var(--font-family);
            background-color: #d5eeff;
            display: flex;
            /* Add background dot pattern */
            background-image: radial-gradient(circle, #00000069 1px, transparent 1px);
            background-size: 20px 20px;
        }

       .hero-image {
            background-image: url("bcg-modified.jpeg");
            background-size: cover;
            height: 400px;
            opacity: 0;
            transition: opacity 0.6s ease;
        }
       .hero-image.show {
            opacity: 1;
        }

        .counter {
            font-size: 2rem;
            animation: pulse 1s infinite alternate;
            color: #4a90e2;
        }

        .text-blue-custom, .text-blue-custom1 {
            color: #183661;
        }

        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
        .bg-blue-custom {
            background-color: #95edff; 
        }
        .grid > div {
            border:transparent;
        }

        .slider-container {
            width: auto; 
            overflow: hidden;
            padding: 35px 0 25px 0;
            margin:0 5px;
        }

        .slider {
        display: flex;
        transition: transform 0.5s ease;
        }

        .slide {
        flex: 0 0 auto;
        width: 90%;
        max-width: 450px;
        height: auto;
        margin: 5px; 
        padding: 25px 5px;
        
        }
        .column {
        float: left;
        padding: 10px;
        margin-left: 20px;
        }
        .column.right1 {
            width: 65%;
        }
        .column.left {
            width: calc(25% - 20px);
        }
        .column.right {
            width: calc(75% - 20px);
        }
        
        .row {
            display: flex;
            align-items: stretch;
        }

        .row::after {
        content: "";
        display: table;
        clear: both;
        }
        @media screen and (max-width: 600px) {
        .column.left, .column.right {
            width: 90%;
        }
        }*/
        .column.left1 {
            width:25%;
            margin: 10px 5%;
            height: max-content;
        }
        .column-image {
            width: 100%;
            height: auto;
            display: block;
        }
        .loader-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
        }
        .content.hidden {
            display: none;
        }
        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }
        .entry-animation {
            animation: slideIn 1.5s ease forwards;
        }
        .contact{
                font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande", "Lucida Sans", Arial, sans-serif;
                padding-bottom: 10px;
                outline: 0px;
            }
        .scroll-container {
            background-color: #007cb9;
            overflow: auto;
            white-space: nowrap;
            padding: 10px;
            }
        div.scroll-container img {
                padding: 10px;
            }
            ::-webkit-scrollbar{
                width: 0px;
            }
            .featuresdiv {
    text-align: center;
    position: absolute;
    z-index: -11;
    left: 50%;
    transform: translate(-50%, -85%);
    height: 60vh;
    width: 95vw;
    border-radius: 0 0 100% 100%;
    background-color: #007cb9;
}
@media screen and (max-width: 1200px) and (min-width: 600px) {
    .featuresdiv {
        height: 50vh;
    }
}
@media screen and (max-width: 600px) {
    .featuresdiv {
        height: 40vh;
    }
}
.resp {
    display: none; /* Default to hidden on smaller screens */
}

/* Styles for larger screens */
@media screen and (min-width: 768px) {
    .resp {
        display: block; /* Show the div on larger screens */
    }
}

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        transition: ease-in-out 0.2s;
        }

        li a:hover:not(.active) {
        background-color: #004a76;
        }

        .active {
        background-color: #04AA6D;
        }

        /* Modal styles */
        .modal {
                display: none;
                position: fixed;
                z-index: 1;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: auto;
                background-color: rgba(0,0,0,0.4);
            }

            .modal-content {
                background-color: #d5eeff;
                margin: 5% auto;
                margin-top: 10%;
                border: 15px solid #005689;
                width: 40%;
                border-radius: 5px;
                color: #005689;
                
            }

            .close {
                color: #aaa;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: black;
                text-decoration: none;
                cursor: pointer;
            }
            .in{
                background-color: transparent; 
                border: transparent; 
                border-bottom: 2px solid black;
            }
            .in1{
                background-color: transparent; 
                border: transparent; 
                
            }
            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                margin-bottom: 5px;
            }

            .form-group input {
                width: 50%; 
                padding: 8px;
            }
            input:focus{
                border: 5px solid #005689;
            }
            input::placeholder{
                text-align: center;
            }
            

        @keyframes rotate {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }
            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }
        #container1 {
            width: 250px;
            position: relative;
            overflow: hidden;
            padding: 5px;
            border-radius: 31px;
            z-index: 1;
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
        }

        #tryButton {
            width: 240px;
            font-size: 16px;
            padding: 15px 40px;
            border: none;
            border-radius: 26px;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
            background-color: white;
            color: #2d2d2d;
            cursor: pointer;
            display: block;
            margin: 0 auto; /* Center horizontally */
            transition-duration: 300ms;
        }
        #tryButton:hover{
            background-color: #d5eeff;
        }

        .animated-border1 {
            width: 350%;
            height: 450%;
            position: absolute;
            z-index: -10;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: conic-gradient(transparent, transparent,transparent, transparent,transparent, transparent,transparent, transparent,transparent, transparent,transparent, transparent,transparent, transparent,transparent, transparent,transparent, transparent, red,rgb(255,255,0), green,rgb(0,255,255) , blue, transparent, transparent, transparent);
            animation: rotate 3s infinite linear;
        }
        #scrollToTopButton {
            display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        transition: opacity 0.3s ease-in-out;
        }
        #scrollToTopButton.active {
        display: block; /* Show the button when active */
        }
</style>

</head>

<body class="text-blue-custom ">
        <button id="scrollToTopButton" class="fixed bottom-10 right-10 bg-green-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full flex items-center justify-center shadow-md" onclick="scrollToTop()">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
          </button>
    <div class="loader-wrapper">
        <img src="loader_.gif" alt="loader" />
    </div>
    <div class="content hidden" style="margin: 0%; animation: slideIn 1.5s ease forwards;">
        
        <br>
        <header id="header" class=" py-4 fixed w-full transition-all duration-300" style="top: 0; z-index:1; background-color: #007cb9;">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div class="flex items-center">
                    <img src="whitelogo.png" alt="Company Logo" class="h-12 mr-2">
                    <h4 class="text-lg md:text-1xl lg:text-3xl font-semibold text-white"><a href="landing2.html">Arrive O"Clock</a></h4>
                </div>
                <nav class="flex space-x-4 text-lg md:text-1xl lg:text-3xl font-semibold text-white">
                    <ul class="flex" style="background-color: #007cb9;">
                        <li><a href="#home" class="text-white">Home</a></li>
                        <li><a href="#app-interface" class="text-white">App Interface</a></li>
                        <li><a href="../website/gmaps.html" class="text-white">Alarm</a></li>
                        <li><a href="../website/home1.html" class="text-white">Feature 2</a></li>
                    </ul>
                </nav>
                <div class="resp">
                    <img src="whitelogo.png" alt="Company Logo" class="h-12">
                </div>
            </div>
        </header>
        
        
    <div id="home"></div>
    <br>
    <div class="hero-image flex items-center justify-center mt-8">
        <div class="text-center">
            <h1 class="text-5xl md:text-5xl lg:text-6xl font-bold text-blue-custom1 mb-4" style="text-shadow: 1px 1px 2px white, 0 0 5px white, 0 0 2px white;">Arrive On Time, Every Time</h1>
            <h3><p class="text-2xl md:text-2xl lg:text-3xl text-blue-custom1 mb-6 px-4" style="text-shadow: 1px 1px 2px white, 0 0 5px white, 0 0 2px white;">Never miss your stop again with our real-time location tracking and timely alerts.</p></h3>
            <br><!--<button id="tryButton" class="bg-white text-blue-custom px-6 py-3 rounded-full font-semibold hover:bg-blue-100 transition duration-300">Interested to Try!</button>-->
            <div id="container1" class="container mx-auto flex justify-between items-center px-4">
                <div class="animated-border1"></div>
                <button id="tryButton" class="text-2xl md:text-2xl lg:text-3xl bg-white text-blue-custom font-semibold">Interested to Try!</button>
                
            </div>
            <p id="clickCount" class="text-2xl md:text-2xl lg:text-3xl text-blue-custom mt-2 counter" style="text-shadow: 1px 1px 2px white, 0 0 5px white, 0 0 2px white;">0 people interested</p>
        </div>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span><br>
            <h4 class="text-2xl font-semibold text-center">Register</h4><br>
            <form onsubmit="return counterupdate()" method="post" id="myForm"><center>
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="in" placeholder="Mukesh Ambani" pattern="[A-Za-z\s]+" required>
                </div>
                <div class="form-group">
                    <label for="number">Mobile Number:</label>
                    <input type="tel" id="tel" name="tel" class="in" size="10" maxlength="10" minlength="10" placeholder="0123-456-789" required>
                </div>
                <div class="form-group">
                    <label for="username">Email Id:</label>
                    <input type="email" id="username" name="username" class="in" placeholder="abc@gmail.com" required>
                </div>
                
                <input type="submit" value="Submit" style="background-color: transparent; border: transparent; padding: 15px; color: #5585b5;">
                <input type="reset" value="Reset" style="background-color: transparent; border: transparent; padding: 15px; color: #5585b5;">
            </center></form>
        </div>
    </div>
    <br>
    <div class="entry-animation">
        <br>
        <h1 class="text-5xl md:text-5xl lg:text-6xl font-bold text-blue-custom1 mb-4" style="text-shadow: 1px 1px 2px white; text-align: center; background-color: #d5eeff;">"Your Go-To App for Stress Free Travel Arrivals"</h1>
        <br>
    </div>


    <div class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8"> <!-- Adjusted to have three columns -->
            <div class="rounded-lg bg-transparent p-0 m-0"> <!-- This column will take 1/3 of the width on medium screens and larger -->
                <img src="ourapp.jpeg" alt="Our App" class="column-image rounded-lg">
            </div>
            <div class="md:col-span-3 rounded-lg bg-white p-6"> <!-- This column will take 2/3 of the width on medium screens and larger -->
                <h2 class="text-4xl font-semibold mb-4 text-blue-custom text-center">Our App: Arrive O"Clock</h2>
                <p class="text-gray-200 text-2xl text-blue-custom">Your ultimate travel companion designed to ensure you never miss your stop again. With real-time location tracking, our app sends timely alerts 5-10 minutes before you reach your destination, perfect for passengers who may doze off during their journey. Beyond this essential feature, we aim to <b>revolutionize your travel experience</b> with additional functionalities tailored to your needs.</p>
            </div>
            
        </div>
    </div>
    <div class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8"> <!-- Adjusted to have three columns -->
            <div class="md:col-span-3 rounded-lg bg-white p-6"> <!-- This column will take 2/3 of the width on medium screens and larger -->
                <h2 class="text-4xl font-semibold mb-4 text-blue-custom text-center">Problem</h2>
                <p class="text-gray-200 text-2xl text-blue-custom" style="text-align-last: center;">Many travelers often fall asleep while on public transportation, which leads to them missing their destination. This adds to the problem of navigating unfamiliar routes, as existing solutions don"t do a good job of telling travelers when to get off. This causes a <b>lot of stress and inconvenience</b> for commuters.</p>
            </div>
            <div class="rounded-lg bg-transparent p-0 m-0"> <!-- This column will take 1/3 of the width on medium screens and larger -->
                <img src="ourapp.jpeg" alt="Our App" class="column-image rounded-lg">
            </div>
        </div>
    </div>
    
    <br><br>
    
    <div class="scroll-container" id="app-interface">
        <h2 class="text-4xl font-semibold mb-4 text-white text-center">App-Interface</h2>
        <div class="overflow-x-auto whitespace-nowrap">
            <img src="ui1.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui2.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui3.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui4.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui5.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui6.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui7.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
            <img src="ui8.png" alt="Cinque Terre" class="inline-block mr-2 rounded-lg" style="width: 300px;" />
        </div>
    </div>

    <br>
    <div class="featuresdiv"></div>
    <div id="features"></div>
    <h2 class="text-4xl font-semibold mb-4 text-white text-center">Features:</h2>
    <div class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8"> <!-- Adjusted to have four columns -->
            <div class="rounded-lg bg-white p-6 border-right-color-white">
                <h2 class="text-4xl font-semibold mb-4 text-blue-custom text-center"><img src="1.png" alt="location" class="h-12"></h2>
                <p class="text-gray-200 text-xl text-blue-custom">App offers personalized travel tips, enhancing experience with local insights.</p>
            </div>
            <div class="rounded-lg bg-white p-6 border-l-0 border-t border-b border-gray-200">
                <h2 class="text-4xl font-semibold mb-4 text-blue-custom text-center"><img src="2.png" alt="alarm" class="h-12"></h2>
                <p class="text-gray-200 text-xl text-blue-custom">App tracks real-time location, sets alarms before destination for safety.</p>
            </div>
            <div class="rounded-lg bg-white p-6 border-l-0 border-t border-b border-gray-200">
                <h2 class="text-4xl font-semibold mb-4 text-blue-custom text-center"><img src="3.png" alt="offline" class="h-12"></h2>
                <p class="text-gray-200 text-xl text-blue-custom">App functions offline, providing maps, schedules, and essentials seamlessly.</p>
            </div>
            <div class="rounded-lg bg-white p-6 border-l-0 border-t border-b border-gray-200">
                <h2 class="text-4xl font-semibold mb-4 text-blue-custom text-center"><img src="4.png" alt="schedule" class="h-12"></h2>
                <p class="text-gray-200 text-xl text-blue-custom">App enables seamless navigation across various transportation modes for efficient travel.</p>
            </div>
        </div>
    </div>
    <br>
    
    <div id="customer-reviews" class="mt-8">
        <h2 class="text-4xl font-semibold mb-4 text-blue-custom1 text-center" style="background-color: #d5eeff;">Customer Reviews</h2>
        <div class="slider-container">
            <div class="slider" id="customer-review-slider">
                <div class="slide rounded-lg bg-white p-6">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">Loving the Arrive O"Clock app! No more missed stops for me. Highly recommended for all commuters.</p>&mdash; John Doe (@johndoe) <br><a href="https://twitter.com/johndoe/status/1234567890123456789?ref_src=twsrc%5Etfw">February 28, 2024</a>
                    </blockquote>
                </div>
                <div class="slide rounded-lg bg-white p-6">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">This app has saved me so much stress during my daily commute. Thank you, Arrive O"Clock!</p>&mdash; Jane Smith (@janesmith) <br><a href="https://twitter.com/janesmith/status/1234567890123456789?ref_src=twsrc%5Etfw">March 1, 2024</a>
                    </blockquote>
                </div>
                <div class="slide rounded-lg bg-white p-6">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">Loving the Arrive O"Clock app! No more missed stops for me. Highly recommended for all commuters.</p>&mdash; John Doe (@johndoe) <br><a href="https://twitter.com/johndoe/status/1234567890123456789?ref_src=twsrc%5Etfw">February 28, 2024</a>
                    </blockquote>
                </div>
                <div class="slide rounded-lg bg-white p-6">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">This app has saved me so much stress during my daily commute. Thank you, Arrive O"Clock!</p>&mdash; Jane Smith (@janesmith) <br><a href="https://twitter.com/janesmith/status/1234567890123456789?ref_src=twsrc%5Etfw">March 1, 2024</a>
                    </blockquote>
                </div>
                <div class="slide rounded-lg bg-white p-6">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">Loving the Arrive O"Clock app! No more missed stops for me. Highly recommended for all commuters.</p>&mdash; John Doe (@johndoe) <br><a href="https://twitter.com/johndoe/status/1234567890123456789?ref_src=twsrc%5Etfw">February 28, 2024</a>
                    </blockquote>
                </div>
                <div class="slide rounded-lg bg-white p-6">
                    <blockquote class="twitter-tweet" data-lang="en">
                        <p lang="en" dir="ltr">This app has saved me so much stress during my daily commute. Thank you, Arrive O"Clock!</p>&mdash; Jane Smith (@janesmith) <br><a href="https://twitter.com/janesmith/status/1234567890123456789?ref_src=twsrc%5Etfw">March 1, 2024</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container mx-auto mt-8 px-4">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8"> <!-- Adjusted to have three columns -->
            <div class="md:col-span-3 rounded-lg bg-transparent p-0 m-0"> <!-- This column will take 2/3 of the width on medium screens and larger -->
                <img src="contactus.jpg" width="max-width" height="auto" class="rounded-lg"></div>
            <div class="rounded-lg bg-white text-xl font-semibold text-blue-custom text-center rounded-lg bg-white p-6"> <!-- This column will take 1/3 of the width on medium screens and larger -->
                <form style="width: 100%;">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" id="emailr" name="emailr" placeholder="abc@gmail.com" style="background-color: transparent; border: transparent; border-bottom: 2px solid black; width: 85%;" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Message</label>
                      <input type="text" id="content" name="content" placeholder="...." style="background-color: transparent; border: transparent; border-bottom: 2px solid black; width: 85%;">
                    </div>
                    <input type="reset" onclick="alert("submitted!")" value="Submit" class="bg-white text-blue-custom px-3 py-1 rounded-full font-semibold hover:bg-blue-100 transition duration-300" style="border: 2px solid black; width: 85%;">
                  </form>
            </div>
        </div>
    </div>
    
    <footer class="py-6 text-white mt-8 flex justify-between items-center" style="background-color: #007cb9;"> <!-- Updated class and added flex classes -->
        <div class="container mx-auto">
            <p class="text-center">&copy; 2024 Arrive O"Clock. All rights reserved.</p>
        </div>
        <div class="mr-4 flex items-center"> 
            <a href="https://www.instagram.com/arriveoclock?igsh=bXFhZ3RuYjU1NGNm" target="_blank" class="text-white hover:text-blue-200 ml-4"><img src="insta.png" alt="Instagram" class="h-12"></a> <!-- Instagram icon -->
            <a href="https://www.linkedin.com/company/arriveoclock/" target="_blank" class="text-white hover:text-blue-200 ml-4"><img src="linkedin.png" alt="LinkedIn" class="h-12"></a> <!-- LinkedIn icon -->
        </div>
    </footer>
    
      
      
    </div>
    
    

    <script>
        let clickCount = 0; // Define clickCount globally
    
        function counterupdate() {
            const clickCounter = document.getElementById("clickCount");
            clickCount++;
            clickCounter.textContent = `${clickCount} people interested`;
            // Reset form and hide modal
            document.getElementById("myForm").reset();
            document.getElementById("myModal").style.display = "none";
            // Prevent form submission
            return false;
        }
    
        document.addEventListener("DOMContentLoaded", function() {
            const tryButton = document.getElementById("tryButton");
            const modal = document.getElementById("myModal");
            const span = document.getElementsByClassName("close")[0];
    
            tryButton.addEventListener("click", function() {
                modal.style.display = "block";
            });
    
            span.addEventListener("click", function() {
                document.getElementById("myForm").reset();
                modal.style.display = "none";
            });
    
            window.addEventListener("load", function() {
                const loader = document.querySelector(".loader-wrapper");
                const content = document.querySelector(".content");
    
                setTimeout(function() {
                    loader.style.display = "none";
                    content.classList.remove("hidden");
                }, 2500); // Adjust timeout as needed
    
                const heroImage = document.querySelector(".hero-image");
                heroImage.classList.add("show");
            });
    
            const slider = document.querySelector(".slider");
            let currentIndex = 0;
    
            function slide() {
                const slideWidth = document.querySelector(".slide").offsetWidth + 10;
                const numVisibleSlides = Math.floor(document.querySelector(".slider-container").offsetWidth / slideWidth);
                const totalSlides = document.querySelectorAll(".slide").length;
    
                if (currentIndex >= totalSlides - numVisibleSlides) {
                    currentIndex = 0;
                } else {
                    currentIndex++;
                }
    
                const translateValue = -currentIndex * slideWidth;
                slider.style.transform = `translateX(${translateValue}px)`;
            }
    
            setInterval(slide, 2000);
    
            function submitcontactus(){
                
                let email = document.getElementById("emailr").value;
                let content = document.getElementById("content").value;
                alert("submit");
                document.getElementById("emailr").value = "";
                document.getElementById("content").value = "";
                return false;
        }

        });

        // Function to scroll to the top of the page
        function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
        }

        window.addEventListener("scroll", function() {
        const scrollToTopButton = document.getElementById("scrollToTopButton");
        if (window.scrollY > 200) {
            scrollToTopButton.classList.add("active");
        } else {
            scrollToTopButton.classList.remove("active");
        }
        });
    </script>
</body>
</html>';
?>