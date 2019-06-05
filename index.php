<?php
require('createmail.php');
require('texts.php');

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
                <h3>eCommerce Websites</h3>
                <img class="image" src="img/ecommerce.jpg" alt="E-Commerce">
                <p class="lead"><?php echo $eCommerce ?></p>
            </div>
            <div id="blog" class="flex-container">
                <h3>Blogs</h3>
                <img class="image" src="img/blog.jpg" alt="Blog">
                <p class="lead"><?php echo $blogs ?></p>
            </div>
            <div id="portfolio" class="flex-container">
                <h3>Portfolios</h3>
                <img class="image" src="img/portfolio.jpg" alt="Portfolio">
                <p class="lead"><?php echo $portfolio ?></p>
            </div>
            <div id="seo" class="flex-container">
                <h3>Search Engine Optimisation</h3>
                <img class="image" src="img/hay.jpg" alt="Needle in the haystack">
                <p class="lead"><?php echo $seo ?></p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section bg-light">
        <div class="container">
            <h2>About</h2>
            <img class="image" src="img/balint.jpg" alt="Portrait">
            <p class="lead"><?php echo $about ?></p>
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
            <span>Copyright &copy; 2019 Livesign Development</span>
            <span class="hide-credits">  •  Credits &copy;<a href="https://pixabay.com/users/jarmoluk-143740/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=436501">Michal Jarmoluk</a>
              &copy;<a href="https://pixabay.com/users/fill-8988/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=385530">Florian Pircher</a>
               &copy;<a href="https://www.studio-arlequin.com/">CHOM-STUDIO ARLEQUIN</a>
            </span>
        </div>
    </footer>
</body>

</html>
