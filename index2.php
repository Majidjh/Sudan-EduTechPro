<?php
// if(isset($_POST['username']) && isset($_POST['password'])){
//   function validate($data){
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
//   $uname = validate($_POST['username']);
//   $pass = validate($_POST['password']);
  
//   if(empty($uname)){
//     header("Location: index.php?error=User Name is required");
//     exit();
//   }else if(empty($pass)){
//     header("Location: index.php?error=Password is required");
//     exit();
//   }else{
//     echo "Valid input";
//   }

// }else{
//   header("Location: login.php");
//   exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Logo/logo2.png">
    <title>Sudan EduTechPro</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="Logo/logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="about.html">about</a>
        <a href="#menu">menu</a>
        <a href="courses.php">courses</a>
        <a href="#review">Creator</a>
        <a href="#contact">contact</a>
        <a href="#blogs">our courses</a>
    </nav>

        <!-- <div class="fas fa-shopping-cart" id="cart-btn"></div> -->
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>


    </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Revolutionizing Education with Sudan EduTechPro</h3>
        <p>Welcome You in Sudan EduTechPro (S.E.T.P)</p>
        <a href="#" class="btn">get Courses now</a>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="Logo/logo2.png" alt="">
        </div>

        <div class="content">
            <h3>What is Sudan EduTechPro?</h3>
            <p>In this digital era, the convergence of education and technology has opened up new avenues for learning and skill development. One platform that stands out in this domain is EduTechPro, an innovative educational technology platform that is revolutionizing the way we learn. With its comprehensive range of courses</p>
            <p>expert instructors, and interactive learning experiences, EduTechPro is bridging the gap between traditional education and cutting-edge technology, empowering learners to thrive in a rapidly evolving world.

Empowering Learners with Expert Instructors</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

<section class="menu" id="menu">

    <h1 class="heading"> our <span>menu</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/php.png" alt="">
            <h3>PHP Course</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/ReactJs.png" alt="">
            <h3>ReactJS Course</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/HTML.png" alt="">
            <h3>HTML Course</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/css.png" alt="">
            <h3>CSS Course</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/python.png" alt="">
            <h3>Python Full Course</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

        <div class="box">
            <img src="images/dotnet.png" alt="">
            <h3>Microsoft .NET Course</h3>
            <div class="price">$15.99 <span>20.99</span></div>
            <a href="#" class="btn">add to cart</a>
        </div>

    </div>

</section>

<!-- menu section ends -->

<section class="products" id="products">

    <h1 class="heading"> our <span>Courses</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/php_full_stack.png" alt="">
            </div>
            <div class="content">
                <h3>PHP Full Stack</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/full stack.jpg" alt="">
            </div>
            <div class="content">
                <h3>Full Stack development</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/iot.png" alt="">
            </div>
            <div class="content">
                <h3>IoT Software</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">$15.99 <span>$20.99</span></div>
            </div>
        </div>

    </div>

</section>

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> About <span>Creator</span> </h1>

    <div class="box-container">

        

        <div class="box">
            <img src="images/profile.jpg" alt="" class="quote">
            <p>I'm A Programming web development. i'm owner of Sudan EduTechPro, I hope you Enjoy in my web site. Thank you so much😊</p>
            <!-- <img src="images/pic-2.png" class="user" alt=""> -->
            <h3>Majid Seralkhtem</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
        
        

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61528.480637760054!2d36.45497671274916!3d15.455896024440843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1664f173151015f7%3A0xbeeae01bb23a30b0!2z2YPYs9mE2KfYjCDYp9mE2LPZiNiv2KfZhg!5e0!3m2!1sar!2s!4v1688309622001!5m2!1sar!2s" allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <input type="submit" value="contact now" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> our <span>Courses</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/python.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Python Frimwork For Advanced</a>
                <span>by Majid Seralkhtem / 27st jun, 2023</span>
                <p>Develop Your Self in AI by Python Language</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/ReactJs.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">Web development By ReactJS</a>
                <span>by Sameh / 18st may, 2023</span>
                <p>Develop Your Self in Web development By ReactJS</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="images/php.png" alt="">
            </div>
            <div class="content">
                <a href="#" class="title">PHP for Bigginer</a>
                <span>by Gamal / 21st may, 2021</span>
                <p>Learn php by simple method with Gamal Hamed</p>
                <a href="#" class="btn">read more</a>
            </div>
        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="about.html">about</a>
        <a href="#menu">menu</a>
        <a href="courses.php">courses</a>
        <a href="#review">Creator</a>
        <a href="#contact">contact</a>
        <a href="#blogs">our courses</a>
    </div>

    <div class="credit">created by <span>Majid Seralkhtem</span> | all rights reserved</div>

</section>

<!-- footer section ends -->
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>