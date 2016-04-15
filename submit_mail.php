<?php 
  session_start();
  if(isset($_GET['ref'])){
    $uniq_id = $_GET['ref'];
    if($uniq_id != $_SESSION['u_id']){
      header('Location: menu.php');
    }
  }else{
    header('Location: menu.php');
  }
  include('db_con.php');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Sweet N Sour Catering Services | Menus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body id="body">

  <!--start-banner-->
            <div class="banner banner-nav">
                <div class="container text-center">
                    <div class="top-menu">
                    <span class="menu"><img src="" alt=""/> </span>
                    <ul>
                            <li><a  href="index.html">home</a></li>
                            <li><a  href="about-us.html">about us</a></li>
                            <li><a  href="menu.php" class="active">menu</a></li>
                            <li><a  href="gallery.html">gallery</a></li>
                            <li><a  href="events.html">events</a></li>
                            <li><a  href="contact.html">contact</a></li>
                        </ul>
                        
                    </div>
                    </div>  
            </div>
        <!--end-banner-->

        <section id="mail-quote">
        <div class="mail-quote container">
        <h1>Personal Details</h1>
        <hr/>
        	<div class="row">
        		<div id="quote-box">
        		<form class="form-horizontal" onsubmit="return false;">
                    <fieldset>
                    <span id="status"></span>
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Name<span class="req"> *</span> :</label>  
                      <div class="col-md-4">
                      <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Phone No.<span class="req">*</span> :</label>  
                      <div class="col-md-4">
                      <input id="phone" name="phone" type="text" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textinput">Email ID<span class="req"> *</span> :</label>  
                      <div class="col-md-4">
                      <input id="email" name="email" type="email" placeholder="" class="form-control input-md" required="">
                        
                      </div>
                    </div>

                    <!-- Textarea -->
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="textarea">Address<span class="req"> *</span> :</label>
                      <div class="col-md-4">                     
                        <textarea class="form-control" rows="6" id="address" name="address"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                        <button class="btn btn-warning btn-block submit-request" id="submit-request" onclick="<?php echo 'submit_form(\''.$uniq_id.'\')'; ?> ">SUBMIT</button>
                    </div>
                    </fieldset>
                </form>
                </div>
        	</div>
        </div>        	
        </section>

        <footer class="footer">
          <p>Copyright &copy; SSC Services 2016. All Rights Reserved.</p>
        </footer>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/main.js"></script>
    <!-- script for menu -->
               
         <script>
         $("span.menu").click(function(){
         $(".top-menu ul").slideToggle("slow" , function(){
         });
         });
         </script>
    <!-- //script for menu -->
  </body>
</html>
