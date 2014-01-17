<?php
include_once 'application/models/Recurso.php';
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class cadministrarcontenido extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('administrarcontenido');
        
    }

    const CATEGORIA_TODAS = 0;

    /**
     * Función que consulta todo el contenido en la base de datos:         * 
     */
    public static function obtenerRecursos() {        
        $ci=  get_instance();
        $ci->load->database();
        $query = $ci->db->query("SELECT * FROM ts_db_usuarios");
        $ArregloRecursos= "";
        $i=0;
        foreach ($query->result() as $row) {            
            $recursoregistraro=new Recurso();
            $recursoregistraro->Nombre=$row->nombre;
            $recursoregistraro->Correo=$row->correo;
            $recursoregistraro->Password=$row->password;
            $ArregloRecursos[$i]=$recursoregistraro;
            $i++;
        }
        //print_r($ArregloRecursos);//Solo para pruebas      
        return $ArregloRecursos;
    }    
    
    /**
     * Función que agrega contenido en la base de datos:         * 
     * @param Integer $eIdUsuario Es el id del usuario que insertara un contenido
     * @param String $eNombre Es el nombre del contenido que se insertara
     * @param Integer $eCategoria Es la categoria a la que pertenece el contenido que insertara
     * @param Integer $eTipo Es el tipo del contenido que se insertara
     * @param String $eDescripcion Es la descripcion del contenido que se insertara
     */
    public static function agregarRecurso($eIdUsuario,$eNombre,$eCategoria,$eTipo,$eDescripcion) {
        $ci=  get_instance();
        $ci->load->database();
        $eTamano="1";//FALTA verificar como determinar el tamaño de un archivo
        $eDireccion="a";//FALTA verificar como determinar la direccion del archivo
        $strquery="SELECT agregarRecurso("
                  ."'".$eNombre."'".
                  ",".$eTamano."".
                  ",".$eCategoria."".
                  ",".$eTipo."".
                  ",'".$eDireccion."'".
                  ",".$eIdUsuario."".
                  ",'".$eDescripcion."') as Mensaje;";
        $query = $ci->db->query($strquery);                
        $d=$query->result();
        //print_r ($query->result());       
        //echo ($d[0]->Mensaje);
        return ($d[0]->Mensaje);
       //return $ArregloRecursos;
    }
    
    /**
     * Función que elimina un contenido en la base de datos:         * 
     * @param Integer $eIdRecurso Es el identificador del recurso que se desea eliminar
     */
    public static function eliminarRecurso($eIdRecurso) {
        $ci=  get_instance();
        $ci->load->database();
        $eTamano="1";//FALTA verificar como determinar el tamaño de un archivo
        $eDireccion="a";//FALTA verificar como determinar la direccion del archivo
        $strquery="SELECT eliminarRecurso(".                  
                  $eIdRecurso.") as Mensaje;";
        $query = $ci->db->query($strquery);                
        $d=$query->result();
        //print_r ($query->result());       
        //echo ($d[0]->Mensaje);       
        return ($d[0]->Mensaje);
       //return $ArregloRecursos;
    }
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */