<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:sign_in_up.html");
}
$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');
$q_all = "select * from posts";
$post = mysqli_query($con ,$q_all);
$n = mysqli_num_rows($post); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website-Quzer</title>
    <link rel="icon" href="images/title_png/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link rel="stylesheet" href="css/user_home_pg.css">
    <style media="screen">
      .ques_col{
        border-top: 1px #EEE solid;
        border-bottom: 1px #EEE solid;
        font-size: 110%;
      }
      .ques_para{
        color: #33AAFF;
        overflow:auto;
        font-weight: 500;
        font-size: 130%;
      }
      .best_ans{
        font-family: 'Berkshire Swash', cursive;
        font-size: 100%;
        width: 100%;
        text-align: right;
        font-family: 'Alegreya', serif;
        font-weight: bold;
        font-style: italic;
      }
      .ht_cont{
        margin-top: 15px;
      }
      .answer{
        font-family: 'Itim', cursive;
        overflow: auto;
      }
      .fa-thumbs-up{
        color: green;
      }
      .fa-thumbs-down{
        color : red;
      }
      .fa-eye{
        color: #b505ff;
      }
      a {
        overflow: auto;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid full_width">
      <!-- BUG: Navbar width is not 100%; -->
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg full_width">
        <a  class="navbar-brand" href="#"> <img src="images/title_png/logo.png" class="d-inline-block align-top" alt="logo_Quzer" id="nav_logo">&nbsp;&nbsp;Quzer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="user_home_pg.php"> <label >Post Question</label></a>
                </li>
                <li class="nav-item dropdown" id="nav_more">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    More
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item item_hover" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;My Profile</a>
                    <a class="dropdown-item item_hover" href="#"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;Notifications</a>
                    <a class="dropdown-item item_hover" href="#"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item item_hover" href="logout.php">Logout &nbsp; <i class="fa fa-sign-out" aria-hidden="true"></i> </a>
                  </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
      </nav>
      <div class="container">
        <?php 
          for ($i=0; $i<$n; $i++){
            $data = mysqli_fetch_array($post,MYSQLI_NUM);
            if ($i>=$n-10){
            $user = explode("@",$data[2])[0];
              echo "<div class=\"row ques_col\">
              <div class=\"col-1\">
                <div class=\"container \">
                  <div class=\"row justify-content-center justify-self-center ht_cont\">
                    <p>12</p>
                  </div>
                  <div class=\"row justify-content-center justify-self-center ht_cont\">
                    <p><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></p>
                  </div>
                </div>
              </div>
              <div class=\"col-1\">
                <div class=\"container\">
                  <div class=\"row justify-content-center ht_cont\">
                    <p>12</p>
                  </div>
                  <div class=\"row justify-content-center ht_cont\">
                    <p><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></p>
                  </div>
                </div>
              </div>
              <div class=\"col-1\">
                <div class=\"container\">
                  <div class=\"row justify-content-center ht_cont\">
                    <p>12</p>
                  </div>
                  <div class=\"row justify-content-center ht_cont\">
                    <p><i class=\"fa fa-eye\" aria-hidden=\"true\"></i></p>
                  </div>
                </div>
              </div>
              <div class=\"col-8 offset-1\">
                  <div class=\"container\">
                    <div class=\"row\">
                      <a href=\"#\"><p class=\"ques_para\">$data[1]</p></a>
                    </div>
                    <div class=\"row\" >
                      <div class=\"col-6\">
                        <p class=\"answer\">$data[3]</p>
                      </div>
                      <div class=\"col-6\">
                          <p class=\"best_ans\">$user</p>
                      </div>
                    </div>
                  </div>
              </div>
        </div>" ;}}
        mysqli_close($con);
         ?>
      </div>
    </div>

    <div class="container-fluid">
      <footer id="myFooter">
          <div class="container">
              <div class="row">
                  <div class="col-sm-3 myCols">
                      <h5>Get started</h5>
                      <ul>
                          <li><a href="#">Home</a></li>
                          <li><a href="#">Sign up</a></li>
                          <li><a href="#">Downloads</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-3 myCols">
                      <h5>About us</h5>
                      <ul>
                          <li><a href="#">Company Information</a></li>
                          <li><a href="#">Contact us</a></li>
                          <li><a href="#">Reviews</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-3 myCols">
                      <h5>Support</h5>
                      <ul>
                          <li><a href="#">FAQ</a></li>
                          <li><a href="#">Help desk</a></li>
                          <li><a href="#">Forums</a></li>
                      </ul>
                  </div>
                  <div class="col-sm-3 myCols">
                      <h5>Legal</h5>
                      <ul>
                          <li><a href="#">Terms of Service</a></li>
                          <li><a href="#">Terms of Use</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="social-networks">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
              <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="github"><i class="fa fa-github" aria-hidden="true"></i></a>
              <a href="#" class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
          </div>
          <div class="footer-copyright">
              <p>2018 Quzer</p>
          </div>
      </footer>
    </div>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script type="text/javascript" src="js/user_home_pg.js"></script>
  </body>
</html>