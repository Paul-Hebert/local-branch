				<?php
					echo '<a class="plant_preview" href="plant.php?id=' . $plant_count . '">
						<div class="image_wrapper"><img src="assets/imgs/plants/' . $plants[$plant_count][2] .'" class="' . $plants[$plant_count][3] . '"></div>
						<span class="preview_details">
							<div class="name">' . $plants[$plant_count][0] . '</div>
							<div class="latin_name">' . $plants[$plant_count][1] . '</div>
						</span>
					</a>';
				?> 