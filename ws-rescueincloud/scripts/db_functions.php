<?php
 
 
 /*
	Codes and messages
	===== === ========
	By default an unknow problem wil be -1.
	
	-1	Unknown problem.
 
	User Registration
	==== ============
	000	User registration successfully.
	001	$user is already registered, please use another username.
	
	
	
*/
 
class DB_Functions {

    private $db;
    private $con;
 
    //put your code here
    // constructor
    function __construct() {
        include_once './db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->con = $this->db->connect();
    }
 
    // destructor
    function __destruct() {
    }
	
	
	
	public function lista_farmacos($email){
		
		$sql = $this->con->prepare('
		SELECT f.*
		FROM relnm_farmacos_publicos_usuarios fu
		INNER JOIN usuarios u ON fu.email_usuario=u.email_usuario
        INNER JOIN farmacos_publicos f ON f.id_farmaco=fu.id_farmaco
		WHERE u.email_usuario=?');
		
		$sql->execute(array($email));
		$filas = $sql->fetchAll();
		$result=array("code"=>"101", "message"=>$filas);
		return $result;
	
	}
	
	public function login($email){
                
		$result=array("code"=>"303", "message"=>"hola mundo");
		return $result;
		
		
	}
	
	public function close(){
		$this->con = null;
	}
	
		
}
 
?>


