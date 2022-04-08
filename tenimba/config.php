<?php

namespace BddConnection;

use PDO;
use Exception;

class ConnectionToBdd {

                                                                                                                                                                                                                            private $MDP  = "Courone42";
                                                                                                                                                                                                                            private $Name = "root";

    function BddConnect() {
        try { 
           return new PDO('mysql:host=65.108.127.22;port=3306;dbname=common-database;charset=utf8', 'epitech', 'ZIX@rFN00UyqNCr.');
        }catch(Exception $e){
            die('Erreur' . $e->getMessage());
        }
   
    }

}


?>