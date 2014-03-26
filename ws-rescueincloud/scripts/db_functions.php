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
	
	Add a friend
	=== = ======
	100		Friendship request sent.
	101		They are already friends.
	102		$user is not registered.
	
	Request a new game
	======= = === ====
	200		New game added, waiting for player to accept the request...
	201		There is already a game in progress.
	202		They are not friends.
	203		$user is not registered.
	204		They have another game in progress.
	205		They have another request. They should accept or refuse that request.	
	
	Response a request game
	======== = ======= ====
	300		Accepted game.
	301		Refused game.
	302		The game is already in progress.
	303		The game does not exists.
	
	Make a move
	==== = ====
	400		New move added.
	401		The game is not ready.
	402		The game does not exists.
	403		Invalid player, the player do not belong to the game.
	404		Error 404
	
	Login
	=====
	500		Login succesfull.
	501		Name or password are wrong.
	
	Login
	=====
	600		Updated complete.
	601		Fail at updating id.
	
	Response a friendship request
	======== = ========== =======
	700		Friendship completed.
	701		Friendship rejected.
	
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
	
	
	
	public function lista_farmacos($user_name){
		// search if the user is already added in gcm_users
		echo $user_name;
		$sql = $this->con->prepare('
		SELECT *
		FROM relnm_farmacos_publicos_usuarios fu
		INNER JOIN usuarios u ON fu.email_usuario=u.email_usuario
		WHERE u.email_usuario=?');
		$sql->execute(array($user_name));
		$query = $sql->fetchAll();

		return $query;
	}
	
	public function login($email){
	
                
        	$result=array("code"=>"303", "message"=>"holllaaaaa");
                
		

			return $result;
		
		
	}
	
		
}
 
?>


