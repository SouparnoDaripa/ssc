<?php 
  session_start();
  $uniq_id ="";
  if(!isset($_SESSION['u_id'])){
    $_SESSION['u_id'] = mt_rand(10000,99999);
  }
  $uniq_id = $_SESSION['u_id'];
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

        <section id="menu">
            <div class="menu container">
              <h1>Menu</h1> 
              <hr/>
              <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <h2></h2>
                    <div class="tab-wrap">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#category1" data-toggle="tab">Welcome Drinks</a></li>
                                    <li class=""><a href="#category2" data-toggle="tab">Starter Veg</a></li>
                                    <li class=""><a href="#category3" data-toggle="tab">Starter Non-Veg</a></li>
                                    <li class=""><a href="#category4" data-toggle="tab">Chat Counter</a></li>
                                    <li class=""><a href="#category5" data-toggle="tab">Soup</a></li>
                                    <li class=""><a href="#category6" data-toggle="tab">Roti</a></li>
                                    <li class=""><a href="#category7" data-toggle="tab">Main Course Veg</a></li>
                                    <li class=""><a href="#category8" data-toggle="tab">Rice</a></li>
                                    <li class=""><a href="#category9" data-toggle="tab">Main Course Non-Veg</a></li>
                                    <li class=""><a href="#category10" data-toggle="tab">Main Course Veg Spc.</a></li>
                                    <li class=""><a href="#category11" data-toggle="tab">Side Dish</a></li>
                                    <li class=""><a href="#category12" data-toggle="tab">Chutney</a></li>
                                    <li class=""><a href="#category13" data-toggle="tab">Papad</a></li>
                                    <li class=""><a href="#category14" data-toggle="tab">Pickles</a></li>
                                    <li class=""><a href="#category15" data-toggle="tab">Salad</a></li>
                                    <li class=""><a href="#category16" data-toggle="tab">Special Counter</a></li>
                                    <li class=""><a href="#category17" data-toggle="tab">Sweet Desserts</a></li>
                                    <li class=""><a href="#category18" data-toggle="tab">Extras</a></li>
                                </ul>
                            </div>
                          
                            <div class="parrent media-body">
                                <div class="tab-content">
                                  <?php
                                    $sql = "SELECT * from item where type_id = 1";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane active in" id="category1">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 2";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category2">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 3";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category3">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 4";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category4">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 5";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category5">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 6";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category6">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 7";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category7">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 8";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category8">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                  <div class="inner">
                                                    <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 9";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category9">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                  <div class="inner">
                                                    <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 10";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category10">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                  <div class="inner">
                                                    <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 11";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category11">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                  <div class="inner">
                                                    <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 12";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category12">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                  <div class="inner">
                                                    <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 13";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category13">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                  <div class="inner">
                                                    <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 14";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category14">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 15";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category15">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 16";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category16">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;

                                    $sql = "SELECT * from item where type_id = 17";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category17">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print; 

                                    $sql = "SELECT * from item where type_id = 18";
                                    $query = mysqli_query($db_conx, $sql);
                                    $print = "";
                                    $print .='<div class="tab-pane" id="category18">
                                              <div class="row">';
                                    while($row = mysqli_fetch_array($query)){
                                        $print .= '<div class="col-md-4 col-sm-6">
                                            <div class="item">
                                              <p>'.$row[2].'</p>
                                              <div class="overlay">
                                                <div class="inner">
                                                  <button class="btn add-choice" onclick="addChoice(\''.$uniq_id.'\', \''.$row[1].'\', \''.$row[0].'\' )">Add</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>';
                                    }
                                    $print .='</div>
                                    </div>';
                                    echo $print;
                                    ?>
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->

                <div class="col-xs-12 col-sm-4">
                    <h2>Your Choices</h2>
                    <div class="choice-box" id="choice-list">
                        <p>You have not selected any choices.</p>
                    </div>
                </div>
              </div><!-- /.row -->
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
