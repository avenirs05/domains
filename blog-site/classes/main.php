<?php
class main extends ACore {
	
	public function get_content() {
		
		$query = "SELECT id,title,discription,date,img_src FROM statti ORDER BY date DESC";
		$result = mysql_query($query);
		if(!$result) {
			exit(mysql_error());
		}
		
		echo '<div id="main">';
		
		$row = array();
		for($i = 0; $i < mysql_num_rows($result);$i++) {
			$row = mysql_fetch_array($result,MYSQL_ASSOC);
			printf("<div style='margin:10px;border-bottom:2px solid #c2c2c2'>
						<p style='font-size:18px'>%s</p>
						<p>%s</p>
						<p><img style='margin-right:5px' width='150px' align='left' src='%s'>%s</p>
						<p style='color:red'><a href='?option=view&id_text=%s'>Читать далее...</a></p>
					
					</div>
					",$row['title'],$row['date'],$row['img_src'],$row['discription'],$row['id']);
		}
		echo '</div>
			</div>';
	}
}
?>