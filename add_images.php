<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webcam";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_error()) {
        die("Connection failed! ".mysqli_connect_error());
    } 
?>
<?php 

    extract($_POST);
    $count = 1;
    $file_links = array();
    $chk_ql = "select * from `webcam_data`";
    $result = $con -> query($chk_ql);
    $id = ($result->num_rows+1);
    foreach ($image as $data_uri)
    {
        $filename = "uploads/".$count."img".$id."id.jpg";
        file_put_contents($filename,file_get_contents(($data_uri)));
        array_push($file_links,$filename);
        $count++;
    }
    $file_data = json_encode($file_links);
    $insert_ql = "INSERT INTO `webcam_data`(`name`, `filelinks`) VALUES ('$name','$file_data')";
    $con -> query($insert_ql);
    header("Location: show_imgs.php");
?>