<?php
class Explore extends Controller{
	protected function Index(){
		$explore = new ExploreModel();
		$this->returnView($explore->Index(), true);
	}
}