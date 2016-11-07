<!DOCTYPE html>
<html>
<head>
  <?php include('parts/head.php'); ?>
</head>
  <body class="contactPage">
    <header>
        <?php include('parts/header.php'); ?>
    </header>
    <div id="main">
        <section class="section">
          <div class="container-fluid">

           <div class="row">
             <div class="contactInfo col-xs-12 col-sm-5 col-md-6">
               <h4>Contact Info</h4>
               <div class="contactInfo lato">
                 <div class="lato underline"><i class="fa fa-envelope" aria-hidden="true"></i>  <a href="mailto:ayakosayama1987@gmail.com">ayakosayama1987@gmail.com</a></div>
                 <div class="lato underline"><i class="fa fa-phone" aria-hidden="true"></i>  XXX-XXX-XXXX</div>
              </div>
             </div><!--.col-->

               <div class="sendForm col-xs-12 col-sm-7 col-md-6">
                 <h4>Send Form</h4>
                 <form class="lato blackText" method="get">
                   <div class="row">
                     <div class="form-group col-sm-6">
                      <label class="control-label sr-only" for="exampleInputName2">Hidden label</label>
                      <input name="from" type="text" class="form-control" id="exampleInputName2" placeholder="Your Super Name">
                     </div>
                     <div class="form-group col-sm-6">
                      <label class="control-label sr-only" for="exampleInputName2">Hidden label</label>
                      <input name="subject" type="text" class="form-control" id="exampleInputName2" placeholder="Your Super Name">
                     </div>
                     <div class="form-group col-sm-6 yourEmail">
                      <label class="control-label sr-only" for="exampleInputEmail1">Email address</label>
                       <input name="to" type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Super Email">
                     </div>
                   </div><!--row-->
                     <div class="form-group">
                       <label class="control-label sr-only" for="exampleInputPassword1">Questions and Compliments</label>
                       <textarea name="message" class="form-control" rows="6" placeholder="Questions and Compliments"></textarea>
                     </div>


                   <!-- <button type="submit" class="btn btn-default">Submit</button> -->
                   <input type="submit" class="btn btn-warning btn-lg" id="sendBtn" value="send">
                 </form>
               </div><!--.col-->
           </div><!--row-->
         </div><!--container-->
        </section>
    </div><!--main-->
        <?php include('js/js.php') ?>
  </body>
</html>
