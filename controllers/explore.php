<?php
class Explore extends Controller{
	protected function Index(){
		$viewmodel = new ExploreModel();
		$this->returnView($viewmodel->Index(), true);
	}
}