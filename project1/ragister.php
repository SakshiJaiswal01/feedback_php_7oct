<?php
include("cap.php");
if(isset($_POST['regis'])){
    $email=$_POST['email'];
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $gender=@$_POST['gender'];
    $age=$_POST['age'];
    $tmp=$_FILES['att']['tmp_name'];
    $fn=$_FILES['att']['name'];
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['password']=$password;
    if(!empty($email) && !empty($uname) && !empty($password) && !empty($gender) && !empty($age) && !empty($tmp))
    {
     if($_POST['cap']==$_POST['capsum']){
      $fn=$_FILES['att']['name'];
      $ext=pathinfo($fn,PATHINFO_EXTENSION);
      $fname="image-".time()."-".rand().".$ext";
      if($ext=="jpg" || $ext=="png" || $ext=="jpeg"){
       if(is_dir("users/".$email)){
        $errMsg="email Is already Exists";
       }
       else{
        $fo=fopen("users/$email/details.txt","r");
          $un=fgets($fo);
          if($un==$uname){
              $errMsg="User Name Is already Exists";
          }
          else{
            mkdir("users/$email");
            if(move_uploaded_file($tmp,"users/$email/$fname"))
            {
               //$password=substr(sha1($password),0,10); 
            file_put_contents("users/$email/details.txt",$uname."\n".$password."\n".$gender."\n".$age."\n"."users/$email/$fname");
            header("location:welcom.php?uid=$email");
            }
            else{
                rmdir("users/$email");
                $errMsg="uploading error";
            }
          }
       }
      }
      else{
         $errMsg="only jpg pn image support"; 
      }
    }
    else{
        $errMsg="Enter Valid Captcha."; 
    }
    }
    else{
        $errMsg="plz fill the fiels";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ragister panal</title>
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Welcome</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="ragister.php">New User</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
    <h1 class="text-center">Ragister Panel</h1>
    <section class="container">
           <?php
           if(!empty($errMsg)){
            ?>
            <div class="alert alert-danger"><?php echo $errMsg; ?></div>
            <?php
           }
           ?>
       <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="uname" class="form-control" placeholder="username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" name="age" placeholder="age">
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="att">
            </div>
            <div class="form-group">
                <label>Captcha : <b><?php echo $pat; ?></b></label>
                <input type="text" class="form-control" name="cap">
                <input type="hidden" class="form-control" name="capsum" value="<?php echo $capsum; ?>">
            </div>
            <button type="submit" name="regis" class="btn btn-success">Ragister</button>
        </form>
    </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>