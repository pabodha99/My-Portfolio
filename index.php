<!DOCTYPE html>
<html lang="en">

<head>
  <!--Meta Tags
		===================-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web site</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />"

  <!--custom style sheeet
		========================== -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <!--Navbar
    ====================== -->
  <header>
    <nav class="navbar">
      <a href="">
        <h1>
          <span class="white">ALL</span>
          <span class="red">IN</span>
          <span class="white">ONE</span>
        </h1>
      </a>
      <ul>
        <li><a href="#banner" class="white">Home</a></li>
        <li><a href="#product" class="white">Product</a></li>
        <li><a href="#about" class="white">About</a></li>
        <li><a href="#order" class="white">Order</a></li>
        <li><a href="#footer" class="white">Contact</a></li>
        <li><a href="#signin" class="white" id="signinBtn">Sign In</a></li>
        <li><a href="#signup" class="white" id="signupBtn">Sign up</a></li>
      </ul>
    </nav>
  </header>

  <!--Banner Section-->
  <section id="banner" class="banner">
    <div>
      <h2 class="red">CAPTIVATING STYLES</h2>
      <h1 class="white">NEW PRODUCT ON SALE</h1>
    </div>
  </section>


  <!--Product section-->

  <section id="product" class="product">
    <div class="section-heading">
      <h1 class="red">Products</h1>
      <a href="" class="red">View All</a>
    </div>
    <div class="box-container">

      <div class="box">
        <div class="image">
          <img src="Images/product1.jpeg" alt="" class="slide">
          <img src="Images/s1.jpeg" alt="" class="slide" />
          <img src="Images/s2.jpeg" alt="" class="slide" />
        </div>
        <div class="content">
          <h3>Ladies' Wear</h3>
          <p>This section is dedicated to clothing and accessories for women. It includes various subsections like tops,
            dresses, bottoms, ethnic wear, activewear, and accessories.</p>
          <div class="flex-box">
            <ul>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
            </ul>
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="Images/product2.jpeg" alt="" class="slider" />
          <img src="Images/s3.jpg" alt="" class="slider" />
          <img src="Images/s4.jpeg" alt="" class="slider" />
        </div>
        <div class="content">
          <h3>Men's Wear</h3>
          <p>This section is specifically for men's clothing and accessories. It includes subsections like shirts,
            T-shirts, trousers, jeans, suits, ethnic wear, sportswear, and accessories tailored for men's fashion needs.
          </p>
          <div class="flex-box">
            <ul>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
            </ul>
            <button>Read more</button>
          </div>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="Images/product3.jpeg" alt="" class="slide">
          <img src="Images/s5.jpeg" alt="" class="slide">
          <img src="Images/s6.webp" alt="" class="slide">

        </div>
        <div class="content">
          <h3>Kids' Wear</h3>
          <p>This section focuses on clothing and accessories for children of different age groups. It may offer
            subsections based on age ranges, such as infant wear, toddler wear, and kids' wear for older children. This
            section might include items like tops, bottoms, dresses, rompers, sleepwear, and accessories suitable for
            kids.</p>
          <div class="flex-box">
            <ul>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
            </ul>
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="Images/product4.jpeg" alt="" class="slide">
          <img src="Images/s7.jpeg" alt="" class="slide">
          <img src="Images/s8.jpeg" alt="" class="slide">
        </div>
        <div class="content">
          <h3>Footwear</h3>
          <p> This section features a wide range of footwear options for men, women, and children. It includes
            subsections like women's shoes, men's shoes, kids' shoes, and offer a variety of styles such as boots,
            sneakers, sandals, formal shoes, and athletic shoes.</p>
          <div class="flex-box">
            <ul>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
            </ul>
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="Images/product5.webp" alt="" class="slide">
          <img src="Images/s9.jpeg" alt="" class="slide">
          <img src="Images/s10.jpeg" alt="" class="slide">
        </div>
        <div class="content">
          <h3>Intimate Apparel</h3>
          <p>This section specializes in lingerie and undergarments for women. It offers a range of bras, panties,
            shapewear, nightwear, and other intimate apparel items and also have a separate section for men's
            undergarments.</p>
          <div class="flex-box">
            <ul>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
            </ul>
            <button>Read more</button>
          </div>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="Images/product6.jpeg" alt="" class="slide">
          <img src="Images/s11.jpeg" alt="" class="slide">
          <img src="Images/s12.jpeg" alt="" class="slide">
        </div>
        <div class="content">
          <h3>Seasonal or Special Collections</h3>
          <p>This section could showcase seasonal clothing collections or special collaborations. It might include items
            like swimwear, holiday-themed apparel, festive wear, or limited-edition collections that change periodically
            based on fashion trends and seasonal demands</p>
          <div class="flex-box">
            <ul>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
              <li><i class="fa-solid fa-star red"></i></li>
            </ul>
            <button>Read more</button>
          </div>
        </div>
      </div>

    </div>
  </section>


  <!--about detail-->

  <section id="about" class="about">
    <div class="section-heading">
      <h1 class="red">About Us</h1>
    </div>
    <div class="about-main">
      <div class="about-text">
        <h2>Looking for new products</h2>
        <p class="justified-paragraph">Welcome to our textile store, where quality meets style. We take pride in
          offering a wide range of premium fabrics and fashion-forward designs to cater to your textile needs. With
          years of experience in the industry, we have established ourselves as a reliable destination for customers
          seeking high-quality fabrics and trendy clothing options.</p>
        <ul>
          <li>Quality Fabrics</li>
          <li>Fashion-Forward Designs</li>
          <li>Expertise and Experience</li>
          <li>Customer Satisfaction</li>
          <li>Versatility</li>
          <li>Commitment to Sustainability</li>
        </ul>
        <button class="about-btn">Read More</button>
      </div>
      <div class="about-img">
        <img src="images/about.jpeg" width="100% height=" 100%">
      </div>
  </section>


  <!--Order section-->

  <section id="order" class="registering">

