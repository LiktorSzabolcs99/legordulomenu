<?php

if(isset($_GET['marka']) && !empty($_GET['marka'])){

    include('connect.php');

    $id = $_GET['marka'];

    $query = "SELECT * FROM típus WHERE con_id='$id'";
    $do = mysqli_query($conn,$query);
    $count = mysqli_num_rows($do);

    if($count > 0){
        while($row= mysqli_fetch_array($do)){

            echo '<option value="'. $row["id"].'">'.$row['név'].'</option>';

        }
    } else{
        echo '<option>Nincs elérhető típus</option>';
    }

} else{
    echo '<h1>Hiba</h1>';
}
