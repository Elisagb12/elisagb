<?php


new Controller();

class Controller
{
	protected $ruta;

	function __construct()
	{
		$this->init();
	}

	public function init()
	{
		$this->get_ruta();
		$this->get_vista();
	}

	public function get_ruta()
	{
		$request_uri = explode('/', $_SERVER['REQUEST_URI']);
		$request_uri = explode('?',end($request_uri));

		if($request_uri[0] == ""){$request_uri[0]="home";}

		$this->ruta = $request_uri[0];
	}

	public function get_vista()
	{
		$view = file_get_contents("vistas/main.template.php");
		$view = str_replace("@{header}",$this->get_header(),$view);
		$view = str_replace("@{body}",$this->get_body(),$view);
		$view = str_replace("@{footer}",$this->get_footer(),$view);

		echo $view;
	}

	private function get_body()
	{
		$this->check_ruta();

		return file_get_contents("vistas/".$this->ruta.".template.php");
	}

	private function check_ruta()
	{
		if(file_exists("vistas/".$this->ruta.".template.php"))
		{
			return $this->ruta;
		}
		return $this->ruta = "404";
	}

	private function get_header()
	{
		return file_get_contents("vistas/header.template.php");
	}

	private function get_footer()
	{
		return file_get_contents("vistas/footer.template.php");
	}
}