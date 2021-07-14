<?php
    include 'Database.php';

    class Project extends Database{
        
        public function add_project($project_img, $return_img, $tytle, $total_support, $deadline, $category, $movie_url, $discription, $return_support, $return_product, $return_date, $user_id){ 
            
            $target_dir = 'project_img/';
            $target_file = $target_dir.basename($project_img);

            $target_dir = 'return_img/';
            $target_file = $target_dir.basename($return_img);

            $sql = "INSERT INTO project(user_id, total_support, deadline, tytle, discription, category, project_img, movie_url, return_support, return_product, return_date, return_image)
            VALUES('$user_id', '$total_support', '$deadline', '$tytle', '$discription', '$category', '$project_img', '$movie_url', '$return_support', '$return_project', '$return_date', $return_image')";

            $result = $this->conn->query($sql); // excution of query (translator)

            if($result == TRUE){
                move_uploaded_file($_FILES['project_img']['tmp_name'], $target_file);
                move_uploaded_file($_FILES['return_img']['tmp_name'], $target_file);
                header('location:pj_read.php');
            } else{
                die('ERROR: '.$this->conn->error); // die means stop all execution
            }

        }

        public function read_project(){
            $sql = "SELECT * FROM project"; // books = table name
            $result = $this->conn->query($sql);

            if($result->num_rows > 0){   // "num_rows > 0" means "at least one data"
                $container = array();
                while($row = $result->fetch_assoc()){
                    $container[] = $row;
                }
                return $container;
            }else{
                return FALSE;
            }
        }

    }


?>