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

        <section id="menu-selected">
            <div class="container">
              <div class="row">
                <div class="menu-selected center">
                <h2>Menu of Your Choices</h2>
                <?php
                  $i=1;
                  $test=0;
                  $print="";
                  while($i<19){
                    $sql = "SELECT * from category where type_id = '$i' LIMIT 1";
                    $query = mysqli_query($db_conx, $sql);
                    $row = mysqli_fetch_array($query);
                    $type = $row[1];

                    $sql = "SELECT c.id, c.uniq_id, c.type_id, i.item_name from choice c INNER JOIN item i on c.item_id = i.id where c.uniq_id = '$uniq_id' AND c.type_id = '$i'";
                    $query = mysqli_query($db_conx, $sql);
                    $num_rows = mysqli_num_rows($query);

                    if($num_rows > 0){
                          $test++;
                      $print .= '<div class="category'.$i.'">
                              <h3>'.$type.'</h3>
                              <p>';
                      while($row = mysqli_fetch_array($query)){
                        $print .=$row[3].', ';
                      }
                      $print = chop($print, ", ");
                      $print .='</p> </div>';
                    }
                    $i++;
                  }
                  if($test == 0){
                    $print .='<p>Sorry, You have no selected choices.';
                  }
                  $print .= '<a href="submit_mail.php?ref='.$uniq_id.'"><button class="btn btn-ctn btn-lg">Continue</button></a>';
                  echo $print;
                ?>
                
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
    <script src="js/retina.min.js"></script>
    <!-- For full-width background slider -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/main.js"></script>
               
   <script>
       $("span.menu").click(function(){
           $(".top-menu ul").slideToggle("slow" , function(){
           });
       });
   </script>
  </body>
</html>
