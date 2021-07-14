<?php
  include 'profile_action.php';
  $user_id = $_SESSION['user_id'];

  $get_profile = $profileObj->get_profile($user_id);


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update Your Password</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container w-75 mx-auto mt-5">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Update Your Password!
            </h1>
            <p class="wv-heading--subtitle">
               
            </p>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="profile_action.php" method="post">
                  <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                  <!-- check current password -->
                  <div class="form-group">
                    <label for="password" class="text-info font-weight-bold">Enter Your Current Password!</label>
                    <input type="password" name="password" class="form-control my-input" placeholder="Current Password" required>
                  </div>
                <!-- enter new password -->
                  <div class="form-group">
                    <label for="new_password" class="text-info font-weight-bold">Enter the New Password!</label>
                    <input type="password" name="new_password" class="form-control my-input" id="website" placeholder="New Password" required>
                  </div>
                <!-- confirm new password -->
                  <div class="form-group">
                    <label for="confirm_new_password" class="text-info font-weight-bold">Confirm the New Password!</label>
                    <input type="password" name="confirm_new_password"  class="form-control my-input" id="website" placeholder="Confirm New Password" required>
                  </div>
                  <!-- update password button -->
                  <div class="text-center ">
                     <button type="submit" name="update_password" class="btn btn-info send-button tx-tfm text-capitalize"> <!-- name "update_profile" -->
                      update your profile!
                    </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
        





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>