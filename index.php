<?php

class Manage {
    public static function autoload($class) {
        
        include $class . '.php';
    }
}

spl_autoload_register(array('Manage', 'autoload'));


$obj = new main();


class main {

    public function __construct()
    {
        $pageRequest = 'homepage';
        
        if(isset($_REQUEST['page'])) {
            
            $pageRequest = $_REQUEST['page'];
        }
        
         $page = new $pageRequest;


        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $page->get();
        } else {
            $page->post();
        }

    }

}

abstract class page {
    protected $html;

    public function __construct()
    {
        $this->html .= '<html>';
        
        $this->html .= '<body>';
    }
    public function __destruct()
    {
        $this->html .= '</body></html>';
        stringFunctions::printThis($this->html);
    }
}
?>
