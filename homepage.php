<?php
class homepage extends page {

    static public function get()
    {
        $form = '<form method="post" enctype="multipart/form-data">';
        $form .= '<input type="file" name="fileToUpload" id="fileToUpload">';
        $form .= '<input type="submit" value="Upload and Display CSV File" name="submit">';
        $form .= '</form> ';
        $this->html .= '<h1>Display Contents of a CSV File</h1>';
        $this->html .= $form;

    }

    static public function post() {
        $target_dir = "uploads/";
    	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file );
    	header('Location: index.php?page=htmlTable&filename='. $target_file );

    }
}
?>