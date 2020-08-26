<?php
class Blog extends Controller{
	protected function Index(){
		$BlogPanel = new BlogModel();
		$this->returnView($BlogPanel->Index(), true);
	}
}