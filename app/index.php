<!DOCTYPE html>
<html>
<head>
  <?php include('parts/head.php'); ?>
</head>
  <body class="homePage">
    <header>
        <?php include('parts/header.php'); ?>
    </header>
    <div id="main">
      <section class="section section-home">
        <div class="container-fluid">
          <!-- <img class="ayakoImage" src="img/ayako1-2.png" alt="thatsMOI" /> -->
          <div class="pageTitle">
            <div class="wow fadeInUp kaushan kaushan-title">How are you?</div>
            <div class="wow fadeInUp noMarginTop">I'M SUPER!</div>
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
