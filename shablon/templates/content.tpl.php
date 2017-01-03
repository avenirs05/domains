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