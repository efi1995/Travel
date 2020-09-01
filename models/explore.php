<?php
class ExploreModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM destination');
		$destinations = $this->resultSet();
		
		return $destinations;
	}
}