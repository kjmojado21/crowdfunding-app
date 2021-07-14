<?php
    include 'profile_action.php';
    $project_id = $_GET['project_id'];

    // die();
    $profileObj->project_delete($project_id);


?>