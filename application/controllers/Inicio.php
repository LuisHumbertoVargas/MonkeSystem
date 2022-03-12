<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Inicio_model');
		$this->load->library('pdf');

	}
//comienzo de pagina web ---------------------------------------------------------------------------------------
	public function index()
	{
		$this->load->view("inicio_client_view");
	}

	public function productos()
	{
		$this->load->view("productos_client_view");
	}

//login----------------------------------------------------------------------------------------------------------

	

	public function loginAdmin()
	{
		$this->load->view("Login_view");
	}

	public function login($correo)
	{
		$this->creasesion( $correo );
		$this->correo = $correo;

		//*Se carga la vista del Inicio de la Página//
		redirect( base_url()."inicio/admin" );

	}

	public function iniciarSesion(){
		$correo = $this->input->post("correo");
		$password = $this->input->post("password");
		$data = array(
			"correo" => $correo,
			"password" => $password,
		);
		$datos = $this->Inicio_model->login($data);
		$obj["resultado"] = $datos != NULL;
		$obj["mensaje"] = $obj["resultado"] ? "Usuario Chido"  : "correo/contraseña incorrectos";
		$obj["usuarios"] = $datos;
		$this->output->set_content_type( "application/json" );
		echo json_encode( $obj );
	}
//Mostrar inicio--------------------------------------------------------------------------------------------------
	public function admin()
	{
		if ( $this->verificasesion() ) {
			$data = array(
				"correo" => $this->session->userdata( "correo" )
			);
			$this->load->view( "catalogo_servicio_view", $data );
		}
		else {
			redirect( base_url() );
		}
		
	}
//sesion-------------------------------------------------------------------------------------------------
	private function creasesion( $correo ) 
	{

		$this->session->set_userdata( "correo", $correo );

	}

	public function cierrasesion() 
	{

		$this->session->unset_userdata( "correo" );
		redirect( base_url() );

	}
//verificacion de correo------------------------------------------------------------------------------------------
	private function verificasesion() 
	{
		return $this->session->has_userdata( "correo");
				// && $this->session->userdata( "correo" ) == $this->correo;
			//die("correo");

	}

	public function verificacorreo()
	{

		$correo = $this->input->post("correo");
		$data = $this->Inicio_model->get_admin($correo);
		$obj["resultado"] = $data != NULL;
		$obj["mensaje"] = $obj["resultado"] !=NULL ?
		$data : "No existe el Usuario";

		echo json_encode($obj);

	}


