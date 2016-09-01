<?php

class Usuarios extends Controller{
	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
                if($this->uobj->logged_in())
                    $this->data['usuario'] = $this->uobj->get_user();
	}

	public function index($page = 0){
            $this->load->native_helper('PaginationHelper');
            $this->data['pagination'] = pagination("usuarios",$this->uobj, 10);
            #    print_r($_SERVER);exit;
                if(!$this->uobj->is_allowed('admin'))
                        die("ERRO: Você não tem permissão para acessar!");
                $this->uobj->limit(10);
                $this->uobj->offset(($page * 10));
                $this->uobj->get();
                $this->data['rows'] = $this->uobj->all_to_array();
		$this->render('usuarios/index');
	}

        public function add(){
            if(!$this->uobj->is_allowed('admin'))
                        die("ERRO: Você não tem permissão para acessar!");
            if(isset($_POST['submit'])){
                $nuser = $this->post_to_obj(array('nome','login','senha','grupo'), new Usuario());
                $nuser->save();
                redirect('usuarios');
            }
            $this->render('usuarios/add');
        }

        public function edit($id){
            if(!$this->uobj->is_allowed('admin'))
                        die("ERRO: Você não tem permissão para acessar!");
            if(isset($_POST['submit'])){
                $nobj = $this->post_to_obj(array('id','nome','login','senha','grupo'), new Usuario());
                $nobj->save();
                #print_r($nobj);exit;
                redirect('usuarios');
            }
            $this->uobj->getById($id);
            $this->data['edit_user'] = $this->uobj->to_array();

            $this->render('usuarios/edit');
        }

        public function delete($id){
            if(!$this->uobj->is_allowed('admin'))
                        die("ERRO: Você não tem permissão para acessar!");
            $this->uobj->deleteById($id);
            redirect('usuarios');
        }

        public function buscar(){
            $this->load->native_helper('PaginationHelper');
            
            $arr = $this->post_to_array(array('words'));
            $this->uobj->like('nome', $arr['words']);
            $this->data['words'] = $arr['words'];
            $this->data['pagination'] = pagination("usuarios",$this->uobj, 2);
            #    print_r($_SERVER);exit;
                if(!$this->uobj->is_allowed('admin'))
                        die("ERRO: Você não tem permissão para acessar!");
                $this->uobj->limit(2);
                $this->uobj->offset(($page * 2));
                $this->uobj->get();
                $this->data['rows'] = $this->uobj->all_to_array();
            $this->render('usuarios/buscar');
        }

        public function login(){

            if(isset($_POST['submit'])){
                $arr = $this->post_to_array(array('login','senha'));
                $obj = new Usuario();
                if($obj->login($arr))
                    redirect();
            }

            $this->render_nonav('usuarios/login');
        }

        public function logout(){
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
            
            redirect('usuarios/login');
        }
}

?>
