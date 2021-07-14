<?php
  include 'profile_action.php';
  $user_id = $_SESSION['user_id'];
  $get_profile = $profileObj->get_profile($user_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Thank you</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="refresh" content=" 10; url=pj_read.php">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="modal in" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-uppercase">Thank you for your message!</h4>
                </div>
                <div class="modal-body">
                    <p class="text-capitalize">Thank you! Keep on your job!</p>
                    <div class="text-center">
                        <a href="pj_read.php" class="btn btn-primary btn-md mx-3">Go Back to search project</a>
                        <a href="profile_read.php" class="btn btn-success btn-md mx-3">Go Back to your page</a>
                    </div>
                    <!-- <div class="text-center">
                    <img src="love.jpg" alt="" class="mt-3 image-fluid" style="width:50%, height:auto;">
                    </div> -->
                    
                </div>
        
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>