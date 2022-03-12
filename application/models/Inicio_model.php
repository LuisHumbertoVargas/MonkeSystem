<?php

class Inicio_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
        // Permitimos el acceso al API desde cualquier URL (origen)
		header('Access-Control-Allow-Origin: *');

		
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function login($data){
		$this->db->where("correo", $data["correo"]);
		$this->db->where("password",$data["password"]);
		$this->db->where("estado", "1");
		$rs = $this->db->get("usuario");
		$obj["resultado"] = $rs->num_rows() > 0;
		$obj["mensaje"] = $obj["resultado"] ? "Usuario registrado" : "Usuario inexistente";
		return $rs->num_rows() == 1 ? $rs->row() : NULL;
	}
//Conseguir datos----------------------------------------------------------------------------------
/*	
cotizaciones de CotizApp 
public function get_new_request()
	{
		$this->db->select("*");
		$this->db->from("solicitud");
		$this->db->where("estado_soli", "1");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}

	public function get_cancel_request()
	{
		$this->db->select("*");
		$this->db->from("solicitud");
		$this->db->where("estado_soli", "0");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}

	public function get_process_request()
	{
		$this->db->select("*");
		$this->db->from("solicitud");
		$this->db->where("estado_soli", "2");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}

	public function get_complete_request()
	{
		$this->db->select("*");
		$this->db->from("solicitud");
		$this->db->where("estado_soli", "3");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}
*/
	//Consultas de marca
	public function get_marc()
	{
		$this->db->select("*");
		$this->db->from("marca");
		$this->db->where("estado_marc", "1");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}

	public function get_marc_inactive()
	{
		$this->db->select("*");
		$this->db->from("marca");
		$this->db->where("estado_marc", "0");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}
//consultas de categoria	
	public function get_type_serv()
	{
		$this->db->select("*");
		$this->db->from("categoria");
		$this->db->where("estado_cat", "1");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}

	public function get_type_serv_inactive()
	{
		$this->db->select("*");
		$this->db->from("categoria");
		$this->db->where("estado_cat", "0");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}
//consultas de producto
	public function get_serv()
	{
		$this->db->select("*");
		$this->db->from("producto");
		$this->db->join("categoria", "categoria.id_cat = producto.id_cat");
		$this->db->join("marca", "marca.id_marc = producto.id_marc");
		$this->db->where("estado_prod", "1");
		$this->db->order_by("categoria.id_cat");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}

	public function get_serv_esp($id_producto)
	{
		$this->db->select("*");
		$this->db->from("producto");
		$this->db->join("categoria", "categoria.id_cat = producto.id_cat");
		$this->db->where("id_producto", $id_producto);
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->row();
	}

	public function get_serv_inactive()
	{
		$this->db->select("*");
		$this->db->from("producto");
		$this->db->where("estado_prod", "0");
		$this->db->order_by("id_cat");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}
//consultas de usuario
	public function get_user()
	{
		$this->db->select("*");
		$this->db->from("usuario");
		$this->db->where("estado", "1");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}


	public function get_user_deleted()
	{
		$this->db->select("*");
		$this->db->from("usuario");
		$this->db->where("estado", "0");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}
/*consultas de ventas de CotizApp
	public function get_ventasMes()
	{
		$this->db->select("count(Date_Ord) as Ord, Date_Ord");
		$this->db->from("Orders");
		$this->db->like("Date_Ord", "2021-02");
		$this->db->group_by("Date_Ord");
		$rs = $this->db->get();
		return $rs->num_rows() == 0 ? NULL : $rs->result();
	}
*/
	public function get_admin($correo)
	{
		$this->db->where("correo",$correo);
		$rs = $this->db->get("usuario");

		return $rs->num_rows() == 0 ? NULL : ($rs->row())->estado;
		
	}
//Insert de Datos---------------------------------------
	//insert usuario
	public function registro($data_usu)
	{
		
		$this->db->where("correo", $data_usu['correo']);
		$rs = $this->db->get("usuario");
		$obj["resultado"] = $rs->num_rows() > 0;
		if($obj['resultado']){
			$obj['mensaje'] = "Correo ya existente";
			$obj['estado'] = FALSE; 
		}else{
			$this->db->insert('usuario', $data_usu);
			$obj['estado'] = TRUE; 
			$obj[ "resultado" ] = $this->db->affected_rows() > 0;
			$obj[ "mensaje" ]   = $obj[ "resultado" ] ?
			"Usuario registrado" : "No se registró al usuario";

		}
		return $obj;
	}
