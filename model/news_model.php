<?php

class News_model extends CI_Model{
    //creates an active connection to DB
    public function __construct(){
      
        
    }
    
    public function get_news($request){
        
        $response = file_get_contents($request);
        return $xml = simplexml_load_string($response);
    }

}
?>