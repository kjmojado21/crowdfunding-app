<?php
    include 'profile_action.php';
    $project_id = $_GET['project_id'];
    $one_project = $profileObj->get_one_project($project_id);
    // print_r($_SESSION);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Update Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .gallery-wrap .img-big-wrap img {
    height: auto;
    width: 450px;
    display: inline-block;
    cursor: zoom-in;
}


.gallery-wrap .img-small-wrap .item-gallery {
    width: 60px;
    height: 60px;
    border: 1px solid #ddd;
    margin: 7px 2px;
    display: inline-block;
    overflow: hidden;
}

.gallery-wrap .img-small-wrap {
    text-align: center;
}
.gallery-wrap .img-small-wrap img {
    max-width: 100%;
    max-height: 100%;
    object-fit: cover;
    border-radius: 4px;
    cursor: zoom-in;
}
    </style>
  </head>
  <body>
  <div class="container">
    <h3 class="text-center text-danger">Before submit update, you have to update project / return image. Thank you.</h3><hr>
    <!-- project image update -->
    <form action="profile_action.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="project_id" value="<?php echo $project_id ?>">    
        <label for="project_img" class="text-primary font-weight-bold">Update Project Image!</label>
        <input type="file" name="project_img" id="" >
        <input type="submit" name="update_project_img" class="btn btn-info" value="Update Project Image!">
    </form>
    <br>
    <!-- return image update -->
    <form action="profile_action.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="project_id" value="<?php echo $project_id ?>">    
        <label for="return_img" class="text-primary font-weight-bold">Update return Image!</label>
        <input type="file" name="return_img" id="" >
        <input type="submit" name="update_return_img" class="btn btn-info" value="Update return Image!">
    </form>
    <hr> 
    <!-- Update Project, return -->
    <form action="profile_action.php?project_id=<?php echo $project_id ?>" method="post">
    <input type="hidden" name="project_id" value="<?php echo $project_id ?>">
    <div class="form-group">
        <label for="tytle" class="label">Project Name</label>
        <input name="tytle" type="text" class="form-control" value="<?php echo $one_project['tytle'] ?>" required>
    </div>
    <hr>

    <!-- Project -->
    <div class="card">
        <div class="row">
        <aside class="col-sm-5 border-right">
            <article class="gallery-wrap"> 
                <div class="img-big-wrap">
                    <div> <img src="project_img/<?php echo $one_project['project_img'] ?>" alt="project image"></div>
                </div> <!-- slider-product.// -->
            </article> <!-- gallery-wrap .end// -->
        </aside>
        <aside class="col-sm-7">
        <article class="card-body p-5">
        <div class="form-group">
            <label for="company_name" class="label">Company Name</label>
            <input name="company_name" type="text" class="form-control" value="<?php echo $one_project['company_name'] ?>" required>
        </div>
        <div class="form-group">
            <label for="company_url" class="label">Company URL</label>
            <input name="company_url" type="text" class="form-control" value="<?php echo $one_project['company_url'] ?>">
        </div>
        

    <p class="price-detail-wrap">
        <div class="form-group">
            <label for="total_support" class="label">Total Support</label>
            <input name="total_support" type="text" class="form-control" value="<?php echo $one_project['total_support'] ?>">
        </div> 
       
    </p> <!-- price-detail-wrap .// -->
    <dl class="item-property">
    <dt>Message</dt>
    <dd><textarea name="message" cols="60" rows="10"><?php echo $one_project['message'] ?></textarea></dd>
    </dl>
    <dl class="param param-feature">
    <dt>Category</dt>
    <dd>
        
        <label for="category" class="label">Category</label>
        <select name="category" id="" class="form-control">
            <option value="<?php echo $one_project['category'] ?>"><?php echo $one_project['category'] ?></option>
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
    </dd>
    </dl>  <!-- item-property-hor .// -->
    <dl class="param param-feature">
    <dt>Deadline</dt>
    <dd><input name="deadline" type="text" class="form-control" value="<?php echo $one_project['deadline'] ?>"></dd>
    </dl>  <!-- item-property-hor .// -->
    <dl class="param param-feature">
    <dt>Youtube</dt>
    <dd><input name="movie_url" type="text" class="form-control" value="<?php echo $one_project['movie_url'] ?>"></dd>
    </dl>  <!-- item-property-hor .// -->

    <hr>
    
        <!-- <a href="#" class="btn btn-lg btn-primary text-uppercase"> Support! </a>
        <a href="#" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Ask to Owner </a> -->
    </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->

    <hr>

    <!-- Return -->
    <div class="card">
        <div class="row">
        <aside class="col-sm-5 border-right">
            <article class="gallery-wrap"> 
                <div class="img-big-wrap">
                    <div> <img src="return_img/<?php echo $one_project['return_img'] ?>" alt="return image"></div>
                </div> <!-- slider-product.// -->
                <!-- <div class="img-small-wrap">
                    <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
                    <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
                    <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
                    <div class="item-gallery"> <img src="https://s9.postimg.org/tupxkvfj3/image.jpg"> </div>
                </div> slider-nav.// -->
            </article> <!-- gallery-wrap .end// -->
        </aside>
        <aside class="col-sm-7">
        <article class="card-body p-5">
        <div class="form-group">
            <label for="return_product" class="label">Reutrn_product</label>
            <input name="return_product" type="text" class="form-control" value="<?php echo $one_project['return_product'] ?>" required>
        </div>

    <p class="price-detail-wrap"> 
        <div class="form-group">
            <label for="return_support" class="label">Return Support</label>
            <input name="return_support" type="text" class="form-control" value="<?php echo $one_project['return_support'] ?>">
        </div> 
    </p> <!-- price-detail-wrap .// -->
    <dl class="item-property">
    <dt>Description</dt>
    <dd><textarea name="return_discription" cols="60" rows="10"><?php echo $one_project['return_discription'] ?></textarea></dd>
    </dl>
    <dl class="param param-feature">
    <dt>Estimated Deliverly Date</dt>
    <dd><input name="return_date" type="text" class="form-control" value="<?php echo $one_project['return_date'] ?>" required></dd>
    </dl>  <!-- item-property-hor .// -->
    <dl class="param param-feature">
    
        <input type="hidden" name="project_id" value="<?php echo $project_id ?>">
        <input type="submit" name="update_project" class="btn btn-success" value="Complete Update Project!">
        </form> <!-- form end .// -->
    </article> <!-- card-body.// -->
            </aside> <!-- col.// -->
        </div> <!-- row.// -->
    </div> <!-- card.// -->
   
</div>
<!--container.//-->



<br><br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h4 class="text-white">Lorem ipsum dolor sit amet. </h4>
<p class="h5 text-white"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, aspernatur?</p>   <br>
<p>
    <a href="profile_read.php" class="btn btn-warning m-2"> Go Back to your Page</a>
    <a href="pj_read.php" class="btn btn-info m-2"> Go Back to Project List</a>
</p>
</div>
<br><br><br>
</article>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>