//insert categoria
	public function insert_cat($data_cat)
	{
		
		$this->db->where("nombre_cat", $data_cat['nombre_cat']);
		$rs = $this->db->get("categoria");
		$obj["resultado"] = $rs->num_rows() > 0;
		if($obj['resultado']){
			$obj['mensaje'] = "Categoria ya existente";
			$obj['estado'] = FALSE; 
		}else{
			$this->db->insert('categoria', $data_cat);
			$obj['estado'] = TRUE; 
			$obj[ "resultado" ] = $this->db->affected_rows() > 0;
			$obj[ "mensaje" ]   = $obj[ "resultado" ] ?
			"categoria registrada, revisar en la sección correspondiente" : "No se registró al usuario";

		}
		return $obj;
	}
	//insert marca
	public function insert_marc($data_marc)
	{
		
		$this->db->where("nombre_marc", $data_marc['nombre_marc']);
		$rs = $this->db->get("marca");
		$obj["resultado"] = $rs->num_rows() > 0;
		if($obj['resultado']){
			$obj['mensaje'] = "marca ya existente";
			$obj['estado'] = FALSE; 
		}else{
			$this->db->insert('marca', $data_marc);
			$obj['estado'] = TRUE; 
			$obj[ "resultado" ] = $this->db->affected_rows() > 0;
			$obj[ "mensaje" ]   = $obj[ "resultado" ] ?
			"marca registrada, revisar en la sección correspondiente" : "No se registró al usuario";

		}
		return $obj;
	}
//insert producto
	public function insert_serv($data_prod)
	{
		
		$this->db->where("nombre_prod", $data_prod['nombre_prod']);
		$rs = $this->db->get("producto");
		$obj["resultado"] = $rs->num_rows() > 0;
		if($obj['resultado']){
			$obj['mensaje'] = "producto ya existente";
			$obj['estado'] = FALSE; 
		}else{
			$this->db->insert('producto', $data_prod);
			$obj['estado'] = TRUE; 
			$obj[ "resultado" ] = $this->db->affected_rows() > 0;
			$obj[ "mensaje" ]   = $obj[ "resultado" ] ?
			"producto registrado, revisar en la sección correspondiente" : "No se registró producto";

		}
		return $obj;
	}
/*Registro de cotizacion del cliente de CotizApp
	public function insert_soli($data_soli)
	{
		
		
		$this->db->insert('solicitud', $data_soli);
		$obj['estado'] = TRUE; 
		$obj[ "resultado" ] = $this->db->affected_rows() > 0;
		$obj[ "mensaje" ]   = $obj[ "resultado" ] ?
		"cotizacion en proceso, espere a que se contacten cn usted" : "No se registró cotizacion";

		return $obj;
	}

	public function insert_detsoli($data_detsoli)
	{
		
		
		$this->db->insert('detalle_solicitud', $data_detsoli);
		$obj['estado'] = TRUE; 
		$obj[ "resultado" ] = $this->db->affected_rows() > 0;
		$obj[ "mensaje" ]   = $obj[ "resultado" ] ?
		"cotizacion en proceso, espere a que se contacten con usted" : "No se registró cotizacion completa";

		return $obj;
	}
	*/