//Mostrar listado de datos-------------------------------------------------------------------------------------
	public function registroUsu()
	{
		if ( $this->verificasesion() ) {
			$data = array(
				"correo" => $this->session->userdata( "correo" )
			);

			$this->load->view( "Registro_Usuario_view", $data );
			
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function agregarCat()
	{
		if ( $this->verificasesion() ) {
			$data = array(
				"correo" => $this->session->userdata( "correo" )
			);
			$this->load->view( "Agregar_Categoria_view", $data );
			
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function agregarMarc()
	{
		if ( $this->verificasesion() ) {
			$data = array(
				"correo" => $this->session->userdata( "correo" )
			);
			$this->load->view( "Agregar_Marca_view", $data );
			
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function agregarServ()
	{
		if ( $this->verificasesion() ) {
			$data = array(
				"correo" => $this->session->userdata( "correo" )
			);
			$this->load->view( "Agregar_Serv_view", $data );
			
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function marcas()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_marc();
			$data = array( );
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "tipos de servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron marcas";
			}

			$this->load->view( "Marc_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function marcas_inactiva()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_marc_inactive();
			$data = array( );
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "tipos de servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron marcas";
			}

			$this->load->view( "Marc_view_inactive", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}


	
	public function categorias()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_type_serv();
			$data = array( );
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "tipos de servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron categorias";
			}

			$this->load->view( "Type_Serv_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function categorias_inactiva()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_type_serv_inactive();
			$data = array( );
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "tipos de servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron categorias";
			}

			$this->load->view( "Type_Serv_view_inactive", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function catalogoServicio()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_serv();
			$data = array( );
			if ($qr!=NULL) {
				$data["resultado"] = $qr;
				$data["mensaje"] = "servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron servicios";
			}
			$this->load->view( "catalogo_servicio_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}


	public function ServicioInactivo()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_serv_inactive();
			$data = array( );
			if ($qr!=NULL) {
				$data["resultado"] = $qr;
				$data["mensaje"] = "servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron servicios";
			}
			$this->load->view( "servicio_inactivo_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}
/*
	public function NewRequestList()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_new_request();
			$data = array( );
			if ($qr!=NULL) {
				$data["resultado"] = $qr;
				$data["mensaje"] = "servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron Solicitudes";
			}
			$this->load->view( "new_request_list_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function ProcessRequestList()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_process_request();
			$data = array( );
			if ($qr!=NULL) {
				$data["resultado"] = $qr;
				$data["mensaje"] = "servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron Solicitudes";
			}
			$this->load->view( "process_request_list_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function CancelRequestList()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_cancel_request();
			$data = array( );
			if ($qr!=NULL) {
				$data["resultado"] = $qr;
				$data["mensaje"] = "servicios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron Solicitudes";

			}
			$this->load->view( "cancel_request_list_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

*/
	public function modificacion()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_user();
			$data = array( );
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "Usuarios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron usuarios";
			}

			$this->load->view( "Modifica_Usu_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}

	public function eliminar()
	{
		if ( $this->verificasesion() ) {
			$qr= $this->Inicio_model->get_user_deleted();
			$data = array( );
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "Usuarios encontrados";
				$data["correo"] = $this->session->userdata( "correo" );
			} else {
				$data["correo"] = $this->session->userdata( "correo" );
				$data["mensaje"] = "no se encontraron usuarios";
			}
			$data["correo"] = $this->session->userdata( "correo" );
			$this->load->view( "blocked_Usu_view", $data);
		}
		else {
			redirect( base_url() );
		}
		
	}
//Modificaciones-----------------------------------------------------------------------------------------------
	public function modificarAdm()
	{

		$correo  = $this->input->get("correo");
		$password = $this->input->get("password");
		$nombre = $this->input->get("nombre");
		$apellidos = $this->input->get("apellidos");
		$estado = $this->input->get("estado");
		$rol = $this->input->get("rol");

		if ($password!=NULL) 
		{
			$data_usu = array(
				"correo"	=> $correo,
				"password"	=> $password,
				"nombre"	=> $nombre,
				"apellidos"	=> $apellidos,
				"estado"	=> $estado,
				"rol"		=> $rol
			);

		}else 
		{
			$data_usu = array(
				"correo"            => $correo,
				"nombre"            => $nombre,
				"apellidos"			=> $apellidos,
				"estado"            => $estado,
				"rol"            	=> $rol
			);
		}
		
		
		$this->Inicio_model->modificar_usuario($data_usu);
		redirect(base_url().'Inicio/modificacion');

	}

	public function modificaUsu($correo)
	{
		if ( $this->verificasesion() ) {
			$qr=$this->Inicio_model->modificar_admin($correo);
			$data = array( );
				//"correo" => $this->session->userdata( "correo" )
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "Usuario encontrado";
				$data["correo"] = $this->session->userdata( "correo" );
				$this->load->view( "Modifica_Admin_view", $data );
			} else {
					# code...

				$data["mensaje"] = "Usuario a modificar encontrado";
			}



		}
		else {
			redirect( base_url() );
		}

	}

	public function modificaMarc($id_marc)
	{
		if ( $this->verificasesion() ) {
			$qr=$this->Inicio_model->modificar_marc($id_marc);
			$data = array( );
				//"correo" => $this->session->userdata( "correo" )
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "Marca encontrada";
				$data["correo"] = $this->session->userdata( "correo" );
				$this->load->view( "Modifica_Marc_view", $data );
			} else {
					# code...
				$data["mensaje"] = "Marca a modificar encontrado";
			}



		}
		else {
			redirect( base_url() );
		}

	}

	public function modificaCat($id_cat)
	{
		if ( $this->verificasesion() ) {
			$qr=$this->Inicio_model->modificar_cat($id_cat);
			$data = array( );
				//"correo" => $this->session->userdata( "correo" )
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "categoria encontrado";
				$data["correo"] = $this->session->userdata( "correo" );
				$this->load->view( "Modifica_Cat_view", $data );
			} else {
					# code...
				$data["mensaje"] = "Categoria a modificar encontrado";
			}



		}
		else {
			redirect( base_url() );
		}

	}

	public function modificaServ($id_producto)
	{
		if ( $this->verificasesion() ) {
			$qr=$this->Inicio_model->modificar_serv($id_producto);
			$data = array( );
				//"correo" => $this->session->userdata( "correo" )
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "producto encontrado";
				$data["correo"] = $this->session->userdata( "correo" );
				$this->load->view( "Modifica_serv_view", $data );
			} else {
					# code...
				$data["mensaje"] = "producto a modificar encontrado";
			}



		}
		else {
			redirect( base_url() );
		}

	}


	public function modificaSoli($id_soli)
	{
		if ( $this->verificasesion() ) {
			$qr=$this->Inicio_model->modificar_soli($id_soli);
			$data = array( );
				//"correo" => $this->session->userdata( "correo" )
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "solicitud encontrado";
				$data["correo"] = $this->session->userdata( "correo" );
				$this->load->view( "Modifica_soli_view", $data );
			} else {
					# code...
				$data["mensaje"] = "solicitud a modificar encontrado";
			}



		}
		else {
			redirect( base_url() );
		}

	}

	public function modificarCategoria()
	{

		$id_cat  = $this->input->get("id_cat");
		
		$nombre_cat = $this->input->get("nombre_cat");
		
		$descr_cat = $this->input->get("descr_cat");
		
		$estado_cat = $this->input->get("estado_cat");

		$data_cat = array(
			"id_cat"            => $id_cat,
			
		//);

		//$data_adm = array(
			"nombre_cat"            => $nombre_cat,
			
			"descr_cat"             => $descr_cat,
			
			"estado_cat"         => $estado_cat,
			//"correo"            => $correo
		);
		$this->Inicio_model->modificar_categoria($data_cat);
		redirect(base_url().'Inicio/categorias');

	}



	public function modificarMarca()
	{

		$id_marc  = $this->input->get("id_marc");
		
		$nombre_marc = $this->input->get("nombre_marc");
		
		$descr_marc = $this->input->get("descr_marc");
		
		$estado_marc = $this->input->get("estado_marc");

		$data_marc = array(
			"id_marc"            => $id_marc,
			
		//);

		//$data_adm = array(
			"nombre_marc"            => $nombre_marc,
			
			"descr_marc"             => $descr_marc,
			
			"estado_marc"         => $estado_marc,
			//"correo"            => $correo
		);
		$this->Inicio_model->modificar_marca($data_marc);
		redirect(base_url().'Inicio/marcas');

	}



	public function modificarServicio()
	{

		$id_producto  = $this->input->get("id_producto");
		
		$nombre_prod = $this->input->get("nombre_prod");

		$precio_compra = $this->input->get("precio_compra");

		$precio_venta = $this->input->get("precio_venta");
		
		$descr_prod = $this->input->get("descr_prod");

		$cantidad = $this->input->get("cantidad");

		$id_cat  = $this->input->get("id_cat");

		$id_marc  = $this->input->get("id_marc");
		
		$estado_prod = $this->input->get("estado_prod");

		$data_prod = array(
			"id_producto"            => $id_producto,

			"nombre_prod"            => $nombre_prod,

			"precio_compra"            => $precio_compra,

			"precio_venta"            => $precio_venta,
			
			"descr_prod"             => $descr_prod,

			"cantidad"             => $cantidad,

			"id_cat"            => $id_cat,
			
			"estado_prod"         => $estado_prod,

		);
		$this->Inicio_model->modificar_servicio($data_prod);
		redirect(base_url().'Inicio/catalogoServicio');

	}

	public function modificarSolicitud()
	{

		$id_soli  = $this->input->get("id_soli");
		$Nom_Client  = $this->input->get("Nom_Client");
		$Ap_Client  = $this->input->get("Ap_Client");
		$Mail_Client  = $this->input->get("Mail_Client");
		$Tel_Client  = $this->input->get("Tel_Client");
		$fecha_soli  = $this->input->get("fecha_soli");
		$monto_soli  = $this->input->get("monto_soli");
		$hrs_extras  = $this->input->get("hrs_extras");
		$correo  = $this->input->get("correo");
		$estado_soli = $this->input->get("estado_soli");

		$data_soli = array(
			"id_soli"            => $id_soli,
			"Nom_Client"            => $Nom_Client,
			"Ap_Client"            => $Ap_Client,
			"Mail_Client"            => $Mail_Client,
			"Tel_Client"            => $Tel_Client,
			"fecha_soli"            => $fecha_soli,
			"monto_soli"            => $monto_soli,
			"hrs_extras"            => $hrs_extras,
			"correo"            => $correo,
			"estado_soli"         => $estado_soli,

		);
		$this->Inicio_model->modificar_solicitud($data_soli);
		redirect(base_url().'Inicio/admin');

	}
//Agregaciones Altas o Registros---------------------------------------------------------------------------------
	public function registroAdm()
	{

		$correo  = $this->input->post("correo");
		$password = $this->input->post("password");
		$nombre = $this->input->post("nombre");
		$apellidos = $this->input->post("apellidos");
		$telefono = $this->input->post("telefono");

		$data_usu = array(
			"correo"            => $correo,
			"password"           => $password,
			"nombre"            => $nombre,
			"apellidos"    => $apellidos,
			"telefono"           => $telefono,
			"rol"             => 1,
			"estado"             => 1
		);

		$obj = $this->Inicio_model->registro($data_usu);
		$this->output->set_content_type( "application/json" );
		echo json_encode($obj);

	}

	public function nuevaCat()
	{

		$nombre_cat  = $this->input->post("nombre_cat");
		$descr_cat = $this->input->post("descr_cat");
		$data_cat = array(
			"nombre_cat"            => $nombre_cat,
			"descr_cat"    			=> $descr_cat,
			"estado_cat"            => 1,
		);

		$obj = $this->Inicio_model->insert_cat($data_cat);
		$this->output->set_content_type( "application/json" );
		echo json_encode($obj);

	}

	public function nuevaMarc()
	{

		$nombre_marc  = $this->input->post("nombre_marc");
		$descr_marc = $this->input->post("descr_marc");
		$data_marc = array(
			"nombre_marc"            => $nombre_marc,
			"descr_marc"    			=> $descr_marc,
			"estado_marc"            => 1,
		);

		$obj = $this->Inicio_model->insert_marc($data_marc);
		$this->output->set_content_type( "application/json" );
		echo json_encode($obj);

	}

	public function nuevaServ()
	{

		$nombre_prod  = $this->input->post("nombre_prod");
		$descr_prod = $this->input->post("descr_prod");
		$cantidad = $this->input->post("cantidad");
		$precio_compra = $this->input->post("precio_compra");
		$precio_venta = $this->input->post("precio_venta");
		$id_cat = $this->input->post("id_cat");
		$id_marc = $this->input->post("id_marc");
		$data_prod = array(
			"nombre_prod"           => $nombre_prod,
			"descr_prod"    		=> $descr_prod,
			"cantidad"    			=> $cantidad,
			"precio_compra"    		=> $precio_compra,
			"precio_venta"    		=> $precio_venta,
			"id_cat"    			=> $id_cat,
			"id_marc"    			=> $id_marc,
			"estado_prod"           => 1,
		);

		$obj = $this->Inicio_model->insert_serv($data_prod);
		$this->output->set_content_type( "application/json" );
		echo json_encode($obj);

	}
/*
	public function nuevaSolicitud()
	{

		date_default_timezone_set('America/Mexico_City'); //Generas la zona horaria
		$fecha = getdate(); //Obtienes la fecha de esa zona horaria
		if($fecha['mon'] < 10){
			$mes = '0'.$fecha['mon'];
		}
		else{
			$mes = $fecha['mon'];
		}

		$fecha_hoy = $fecha['year'].'-'.$mes.'-'.$fecha['mday'];

		$Nom_Client  = $this->input->post("Nom_Client");
		$Ap_Client = $this->input->post("Ap_Client");
		$Mail_Client = $this->input->post("Mail_Client");
		$Tel_Client = $this->input->post("Tel_Client");
		$hrs_extras = $this->input->post("hrs_extras");
		$cant_inv = $this->input->post("cant_inv");
		$data_soli = array(
			"Nom_Client"           	=> $Nom_Client,
			"Ap_Client"    			=> $Ap_Client,
			"Mail_Client"    		=> $Mail_Client,
			"Tel_Client"    		=> $Tel_Client,
			"fecha_soli"    		=> $fecha_hoy,
			"hrs_extras"			=> $hrs_extras,
			"cant_inv" 				=> $cant_inv
		);

		$obj = $this->Inicio_model->insert_soli($data_soli);
		$this->output->set_content_type( "application/json" );
		echo json_encode($obj);

	}


	public function nuevaDetSolicitud()
	{
		$Mail_Client = $this->input->post("Mail_Client");
		$id_producto = json_decode($this->input->post("id_producto"));
		$cant_serv = json_decode($this->input->post("cant_serv"));
		$cont=0;
		foreach($id_producto as $id) {

			$data_detsoli = array(
				"id_det_soli"       => 0,
				"id_soli"           => 0,
				"Mail_Client_Det"   => $Mail_Client,
				"id_producto"    		=> $id,
				"cant_serv" 		=> $cant_serv[$cont]
			);

			$obj = $this->Inicio_model->insert_detsoli($data_detsoli);
			$cont++;
		}
		
		$this->output->set_content_type( "application/json" );
		echo json_encode($obj);

	}

*/
//conseguir datos------------------------------------------------------------------------------------------------------

	public function obtenerServicio()
	{
		$id_producto = $this->input->post('id_producto');
		$obj["prod"]=$this->Inicio_model->get_serv_esp($id_producto);
		$obj["resultado"] = $obj["prod"] != NULL;
		$obj["mensaje"] = $obj["prod"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de Productos";

		echo json_encode($obj);

	}
/*
	public function getNewRequest()
	{
		$obj["Request"]=$this->Inicio_model->get_new_request();
		$obj["resultado"] = $obj["Request"] != NULL;
		$obj["mensaje"] = $obj["Request"] !=NULL ?
		"Consulta exitosa" : "No hay Solicitudes";

		echo json_encode($obj);

	}

	public function getCancelRequest()
	{
		$obj["Request"]=$this->Inicio_model->get_cancel_request();
		$obj["resultado"] = $obj["Request"] != NULL;
		$obj["mensaje"] = $obj["Request"] !=NULL ?
		"Consulta exitosa" : "No hay Solicitudes";

		echo json_encode($obj);

	}

	public function getProcessRequest()
	{
		$obj["Request"]=$this->Inicio_model->get_process_request();
		$obj["resultado"] = $obj["Request"] != NULL;
		$obj["mensaje"] = $obj["Request"] !=NULL ?
		"Consulta exitosa" : "No hay Solicitudes";

		echo json_encode($obj);

	}

	public function getCompleteRequest()
	{
		$obj["Request"]=$this->Inicio_model->get_complete_request();
		$obj["resultado"] = $obj["Request"] != NULL;
		$obj["mensaje"] = $obj["Request"] !=NULL ?
		"Consulta exitosa" : "No hay Solicitudes";

		echo json_encode($obj);

	}

*/
	public function getMarc()
	{
		$obj["Marc"]=$this->Inicio_model->get_marc();
		$obj["resultado"] = $obj["Marc"] != NULL;
		$obj["mensaje"] = $obj["Marc"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de servicios";

		echo json_encode($obj);

	}

	public function getMarcInactive()
	{
		$obj["Marc"]=$this->Inicio_model->get_marc_inactive();
		$obj["resultado"] = $obj["Marc"] != NULL;
		$obj["mensaje"] = $obj["Marc"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de servicios";

		echo json_encode($obj);

	}

	public function getTypeServ()
	{
		$obj["TypeServ"]=$this->Inicio_model->get_type_serv();
		$obj["resultado"] = $obj["TypeServ"] != NULL;
		$obj["mensaje"] = $obj["TypeServ"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de servicios";

		echo json_encode($obj);

	}

	public function getTypeServInactive()
	{
		$obj["TypeServ"]=$this->Inicio_model->get_type_serv_inactive();
		$obj["resultado"] = $obj["TypeServ"] != NULL;
		$obj["mensaje"] = $obj["TypeServ"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de servicios";

		echo json_encode($obj);

	}

	public function getServ()
	{
		$obj["Serv"]=$this->Inicio_model->get_serv();
		$obj["resultado"] = $obj["Serv"] != NULL;
		$obj["mensaje"] = $obj["Serv"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de servicios";

		echo json_encode($obj);

	}

	public function getServInactive()
	{
		$obj["Serv"]=$this->Inicio_model->get_serv_inactive();
		$obj["resultado"] = $obj["Serv"] != NULL;
		$obj["mensaje"] = $obj["Serv"] !=NULL ?
		"Consulta exitosa" : "No hay tipo de servicios";

		echo json_encode($obj);

	}

	public function getAdmin($correo)
	{
		$obj["Admins"]=$this->Inicio_model->get_admin();
		$obj["resultado"] = $obj["Admins"] != NULL;
		$obj["mensaje"] = $obj["Admins"] !=NULL ?
		"Consulta exitosa" : "No hay Admins";

		echo json_encode($obj);

	}

	public function getUser()
	{
		$obj["Users"]=$this->Inicio_model->get_user();
		$obj["resultado"] = $obj["Users"] != NULL;
		$obj["mensaje"] = $obj["Users"] !=NULL ?
		"Consulta exitosa" : "No hay Usuarios";

		echo json_encode($obj);

	}

	public function getUserDeleted()
	{
		$obj["Users"]=$this->Inicio_model->get_user_deleted();
		$obj["resultado"] = $obj["Users"] != NULL;
		$obj["mensaje"] = $obj["Users"] !=NULL ?
		"Consulta exitosa" : "No hay Usuarios bloqueados";

		echo json_encode($obj);

	}
//Desactivaciones-----------------------------------------------------------------------------------------------------------
	public function borraServ()
	{
		$id_producto=$this->input->post("id_producto");
		echo json_encode($this->Inicio_model->borrar_servicio($id_producto));
		//redirect(base_url().'Inicio/modificacion');

	}

	public function borraCategoria()
	{
		$id_cat=$this->input->post("id_cat");
		echo json_encode($this->Inicio_model->borrar_categoria($id_cat));
		//redirect(base_url().'Inicio/modificacion');

	}

	public function borraMarca()
	{
		$id_marc=$this->input->post("id_marc");
		echo json_encode($this->Inicio_model->borrar_marca($id_marc));
		//redirect(base_url().'Inicio/modificacion');

	}


	public function borraUsuario()
	{
		$correo=$this->input->post("correo");
		echo json_encode($this->Inicio_model->borrar_usuario($correo));
		//redirect(base_url().'Inicio/modificacion');

	}
//Activaciones--------------------------------------------------------------------------------------------------------------
	public function activaUsuario()
	{
		$correo=$this->input->post("correo");
		echo json_encode($this->Inicio_model->activar_usuario($correo));
		//redirect(base_url().'Inicio/modificacion');

	}

	public function activaCategoria()
	{
		$id_cat=$this->input->post("id_cat");
		echo json_encode($this->Inicio_model->activar_categoria($id_cat));
		//redirect(base_url().'Inicio/modificacion');

	}

	public function activaServ()
	{
		$id_producto=$this->input->post("id_producto");
		echo json_encode($this->Inicio_model->activar_servicio($id_producto));
		//redirect(base_url().'Inicio/modificacion');

	}

//mostrar solicitud completa-----------------------------------------------------------------------------------------------------------
/*
	public function mostrarSoli($id_soli)
	{
		if ( $this->verificasesion() ) {
			$qr=$this->Inicio_model->mostrar_soli($id_soli);
			$qr2=$this->Inicio_model->mostrar_soli_desc($id_soli);
			$data = array( );
				//"correo" => $this->session->userdata( "correo" )
			if ($qr!=NULL) {

				$data["resultado"] = $qr;
				$data["mensaje"] = "solicitud encontrado";
				$data["resultado2"] = $qr2;
				$data["mensaje"] = "solicitud encontrado";
				$data["correo"] = $this->session->userdata( "correo" );

				$this->load->view( "Mostrar_soli_view", $data);
			} else {
					# code...
				$data["resultado"] = $qr;
				$data["mensaje"] = "solicitud no encontrado";
				$data["resultado2"] = $qr2;
				$data["mensaje"] = "solicitud no encontrado";
				$data["correo"] = $this->session->userdata( "correo" );

				$this->load->view( "Mostrar_soli_view", $data);
				print "<script type=\"text/javascript\">alert('solicitud a mostrar no completa, regrese a pagina anterior');</script>";
			}



		}
		else {
			redirect( base_url() );
		}

	}

	public function tuSolicitud()
	{
		
		$qr=$this->Inicio_model->tu_solicitud();
		$qr2=$this->Inicio_model->tu_soli_desc();
		$data = array( );
		if ($qr!=NULL) {

			$data["resultado"] = $qr;
			$data["mensaje"] = "solicitud encontrado";
			$data["resultado2"] = $qr2;
			$data["mensaje"] = "solicitud encontrado";
			$this->load->view( "Mostrar_tu_soli_view", $data);
		} else {
					# code...
			$data["resultado"] = $qr;
			$data["mensaje"] = "solicitud no encontrado";
			$data["resultado2"] = $qr2;
			$data["mensaje"] = "solicitud no encontrado";

			$this->load->view( "Mostrar_tu_soli_view", $data);
			print "<script type=\"text/javascript\">alert('solicitud a mostrar no completa, regrese a pagina anterior');</script>";
		}

	}

	/*public function verPDF(){
		$this->load->library('pdf');
		$html = $this->load->view('Mostrar_soli_view', [], true);
		$this->pdf->createPDF($html, 'solicitud_salon_sfera', false);
	}*/

	/*public function verPDF(){
		redirect($this->uri->uri_string()); 

	}*/



	//--------------------------------------------------------------------------------------------------------------------------------------

}
