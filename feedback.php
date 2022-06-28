 <?php
include("conn.php");
include("header.php");
?>
<!--feedback =======-->

<section id="contact">
    <!-- =============== container =============== -->
        <div class="container">
                <div class="row">
                <div class="title">
                <h2>Feedback</h2>
                <p>Meet some of our lovely, passionate, positive people.</p>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 wow bounceIn animated" data-wow-delay=".1s">

                    <form action="#" method="post">
                        <div class="ajax-hidden">
                            <div class="col-xs-12  form-group wow fadeInUp animated">
                                <label for="c_name" class="sr-only">Name</label>
                                <input type="text" placeholder="Name" name="name" class="form-control" id="name" required="">
                            </div>

                            <div data-wow-delay=".1s" class="col-xs-12  form-group wow fadeInUp animated">
                                <label for="c_email" class="sr-only">Email</label>
                                <input type="email" placeholder="E-mail" name="email" class="form-control" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" placeholder="e.g. info@envato.com" required="">
                            </div>

                            <div data-wow-delay=".2s" class="col-xs-12 col-sm-12 col-md-12 form-group wow fadeInUp animated">
                                <textarea placeholder="Message" rows="7" name="message" id="Message" class="form-control" required=""></textarea>
                            </div>
                          
                           


                            <button data-wow-delay=".3s" class="btn btn-sm btn-block wow fadeInUp animated" type="submit" value="submit" name="submit">submit</button>
                        </div>
                        <div class="ajax-response"></div>
                    </form>

                </div>              
            </div>
        </div><!-- =============== container end =============== -->
    </section>
    
    <!-- =============== jQuery =============== -->
    <script src="assets/js/jquery.js"></script>
     <script src="assets/js/isotope-docs.min.js"></script>
    <!-- =============== Bootstrap Core JavaScript =============== -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- =============== Plugin JavaScript =============== -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.fittext.js"></script>
    <script src="assets/js/wow.min.js"></script> 
    <!-- =============== owl carousel =============== -->
    <script src="assets/owl-carousel/owl.carousel.js"></script>  
    <!-- Isotope does NOT require jQuery. But it does make things easier -->

<script src="assets/js/baguetteBox.js" async></script>
<script src="assets/js/plugins.js" async></script>
 
    <!-- =============== Custom Theme JavaScript =============== -->
    <script src="assets/js/creative.js">    </script> 
<script src="assets/js/jquery.nicescroll.min.js"></script>

<script>
  $(document).ready(function() {
  
    var nice = $("html").niceScroll();  // The document page (body)
    
    $("#div1").html($("#div1").html()+' '+nice.version);
    
    $("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV

    $("#boxscroll2").niceScroll("#contentscroll2",{cursorcolor:"#F00",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // Second scrollable DIV
    $("#boxframe").niceScroll("#boxscroll3",{cursorcolor:"#0F0",cursoropacitymax:0.7,boxzoom:true,touchbehavior:true});  // This is an IFrame (iPad compatible)
    
    $("#boxscroll4").niceScroll("#boxscroll4 .wrapper",{boxzoom:true});  // hw acceleration enabled when using wrapper
    
  });
</script>
<script>
window.onload = function() {
    if(typeof oldIE === 'undefined' && Object.keys)
        hljs.initHighlighting();

    baguetteBox.run('.baguetteBoxOne');
    baguetteBox.run('.baguetteBoxTwo');
    baguetteBox.run('.baguetteBoxThree', {
        animation: 'fadeIn'
    });
    baguetteBox.run('.baguetteBoxFour', {
        buttons: false
    });
    baguetteBox.run('.baguetteBoxFive', {
        captions: function(element) {
            return element.getElementsByTagName('img')[0].alt;
        }
    });
};
</script>
</body>
</html>
<?php
include("footer.php");
?>


<?php

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
  
      echo  $query="insert into feedback(name,email,message)values('$name','$email','$message')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo  "Record is insert sucessfuly";
        }
        else
        {
            echo "Record is not insert";
        }

}
?>
