<!doctype html>
<html>
	<head>
		<style>
			th, td{
				border:1px solid #ccc;
			}
		</style>
	</head>
	<body>
		<?php
			$counties = [
					"Alameda County",
					"Alpine County",
					"Amador County",
					"Butte County",
					"Calaveras County",
					"Colusa County",
					"Contra Costa County",
					"Del Norte County",
					"El Dorado County",
					"Fresno County",
					"Glenn County",
					"Humboldt County",
					"Imperial County",
					"Inyo County",
					"Kern County",
					"Kings County",
					"Lake County",
					"Lassen County",
					"Los Angeles County",
					"Madera County",
					"Marin County",
					"Mariposa County",
					"Mendocino County",
					"Merced County",
					"Modoc County",
					"Mono County",
					"Monterey County",
					"Napa County",
					"Nevada County",
					"Orange County",
					"Placer County",
					"Plumas County",
					"Riverside County",
					"Sacramento County",
					"San Benito County",
					"San Bernardino County",
					"San Diego County",
					"San Francisco County",
					"San Joaquin County",
					"San Luis Obispo County",
					"San Mateo County",
					"Santa Barbara County",
					"Santa Clara County",
					"Santa Cruz County",
					"Shasta County",
					"Sierra County",
					"Siskiyou County",
					"Solano County",
					"Sonoma County",
					"Stanislaus County",
					"Sutter County",
					"Tehama County",
					"Trinity County",
					"Tulare County",
					"Tuolumne County",
					"Ventura County",
					"Yolo County",
					"Yuba County"
				];

			include('../assets/php/plant_list.php');

			echo '
				<table>
					<thead>
						<tr>
							<th>County</th>';
							foreach($plant_types as $plant_type){
								echo '<th>' . $plant_type . '</th>';
							}
			echo '			<th>Total Plants</th>
						</tr>
					</thead>
			';

			foreach($counties as $county){
				$county_plants = 0;
				$plant_type_count = [
						'Trees' => 0,
						'Shrubs' => 0,
						'Flowers' => 0,
						'Cacti and Succulents' => 0,
						'Grasses' => 0,
						'Ferns' => 0,
						'Herbs' => 0
				];

				foreach($plants as $plant){
					foreach($plant[6] as $location){
						if ($location . ' County' === $county){
							$county_plants ++;

							$plant_type_count[$plant[4]] ++;
						}
					}
				}

				echo '
					<tr>
						<td>' . $county . '</td>';
							foreach($plant_types as $plant_type){
								if ($plant_type_count[$plant_type] === 0){
									echo '<td style="color:#f00;">' . $plant_type_count[$plant_type] . '</td>';								
								} else{
									echo '<td>' . $plant_type_count[$plant_type] . '</td>';								
								}
							}
				echo '	<td>' . $county_plants . '</td>
					</tr>
				';
			}

			echo '
				<tfoot>
					<tr>
						<td>Total Counts</td>';
							foreach($plant_types as $plant_type){
								$count = 0;
								foreach($plants as $plant){
									if ( $plant[4] === $plant_type ){
										$count++;
									}
								}
								echo '<td>' . $count . '</td>';
							}						

						echo '<td>' . count($plants) . '</td>
					</tr>
				</tfoot>
			';
			echo '</table>';
		?>
	</body>
</html>