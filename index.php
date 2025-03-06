<?php

$conn = mysqli_connect('localhost','root','','hospital_contact_db') or die('connection failed');
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    $insert = mysqli_query($conn, "INSERT INTO contact_form (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('query failed');
    if($insert){
        $message[] = 'appointment made successfully!';
    }else{
        $message[] = 'appointment failed!';
    }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Bootstrap CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.css">
    <!-- Custom CSS File Link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header Section -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="#home" class="logo">dental<span>Care.</span></a>
                <nav class="nav">
                    <a href="#home">home</a>
                    <a href="#about">about</a>
                    <a href="#services">services</a>
                    <a href="#reviews">reviews</a>
                    <a href="#contact">contact</a>
                </nav>
                <a href="#contact" class="link-btn">make appointment</a>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>
    <section class="home" id="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="content text-center text-md-left">
                    <h3>let us brighten your smile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quae dignissimos, magnam eos, libero quasi doloribus odio nobis fugit itaque, deleniti aliquam unde minus sunt aperiam omnis ut voluptatem. Fuga.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 image">
                    <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
                </div>
                <div class="col-md-6 content">
                    <span>about us</span>
                    <h3>True Healthcare for Your Family</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias eos distinctio dicta magnam soluta porro nisi quos in nulla corrupti, ex veritatis natus, ipsum velit. Nulla repellendus omnis ipsa aliquam.</p>
                    <a href="#contact" class="link-btn">make appointment</a>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <h1 class="heading">our services</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/icon-1.svg" alt="">
                <h3>Alignment Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/icon-2.svg" alt="">
                <h3>Cosmetic Dentisrty</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/icon-3.svg" alt="">
                <h3>Oral Hygiene Experts</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/icon-4.svg" alt="">
                <h3>Root Canal Specialist</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/icon-5.svg" alt="">
                <h3>Live Dental Advisory</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/icon-6.svg" alt="">
                <h3>Cavity Inspection</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section> 
    <div class="process">
        <h1 class="heading">work process</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/process-1.png" alt="">
                <h3>Cosmetic Dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/process-2.png" alt="">
                <h3>Pediatric Dentistry</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="box">
                <img src="images/process-3.png" alt="">
                <h3>Dental Implant</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
    <section class="reviews" id="reviews">
        <h1 class="heading">Satisfied Clients</h1>
        <div class="box-container container">
            <div class="box">
                <img src="images/pic-1.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Doe</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="images/pic-2.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Doe</h3>
                <span>Satisfied Client</span>
            </div>
            <div class="box">
                <img src="images/pic-3.png" alt="">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>John Doe</h3>
                <span>Satisfied Client</span>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <h1 class="heading">Make Appointment</h1>
        <form 
            action="
                <?php 
                    echo $_SERVER['PHP_SELF']; 
                ?>" 
            method="post"
        >
            <?php
                if(isset($message)){
                    foreach($message as $message){
                        echo '<p class="message">'.$message.'</p>';
                    }
                }
            ?>
            <span>your name:</span>
            <input type="text" name="name" placeholder="enter your name" class="box" required>
            <span>your email:</span>
            <input type="email" name="email" placeholder="enter your email" class="box" required>
            <span>your phone number:</span>
            <input type="number" name="number" placeholder="enter your number" class="box" required>
            <span>your appointment date:</span>
            <input type="datetime-local" name="date" class="box" required>
            <input type="submit" name="submit" value="make appointment" href="#contact" class="link-btn">
        </form>
    </section>
    <section class="contact__section" id="contact">
        <h2 class="heading">Get In Touch</h2>
        <div class="sub__heading">Contact Us</div>
        <div class="contact__container grid">
        <div className="contact__content">
                <h3 className='contact__title'>Write me your Project</h3>
                <form className="contact__form">
                    <div className="contact__form-div">
                        <label className="contact__form-tag">Name</label>
                        <input 
                            type="text" 
                            name='name'
                            className="contact__form-input" 
                            placeholder='Insert Your Name'
                        />
                    </div>
                    <div className="contact__form-div">
                        <label className="contact__form-tag">Mail</label>
                        <input 
                            type="email" 
                            name='email'
                            className="contact__form-input" 
                            placeholder='Insert Your Email'
                        />
                    </div>
                    <div className="contact__form-div contact__form-area">
                        <label className="contact__form-tag">Project</label>
                        <textarea 
                            name="project" 
                            cols='30' 
                            rows='10'
                            className='contact__form-input'  
                            placeholder='Write Your Project'
                        ></textarea>
                    </div>
                    <button href="#contact" className="button button--flex">
                        Send Message 
                        <svg 
                            xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill='none'
                            class='button__icon'
                        >
                            <path 
                                d="m21.426 11.095-17-8A.999.999 0 0 0 3.03 4.242L4.969 12 3.03 19.758a.998.998 0 0 0 1.396 1.147l17-8a1 1 0 0 0 0-1.81zM5.481 18.197l.839-3.357L12 12 6.32 9.16l-.839-3.357L18.651 12l-13.17 6.197z"
                                fill='var(--container-color)'
                            />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="box-container container">
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone number</h3>
                <p>+254-7059-599-86</p>
                <p>+254-7059-599-86</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>our address</h3>
                <p>2305 Nakuru, Kenya -20100</p>
            </div>
            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>opening hours</h3>
                <p>07:00am to 10:00pm</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email address</h3>
                <p>zablonombiri001@gmail.com</p>
                <p>zabby040@gmail.com</p>
            </div>
        </div>
        <div class="credit"> 
            &copy; 
            copyright @ 
            <?php 
                echo date('Y'); 
            ?> 
            by 
            <span>Zambagarrah.Z.O</span>
        </div>
    </section>
    <!-- Custom JS File Link -->
    <script src="js/script.js"></script>
</body>
</html>



