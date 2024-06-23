
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Portfolio for Artist</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav>
        <ul>
            <li><a href="#home" class="nav_link active">Home</a></li>
            <li><a href="#about" class="nav_link">About</a></li>
            <li><a href="#contact" class="nav_link">Contact</a></li>
            <label class="switch">
                <input type="checkbox">
                <span class="slider"></span>
            </label>
        </ul>
    </nav>
    <header>
        <section id="home" class="content">
            <h1> <span style="color: red;">Moon</span>ika Shrestha</h1>
            <p>Discover the best Artist in the World</p>
            <div class="header-image">
                <img src="public/pexels-photo-1988681.jpeg" alt="image-1">
                <img src="public/pexels-photo-3094218.jpeg" alt="image-2">
                <img src="public/pexels-photo-3299386.jpeg" alt="image-3">
                <img src="public/pexels-photo-595747.jpeg" alt="image-4">
            </div>
            </div>
    </header>
    <section id="about" class="about">
        <h2>About Me</h2>
        <div class="artist-detail">
            <div class="artist-image">
                <img src="public/pexels-photo-3778361.webp" alt="artist-image">
            </div>
            <div class="artist-description">
                <p>Moonika Shrestha was a famous Nepali painter. She painted pictures of herself and used lots of bright
                    colors. Her paintings showed how she felt inside and what she thought about the world around her.
                    People still love her paintings today because they are unique and full of emotions.</p>
                <button id="downloadBtn"> <a href="">Download Resume</a></button>
            </div>
    </section>
    </div>
    <section id="contact" class="contact">
        <div class="primarycenter">Contact Us</div>
        <div class="contact-box">
            <form action="submission.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="number">Phone Number</label>
                    <input type="number" name="number" id="number" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button name="submit">Send</button>
            </form>
        </div>
    </section>
    <section class="footer">
        <div class="first">
            <div class="contactus">
                <b>Contact Us</b>
                <p>Chhabdi Barahi Temple</p>
                <p>+9779829182166</p>
                <p>monikabict@gmail.com</p>
            </div>
            <div class="social">
                <h4>Social links</h4>
                <a href="https://www.facebook.com/monika.stha.549"><i class="fa-brands fa-facebook"
                        style="color: blue;font-size: 1.3rem;"></i></a>
                <a href="https://www.instagram.com/riko_amanai.0/"> <i class="fa-brands fa-square-instagram"
                        style="color:rgb(242, 92, 117);font-size: 1.3rem;"></i></a>
                <a href="https://github.com/moonikastha"> <i class="fa-brands fa-github"
                        style="color:black;font-size: 1.3rem;"> </i></a>

            </div>
        </div>
        <div class="second">
            <div class="resources">
                <h4>Resources</h4>
                <p>Portfolio</p>
                <p>Home</p>
                <p>Gallery</p>
                <p>Services</p>
                <p>Contact Us</p>
                <p>Projects</p>
                <p>Artist</p>
            </div>
        </div>
        <div class="third">
            <h4>Locate Us</h4>
            <p>Sitemaps</p>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

        </script>
    <script src="script.js"></script>
</body>

</html>