<?php
  include 'profile_action.php';
  $user_id = $_GET['id'];

  $get_profile = $profileObj->get_profile($user_id);


?>
<!doctype html>
<html lang="en">
  <head>
    <title>User Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Your Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12">
		                    <form action="profile_action.php?id=<?php echo $user_id ?>" method="POST">
                              <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                              <div class="form-group row">
                                <label for="first_name" class="col-4 col-form-label">First Name</label> 
                                <div class="col-8">
                                  <input id="name" name="first_name" placeholder="First Name" class="form-control here" type="text" value="<?php echo $get_profile['first_name'] ?>" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="last_name" class="col-4 col-form-label">Last Name</label> 
                                <div class="col-8">
                                  <input id="lastname" name="last_name" placeholder="Last Name" class="form-control here" type="text" value="<?php echo $get_profile['last_name'] ?>" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="email" class="col-4 col-form-label">Email</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text" value="<?php echo $get_profile['email'] ?>" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Birthday</label> 
                                <div class="col-8">
                                  <input type="date" name="birthday" classs="form-control here">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="home_address" class="col-4 col-form-label">Home Address</label> 
                                <div class="col-8">
                                  <input id="home_address" type="text" name="home_address" placeholder="Home Address" class="form-control here">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="website" class="col-4 col-form-label">Website</label> 
                                <div class="col-8">
                                  <input id="website" name="website" placeholder="website" class="form-control here" type="text">
                                </div>
                              </div>
                             
                              
                              <div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="create_profile" type="submit" class="btn btn-primary">Create My Profile</button>
                                </div>
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