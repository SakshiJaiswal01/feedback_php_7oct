<?php
if (isset($_POST['sub'])) {
  $ename = $_POST['ename'];
  $emp = @$_POST['emp'];
  $status=$_POST['status'];
  $title=$_POST['title'];
  $review=$_POST['review'];
  $pros=$_POST['pros'];
  $cons=$_POST['cons'];
  $advice=$_POST['advice'];
  $tmp = $_FILES['att']['tmp_name'];
  $fn = $_FILES['att']['name'];
  // session_start();
  // $_SESSION['email'] = $email;
  // $_SESSION['password'] = $password;
  if (!empty($ename) && !empty($emp) && !empty($tmp) && !empty($status) && !empty($title) && !empty($review) && !empty($pros) && !empty($cons) && !empty($advice)) {
    
      $fn = $_FILES['att']['name'];
      $ext = pathinfo($fn, PATHINFO_EXTENSION);
      $fname = "image-" . time() . "-" . rand() . ".$ext";
      if ($ext == "doc" || $ext == "pdf" || $ext == "txt") {
        if (is_dir("feedback/".$ename)) {
          $errMsg = "employname Is already Exists";
        } else {
          $fo = fopen("feedback/$ename/details.txt", "r");
          $un = fgets($fo);
          if ($un == $ename) {
            $errMsg = "User Name Is already Exists";
          } else {
            mkdir("feedback/$ename");
            if (move_uploaded_file($tmp,"feedback/$ename/$fname")) {
              file_put_contents("feedback/$ename/details.txt", $ename . "\n" . $emp ."\n".$status. "\n".$title. "\n".$review. "\n".$pros. "\n".$cons. "\n".$advice. "\n". "users/$ename/$fname");
              header("location:success.php");
            } else {
              rmdir("feedback/$ename");
              $errMsg = "uploading error";
            }
          }
        }
      } else {
        $errMsg = "only jpg pn image support";
      }
    
  } else {
    $errMsg = "plz fill the fiels";
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <title>feedback Page</title>
</head>

<body>
  <main>
    <h1 class="text-center">FEEDBACK</h1>
    <section class="container">
      <?php
      if (!empty($errMsg)) {
      ?>
        <div class="alert alert-danger"><?php echo $errMsg; ?></div>
      <?php
      }
      ?>
      <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label>Employer's Name</label>
          <input type="text" name="ename" class="form-control" placeholder="employee Name">
        </div>
        <div class="form-group">
          <label>Are you a current or former employee?</label>
          <input type="radio" name="emp" value="current">current
          <input type="radio" name="emp" value="formal">Formal
        </div>
        <div class="form-group">
          <label>Employment Status</label>
          <select name="status" id="status">
            <option value="full">Full Time</option>
            <option value="part">Part Time</option>
            <option value="contract">Contract</option>
            <option value="intern">Intern</option>
          </select>
        </div>
        <div class="form-group">
          <label>Job Title</label>
          <input type="text" name="title" class="form-control" placeholder="Job Title">
        </div>
        <div class="form-group">
          <label>Review Headline</label>
          <input type="text" name="review" class="form-control" placeholder="Review Headline">
        </div>
        <table>
          <div class="form-group">
            <tr>
              <td><label>Pros</label></td>
              <td><textarea name="pros" rows="2" cols="20"></textarea></td>
            </tr>
          </div>
          <div class="form-group">
            <tr>
              <td><label>Cons</label></td>
              <td><textarea name="cons" rows="2" cols="20"></textarea></td>
            </tr>
          </div>
          <div class="form-group">
            <tr>
              <td><label>Advice Management</label></td>
              <td><textarea name="advice" rows="2" cols="20"></textarea></td>
            </tr>
          </div>
        </table>
        <div class="form-group">
          <label>Submit Proof</label>
          <input type="file" class="form-control" name="att">
        </div>
        <div class="form-group">
          <input type="checkbox" id="t&c" name="tc" value="tc">
          <label>Agree Terms and Condition</label>
        </div>
        <!-- <div class="form-group">
         <label>Rating</label>
          <div class="container">
            <span id="rateMe1"></span>
          </div>
          <script src="../project1/rating.js"></script>
        </div> -->
        <button type="submit" name="sub" class="btn btn-success">Ragister</button>
      </form>
    </section>
  </main>
</body>

</html>