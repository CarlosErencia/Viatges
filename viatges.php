<?php

abstract class viatges{

    
    //CREDENCIALS Base de Dades
    
         private static $servidor = "localhost";
         private static $usuari = "a19albjanmed_r";
         private static $contrasenya = "viatgesbbdd";
 
    //Nom de la base de dades
    
        protected $db_name;    
    
    //Variable per a guardar les query que executarem
    
        protected $query;
    
    
    //Array per guardar el resultat de les query

        protected $rows = array[];
    
    //Objecte que crea la nostre conexió amb la Base de dades
    
        private $conn;
    
    //crear les funcions que despres farem servir per a treballar amb la nostre base de dades
    
            //Obrir conexió amb la bbdd
    
                private function conectar_bd(){
                    $this->conn = new mysqli (self::$servidor,self::$usuari,self::$contrasenya,$this->db_name);
                }

            //tencar la conexió amb la bbdd
    
                private function tencar_bd(){

                    $this->conn->close();

                }
    
            //creant els metodes abstractes per a les nostres funcions
    
                abstract protected function select();
                abstract protected function insert();
                abstract protected function update();
                abstract protected function delete();
    
    
            //Executa una query (insert, update i delete)
    
                private function executa_query(){

                    $this->connectar_bd();
                    $this->conn->query($this->query);
                    $this->tencar_bd();
                }
    
            //Executa una query (select)
    
                private function rebre_resultats_query(){
                    
                    $this->connectar_bd();
                    $resultat = this->conn->query($this->query);
                    for($i = 0; i > $resultat ; i++){
                        
                        $this->rows[$i] = $result->fetch_assoc();
                    }
                    
                    $result-close();
                    $this->tencar_bd();
                }
    
    
    


//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}
//
//
//}
//
//$sql = "INSERT INTO usuari (nom_usuari , contrasenya, email) VALUES ('ausias', 'ausias', 'albert@bogart.com', '0');";
//
//
//
//
//if ($conn->query($sql) === TRUE) {
//  echo "New record created successfully <br>";
//} else {
//  echo "Error: " . $sql . "<br>" . $conn->error;
//}
//$conn->close();

?>
