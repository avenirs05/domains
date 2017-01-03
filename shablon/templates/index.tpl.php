<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />

<link  rel="stylesheet" href="css/style.css"/>

<script src="js/script.js"></script>

</head>

<body>
	
	<div class="wrap">
		
		<div class='header'>
		</div>
		
		<div class="menu">
			<form>
				<fieldset>
					<label for="menu">Главное меню</label>
					<select name="menu" id="menu">
						<?php	foreach($cat as $item) :?>
	<option value='<?php echo $item['id_category']; ?>'><?php echo $item['name_category']; ?></option>
						<?php endforeach;?>
						?>
					</select>
				</fieldset>	
			</form>	
		</div>
		
		<div class='content'>
		
			<form action="view_text.php" method="POST">
				<input type="text" name="search" value="">
				<input type="submit" value="OK">
			</form>
		
			<div class="main_text">
			<?	foreach($result as $row) :?>
				
					<table class='table' width='780' border='0' cellspacing='0' cellpadding='0'>
				     		 <tr>
				     		 <td class='td_top'>
				      		<h5><a title='<?php echo $row['title']?>' href='view_text.php?id=<?php echo $row['id']?>'><?php echo $row['title']?></a></h5>
							
				     		 Дата добавления: <?php echo $row['date']?>
							 </td>
				            </tr>
				            <tr>
				            <td>
								<img title='<?php echo $row['title'] ?>' align='left' src='<?php echo $row['img_src']?>'><p><?php echo $row['discription']?></p></td>
				            </tr>
				            <tr>
				            <td>
							<p>Просмотров: <?php echo $row['view'];?> </p>
							</td>
				            </tr>
				            </table>
				<?php endforeach;?>
			?>
			</div>
			
		</div>
		
		<div class='footer'>
			
			<? echo "<p style='text-align:right;font_size:5px; color:white;margin:10px;'>".$site_name."</p>";?>
		</div>
	</div>
</body>
</html>