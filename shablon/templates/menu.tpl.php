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