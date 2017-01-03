<?php
	function get_statti($cat=FALSE) {
		
		$sql = "SELECT id,title,date,img_src,discription
											FROM statti";
		
		if($cat) {
			$sql .= " WHERE cat = '$cat'";
		}
		$result = mysql_query($sql);
		if (!$result){
			exit(mysql_error());
		}
		if(mysql_num_rows($result) == 0) {
			exit('Статтей нет');
		}
		$row = array();
		for($i = 0; $i < mysql_num_rows($result); $i++) {
			$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}				
		return $row;
	}
	
	function get_text($id) {
		
		$sql = "SELECT id,title,date,img_src,text
											FROM statti WHERE id='$id'";
		$result = mysql_query($sql);									
		
		if (!$result){
			exit(mysql_error());
		}
		if(mysql_num_rows($result) == 0) {
			exit('Статтей нет');
		}
		$row = array();
		for($i = 0; $i < mysql_num_rows($result); $i++) {
			$row = mysql_fetch_array($result,MYSQL_ASSOC);
		}				
		return $row;
	}
	
	function get_cat() {
		$result = mysql_query("SELECT id_category,name_category
											FROM category");
		if (!$result){
			exit(mysql_error());
		}
		if(mysql_num_rows($result) == 0) {
			exit('Статтей нет');
		}
		$row = array();
		for($i = 0; $i < mysql_num_rows($result); $i++) {
			$row[] = mysql_fetch_array($result,MYSQL_ASSOC);
		}				
		return $row;
	}
	
	
	function render($tmp,$vars = array()) {
		if(file_exists('templates/'.$tmp.'.tpl.php')) {
			ob_start();
			extract($vars);
			require 'templates/'.$tmp.'.tpl.php';
			return ob_get_clean();
		}
	}
	
?>