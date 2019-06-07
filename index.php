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
                <h3>eCommerce Websites</h3>
                <img class="image" src="img/ecommerce.jpg" alt="E-Commerce">
                <p class="lead">Welcome to Livesign Development! If you run your own business, you certainly want your online shop to be more than just a virtual vitrine. Indeed, the quality of the interaction with your visitors will be crucial to developing your conversion rate. Therefore I offer a complete service allowing you to communicate with your target audience in an efficient way. Showcase a design tailored to your brand, that captures the essence of your activity and products, while fully supporting the message you want to convey to your visitors. So that they actually become your customers. Manage your content as you wish with your personal admin panel: add, modify or suppress products, create news feeds and display special offers. And, obviously, rely on a safe payment system securing both your customers' and your company's bank data. So don't wait, make your business flourish with the website you always wanted!</p>
            </div>
            <div id="blog" class="flex-container">
                <h3>Blogs</h3>
                <img class="image" src="img/blog.jpg" alt="Blog">
                <p class="lead">As a business, you rely on consumers to keep buying your products and services. With a well designed and compelling blog, you get the possibility to increase your visibility and grab the consumers' attention. This is even more important for new businesses in order to be competitive. Let me build a blog for you that will stand out not only through the content you will create, but also through its appealing and intuitive user interface. Keep your customers up to date and let your visitors interact with you and your brand. Connect smoothly to the relevant audience through social media integration, and create a network of loyal followers. Boost your traffic and send quality leads to your website. An engaging blog is indeed an effective lead generation tool that helps you build your brand and demonstrate your authority. Make your brand a longlasting standard, get your blog now!</p>
            </div>
            <div id="portfolio" class="flex-container">
                <h3>Portfolios</h3>
                <img class="image" src="img/portfolio.jpg" alt="Portfolio">
                <p class="lead">In all industries, portfolios have become incredibly popular. They help you curate your online image and give you more opportunities to impress hiring managers. Your portfolio is the home of your professional biography, the place where people can access your work. It makes your resume much more appealing by easily collecting all of your clips and samples in one spot. A portfolio is also a powerful tool for job interviews, since it guarantees that all the information you want to present is available and up to date. Get a portfolio designed to not only log your CV, but also highlight your personality and inspire your visitors. Order your portfolio to offer the most effective impression of yourself!</p>
            </div>
            <div id="seo" class="flex-container">
                <h3>Search Engine Optimisation</h3>
                <img class="image" src="img/hay.jpg" alt="Needle in the haystack">
                <p class="lead">Search Engine Optimisation - or SEO - is the practice of increasing both the quality and quantity of website traffic, as well as exposure to your brand, through non-paid - also known as "organic" - search engine results. While paid advertising can generate traffic to websites, the majority of online traffic is driven by search engines. Organic search results appear more credible to savvy searchers, and receive more clicks than paid advertisements. Optimising your site will help deliver better information to search engines so that your content can be properly indexed and displayed within search results. Make search engines your best allies so your brand becomes visible to the whole world!</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section bg-light">
        <div class="container">
            <h2>About</h2>
            <img class="image" src="img/balint.jpg" alt="Portrait">
            <p class="lead">Thank you for taking the time to visit Livesign Development. When choosing a company to work with, you often have questions about who is behind the firm. Let me give you a brief description of who I am. My name is Bálint Perjési, I am the founder of Livesign Development. After a career in performing arts and musical education, I decided to acquire new skills that would allow me to become creative in the field of 21st century technologies and earn a living by working in one of the most in demand professions in today's world. So I learned to code by reading books, following online courses and practicing the craft on various types of projects. Furthermore I was lucky to receive guidance from two good friends who are both well established programmers with extensive knowledge. Today my aim is to help business owners, bloggers and any other professionals achieve their goals by providing them with a beautiful, functional and reliable online presence. For this purpose I chose to start my journey with the PHP-stack: PHP is a well-proven server scripting language, used by roughly 80% of the websites worldwide. It integrates perfectly with the database management system MySQL&reg; and communicates with the browser in a very intuitive way. I also like using WordPress, the most widespread content management system based on PHP. Besides being a web developer, I am also a social person. Having lived in five different countries, I speak four languages: English, French, German and Hungarian, the latter being my mother tongue. I love interacting with people from all horizons and listening to them, which allows me to genuinely understand their needs. Last but not least, I am also passionate about literature, history, cinema and theatre. If you want to tell the world who you are, I would be happy to be your messenger!</p>
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
               &copy;<a href="https://www.studio-arlequin.com/">CHom-Studio Arlequin</a>
            </span>
        </div>
    </footer>
</body>

</html>
