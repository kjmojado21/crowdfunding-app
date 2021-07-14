<?php
    include 'profile_action.php';
    $user_id = $_SESSION['user_id'];
    $project_userlist = $profileObj->read_user_project($user_id);

    // echo "<pre>";
    // print_r($book_list);
    // echo "</pre>";

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Project List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
      @import url('https://fonts.googleapis.com/css?family=Open+Sans');
@import url('https://fonts.googleapis.com/css?family=Montserrat');

body {
    font-family: 'Montserrat', sans-serif;

}

/* Category Ads */

#ads {
    margin: 30px 0 30px 0;
   
}

#ads .card-notify-badge {
        position: absolute;
        left: -10px;
        top: -20px;
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px; 
        color: #000;
        padding: 5px 10px;
        font-size: 14px;

    }

#ads .card-notify-year {
        position: absolute;
        right: -10px;
        top: -20px;
        background: #ff4444;
        border-radius: 50%;
        text-align: center;
        color: #fff;      
        font-size: 14px;      
        width: 50px;
        height: 50px;    
        padding: 15px 0 0 0;
}


#ads .card-detail-badge {      
        background: #f2d900;
        text-align: center;
        border-radius: 30px 30px 30px 30px;
        color: #000;
        padding: 5px 10px;
        font-size: 14px;        
    }

   

#ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

#ads .card-image-overlay {
        font-size: 20px;
        
    }


#ads .card-image-overlay span {
            display: inline-block;              
        }


#ads .ad-btn {
        text-transform: uppercase;
        width: 150px;
        height: 40px;
        border-radius: 80px;
        font-size: 16px;
        line-height: 35px;
        text-align: center;
        border: 3px solid #e6de08;
        display: block;
        text-decoration: none;
        margin: 20px auto 1px auto;
        color: #000;
        overflow: hidden;        
        position: relative;
        background-color: #e6de08;
    }

#ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

#ads .ad-title h5 {
        text-transform: uppercase;
        font-size: 18px;
    }
  </style>
  <body>
  <div class="container">
    <br>
    <h2>Your Project <a href="profile_read.php" class="btn btn-info float-right">Go Back to User Page</a></h2>
	<br>
	<div class="row" id="ads">
    <!-- Category Card -->
    <?php foreach($project_userlist as $row): 
        $project_id = $row['project_id'];
        $total_project_support = $profileObj->total_project_support($project_id);
        // percentage calculation
        $tp_ratio = round($total_project_support['tp_support'] / $row['total_support'] * 100, 1);
    ?>
    <div class="col-md-4 mt-4">
        <div class="card rounded">
            <div class="card-image">
                <span class="card-notify-badge"><?php echo $row['company_name'] ?></span>
                <span class="card-notify-year">
                    <strong>
                        <?php if($total_project_support['tp_support']==FALSE){echo "0%";}else{echo $tp_ratio. "%" ;} ?>
                    </strong>
                </span>
                <img class="img-fluid" src="project_img/<?php echo $row['project_img'] ?>" alt="Alternate Text" style="height:250px; width:auto; object-fit:cover;">
            </div>
            <div class="card-image-overlay m-auto">
                
                <small>Support: <?php if($total_project_support['tp_support']==false){echo "0";}else{echo $total_project_support['tp_support'];} ?> / <?php echo $row['total_support'] ?> JPY</small><br>  
                <small>Deadline: <?php echo $row['deadline'] ?></small>

            </div>
            <div class="card-body text-center">
                <h5><?php echo $row['tytle'] ?></h5>
                <a class="btn btn-warning" href="pj_detail.php?project_id=<?php echo $project_id ?>"><small>Detail</small></a>
                <a class="btn btn-info" href="pj_update.php?project_id=<?php echo $project_id ?>"><small>Update</small></a>
                <a class="btn btn-danger" href="pj_delete_alert.php?project_id=<?php echo $project_id ?>"><small>Delete</small></a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>

</div>    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>