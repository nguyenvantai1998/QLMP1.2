<?php 
        include('../select.php');
        if(isset($_POST["city"]))
        {
            $item = $_POST["city"];
            $output = '';
            $query = query_select("select * from devvn_quanhuyen where matp='$item'");
            $count = $query->rowCount();
            if($count > 0)
            {
                foreach ($query as $row) {
                    echo '<option  value="'.$row['maqh'].'">'.$row['name'].'</option>';
                }
            }
            else
            {
                echo '<option  value="">Chọn thành phố trước</option>';
            }
        }
        // echo $output;
?>
