<?php

	define('NL', '<br>');
	define('MSG', '?@My Message Here@?');

	class Iterate {
		
		public function __construct(array $Arr = array()) {
			
			if(isset($Arr)) {
				
			echo '<ol>';
			
			foreach($Arr as $lang)				
				echo '<li>' . $lang . '</li>';
			
			echo '</ol>';
				
			}
		}
		
		public static function iterate(array $Arr = array()) {
			
			if(isset($Arr)) {
				
			echo '<ol>';
			
			foreach($Arr as $lang)				
				echo '<li>' . $lang . '</li>';
			
			echo '</ol>';
				
			}
		}
		
	}

	$l_array = array(
		'c',
		'c++',
		'php'
	);
	
	$l_array[] = 'javascript';
	$l_array[] = 'java';
	$l_array[] = 'c#'. NL;
	
	echo '<h3>List of programming languages:</h3>';
	
	(new Iterate( $l_array ));

	echo '<h3>Now without Object:</h3>';
	
	Iterate::iterate( $l_array );

	echo rtrim(MSG, '@');
	echo '<br>';
	echo ltrim(MSG, '?');
	echo '<br>';
	echo trim(trim(MSG,'?'),'@');
