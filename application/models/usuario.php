<?php

class Usuario extends Model{

	protected $tabela = 'usuarios';
	#protected $one_to_one = array();
	#protected $one_to_many = array();
	#protected $many_to_many = array();

	public function __construct(){
		parent::__construct();
                if (session_status() == PHP_SESSION_NONE) {
                    session_start();
                }
	}

        public function login(Array $arr){
            $this->where('login', $arr['login']);
            $this->where('senha', $arr['senha']);
            $this->get();
            if(count($this->all_to_array()) > 0){
                $_SESSION['usuario'] = $this->to_array();
                return true;
            }

            return false;
        }

        public function logged_in(){
            if(isset($_SESSION['usuario']))
                return true;
            return false;
        }

        public function get_user(){
            return $_SESSION['usuario'];
        }

        public function is_allowed($grupo = 'geral'){
            if($_SESSION['usuario']['grupo'] == $grupo)
                return true;
            return false;
        }
}