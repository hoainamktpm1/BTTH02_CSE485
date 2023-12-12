<?php
include_once("db_connect.php");

if(isset($_POST["name"]) && isset($_POST["comment"])){
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $comment = mysqli_real_escape_string($conn, $_POST["comment"]);
    $parent_id = mysqli_real_escape_string($conn, $_POST["commentId"]);

    $insertComments = "INSERT INTO comments (parent_id, comment, sender) VALUES ('$parent_id', '$comment', '$name')";
    mysqli_query($conn, $insertComments) or die("database error: " . mysqli_error($conn));

    $message = '<label class="text-success">Comment posted successfully.</label>';
    $status = array(
        'error' => false,
        'message' => $message
    );
} else {
    $message = '<label class="text-danger">Error: Comment not posted.</label>';
    $status = array(
        'error' => true,
        'message' => $message
    );
}

echo json_encode($status);
?>
