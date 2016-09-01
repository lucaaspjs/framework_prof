<?php

class Fornecedores extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
                if(!$this->uobj->logged_in())
                    redirect ('usuarios/login');
                if(!$this->uobj->is_allowed('comprador'))
                        die("ERRO: Você não tem permissão para acessar!");
                $this->data['usuario'] = $this->uobj->get_user();
	}

	public function index(){

		$this->render('index');
	}
}

?>