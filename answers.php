<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("location:sign_in_up.html");
}
$qs = $_GET['qid'];
$con = mysqli_connect('localhost','******','******');
mysqli_select_db($con , 'id3968255_quzer');
//question
$q = "select * from posts where Id = $qs";
$q_query = mysqli_query($con ,$q);
$qus = mysqli_fetch_array($q_query,MYSQLI_NUM);
//answers
$ans = "select * from posts where q_id_for_ans = $qs";
$ans_q = mysqli_query($con,$ans);
$n = mysqli_num_rows($ans_q); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website Quzer</title>
    <link rel="icon" href="images/title_png/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/user_home_pg.css">
    <link rel="stylesheet" href="assets/css/Footer-with-social-icons.css">
    <script src="https://use.fontawesome.com/78adbf0cbc.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="css/answers.css">
  </head>
  <body>
    <?php
      include 'nav.php';
     ?>

     <div class="container">
       <div class="row">
         <h2 class="main_ques"><?php echo $qus[1]; ?></h2>
       </div>
       <div class="row" style="margin-top:5px;">
         <div class="col-6">
           <button type="button" name="like" class="btn btn-success btn-sm" ><i class="fa fa-thumbs-up" aria-hidden="true"></i>&nbsp;Like</button>
           <button type="button" name="dislike" class="btn btn-danger btn-sm" ><i class="fa fa-thumbs-down" aria-hidden="true"></i>&nbsp;Dislike</button>
           <button type="button" name="dislike" class="btn btn-default btn-sm" style="background-color:purple;"><i class="fa  fa-eye" aria-hidden="true"></i>&nbsp;views</button>
         </div>
         <div class="col-6 justify-content-right text-right">
           <button type="button" name="flag_imp" class="btn btn-secondary btn-sm" ><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;Flag inappropriate</button>
           <button type="button" name="dislike" class="btn btn-secondary btn-sm" ><i class="fa  fa-ban" aria-hidden="true"></i>&nbsp;Report Abuse</button>
           <button type="button" name="dislike" class="btn btn-secondary btn-sm " ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Suggest Edit</button>
           <button type="button" name="dislike" class="btn btn-success btn-sm " ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Add Yours</button>
         </div>
       </div>
       <div class="row justify-content-center has-success" style="margin-top:25px;">
         <div class="col-11 form-group justify-content-center">
          <form action="q_a_store.php" method="post">
            <input type="hidden" name="ques_id" value="<?php echo $qus[0] ?>">
             <textarea name="name" rows="8" class="form-control" placeholder="type your answer"></textarea>
             <button type="Submit" name="button" class="btn btn-success" style="margin-top:5px;width:100%;">Submit</button>
           </form>
         </div>
       </div>
       <?php
       for ($i = 0; $i<$n; $i++){
        $user_a = mysqli_fetch_array($ans_q,MYSQLI_NUM);
        $user = explode("@",$user_a[2])[0];
        echo  "<div class=\"row answer_row\">
        <div class=\"col-1\">
            <div class=\"row\">
              <button type=\"button\" name=\"button\" class=\"btn btn-success\"><i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i></button>
            </div>
            <div class=\"row text-center\">
              <p class=\"no_of_likes\">123</p>
            </div>
            <div class=\"row\">
              <button type=\"button\" name=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-thumbs-down\" aria-hidden=\"true\"></i></button>
            </div>
        </div>
        <div class=\"col-9 offset-1\">
          <div class=\"row\">
            <p class=\"answer\">$user_a[1] </p>
            <p> <a href=\"#\" class=\"share_link\">Share</a></p> 
          </div>
          <div class=\"row low_margin\">
            <p class=\"text-right by_para low_margin\">By: $user &nbsp;&nbsp;&nbsp;last modified</p>
            <p class=\"text-right by_para\">
              <button type=\"button\" name=\"flag_imp\" class=\"btn btn-secondary btn-xs\" ><i class=\"fa fa-flag\" aria-hidden=\"true\"></i></button>
              <button type=\"button\" name=\"dislike\" class=\"btn btn-secondary btn-xs\" ><i class=\"fa  fa-ban\" aria-hidden=\"true\"></i></button>
              <button type=\"button\" name=\"dislike\" class=\"btn btn-success btn-xs \" ><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i></button>
             </p>
          </div>

        </div>
      </div>";}?>

     </div>

     <?php
      include 'footer.php';
      ?>


      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
