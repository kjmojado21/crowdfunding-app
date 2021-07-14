<?php
    include 'profile_action.php';
    $user_id = $_SESSION['user_id'];
    $project_id = $_GET['project_id'];
    $one_project = $profileObj->get_one_project($project_id);
    $get_profile = $profileObj->get_profile($user_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Payment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3">
   <form action="profile_action.php" method="post">
   <div class="row">
      <div class="col-sm-6">
         <div class="alert alert-info" role="alert">
            <p>Project Name: <?php echo $one_project['tytle'] ?></p>
            <p>by: <?php echo $one_project['company_name'] ?></p>
            <h3>Price: PHP <?php echo $one_project['return_support'] ?></h3>
            <input type="hidden" name="p_price" value="<?php echo $one_project['return_support'] ?>">
         </div>
         <hr/>
         <!-- Name and Adress -->
         <p>Thank you for your support!! Please enter your Name and Address.</p>
         <div class="form-group">
            <label class="control-label" for="p_name">Your name</label>
            <div class="controls">
               <input type="text" name="p_name" value="<?php echo $get_profile['first_name'] ?> <?php echo $get_profile['last_name'] ?>" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="p_line1">Line 1</label>
            <div class="controls">
               <input type="text" name="p_line1" placeholder="Number, Street, Town, Ward..." class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="p_line2">Line 2</label>
            <div class="controls">
               <input type="text" name="p_line2" placeholder="Apartment name etc OPTIONAL" class="form-control">
            </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="p_city">City</label>
            <div class="controls">
               <input type="text" name="p_city" placeholder="City, Prefecture, State" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="p_zipcode">Zip code</label>
            <div class="controls">
               <input type="text" name="p_zipcode" placeholder="" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label" for="p_country">Country</label>
            <div class="controls">
               <input type="text" name="p_country" placeholder="" class="form-control" required>
            </div>
         </div>
         <hr>
           
      </div>
  
      <div class="col-sm-6">
         <!-- Card Holder Name -->
         <p>Please enter your card details below.</p>
         <div class="form-group">
            <label class="control-label" for="card_name">Card Holder's Name</label>
            <div class="controls">
               <input type="text" name="card_name" placeholder="" class="form-control" required>
            </div>
         </div>

         <!-- Card Number -->
            <div class="form-group">
               <label class="control-label" for="card_number">Card Number</label>
                  <div class="controls">
                     <input type="text" id="card_number" name="card_number" placeholder="" class="form-control" required>
                  </div>
            </div>
            <hr/>
            <!-- Expiry-->
            <div class="form-group">
               <label class="control-label" for="expiry_month">Card Expiry Date</label>
               <div class="row">
                  <div class="col-sm-4">
                     <select class="form-control" name="expiry_month" id="expiry_month" required>
                        <option>----</option>
                        <option value="01">Jan (01)</option>
                        <option value="02">Feb (02)</option>
                        <option value="03">Mar (03)</option>
                        <option value="04">Apr (04)</option>
                        <option value="05">May (05)</option>
                        <option value="06">June (06)</option>
                        <option value="07">July (07)</option>
                        <option value="08">Aug (08)</option>
                        <option value="09">Sep (09)</option>
                        <option value="10">Oct (10)</option>
                        <option value="11">Nov (11)</option>
                        <option value="12">Dec (12)</option>
                     </select>
                  </div>
                  <div class="col-sm-3">
                     <select class="form-control" name="expiry_year" required>
                        <option value="">-----</option>
                        <option value="13">2013</option>
                        <option value="14">2014</option>
                        <option value="15">2015</option>
                        <option value="16">2016</option>
                        <option value="17">2017</option>
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                        <option value="21">2021</option>
                        <option value="22">2022</option>
                        <option value="23">2023</option>
                     </select>
                  </div>
               </div>
            </div>
            <hr/>
            <div class="row">
               <div class="col-sm-3">
               <!-- CVV -->
               <div class="form-group">
                  <label class="control-label" for="cvv">Card CVV</label>
                     <input type="password" id="cvv" name="cvv" placeholder="" class="form-control" required>
                   </div>
            </div>
            <div class="row">
               <div class="col-sm-5">
               
               </div>
               <div class="col-sm-4"></div>
                  <div class="col-sm-5">
                  <!-- Space for Logo -->
                  </div>
               </div>
            </div> 
            <!-- Submit -->
            <div class="form-group">
               <input type="hidden" name="project_id" value="<?php echo $project_id ?>">
               <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
               <label for="password">Enter your account password!</label>
               <input type="password" name="password" class="form-control " data-type="password" placeholder="password" required>
               <button type="submit" name="payment" class="btn btn-success my-2">Pay Now</button>
            </div>   
      </div>
   </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>