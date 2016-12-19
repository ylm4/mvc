<?php
//creating program so user can reset password if needed.

class Model {
	public $word;
	public function __construct(){
		$this->word="Hello";
	}
}

class View  {
	private $model;
	private $controller;
	public function __construct($controller,$model) {
		$this->controller=$controller;
		$this->model=$model;
	}
	public function output(){
		return '<p> <a href="mvc.php?action=clicked"' . $this->model->word . '</></p>';
	//return '<p><a  href = "mvc.php?action=clicked"' . $this->model->word . "</a></p>";
	}
}

class Controller { 
	private $model;
	public function __construct($model){
		$this->model = $model;
	}

}
echo '<h3>MVC Application</h3>';
echo '<h4>View Github <a href= "https://github.com/ylm4/mvc/blob/master/mvc.php ">Here</a></h4>';
$model = new Model();
$controller= new Controller($model);
$view = new View ($controller, $model);


echo $view->outtput();

?>
