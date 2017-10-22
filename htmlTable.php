<?php
class htmlTable extends page {

static public function get(){

$row = 1;
if (($table = fopen($_GET['filename'], "r" )) !== false ) {

    echo '<table border="1">';

    while (($data = fgetcsv($table, 100000, ",")) !== FALSE) {
        $num = count($data);
        if ($row == 1) {
            echo '<h1> Table </h1>';
            echo '<thead><tr><br>';
        }else
        {
            echo '<tr>';
        }

        for ($a=0; $a < $num; $a++) {
            
            if(empty($data[$a])) {
               $value = "&nbsp;";
            }else{
               $value = $data[$a];
            }
            if ($row == 1) {
                echo '<th>'.$value.'</th>';
            }else{
                echo '<td>'.$value.'</td>';
            }
        }

        if ($row == 1) {
            echo '</tr></thead><tbody>';
        }else{
            echo '</tr>';
        }
        $row++;
    }

    echo '</tbody></table>';
    fclose($table);
}

  }

}
?>