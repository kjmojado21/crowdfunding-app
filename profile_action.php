<?php
    include 'classes/Profile.php';
    $profileObj = new Profile;

    if(isset($_POST['signup'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        

        $profileObj->signup($first_name, $last_name, $email, $password, $confirm_password);

    }
    //update profile
    elseif(isset($_POST['update_profile'])){
        $get_profile = $profileObj->get_profile($_SESSION['user_id']);
        $real_password = $get_profile['password'];
        // $user_img = $_FILES['user_img']['name'];        

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $birthday = $_POST['birthday'];
        $home_address = $_POST['home_address'];
        $website = $_POST['website'];
        $password = $_POST['password'];
        $user_id = $_POST['user_id'];

        if($password == $real_password){
            $profileObj->update_profile($first_name, $last_name, $email, $birthday, $home_address, $website, $password, $user_id);
        }else{
            echo "Please check your password";
        }
        // print_r($_FILES); 

    }
    //update profile image
    elseif(isset($_POST['update_profile_img'])){
        $user_img = $_FILES['user_img']['name'];  
        $user_id = $_POST['user_id'];
        $profileObj->update_profile_img($user_img, $user_id);
    }
    // login
    elseif(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $profileObj->login($email, $password);

    }elseif(isset($_POST['update_password'])){
        // get password data
        $get_profile = $profileObj->get_profile($_SESSION['user_id']);
        $real_password = $get_profile['password'];
        
        // data entered in the form
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];
        $new_password = $_POST['new_password'];
        $confirm_new_password = $_POST['confirm_new_password'];
        
        // if-else syntax: current password is match or not
        if($password == $real_password){
            // if-else syntax: new password and confirm new password are match or not
            if($new_password == $confirm_new_password){
                $profileObj->update_password($user_id, $new_password);
            }else{
                echo "Please check your new ppassword and confirm form.";
            }
            
        }else{
            echo "Please check your current password!";
        }
        
    }
    // project below
    // create project
    elseif(isset($_POST['add_project'])){
        // pick from user_profile table
        $get_profile = $profileObj->get_profile($_SESSION['user_id']);
        $real_password = $get_profile['password'];
        // create project table
        // $project_img = $_FILES['project_img']['name']; 
        
        $tytle = $_POST['tytle'];
        $total_support = $_POST['total_support'];
        $deadline = $_POST['deadline'];
        $category = $_POST['category'];

        $message = $_POST['message'];
        $return_support = $_POST['return_support'];
        $return_product = $_POST['return_product'];
        $return_discription = $_POST['return_discription'];
        $return_date = $_POST['return_date'];

        $company_name = $_POST['company_name'];
        $company_url = $_POST['company_url'];
        $movie_url = $_POST['movie_url'];

        $user_id = $_POST['user_id'];
        $password = $_POST['password'];

        if($real_password == $password){
             $profileObj->add_project($tytle, $total_support, $deadline, $category, $message, $user_id, $movie_url, $company_name, $company_url, $return_support, $return_product, $return_discription, $return_date);
        }else{
            echo "Please check your password";
        }
        
    }
    // update project image
    elseif(isset($_POST['update_project_img'])){
        // $one_project = $profileObj->get_one_project($_SESSION['project_id']);
        $project_img = $_FILES['project_img']['name'];        

        $project_id = $_POST['project_id'];
        $profileObj->update_project_img($project_img, $project_id);
    }
    // update return image
    elseif(isset($_POST['update_return_img'])){
        // $one_project = $profileObj->get_one_project($_SESSION['project_id']);
        $return_img = $_FILES['return_img']['name'];        

        $project_id = $_POST['project_id'];
        $profileObj->update_return_img($return_img, $project_id);
    }
    // update project
    elseif(isset($_POST['update_project'])){
        $tytle = $_POST['tytle'];
        $total_support = $_POST['total_support'];
        $deadline = $_POST['deadline'];
        $category = $_POST['category'];

        $message = $_POST['message'];
        $return_support = $_POST['return_support'];
        $return_product = $_POST['return_product'];
        $return_discription = $_POST['return_discription'];
        $return_date = $_POST['return_date'];

        $company_name = $_POST['company_name'];
        $company_url = $_POST['company_url'];
        $movie_url = $_POST['movie_url'];


        $project_id = $_POST['project_id'];

        $profileObj->update_project($tytle, $total_support, $deadline, $category, $message, $movie_url, $company_name, $company_url, $return_support, $return_product, $return_discription, $return_date, $project_id);

    }







    // payment
    elseif(isset($_POST['payment'])){
        
        $p_price = $_POST['p_price'];
        $p_name = $_POST['p_name'];
        $p_line1 = $_POST['p_line1'];
        $p_line2 = $_POST['p_line2'];
        $p_city = $_POST['p_city'];
        $p_zipcode = $_POST['p_zipcode'];
        $p_country = $_POST['p_country'];

        $card_name = $_POST['card_name'];
        $card_number = $_POST['card_number'];
        $expiry_month = $_POST['expiry_month'];
        $expiry_year = $_POST['expiry_year'];
        $cvv = $_POST['cvv'];

        $project_id = $_POST['project_id'];
        $user_id = $_POST['user_id'];
        $password = $_POST['password'];

        // get password data
        $get_profile = $profileObj->get_profile($_SESSION['user_id']);
        $real_password = $get_profile['password'];

        if($real_password == $password){
            $profileObj->payment($p_price, $p_name, $p_line1, $p_line2, $p_city, $p_zipcode, $p_country, $card_name, $card_number, $expiry_month, $expiry_year, $cvv, $project_id, $user_id);
       }else{
           echo "Please check your password";
       }
    }


    // message form
    elseif(isset($_POST['ct_send'])){
        $user_id = $_POST['user_id'];
        $project_id = $_POST['project_id'];
        $ct_project = $_POST['ct_project'];
        $ct_email = $_POST['ct_email'];
        $ct_subject = $_POST['ct_subject'];
        $ct_message = $_POST['ct_message'];
            
        $profileObj->ct_send($user_id, $project_id, $ct_project, $ct_email, $ct_subject, $ct_message);

    }

?>