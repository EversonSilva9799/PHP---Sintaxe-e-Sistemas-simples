<?php
class HomeController extends Controller{

	public function __construct() {
		
	}

	public function index() {

		$fotos = new Foto();
		$fotos->saveFotos();
		
		$dados['fotos'] = $fotos->getFotos();


		
		$this->loadTemplate('home', $dados);
	}


}