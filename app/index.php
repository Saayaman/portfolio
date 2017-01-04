<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Super Saayaman | Portfolio of Ayakko Sayama</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>
  <body class="homePage">
    <header>
    <nav class="navbar">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="index.php">SAAYA<br><p class="lato">ayako sayama</p></a>
          </div>

          <!--another nav button-->

        <div class="lato collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php">HOME</a></li>
              <li><a href="about.php">ABOUT ME</a></li>
              <li><a href="works.php">WORKS</a></li>
              <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </div>
    </div>
    </nav>

    </header>
    <div id="main">
      <section class="section section-home">
        <div class="container-fluid">
          <!-- <img class="ayakoImage" src="img/ayako1-2.png" alt="thatsMOI" /> -->
          <div class="pageTitle">
            <div class="wow fadeInUp kaushan kaushan-title">How are you?</div>
            <h1 class="wow fadeInUp noMarginTop">I'M SUPER!</h1>
            <h3 class="wow fadeInUp noMarginTop">Thanks for asking</h3>
          </div>
          <p class="wow fadeInUp lato" data-wow-duration="1s">I’m SAAYA! A web designer/developer from Japan. <span class="kaushan">Yes, the homeland of Dragonball. </span>Now I am based on Vancouver, looking for jobs!</p>
        </div>
      </section>
      <section class="section section-about">
        <div class="container-fluid">
          <h2 class="wow fadeInUp" data-wow-offset="200">WHY I'M SUPER?</h2>
          <p class="wow fadeInUp lato"><span class="kaushan">There are too many things..</span><br>But Here’s some!</p>
          <h3 class="underline wow fadeInUp" data-wow-offset="200"><span class="blackText">I CAN DO SUPER</span> <a href="#">COOL THINGS</a> <span class="blackText">FOR YOU.</span></h3>
          <h3 class="underline wow fadeInUp" data-wow-offset="200"><span class="blackText">I’M SUPER</span> <a href="#">ACTIVE</a>.</h3>
          <h3 class="underline wow fadeInUp" data-wow-offset="200"><span class="blackText">I’M SUPER</span> <a href="#">POSITIVE</a>.</h3>
          <h3 class="underline wow fadeInUp" data-wow-offset="200"><span class="blackText">I’M SUPER</span> <a href="#">FRIENDLY</a>.</h3>
          <div class="moreSuper lato wow fadeIn" data-wow-offset="200"><a href="about.php" class="btn" role="button">MORE<span class="kaushan"> Super Things</span> ABOUT ME</a></div>
        </div>
      </section>
      <section class="section section-works">
        <div class="container-fluid">
          <h2 class="wow fadeInUp" id="mySuperWorks">MY SUPER WORKS</h2>

          <div class="row">
          <div class="works col-xs-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-offset="200">
            <img src="img/work1.png" alt="work1" class="worksImage" />
            <h4 class="lato underline"><a href="#">Logo Design</a></h4>
            <p class="lato">The Descriptions of the work.</p>
          </div>
          <div class="works col-xs-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-offset="200">
            <img src="img/work2.png" alt="work2"  class="worksImage" />
            <h4 class="lato underline"><a href="#">Website Branding</a></h4>
            <p class="lato">he Descriptions of the work in more detail than the one before.</p>
          </div>
          <div class="works col-xs-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-offset="200">
            <img src="img/work1.png" alt="work1" class="worksImage" />
            <h4 class="lato underline"><a href="#">Logo Design</a></h4>
            <p class="lato">The Descriptions of the work.</p>
          </div>
          <div class="works col-xs-12 col-sm-6 col-lg-4 wow fadeInUp" data-wow-offset="200">
            <img src="img/work2.png" alt="work2"  class="worksImage" />
            <h4 class="lato underline"><a href="#">Website Branding</a></h4>
            <p class="lato">he Descriptions of the work in more detail than the one before.</p>
          </div>

        </div><!--.row-->
          <div class="moreSuper lato wow fadeIn" data-wow-offset="200"><a href="works.php" class="btn" role="button">MORE<span class="kaushan"> SUPER</span> WORKS</a></div>
        </div>
      </section>
    </div><!--main-->
    <footer>
      <div class="container-fluid">
        <img src="img/ayako2.png" alt="ayako2"  class="ayakoImage"/>
        <div class="kaushan kaushan-title wow fadeInUp" data-wow-offset="200">"Saaya, you're so SUPER"</div>
        <h2 class=" wow fadeInUp noMarginTop wow fadeInUp" data-wow-offset="200">Thanks!<br>LET'S GET IN TOUCH!</h2>
      </div>
      <?php include('parts/footer.php'); ?>
    </footer>
    <?php include('js/js.php') ?>
  </body>
</html>
