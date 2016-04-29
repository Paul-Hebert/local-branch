<?php

class Plants
{
	private $plants;
	private $type;
	private $county;

	public function __construct($plants, $type, $county)
	{
		$this->plants = $plants;
		$this->type = $type;
		$this->county = $county;
	}
	public function getByType($type)
	{
		$counter = 0;
		foreach($this->plants as $plant)
		{
			if($plant[4] === $type)
			{
				$plant[$counter] = array('Plant Name'=>$plant[0], 'Plant lName'=>$plant[1], 'Plant Image'=>$plant[2], 
										'Plant Type'=>$plant[4], 'Plant Des'=>$plant[5], 'Plant Areas'=>$plant[6]
										);
				$counter++;
			}
		}
		
		return $plant;
	}
	public function getByCounty($county)
	{
		$counter = 0;
		foreach($this->plants as $plant)
		{
			foreach ($plant as $plant_county) {
				if(is_array($plant_county))
				{
					foreach($plant_county as $pcounty)
					{
						if($pcounty === $county)
						{
							$plant[$counter] = array('Plant Name'=>$plant[0], 'Plant lName'=>$plant[1], 'Plant Image'=>$plant[2], 
													'Plant Type'=>$plant[4], 'Plant Des'=>$plant[5], 'Plant Areas'=>$plant[6]
													);
							$counter++;
						}
					}	
				}
				
			}

		}

		return $plant;
	}	
}

?>