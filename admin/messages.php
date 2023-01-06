<?php

  session_start();
    
  if(!isset($_SESSION['Login_status']))
  { 
            header('location:login.php');
            die();
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <!===== Required meta tags =====>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!===== Bootstrap CSS =====>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!===== Font Awesome CSS =====>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!===== css link =====>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/messages.css">
    <title>admin index</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-custome">
    <a class="navbar-brand text-white" href="index.php">AHANA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="messages.php">Messages <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="slider.php">Slider</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="classes.php">Classes</a>
            </li>
          </ul>
        </div>
        <a href="logout.php" class="btn">LOGOUT</a>
  </nav>
  <!----- Messages Page Start ----->
  <section class="messages-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="messages-text">
            <h1>Messages</h1>
            <table class="table">
              <thead>
                <th>Id</th>
                <th>Fname</th>
                <th>Lname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Date/Time</th>
                <th>Operation</th>
              </thead>
              <tbody>
              <?php
               include'connection.php';

               $select = "SELECT * FROM sendmessage";
               $query = mysqli_query($conn,$select);

               while($result = mysqli_fetch_array($query)) 
               {
                ?>
                  <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['fname']; ?></td>
                    <td><?php echo $result['lname']; ?></td>
                    <td><?php echo $result['email']; ?></td>
                    <td><?php echo $result['phone']; ?></td>
                    <td><?php echo $result['message']; ?></td>
                    <td><?php echo $result['datetime']; ?></td>
                    <td><a href="messagesdelete.php?id=<?php echo $result['id'] ?>"><i class="fas fa-trash-alt" data-toggle="tooltip" data-placement="top" title="Delete"></i></a></td>
                  </tr> 
                <?php
               } 
              ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!----- Messages Page End ----->

    <!===== Optional JavaScript =====>
    <!===== jQuery first, then Popper.js, then Bootstrap JS =====>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!===== Font Awesome JavaScript =====>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/fontawesome.min.js" integrity="sha512-KCwrxBJebca0PPOaHELfqGtqkUlFUCuqCnmtydvBSTnJrBirJ55hRG5xcP4R9Rdx9Fz9IF3Yw6Rx40uhuAHR8Q==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!===== Tool Tip Script =====>
    <script>
      $(function () {
      $('[data-toggle="tooltip"]').tooltip()
      })
    </script>  
  </body>
</html>