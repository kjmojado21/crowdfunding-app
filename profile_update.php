<?php
  include 'profile_action.php';
  $user_id = $_SESSION['user_id'];

  $get_profile = $profileObj->get_profile($user_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update Your Profile</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    .imgSetting{
      text-align: center;
      width: 70%;
      height: 100%;
      position: relative;
      overflow: hidden;
      margin-top: -20%;
      width: 70%;
      border: none;
      border-radius: 0;
      font-size: 15px;
      background: #212529b8;
      
    }
  </style>
  <body>
  <div class="container w-75 mx-auto mt-5">
  <!-- <div class="header-title">
            <h3 class="wv-heading--title">Update Profile!</h3>
        </div> -->
        <div class="w-50 m-5 text-align-center">
          <img src="user_img/<?php echo $get_profile['user_img'] ?>" alt="If not displayed, Please set your image" class="imgSetting"> 
        </div>
      <div class="row">
        
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
              <form action="profile_action.php" method="post" enctype="multipart/form-data">
                   <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                   <div class="form-group">
                    <label for="user_img" class="text-primary font-weight-bold">If not displayed, Please set your image</label>
                    <input type="file" name="user_img" id="">
                    <input type="submit" name="update_profile_img" class="btn btn-dark m-2" value="Update Project Image!">
                  </div>
              </form>
               <form action="profile_action.php" method="post" enctype="">
                 <h2 class="text-info text-center">Update your bio bellow!</h2>
                  <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                  <div class="form-group">
                     <input type="text" name="first_name"  class="form-control my-input" placeholder="First Name *" value="<?php echo $get_profile['first_name'] ?>" required>
                  </div>
                  
                  <div class="form-group">
                     <input type="text" name="last_name"  class="form-control my-input" placeholder="Last Name *" value="<?php echo $get_profile['last_name'] ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="email" name="email"  class="form-control my-input" id="email" placeholder="Email *" value="<?php echo $get_profile['email'] ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="date" name="birthday"  class="form-control my-input" id="birthday" placeholder="Birthday *" value="<?php echo $get_profile['birthday'] ?>" required>
                  </div>
                  <div class="form-group">
                     <input type="text" name="home_address"  class="form-control my-input" id="home_address" placeholder="City, Country" value="<?php echo $get_profile['home_address'] ?>">
                  </div>
                  <div class="form-group">
                     <input type="text" name="website"  class="form-control my-input" id="website" placeholder="Your Website URL if you have" value="<?php echo $get_profile['website'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="password" class="text-danger font-weight-bold">Please Enter Password Again!</label>
                     <input type="password" name="password" class="form-control my-input" placeholder="Password" required>
                  </div>
                  <div class="text-center ">
                     <button type="submit" name="update_profile" class="btn btn-info send-button tx-tfm text-capitalize"> <!-- name "update_profile" -->
                      update your profile!
                    </button>
                  </div>
                  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link">Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
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