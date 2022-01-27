<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcom page</title>
    <style>
        body{
              width: 100%;
              height: 80vh;
              justify-content: center;
              align-items: center;
              text-align: center; 
          }
    </style>
</head>
<body>
    <img src="../image/success.jpg"> 
    <h1>Welcome user you are successfully registration</h1>
    <h4>Your registered id is <?php echo $_GET['uid']; ?></h4>
    <p>for go to login page <a href="index.php">click here</a></p>
</body>
</html>