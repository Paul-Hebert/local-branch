<?php
	$plant_types = array(
							'Trees',
							'Shrubs',
							'Flowers',
							'Cacti',
							'Succulents',
							'Grasses'
						)
?>

<div class="select_wrapper">
	<select id="plant_type_dropdown">
		<option value="">All Plants</option>
		<?php
			foreach ($plant_types as $plant_type) {
				if ($plant_type === $type){
					$selected = ' selected';
				} else{
					$selected = '';
				}

				echo '<option value="' . $plant_type . '"' . $selected . '>' . $plant_type . '</option>';
			}
		?>
	</select>
	<span>&#9660;</span>
</div>	
