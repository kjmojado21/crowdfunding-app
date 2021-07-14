<?php
    include 'profile_action.php';
    $project_id = $_GET['project_id'];
    $one_project = $profileObj->get_one_project($project_id);
    $total_project_support = $profileObj->total_project_support($project_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Project Detail</title>
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
    <br>  
    <h2 class="text-center">
        <?php echo $one_project['tytle'] ?>
        <?php if(isset($_SESSION['user_id'])){ ?>
        <a href="profile_read.php" class="btn btn-info float-right ">Go back to your user page</a>
        <?php }else{ ?>
        <!-- <a href="login.php" class="btn btn-warning float-right">Login / Sign Up</a> -->
        <?php } ?>
        <!-- <a href="pj_read.php" class="btn btn-primary float-right mx-2"> Go Back to Project List</a> -->
    </h2>
    
    <hr>

    <!-- Project -->
    <div class="card">
        <div class="row">
        <aside class="col-sm-5 border-right">
            <article class="gallery-wrap"> 
                <div class="img-big-wrap">
                    <div> <img src="project_img/<?php echo $one_project['project_img'] ?>" alt="project image"></div>
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
        <h4 class="title mb-3">By: <a href="<?php echo $one_project['company_url'] ?>"><?php echo $one_project['company_name'] ?></a></h4>
        

    <p class="price-detail-wrap"> 
        <span class="price h3"> 
        Current / Total: <span class="text-success"><?php if($total_project_support['tp_support']==false){echo "0";}else{echo $total_project_support['tp_support'];} ?></span> / <span class="text-success"><?php echo $one_project['total_support'] ?></span> PHP
        </span> 
    </p> <!-- price-detail-wrap .// -->
    <dl class="item-property">
    <dt>Message</dt>
    <dd><p><?php echo $one_project['message'] ?></p></dd>
    </dl>
    <dl class="param param-feature">
    <dt>Category</dt>
    <dd><?php echo $one_project['category'] ?></dd>
    </dl>  <!-- item-property-hor .// -->
    <dl class="param param-feature">
    <dt>Deadline</dt>
    <dd><?php echo $one_project['deadline'] ?></dd>
    </dl>  <!-- item-property-hor .// -->
    <dl class="param param-feature">
    <dt>Youtube</dt>
    <dd><a href="<?php echo $one_project['movie_url'] ?>">Click Here!</a></dd>
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
        <h3 class="title mb-3">Return: <?php echo $one_project['return_product'] ?></h3>

    <p class="price-detail-wrap"> 
        <span class="price h3"> 
            <!-- project tytle -->
            <span class="num text-warning"><?php echo $one_project['return_support'] ?></span> PHP
        </span> <p>Requested Support for each</p>
        
    </p> <!-- price-detail-wrap .// -->
    <dl class="item-property">
    <dt>Discription</dt>
    <dd><p><?php echo $one_project['return_discription'] ?></p></dd>
    </dl>
    <dl class="param param-feature">
    <dt>Estimated Deliverly Date</dt>
    <dd><?php echo $one_project['return_date'] ?></dd>
    </dl>  <!-- item-property-hor .// -->
    <dl class="param param-feature">
    <?php if(isset($_SESSION['user_id'])){ ?>
        <form action="project_payment.php"> <!-- form start .// -->    
            <hr>
            <a href="project_payment.php?project_id=<?php echo $project_id ?>" class="btn btn-lg btn-primary text-uppercase"> Support! </a>
            <a href="message_form.php?project_id=<?php echo $project_id ?>" class="btn btn-lg btn-outline-primary text-uppercase"> Ask to Owner </a>
        </form> <!-- form end .// -->
    <?php }else{ ?>
        <h3 class="mt-5">You need to Login / Sign Up before Support</h3>
        <a href="login.php" class="btn btn-warning">Login / Sign Up</a>
        <a class="btn btn-primary mx-3" href="pj_read.php">Back</a>
     <?php } ?>   
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
<!-- <p>
    <a href="profile_read.php" class="btn btn-warning m-2"> Go Back to your Page</a>
    <a href="pj_read.php" class="btn btn-info m-2"> Go Back to Project List</a>
</p> -->
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