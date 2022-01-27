<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index page</title>
    <style>
        *{
              margin: 0;
              padding: 0;
              box-sizing: border-box;
            }
        header{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1)), url('../image/coverpage.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        main{
              width: 100%;
              height: 80vh;
              display: flex;
              justify-content: center;
              align-items: center;
              text-align: center; color: white;
          }

        body {
            background-image: url('B1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .main1 {
            font-family: "Roboto", "Open Sans";
        }
        section h3{
                font-size: 35px;
                font-weight: 200;
                letter-spacing: 3px;
                text-shadow: 1px 1px 2px black ;
          }
          section h1{
              margin: 30px 0 20px 0;
              font-size: 55px;
              font-weight: 700;
              text-shadow: 2px 1px 5px black;
          }
    </style>
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
    
    <main>
        <section>
            <h3>WELCOME EMPLOYEE'S</h3>
            <h1>Please login and submit FEEDBACK</h1>
        </section>
    </main>
    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>