<h1 class="heading-title">Order Now!</h1>


<form action="submit_form.php" method="post" class="submit_form">

        <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="Enter your name" name="name">
        </div>

        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="Enter your email" name="email">
        </div>

        <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="Enter your number" name="phone">
        </div>

        <div class="inputBox">
             <span>Size:</span>
             <select name="size" required>
                  <option value="X">Small</option>
                  <option value="M">Medium</option>
                  <option value="L">Large</option>
                  <option value="XL">Extra Large</option>
             </select>
        </div>

        <div class="inputBox">
            <span>Dress Code :</span>
            <input type="text" placeholder="Enter your dress code" name="dressCode">
        </div>

        <div class="inputBox">
            <span>Color :</span>
            <input type="text" placeholder="Enter the color" name="color">
        </div>

        <div class="inputBox">
            <span>Amount :</span>
            <input type="number" placeholder="Enter the amount"name="amount">
        </div>



    <input type="submit" value="submit" class="btn" name="send">

</form>

</section>

 <!-- signin button to navigation bar -->
 <li><a href="#signin" class="white" id="signinBtn">Sign In</a></li>

<!-- signin -->
<div id="signinDialog" class="dialog">
    <div class="dialog-content">
        <span class="close-btn" id="closeSignIn">&times;</span>
        <h2>Sign In</h2>
        <form id="signinForm" method="post" action="signin.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password"><br><br>Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Sign In</button>
        </form>
    </div>
</div>

<!-- signup button to navigation bar -->
<li><a href="#signup" class="white" id="signupBtn">Sign Up</a></li>

<!-- signup -->
<div id="signupDialog" class="dialog">
  <div class="dialog-content">
    <span class="close-btn" id="closeSignUp">&times;</span>
    <h2>Sign up</h2>
    <form id="signupForm" method="post" action="signup.php">
      
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password"><br>Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirmPassword"><br>Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        
        <button type="submit">Sign Up</button>
      
    </form>
  </div>
