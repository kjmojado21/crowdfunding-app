<?php
    include 'Database.php';

    class Profile extends Database{

        // SIGN UP
        public function signup($first_name, $last_name, $email, $password, $confirm_password){ 
            // decision making: how many parameters should I add here?
            // answer: count how many data you will add inside your database
            if($password == $confirm_password){
                $sql = "INSERT INTO user_profile(first_name, last_name, email, password)VALUES('$first_name', '$last_name', '$email', '$password')";
                $result = $this->conn->query($sql); // excution of query (translator)å
                if($result == TRUE){
                    $id = $this->conn->insert_id;
                    $_SESSION['user_id'] = $id;
                } else{
                    die('ERROR! Please start from the beginning.'.$this->conn->error);
                }
            }else{
                die('ERROR! Please check your password form.'.$this->conn->error);
            } 

            if($result == TRUE){
                // echo "Book added successfully";
                header ('location:profile_read.php'); //means go to read.php if there is no error
            } else{
                die('ERROR: Please start from the beginning.'.$this->conn->error); // die means stop all execution
            }

        }

        // LOGIN
        public function login($email, $password){
            $sql = "SELECT * FROM user_profile WHERE email = '$email' AND password = '$password'";
            $result = $this->conn->query($sql);

            if($result->num_rows == 1){
                $row = $result->fetch_assoc();
                $_SESSION['user_id'] = $row['user_id'];
                header('location:profile_read.php');
            } else{
                die('ERROR: Please check your email / password.'.$this->conn->error);
            }
        }

        // PROFILE READ
        public function get_profile($user_id){
            // $sql = "SELECT * FROM user_profile WHERE user_id = '$id'";
            // $sql ="SELECT DATE_FORMAT(date_added, '%Y-%m-%d')AS yuki FROM books";
            $sql = "SELECT DATE_FORMAT(date_added, '%Y-%m-%d')AS create_date, first_name, last_name, birthday, home_address, email, password, website, user_img FROM user_profile WHERE user_id='$user_id'";
            
            $result = $this->conn->query($sql);

            if($result == FALSE){
                die('ERROR: '.$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }

        }


        // count the number of project
        public function count_user_project($user_id){
            $sql = "SELECT * FROM project WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);

            if($result == FALSE){
                die('ERROR: '.$this->conn->error);
            }else{
                return $result->num_rows;
            }
        }

        // count the number of support
        public function count_user_support($user_id){
            $sql = "SELECT * FROM payment WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);

            if($result == FALSE){
                die('ERROR: '.$this->conn->error);
            }else{
                return $result->num_rows;
            }
        }

        // total user support
        public function total_user_support($user_id){
            $sql = "SELECT sum(CAST(p_price AS UNSIGNED))AS support_pay FROM payment WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);

            if($result == FALSE){
                die('ERROR: '.$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }
        }

        // PROFILE UPDATE
        public function update_profile($first_name, $last_name, $email, $birthday, $home_address, $website, $password, $user_id){
            // $target_dir = 'user_img/';
            // $target_file = $target_dir.basename($user_img);

            $sql = "UPDATE user_profile SET first_name = '$first_name', last_name = '$last_name', email = '$email', birthday = '$birthday', home_address = '$home_address', website = '$website'  WHERE user_id ='$user_id'";
            
            $result = $this->conn->query($sql);

            if($result == TRUE){
            //    move_uploaded_file($_FILES['user_img']['tmp_name'], $target_file);
                header('location:profile_read.php'); 
            }else{
                die('ERROR: '.$this->conn->error); // die means all execution
            } 

        }

        // PROFILE UPDATE PICS
        public function update_profile_img($user_img, $user_id){
            $target_dir = 'user_img/';
            $target_file = $target_dir.basename($user_img);

            $sql = "UPDATE user_profile SET user_img = '$user_img'  WHERE user_id ='$user_id'";
            
            $result = $this->conn->query($sql);

            if($result == TRUE){
               move_uploaded_file($_FILES['user_img']['tmp_name'], $target_file);
                header('location:profile_update.php?user_id='.$user_id); 
            }else{
                die('ERROR: '.$this->conn->error); // die means all execution
            } 

        }

        // Update Password
        public function update_password($user_id, $new_password){
            $sql = "UPDATE user_profile SET password = '$new_password' WHERE user_id ='$user_id'";
            $result = $this->conn->query($sql);
            if($result == TRUE){
                 header('location:profile_read.php'); 
             }else{
                 die('ERROR: '.$this->conn->error); // die means all execution
             } 
 
        }

        // PROFILE DELETE
        public function profile_delete($user_id){
            $sql = "DELETE FROM user_profile WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header('location:login.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        // PROJECT!!!!!
        // Create Project
        public function add_project($tytle, $total_support, $deadline, $category, $message, $user_id, $movie_url, $company_name, $company_url, $return_support, $return_product, $return_discription, $return_date){ 
            
            // $target_dir = 'project_img/';
            // $target_file = $target_dir.basename($project_img);

            $sql = "INSERT INTO project(user_id, total_support, deadline, tytle, category, message, movie_url, company_name, company_url, return_support, return_product, return_discription, return_date)VALUES('$user_id', '$total_support', '$deadline', '$tytle', '$category', '$message', '$movie_url', '$company_name', '$company_url', '$return_support', '$return_product', '$return_discription', '$return_date')";
            // if($result == TRUE){
            //     $id = $this->conn->insert_id;
            //     $_SESSION['user_id'] = $id;
            // } else{
            //     die('ERROR! Please start from the beginning.'.$this->conn->error);
            // }

            $result = $this->conn->query($sql); // excution of query (translator)

            if($result == TRUE){
                // move_uploaded_file($_FILES['project_img']['tmp_name'], $target_file);
                $return_id = $this->conn->insert_id;
                $_SESSION['return_id'] = $return_id;
                header('location:project_useronly.php?user_id='.$user_id);
                // $project_id = $_GET['project_id'];
                // header('location:pj_update.php?project_id='.$project_id);
            } else{
                die('ERROR: '.$this->conn->error); // die means stop all execution
            }

        }
        // Insert Project Photo
        public function update_project_img($project_img, $project_id){
            $target_dir = 'project_img/';
            $target_file = $target_dir.basename($project_img);

            $sql = "UPDATE project SET project_img = '$project_img'  WHERE project_id ='$project_id'";
            
            $result = $this->conn->query($sql);

            if($result == TRUE){
               move_uploaded_file($_FILES['project_img']['tmp_name'], $target_file);
                header('location:pj_update.php?project_id='.$project_id); 
                // echo "Return to the update page and reflesh.";
            }else{
                die('ERROR: '.$this->conn->error); // die means all execution
            } 

        }
        // Insert Return Photo
        public function update_return_img($return_img, $project_id){
            $target_dir = 'return_img/';
            $target_file = $target_dir.basename($return_img);

            $sql = "UPDATE project SET return_img = '$return_img'  WHERE project_id ='$project_id'";
            
            $result = $this->conn->query($sql);

            if($result == TRUE){
               move_uploaded_file($_FILES['return_img']['tmp_name'], $target_file);
                header('location:pj_update.php?project_id='.$project_id); 
                // header('location:pj_update.php?proj_id=''$project_id'')
                // echo "Return to the update page and reflesh.";
            }else{
                die('ERROR: '.$this->conn->error); // die means all execution
            } 

        }

        // update project
        public function update_project($tytle, $total_support, $deadline, $category, $message, $movie_url, $company_name, $company_url, $return_support, $return_product, $return_discription, $return_date, $project_id){
            
            $sql = "UPDATE project SET tytle = '$tytle', total_support = '$total_support', deadline = '$deadline', category = '$category', message = '$message', movie_url = '$movie_url', company_name = '$company_name', company_url = '$company_url', return_Support = '$return_support', return_product = '$return_product', return_discription = '$return_discription', return_Date = '$return_date'  WHERE project_id ='$project_id'";
            
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header('location:pj_detail.php?project_id='.$project_id); 
                // header('location:pj_update.php?proj_id=''$project_id'')
                // echo "Return to the update page and reflesh.";
            }else{
                die('ERROR: '.$this->conn->error); // die means all execution
            } 

        }


        // read project TOP PAGE
        public function read_project(){
            $sql = "SELECT * FROM project";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                $container = array();
                while($row = $result->fetch_assoc()){
                    $container[] = $row;
                }
                return $container;
            }else{
                return FALSE;
            }
        }

        // read only user project
        public function read_user_project($user_id){
            $sql = "SELECT * FROM project WHERE user_id = '$user_id'";
            $result = $this->conn->query($sql);
            if($result->num_rows > 0){
                $container = array();
                while($row = $result->fetch_assoc()){
                    $container[] = $row;
                }
                return $container;
            }else{
                return FALSE;
            }
        }

        // read detail
        public function get_one_project($project_id){
            $sql = "SELECT * FROM project WHERE project_id = '$project_id'";
            // $sql ="SELECT DATE_FORMAT(date_added, '%Y-%m-%d')AS yuki FROM books";
            // $sql = "SELECT DATE_FORMAT(date_added, '%Y-%m-%d')AS create_date, first_name, last_name, birthday, home_address, email, password, website, user_img FROM user_profile WHERE user_id='$user_id'";
            
            $result = $this->conn->query($sql);

            if($result == FALSE){
                die('ERROR: '.$this->conn->error);
            }else{
                return $result->fetch_assoc();
            }

        }


        // PROJECT DELETE
        public function project_delete($project_id){
            $sql = "DELETE FROM project WHERE project_id = '$project_id'";
            $result = $this->conn->query($sql);

            if($result == TRUE){
                header('location:profile_read.php');
            }else{
                die("ERROR: ".$this->conn->error);
            }
        }

        // calculate tota; project support
        public function total_project_support($project_id){
            $sql = "SELECT sum(CAST(p_price AS UNSIGNED))AS tp_support FROM payment WHERE project_id = '$project_id'";
            $result = $this->conn->query($sql);

            if($result == FALSE){
               return FALSE;
            }else{
                return $result->fetch_assoc();
            }
        }



        // PAYMENT TABLE
        // payment
        public function payment($p_price, $p_name, $p_line1, $p_line2, $p_city, $p_zipcode, $p_country, $card_name, $card_number, $expiry_month, $expiry_year, $cvv, $project_id, $user_id){
            $sql = "INSERT INTO payment(p_price, p_name, p_line1, p_line2, p_city, p_zipcode, p_country, card_name, card_number, expiry_month, expiry_year, cvv, project_id, user_id)VALUES('$p_price', '$p_name', '$p_line1', '$p_line2', '$p_city', '$p_zipcode', '$p_country', '$card_name', '$card_number', '$expiry_month', '$expiry_year', '$cvv', '$project_id', '$user_id')";

            $result = $this->conn->query($sql); // excution of query (translator)

            if($result == TRUE){
                // $return_id = $this->conn->insert_id;
                // $_SESSION['return_id'] = $return_id;
                header('location:thankyou.php');
            } else{
                die('ERROR: '.$this->conn->error); // die means stop all execution
            }
        }

        // message form
        public function ct_send($user_id, $project_id, $ct_project, $ct_email, $ct_subject, $ct_message){ 
            
            $sql = "INSERT INTO message_form(user_id, project_id, ct_project, ct_email, ct_subject, ct_message)VALUES('$user_id', '$project_id', '$ct_project', '$ct_email', '$ct_subject', '$ct_message')";

            $result = $this->conn->query($sql); // excution of query (translator)

            if($result == TRUE){
                header('location:thankyou_user.php?user_id='.$user_id);                
            } else{
                die('ERROR: '.$this->conn->error); // die means stop all execution
            }

        }

    }

?> 