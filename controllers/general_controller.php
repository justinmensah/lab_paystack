<?php
//connect to the user account class
require("../classes/general_class.php");

//sanitize data




//--INSERT--//
function insert_ctr($a,$b){
     
    $new_insert = new general_class();
    
    return $new_insert->insert($a,$b);
    
    
    
    

}


//--SELECT--//
function select_ctr($id){
    $sel = new general_class();

    return $sel->select($id);
}

//--UPDATE--//
function update_ctr($id,$a,$b){
    $upd = new general_class();

    return $upd->update($id,$a,$b);
}


//--DELETE--//
function del_ctr($id){
    $del = new general_class();

    return $del->delete($id);
}


//--SELECT_ALL--//
function sel_all_ctr($table){

    $sel_all = new general_class();

    return $sel_all->sel_all($table);

}
?>