<?php
class htmlTable extends page {
    public function getmethod()
    {
        $row=1;
        if (($$table= fopen($_GET['filename'],"r")) ! == false )
        {   
            echo '<table border="1">';
            while (($data = fgetcsv($table,1000, "," )) ! == FALSE)
            {   
                $num=count($data);
                if ($row == 1)
                {
                    echo '<head><tr>';
                }
                else
                {
                    echo '<tr>';
                }
                }
            }
        }
    }
}
?>