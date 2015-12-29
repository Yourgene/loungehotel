<?php
class PdoSio{  
  	private static $serveur='mysql:';
  	private static $bdd='';   		
  	private static $user='';    		
  	private static $mdp='';	
    private static $myPdo=null;
    private static $myPdoSio=null;
    
    private function __construct(){
        $config['db'] = array( 
            'host' => 'localhost',
            'username' => 'root',
            'password' => '',
            'dbname' => 'test'
        );
        try {
            PdoSio::$myPdo = new PDO('mysql:host='. $config['db']['host'] .';dbname='. $config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    		PdoSio::$myPdo->query("SET CHARACTER SET utf8");
        } catch(PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
	}
        
    public function _destruct(){
        PdoSio::$myPdo = null;
    }
    
    public  static function getPdoSio(){
        if(PdoSio::$myPdoSio==null){
            PdoSio::$myPdoSio= new PdoSio();
        }
        return PdoSio::$myPdoSio;
    }
    /* TO USE ACTION REQUEST
    * Example:  
    * $pdo = PdoSio::getPdoSio();
    * $pdo->requestAction("DELETE FROM photo WERE id_user = $idInput");
    *
    */
    public function actionRequest($request){
        $res=PdoSio::$myPdo->exec($request);
        return $res>0;
    }

    /* TO USE INSERT REQUEST
    * Example:  
    * $value[0] = 'valTest';
    * $pdo = PdoSio::getPdoSio();
    * $pdo->insertRequest('toto', $value);
    *
    */
    public function insertRequestA($table, $values){
        $request = 'INSERT INTO ' . $table . ' VALUES (';
        for ($i = 0 ; $i < count($values);  $i++) {
            $request .= PdoSio::$myPdo->quote($values[$i]) ;
            if($i < count($values) - 1) {
                $request .= ',';
            }
        }
        $request .= ');';
        return (PdoSio::$myPdoSio->actionRequest($request));
    }


    //Fonction plus elaboree, encore des tests a faire dessus avant implementation
    public function insertRequest($table,$colonnes, $values){

        $request = 'INSERT INTO ' . $table . ' (';
        for($i=0 ; $i < count($colonnes) ; $i++){
            $request .= $colonnes[$i] ;
            if($i < count($colonnes) - 1) {
                $request .= ',';
            }
        }

        $request .=') VALUES (';
        for ($i = 0 ; $i < count($values);  $i++) {
            $request .= PdoSio::$myPdo->quote($values[$i]) ;
            if($i < count($values) - 1) {
                $request .= ',';
            }
        }
        $request .= ');';
print_r($request);
        return (PdoSio::$myPdoSio->actionRequest($request));
    }



    /* TO USE SELECTION REQUEST
    * Example:  
    * $pdo = PdoSio::getPdoSio();
    * $resultats = $pdo->requestSelection("SELECT id_user FROM user WHERE identifiant ='toto'");
    * if ($resultats) {
    *   $idInput = $resultats[0]['id_user'];
    *   echo "idInput";
    *   }
    */
    public function selectRequest($request){
        
        $res= PdoSio::$myPdo->query($request);
        if($res==null){
         return null;   
        }else{  
            return $res->fetchall(PDO::FETCH_NAMED);
        } 
    }
}