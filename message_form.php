<?php
    include 'profile_action.php';
    $user_id = $_SESSION['user_id'];
    $get_profile = $profileObj->get_profile($user_id);

    $project_id = $_GET['project_id'];
    $one_project = $profileObj->get_one_project($project_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Message Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-3">
	<div class="row">
		<div class="panel panel-default">
            <div class="panel-heading clearfix">
            <h3 class="panel-title">Message Form</h3>
            </div>
                <div class="form">
                    <form role="form" class="form-horizontal w-100" action="profile_action.php" method="post">
                        <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                        <input type="hidden" name="project_id" value="<?php echo $project_id ?>">
                        <input type="hidden" name="ct_project" value="<?php echo $one_project['tytle'] ?>">                           
                        <div class="form-group">
                        <label class="col-sm-2" for="inputTo">Project</label>
                        <input type="text" class="form-control" value="<?php echo $one_project['tytle'] ?>" disabled>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2" for="inputTo">Email</label>
                        <input type="email" class="form-control" placeholder="Your Email Address" name="ct_email" value="<?php echo $get_profile['email'] ?>" required>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-2" for="inputSubject">Subject</label>
                        <input type="text" class="form-control" name="ct_subject" placeholder="within 100 letters" required>
                        </div>
                        <div class="form-group">
                        <label class="col-sm-12" for="inputBody">Message</label>
                        <textarea name="ct_message" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="ct_send" value="SEND!" class="btn btn-success">
                            <a class="btn btn-dark mx-3" href="pj_detail.php?project_id=<?php echo $project_id ?>">Back</a>
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