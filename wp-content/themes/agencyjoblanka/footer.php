<footer class="site-footer">

<nav class="site-nav">
    <?php

    $args=array(
        'theme_location'=> 'footer'
    )


    ?>
    <!-- <?php wp_nav_menu($args); ?> -->
</nav>

<!--  footer section  -->
<section id="footer">
    <img src="img/wave2.png" alt="" class="footer-img">
    <div class="container">
       
        <div class="row">
            <div class="col-md-4 footer-box">
                <img src="img/demo-logo.png" alt="">
                <p>Subscribe Easy Tutorial YouTube channel to watch more videos on website development,Digital Marketing, Wordpress and graphic designing</p>
            </div>
            <div  class="col-md-4 footer-box">
                <p><b>CONTACT US</b></p>
                <p><i class="fa fa-map-marker p-1"></i>World trade Center,Banglore</p>
                <p></p><i class="fa fa-phone p-1"></i>  0112567678</p>
                <p><i class="fa fa-envelope p-1"></i>logo@gmail.com</p>
            </div>
            <div class="col-md-4 footer-box">
                <p><b>SUBSCRIBE NEWSLETTER</b></p>
                <input type="email" class="form-control" placeholder="your email">
                <button type="button" class="btn btn-primary">Subscribe</button>
            </div>
        </div>
        <hr>
        <p class="copyright">Website crafted by Easy Tutorials</p>
    </div>
</section>

</footer>

<?php wp_footer();?>



</body>
</html>