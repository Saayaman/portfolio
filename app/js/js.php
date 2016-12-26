
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="js/wow-min.js"></script>

<script type="text/javascript">

  // $('.navbar li a').click(function(){
  //
  // console.log('success');
  // $(this).addClass('active').siblings().removeClass('active');
  // });

//   wow = new WOW(
//   {
//   boxClass:     'wow',      // default
//   animateClass: 'animated', // default
//   offset:       4,          // default
//   mobile:       true,       // default
//   live:         true        // default
// }
  new WOW().init();


  var sendBtn = document.getElementById('sendBtn');
  var requiredFields = document.getElementsByClassName('form-control');

  for (var i = 0; i < requiredFields.length; i++) {
    requiredFields[i].onfocus = function(){
      this.style.backgroundColor = "white";
    }
  }

 sendBtn.onclick = function(E){
   for (var i = 0; i < requiredFields.length; i++) {
     if (requiredFields[i].value == ""){
       E.preventDefault();
       myFunction(requiredFields[i]);
     }
   }
 }

 function myFunction(x){
   x.style.backgroundColor = "#ffffcc";
   console.log('Success!');
 }


 $('form').on("submit", function(event){

   event.preventDefault();

   $.ajax({
     url: "http://192.168.10.76:8000/test.php",
     success: function(data){
       alert(data);
     },
     data: $(this).serialize()


   });

 });


</script>