//Delete de datos -----------------------------------------------------------------------------
	public function borrar_servicio($id_producto)
	{

		$this->db->where("id_producto",$id_producto);
		$rs = $this->db->get("producto");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("id_producto",$id_producto);
			$this->db->update("producto", $data = array('estado_prod' => "0" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"producto desactivada" : "No se pudo desactivar la producto";

		}
		else
		{

			$obj["mensaje"] = "No existe el producto";

		}

		return $obj;
	}

	public function borrar_categoria($id_cat)
	{

		$this->db->where("id_cat",$id_cat);
		$rs = $this->db->get("categoria");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("id_cat",$id_cat);
			$this->db->update("categoria", $data = array('estado_cat' => "0" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"Categoria desactivada" : "No se pudo desactivar la categoria";

		}
		else
		{

			$obj["mensaje"] = "No existe el Categoria";

		}

		return $obj;
	}

	public function borrar_marca($id_marc)
	{

		$this->db->where("id_marc",$id_marc);
		$rs = $this->db->get("marca");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("id_marc",$id_marc);
			$this->db->update("marca", $data = array('estado_marc' => "0" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"marca desactivada" : "No se pudo desactivar la marca";

		}
		else
		{

			$obj["mensaje"] = "No existe el marca";

		}

		return $obj;
	}

	public function borrar_usuario($correo)
	{

		$this->db->where("correo",$correo);
		$rs = $this->db->get("usuario");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("correo",$correo);
			$this->db->update("usuario", $data = array('estado' => "0" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"Usuario desactivado" : "No se pudo desactivar al usuario";

		}
		else
		{

			$obj["mensaje"] = "No existe el Cliente";

		}

		return $obj;
	}
//Activate datos-----------------------------------------------------------------------------------
	public function activar_usuario($correo)
	{

		$this->db->where("correo",$correo);
		$rs = $this->db->get("usuario");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("correo",$correo);
			$this->db->update("usuario", $data = array('estado' => "1" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"Usuario activado" : "No se pudo activar al usuario";

		}
		else
		{

			$obj["mensaje"] = "No existe el Cliente";

		}

		return $obj;
	}

	public function activar_categoria($id_cat)
	{

		$this->db->where("id_cat",$id_cat);
		$rs = $this->db->get("categoria");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("id_cat",$id_cat);
			$this->db->update("categoria", $data = array('estado_cat' => "1" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"categoria activada nuevamente" : "No se pudo activar la categoria";

		}
		else
		{

			$obj["mensaje"] = "No existe la categoria";

		}

		return $obj;
	}

	public function activar_servicio($id_producto)
	{

		$this->db->where("id_producto",$id_producto);
		$rs = $this->db->get("producto");
		$obj["resultado"] = $rs->num_rows()==1;
		

		if ($obj["resultado"]) 
		{
			$this->db->where("id_producto",$id_producto);
			$this->db->update("producto", $data = array('estado_prod' => "1" ));
			$obj["resultado"] = $this->db->affected_rows()>0;
			$obj["mensaje"] = $obj["resultado"] ? 
			"producto activado nuevamente" : "No se pudo activar producto";

		}
		else
		{

			$obj["mensaje"] = "No existe producto";

		}

		return $obj;
	}
//Modificar datos---------------------------------------------------------------------------------
	public function modificar_soli($id_soli)
	{ 
		$this->db->from('solicitud');
		$this->db->where("id_soli",$id_soli);
		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}


	public function modificar_serv($id_producto)
	{ 
		$this->db->from('producto');
		$this->db->where("id_producto",$id_producto);
		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}

	public function modificar_cat($id_cat)
	{ 
		$this->db->from('categoria');
		$this->db->where("id_cat",$id_cat);
		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}

	public function modificar_marc($id_marc)
	{ 
		$this->db->from('marca');
		$this->db->where("id_marc",$id_marc);
		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}
//consuslta usario admin
	//$this->db->from('User');
	//$this->db->join('admin', 'admin.correo=User.correo');
	//
	//
	public function modificar_admin($correo )
	{ 
		$this->db->from('usuario');
		$this->db->where("correo",$correo);
		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}

	public function modificar_usuario($data_usu)
	{

		$this->db->where("correo",$data_usu['correo']);
		$rs = $this->db->get("usuario");
		$obj["resultado"] = $rs->num_rows()==1;
		if ($obj["resultado"]) 
		{

			$this->db->where("correo",$data_usu['correo']);
			//$this->db->update("admin", $data_adm);
			//$this->db->where("correo",$data_usu['correo']);
			$this->db->update("usuario", $data_usu);
			$obj["resultado"] = $this->db->affected_rows()>0;

			$obj["mensaje"] = $obj["resultado"] ? 
			"Admin modificado" : "No se pudo modificar al Admin";

		}
		else
		{

			$obj["mensaje"] = "No existe el Cliente";

		}

		return $obj;
	}

	public function modificar_categoria($data_cat)
	{

		$this->db->where("id_cat",$data_cat['id_cat']);
		$rs = $this->db->get("categoria");
		$obj["resultado"] = $rs->num_rows()==1;
		if ($obj["resultado"]) 
		{

			$this->db->where("id_cat",$data_cat['id_cat']);
			//$this->db->update("admin", $data_adm);
			//$this->db->where("id_cat",$data_cat['id_cat']);
			$this->db->update("categoria", $data_cat);
			$obj["resultado"] = $this->db->affected_rows()>0;

			$obj["mensaje"] = $obj["resultado"] ? 
			"Admin modificado" : "No se pudo modificar al Admin";

		}
		else
		{

			$obj["mensaje"] = "No existe el Cliente";

		}

		return $obj;
	}

	public function modificar_marca($data_marc)
	{

		$this->db->where("id_marc",$data_marc['id_marc']);
		$rs = $this->db->get("marca");
		$obj["resultado"] = $rs->num_rows()==1;
		if ($obj["resultado"]) 
		{

			$this->db->where("id_marc",$data_marc['id_marc']);
			//$this->db->update("admin", $data_adm);
			//$this->db->where("id_marc",$data_marc['id_marc']);
			$this->db->update("marca", $data_marc);
			$obj["resultado"] = $this->db->affected_rows()>0;

			$obj["mensaje"] = $obj["resultado"] ? 
			"Admin modificado" : "No se pudo modificar al Admin";

		}
		else
		{

			$obj["mensaje"] = "No existe el Cliente";

		}

		return $obj;
	}

	public function modificar_servicio($data_prod)
	{

		$this->db->where("id_producto",$data_prod['id_producto']);
		$rs = $this->db->get("producto");
		$obj["resultado"] = $rs->num_rows()==1;
		if ($obj["resultado"]) 
		{

			$this->db->where("id_producto",$data_prod['id_producto']);
			//$this->db->update("admin", $data_adm);
			//$this->db->where("id_producto",$data_prod['id_producto']);
			$this->db->update("producto", $data_prod);
			$obj["resultado"] = $this->db->affected_rows()>0;

			$obj["mensaje"] = $obj["resultado"] ? 
			"producto modificado" : "No se pudo modificar producto";

		}
		else
		{

			$obj["mensaje"] = "No existe producto";

		}

		return $obj;
	}

	public function modificar_solicitud($data_soli)
	{

		$this->db->where("id_soli",$data_soli['id_soli']);
		$rs = $this->db->get("solicitud");
		$obj["resultado"] = $rs->num_rows()==1;
		if ($obj["resultado"]) 
		{

			$this->db->where("id_soli",$data_soli['id_soli']);
			//$this->db->update("admin", $data_adm);
			//$this->db->where("id_soli",$data_soli['id_soli']);
			$this->db->update("solicitud", $data_soli);
			$obj["resultado"] = $this->db->affected_rows()>0;

			$obj["mensaje"] = $obj["resultado"] ? 
			"solicitud modificado" : "No se pudo modificar solicitud";

		}
		else
		{
			$obj["mensaje"] = "No existe solicitud";

		}

		return $obj;
	}
//mostrar solicitud con detalles de la solicitud------------------------------------------------------------------------------------------------
	public function mostrar_soli($id_soli)
	{ 
		$this->db->select("solicitud.id_soli,
			solicitud.fecha_soli,
			solicitud.hrs_extras,
			solicitud.monto_soli,
			solicitud.Nom_Client,
			solicitud.Ap_Client,
			solicitud.Mail_Client,
			solicitud.Tel_Client,
			solicitud.renta_salon,
			solicitud.cant_inv,
			solicitud.iva,
			solicitud.total");
		$this->db->distinct();
		$this->db->from('detalle_solicitud');
		$this->db->join("solicitud", "solicitud.id_soli = detalle_solicitud.id_soli");
		$this->db->where("solicitud.id_soli",$id_soli);

		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == NULL ? $rs->result() : $rs->result();


	}


	public function mostrar_soli_desc($id_soli)
	{ 
		$this->db->from('detalle_solicitud');
		$this->db->join("servicio", "servicio.id_serv = detalle_solicitud.id_serv");
		$this->db->where("detalle_solicitud.id_soli",$id_soli);

		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado2"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}

	

	public function tu_solicitud()
	{
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(id_soli) AS `maxid` FROM `solicitud`')->row();
		if ($row) {
			$maxid = $row->maxid; 
		}
		$this->db->select(
			"solicitud.id_soli,
			solicitud.fecha_soli,
			solicitud.hrs_extras,
			solicitud.monto_soli,
			solicitud.Nom_Client,
			solicitud.Ap_Client,
			solicitud.Mail_Client,
			solicitud.Tel_Client,
			solicitud.renta_salon,
			solicitud.cant_inv,
			solicitud.iva,
			solicitud.total");
		$this->db->distinct();
		$this->db->from('detalle_solicitud');
		$this->db->join("solicitud", "solicitud.id_soli = detalle_solicitud.id_soli");
		$this->db->where("solicitud.id_soli", $maxid);

		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get();
		$obj["resultado"] = $rs->num_rows()==1;

		return $rs->num_rows() == NULL ? $rs->result() : $rs->result();


	}

	public function tu_soli_desc()
	{ 
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(id_soli) AS `maxid` FROM `solicitud`')->row();
		if ($row) {
			$maxid = $row->maxid; 
		}

		$this->db->select_max("id_soli");
		$this->db->from("solitud");
		$where_clause = $this->db->get_compiled_select();

		$this->db->from('detalle_solicitud');
		$this->db->join("servicio", "servicio.id_serv = detalle_solicitud.id_serv");
		$this->db->where("detalle_solicitud.id_soli", $maxid);

		//$this->db->join('admin', 'admin.correo=User.correo');
		$rs = $this->db->get( );
		$obj["resultado2"] = $rs->num_rows()==1;

		return $rs->num_rows() == 0 ? NULL : $rs->result();


	}

//------------------------------------------------------------------------------------------------
}
?>

