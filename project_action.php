<?php
    include 'classes/Profile.php';
    $profileObj = new Profile;

    include 'classes/Project.php';
    $projectObj = new Project;

    if(isset($_POST['create_project'])){
        $get_profile = $profileObj->get_profile($_SESSION['user_id']);
        $real_password = $get_profile['password'];
        $project_img = $_FILES['project_img']['name']; 
        $return_img = $_FILES['return_img']['name'];
        
        $tytle = $_POST['tytle'];
        $total_support = $_POST['total_support'];
        $deadline = $_POST['deadline'];
        $category = $_POST['category'];
        $movie_url = $_POST['movie_url'];
        $discription = $_POST['discription'];
        
        $return_support = $_POST['return_support'];
        $return_product = $_POST['return_product'];
        $return_date = $_POST['return_date'];

        $user_id = $_POST['user_id'];
        $password = $_POST['password'];

        if($real_password == $password){
            $projectObj->add_project($project_img, $return_img, $tytle, $total_support, $deadline, $category, $movie_url, $discription, $return_support, $return_product, $return_date, $user_id);
        }else{
            echo "Please check your password";
        }
        
    }

?>