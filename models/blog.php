<?php
class BlogModel extends Model{
    public function Index(){
        $this->query('SELECT * FROM blog');
		$blog = $this->resultSet();
		
		return $blog;
    }
}