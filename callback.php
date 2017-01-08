<?php


class Map {
	
	static $path;
	
	public static function getInfo(string $path_info, string $method, $callback) {
		$callback("The method is $method, and the path is $path_info");		
	}
}

Map::getInfo('/posts','GET',function($data){

	echo $data;
});
