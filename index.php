<?php
require('createmail.php');

$name = isset($_POST['name'])? $_POST['name'] : "";
$mail = isset($_POST['email'])? $_POST['email'] : "";
$message = isset($_POST['message'])? $_POST['message'] : "";

list($msg, $status) = parseMail($name, $mail, $message);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Web Development and Responsive Web Design with Search Engine Optimisation for small and mid-sized businesses">
    <meta name="keywords" content="web developer freelance uk london, web designer freelance uk london">
    <meta name="author" content="Balint Perjesi">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>		
    <script src="js/main.js"></script>
    <title>Web Development • Responsive Web Design • SEO • Livesign</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>

<body>
    <!-- Showcase & Nav -->
    <div id="showcase">
        <header>
            <nav class='cf'>
                <ul class='cf'>
                    <li>
                        <a href="#showcase">Home</a>
                    </li>
                    <li>
                        <a href='#services'>Services</a>
                    </li>
                    <li>
                        <a href='#about'>About</a>
                    </li>
                    <li>
                        <a href='#contact'>Contact</a>
                    </li>
                </ul>
                <a href='#' id='openup'>Menu</a>
            </nav>
        </header>
        <div class="section-main container">
            <h1>livesign</h1>
            <h2>web development</h2>
            <p class="lead hide-on-small">Tell the world who you are.</p>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services" class="section">
        <div class="container">
            <h2>Services</h2>
            <div id="ecommerce" class="flex-container">
                <h3>E-Commerce Websites</h3>
                <img class="image" src="img/ecommerce.jpg" alt="E-Commerce">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div id="blog" class="flex-container">
                <h3>Blogs</h3>
                <img class="image" src="img/blog.jpg" alt="Blog">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div id="portfolio" class="flex-container">
                <h3>Portfolios</h3>
                <img class="image" src="img/portfolio.jpg" alt="Portfolio">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div id="seo" class="flex-container">
                <h3>Search Engine Optimisation</h3>
                <img class="image" src="img/hay.jpg" alt="Needle in the haystack">
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                    aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section bg-light">
        <div class="container">
            <h2>About</h2>
            <img class="image" src="img/balint.jpg" alt="Portrait">
            <p class="lead">Thank you for taking the time to visit Livesign Development. When choosing a company to work with, you often have questions about who is behind the firm. Let me give you a brief description of who I am. My name is Bálint Perjési, I am the founder of Livesign Development. After a career in performing arts and musical education, I decided to acquire new skills that would allow me to become creative in the field of 21st century technologies and earn a living by working in one of the most in demand professions in today's world. So I learned to code by reading books, following online courses and practicing the craft on various types of projects. Furthermore I was lucky to receive guidance from two good friends who are both well established programmers with extensive knowledge. Today my aim is to help business owners, bloggers and any other professionals achieve their goals by providing them with a beautiful, functional and reliable online presence. For this purpose I chose to start my journey with the PHP-stack: PHP is a well-proven server scripting language, used by roughly 80% of the websites worldwide. It integrates perfectly with the database management system MySQL and communicates with the browser in a very intuitive way. I also like using WordPress, the most widespread content management system based on PHP. Besides being a web developer, I am also a social person. Having lived in five different countries, I speak four languages: English, French, German and Hungarian, the latter being my mother tongue. I love interacting with people from all horizons and listening to them, which allows me to genuinely understand their needs. Last but not least, I am also passionate about literature, history, cinema and theatre. If you want to tell the world who you are, I would be happy to be your messenger!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2>Contact</h2>
            <p class="lead">Get a promotional offer on your next website!<br>For more information, please send a message using the form below.</p>    
            <?php if($msg != ""): ?>
    <div class="alert <?php echo $status; ?>"><?php echo $msg; ?></div>
            <?php endif; ?>
            <form autocomplete="off" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>#contact">
            <input autocomplete="false" name="hidden" type="text" style="display:none;">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Full Name.." value="<?php echo $name; ?>">
                </div>                
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Your Email.." value="<?php echo $mail; ?>">
                </div>
                <div class="form-group">
                    <textarea name="message" class="form-control" placeholder="Your Message.."><?php echo $message; ?></textarea>
                </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-bottom">
            Copyright &copy; 2019 Livesign Development
        </div>
    </footer>
</body>

</html>
