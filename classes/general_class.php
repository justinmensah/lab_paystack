<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author David Sampah
 *
 */

class general_class extends db_connection
{
	//--INSERT--//

    function insert($a,$b){

		$sql = "INSERT INTO phonebook (pname,pphoned) VALUES('$a','$b')";

		return $this->db_query($sql);



	}
	

	//--SELECT--//
	function select($id){
		$sql = "SELECT * FROM phonebook WHERE pid = $id";
		$record = $this->db_fetch_one($sql);
		return $record;
	}



	//--UPDATE--//
	function update($id,$a,$b){
		$sql="UPDATE phonebook SET pname = '$a',pphoned = '$b' WHERE pid = $id";

		return $this -> db_query($sql);
	}



	//--DELETE--//
	function delete($id){
		$sql = "DELETE FROM phonebook WHERE pid = $id";

		return $this->db_query($sql);
	}



	//--SELECT_ALL-//
	function sel_all($table){
    	$sql = "SELECT * FROM $table";
    	$records = $this->db_fetch_all($sql);
		return $records;

	}
	

}

?>