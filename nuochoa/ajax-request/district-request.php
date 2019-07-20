<?php 
        include('../select.php');
        if(isset($_POST["district"]))
        {
            $item = $_POST["district"];
            $output = '';
            $query = query_select("select * from devvn_xaphuongthitran where maqh='$item'");
            $count = $query->rowCount();
            if($count > 0)
            {
                foreach ($query as $row) {
                    echo '<option  value="'.$row['xaid'].'">'.$row['name'].'</option>';
                }
            }
            else
            {
                echo '<option  value="">Chọn quận huyện trước</option>';
            }
        }
?>
