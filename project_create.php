<?php
  include 'profile_action.php';
  $user_id = $_SESSION['user_id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Create your project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<br>  <h3 class="text-center">Create your project!<a href="profile_read.php" class="btn btn-warning float-right"> Go Back to your Page</a></h3> 
<hr>

<form action="profile_action.php" method="POST">   
    <div class="row">
        <aside class="col-sm-3">
    <p>About Project</p>
    <div class="card">
    <article class="card-body">
    <h4 class="card-title mb-4 mt-1">
        <label for="tytle" class="label">Project Name</label>
        <input name="tytle" type="text" class="form-control" required>
    </h4>
        <div class="form-group">
            <label for="company_name" class="label">Company Name</label>
            <input name="company_name" type="text" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total_support" class="label">Target Total Support: PHP</label>
            <input name="total_support" type="text" class="form-control" placeholder="Currency: PHP" required>
        </div>
        <div class="form-group">
            <label for="deadline" class="label">Deadline</label>
            <input name="deadline" type="date" class="form-control" required>
        </div> <!-- form-group// -->
        <div class="form-group">
            <label for="category" class="label">Category</label>
            <select name="category" id="" class="form-control">
                <option value="">Select Category</option>
                <option value="tech">Technology</option>
                <option value="product">Product</option>
                <option value="food">Food, Restaurant</option>
                <option value="anime">Anime, Comic</option>
                <option value="fashion">Fashion</option>
                <option value="game">Game, Service development</option>
                <option value="business">Business, Enterprise</option>
                <option value="art">Art, Photo</option>
                <option value="region">Region Activation</option>
                <option value="music">Music</option>
                <option value="challenge">Challenge</option>
                <option value="sports">Sports</option>
                <option value="movie">Movie</option>
                <option value="book">Book, Magazine</option>
                <option value="beauty">Beauty, Healthcare</option>
                <option value="theater">Theater, Performance</option>
                 <option value="social-good">Social-Good</option>
            </select>
        </div> <!-- form-group// --> 
                                                               
    
    </article>
    </div> <!-- card.// -->

        </aside> <!-- col.// -->
        <aside class="col-sm-6">
    <p>Message / About Return</p>

    <div class="card">
    <article class="card-body">
        <div class="group">
        <textarea name="message" clas="form-control" cols="60" rows="10" placeholder="Discription / Reason / Goals"></textarea>    
        </div> 
        <hr>
        <div class="group">
        <textarea name="return_discription" clas="form-control" cols="60" rows="10" placeholder="About Return"></textarea>    
        </div>                                                                 
    
    </article>
    </div> <!-- card.// -->

        </aside> <!-- col.// -->
        <aside class="col-sm-3">
    <p>About Return</p>

    <div class="card">
    <article class="card-body">
        <div class="form-group">
            <label for="return_support" class="label">Request Support for each</label>
            <input name="return_support" type="text" class="form-control" placeholder="Currency: PHP" required>
        </div>
        <div class="form-group">
            <label for="return_product" class="label">Return Product</label>
            <input name="return_product" type="text" class="form-control" required>
        </div>     
        <div class="form-group">
            <label for="return_date" class="label">Estimated Delivery Schedule: MM/YYYY</label>
            <input name="return_date" type="text" class="form-control" placeholder="MM/YYYY" required>
        </div>
        <hr>
        <p class="text-success text-center">Option Below</p>
        <div class="form-group">
            <label for="company_url" class="label">Your Website</label>
            <input name="company_url" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="movie_url" class="label">Youtube URL if you have</label>
            <input name="movie_url" type="text" class="form-control">
        </div>
    </article>
    </div> <!-- card.// -->

        </aside> <!-- col.// -->
    </div> <!-- row.// -->

</div> 
<!--container end.//-->

<br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
    <div class="form-group">
        <input type="password" class="mx-3" name="password" data-type="password"  placeholder="Account Password">
        <input type="submit" class="btn btn-success mx-3" value="Create Project!" name="add_project">
    </div>
</div>
</form>
<br><br><br>
</article>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>