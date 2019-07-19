<?php 
    include('../../connect.php'); 

    $id = $_POST['idd'];

    $query = "DELETE FROM video WHERE video.MaMulti ='$id'";
    $statement = $conn->prepare($query);
    $statement->execute();
    

?>