</div>



  <!--contact section-->

  <section id="footer" class="footer">
    <div class="box-container">

      <div class="box">
        <h3>Extra Links</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
        <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
        <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
      </div>

      <div class="box">
        <h3>Contact Info</h3>

        <a href="#"><i class="fas fa-phone"></i>+9471 1234 567</a>
        <a href="#"><i class="fas fa-envelope"></i>allinone@gmail.com</a>
        <a href="#"><i class="fas fa-map"></i>Colombo 7, Sri Lanka</a>
      </div>

      <div class="box">
        <h3>Follow Us</h3>
        <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
      </div>

    </div>
    <div class="credit">Created by <span>ALL IN ONE</span> | all rights reserved!</div>
  </section>


  <!-- Image sliders-->

  <script>
    // JavaScript code for the first image slider
    const slider1 = document.querySelectorAll('.box')[0].querySelector('.image');
    const slides1 = slider1.querySelectorAll('.slide');
    let currentSlide1 = 0;

    function showSlide1(slideIndex) {
      // Hide all slides
      slides1.forEach((slide) => {
        slide.style.display = 'none';
      });

      // Show the current slide
      slides1[slideIndex].style.display = 'block';
    }

    function nextSlide1() {
      currentSlide1++;
      if (currentSlide1 >= slides1.length) {
        currentSlide1 = 0;
      }
      showSlide1(currentSlide1);
    }

    // JavaScript code for the second image slider
    const slider2 = document.querySelectorAll('.box')[1].querySelector('.image');
    const slides2 = slider2.querySelectorAll('.slider');
    let currentSlide2 = 0;

    function showSlide2(slideIndex) {
      // Hide all slides
      slides2.forEach((slide) => {
        slide.style.display = 'none';
      });

      // Show the current slide
      slides2[slideIndex].style.display = 'block';
    }

    function nextSlide2() {
      currentSlide2++;
      if (currentSlide2 >= slides2.length) {
        currentSlide2 = 0;
      }
      showSlide2(currentSlide2);
    }

    // JavaScript code for the third image slider
    const slider3 = document.querySelectorAll('.box')[2].querySelector('.image');
    const slides3 = slider3.querySelectorAll('.slide');
    let currentSlide3 = 0;

    function showSlide3(slideIndex) {
      // Hide all slides
      slides3.forEach((slide) => {
        slide.style.display = 'none';
      });

      // Show the current slide
      slides3[slideIndex].style.display = 'block';
    }

    function nextSlide3() {
      currentSlide3++;
      if (currentSlide3 >= slides3.length) {
        currentSlide3 = 0;
      }
      showSlide3(currentSlide3);
    }

    // JavaScript code for the fourth image slider
    const slider4 = document.querySelectorAll('.box')[3].querySelector('.image');
    const slides4 = slider4.querySelectorAll('.slide');
    let currentSlide4 = 0;

    function showSlide4(slideIndex) {
      // Hide all slides
      slides4.forEach((slide) => {
        slide.style.display = 'none';
      });

      // Show the current slide
      slides4[slideIndex].style.display = 'block';
    }

    function nextSlide4() {
      currentSlide4++;
      if (currentSlide4 >= slides4.length) {
        currentSlide4 = 0;
      }
      showSlide4(currentSlide4);
    }

    // JavaScript code for the fifth image slider
    const slider5 = document.querySelectorAll('.box')[4].querySelector('.image');
    const slides5 = slider5.querySelectorAll('.slide');
    let currentSlide5 = 0;

    function showSlide5(slideIndex) {
      // Hide all slides
      slides5.forEach((slide) => {
        slide.style.display = 'none';
      });

      // Show the current slide
      slides5[slideIndex].style.display = 'block';
    }

    function nextSlide5() {
      currentSlide5++;
      if (currentSlide5 >= slides5.length) {
        currentSlide5 = 0;
      }
      showSlide5(currentSlide5);
    }

    // JavaScript code for the sixth image slider
    const slider6 = document.querySelectorAll('.box')[5].querySelector('.image');
    const slides6 = slider6.querySelectorAll('.slide');
    let currentSlide6 = 0;

    function showSlide6(slideIndex) {
      // Hide all slides
      slides6.forEach((slide) => {
        slide.style.display = 'none';
      });

      // Show the current slide
      slides6[slideIndex].style.display = 'block';
    }

    function nextSlide6() {
      currentSlide6++;
      if (currentSlide6 >= slides6.length) {
        currentSlide6 = 0;
      }
      showSlide6(currentSlide6);
    }


    // Function to run all sliders in parallel
    function runSliders() {
      nextSlide1();
      nextSlide2();
      nextSlide3();
      nextSlide4();
      nextSlide5();
      nextSlide6();
    }

    // Automatically switch to the next slides every 3 seconds
    setInterval(runSliders, 3000);

    // Display the initial slides
    showSlide1(currentSlide1);
    showSlide2(currentSlide2);
    showSlide3(currentSlide3);
    showSlide4(currentSlide4);
    showSlide5(currentSlide5);
    showSlide6(currentSlide6);
  </script>

<!-- sign in logic -->
  <script>

    const signinBtn = document.getElementById('signinBtn');
    const signinDialog = document.getElementById('signinDialog');
    const closeSignIn = document.getElementById('closeSignIn');

    signinBtn.addEventListener('click', () => {
      signinDialog.style.display = 'block';
    });

    closeSignIn.addEventListener('click', () => {
      signinDialog.style.display = 'none';
    });

    // Close the dialog when clicking outside of it
    window.addEventListener('click', (event) => {
      if (event.target === signinDialog) {
        signinDialog.style.display = 'none';
      }
    });

  </script>

<!-- sign up logic -->
<script>

const signupBtn = document.getElementById('signupBtn');
const signupDialog = document.getElementById('signupDialog');
const closeSignUp = document.getElementById('closeSignUp');

signupBtn.addEventListener('click', () => {
  signupDialog.style.display = 'block';
});

closeSignUp.addEventListener('click', () => {
  signupDialog.style.display = 'none';
});

// Close the dialog when clicking outside of it
window.addEventListener('click', (event) => {
  if (event.target === signupDialog) {
    signupDialog.style.display = 'none';
  }
});


</script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data validation
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $size = $_POST["size"];
    $dressCode = $_POST["dresscode"];
    $color = $_POST["color"];
    $amount = $_POST["amount"];
    
    $emailError = $phoneError = '';

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'Invalid email format';
    }

    // Validate phone number
    if (!preg_match('/^\d{10}$/', $phone)) {
        $phoneError = 'Invalid phone number format';
    }

    // If there are no errors, process the form data
    if (empty($emailError) && empty($phoneError)) {
        // Process the form data (e.g., save to database, send emails, etc.)

        // Reset the form
        $_POST = array(); // Clear the form data
    }
}
?>

</body>

</html>