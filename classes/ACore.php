<?php
abstract class ACore {
	
	public function get_body() {
		echo "Hello world";
		$this->header();
		$this->leftSidebar();
        $this->menu();
$this->content();
        $this->footer();
	}
	protected function header(){
        include_once "/layouts/heder.php";
    }
    protected function leftSidebar(){
        include_once "/layouts/leftSidebar.php";
    }
    protected function menu(){
        include_once "/layouts/menu.php";
    }
    protected function content(){

      //  include_once "/layouts/menu.php";
        echo "привет";
    }
    protected function footer(){
        include_once "/layouts/footer.php";
    }
}

?>