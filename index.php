<?php

if($_POST["submit"]) {
    $recipient="hello.ryanwood@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65805403-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-65805403-1');
</script>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
  <title>ryanw.co</title>
</head>

<body>

  <header>
  <a href="#"><div class="logo"></div></a>
  <nav>
    <a href="#projects">&#8627;Projects</a>
    <a href="#contact">&#8627;Contact</a>
    <a href="./newsletter.html" class="special">&#8627;Newsletter</a>
  </nav>
  </header>

<div class="container">

    <div class="hero"><h1>Ryan is a <span class="outline">multidisciplinary designer</span> in San Francisco, specializing in digital product design. Currently he's <span class="gradient">Lead Designer®</span> @ <a href="https://www.instagram.com/cala__/" target="_blank">CALA&#x2197;</a>. Previously he was Lead Designer® @ <a href="https://superhuman.com/" target="_blank">SUPERHUMAN&#x2197;</a>. On the side he likes to spend his time pursuing photography, fashion, and making (ill-advised) crypto investments. You can scope his latest tweets <a href="https://twitter.com/RBTRYN" target="_blank">here&#x2197;</a>, peep the gram <a href="https://www.instagram.com/nexpure/" target="_blank">here&#x2197;</a>, or drop a line <a href="#contact">here&#x2197;</a>. Check out his recent work below and please enjoy your stay 🏡</h1>
    </div>

<a id="projects">
  <div class="section wow fadeIn" data-wow-duration="1s"><h2>Recent Projects</h2></div>
  <div class="portfolio-grid">
      <div class="item item1 wow fadeInUp" data-wow-duration="1s">
        <div class="overlay">
        </div>
      </div>
      <div class="title title1 wow fadeIn"><h4>Superhuman for Web and MacOS</h4>
        <h5><span class="blink">&#8627;</span>Project Coming Soon</h5></div>

      <div class="item item2 wow fadeInUp" data-wow-duration="1s">
        <div class="overlay">
        </div>
      </div>
      <div class="title title2 wow fadeIn"><h4>Superhuman iOS</h4>
        <h5><span class="blink">&#8627;</span>Project Coming Soon</h5></div>  

      <div class="item item3 wow fadeInUp" data-wow-duration="1s">
        <div class="overlay">
        </div>
      </div>
      <div class="title title3 wow fadeIn"><h4>Superhuman Marketing/Branding</h4>
        <h5><span class="blink">&#8627;</span>Project Coming Soon</h5></div>  

      <div class="item item4 wow fadeInUp" data-wow-duration="1s">
        <div class="overlay">
        </div>
      </div>  
      <div class="title title4 wow fadeIn"><h4>Superhuman Carbon</h4>
        <h5><span class="blink">&#8627;</span>Project Coming Soon</h5></div>
  </div>
</a>

  <!--
  <div class="section wow fadeIn" data-wow-duration="1s"><h2>Latest Writing and Ramblings</h2></div>
  <section class="writing wow fadeIn" data-wow-duration="1s">
    <div class="post post1"><h4>Subscribe</h4></div>
    <div class="post post2"><h4>to</h4></div>
    <div class="post post3"><h4>the</h4></div>
    <div class="post post4"><h4>newsletter</h4></div>
  </section>
  //-->

<a id="contact">
  <section class="contact wow fadeIn" data-wow-duration="1s">
    <div class="contact-form">
    <h2>Spam Ryan's Guestbook With Love 💌</h2>
    <p>
    
    <?=$thankYou ?>

    <form method="post" action="index.php">
      <input type="text" name="sender" placeholder="Your name">
      <br>
      <input type="text" name="senderEmail" placeholder="Your email..">
      <br>
      <textarea name="message" placeholder="Write something.." style="height:200px"></textarea>
      <br>
      <input type="submit" name="submit" value="&#8627;Submit">
    </form>
    
    </p>
    </div>

    <div class="social">
    <h2>Social Media Is Ruining Your Life™</h2>
    <ol>
      <li><a href="https://twitter.com/RBTRYN" target="_blank">Twitter&#x2197;</a></li>
      <li><a href="https://instagram.com/nexpure" target="_blank">Instagram&#x2197;</a></li>
      <li><a href="https://dribbble.com/ryanw" target="_blank">Dribbble&#x2197;</a></li>
      <li><a href="#"><span class="lol">MySpace</span></a></li>
      <li>LinkedIn</li>
      <li>Friendster</li>
      <li>Facebook</li>
      <li>Path</li>
    </ol>
    </div>
  </section>
</a>

  <div class="section hireme wow fadeIn" data-wow-duration="1s"><h2>Ryan is currently <a href="mailto:hello.ryanwood@gmail.com?Subject=Hello%20there">available for collaboration &#128232;</a> with brands and agencies worldwide</h2></div>

  <footer>
  <h3>Designed with 💙 in San Francisco by Ryan Wood
    <br>
  <span class="gradient">© ryanw.co 2018</span></h3>
  </footer>

</div>

<script>
  new WOW().init();
</script>

<script>
  var Hero = anime({
    targets: '.hero',
    opacity: 1,
    translateY: [100, 0],
    duration: 2000,
  });
  var logo = anime({
    targets: '.logo',
    opacity: 1,
    translateY: [-50, 0],
    duration: 1500,
    delay: 500,
  });
  var nav = anime({
    targets: 'nav',
    opacity: 1,
    duration: 1500,
    delay: 500,
  });
</script>

<script> </script>
</body>
</html>