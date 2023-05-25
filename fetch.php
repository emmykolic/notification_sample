<?php
include("connect.php");
$query = "SELECT * FROM comments WHERE comment_status = 0 ORDER BY comment_id DESC";
$result = $connect->query($query);
$row = $result->fetch_assoc();

if ($row) {
    ?>
    <div class="alert alert-default">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p>
            <strong><?= $row["comment_subject"] ?></strong>
            <small><em><?= $row["comment_text"] ?></em></small>
        </p>
    </div>
    <?php
    $update_query = "UPDATE comments SET comment_status = 1 WHERE comment_status = 0";
    if (mysqli_query($connect, $update_query)) {
        // Update successful
    } else {
        echo "Error updating comment status: " . mysqli_error($connect);
    }
}
$connect->close();

   
?>