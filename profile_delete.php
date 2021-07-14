<?php
    include 'profile_action.php';

    $user_id = $_SESSION['user_id'];

    // die();
    $profileObj->profile_delete($user_id);


?>