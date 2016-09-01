<?php

class Enderecos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
                if(!$this->uobj->logged_in())
                    redirect ('usuarios/login');
                $this->data['usuario'] = $this->uobj->get_user();
	}

	public function index(){

		$this->render('index');
	}
}

?>