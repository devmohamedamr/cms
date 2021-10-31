<?php

require "db.php";

class category extends db
{
    function addnewcategory($data){
        $res =  $this->insert("category",$data)->excu();
        return $res;
    }
}