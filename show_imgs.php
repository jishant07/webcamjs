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

    $get_sql = "select * from `webcam_data`";
    $result = $con -> query($get_sql);
    if($result->num_rows)
    {
        while($row = $result->fetch_assoc())
        {
            $arr = json_decode($row['filelinks']);
            ?>
                <span><p><?php echo $row['name'] ?></p></span>
            <?php
            foreach($arr as $src)
            {
                ?>
                    <img src='<?php echo $src ?>'></img>
                <?php
            }
        }
    }
    else{
        echo "<h1>No data found</h1>";
    }
?>