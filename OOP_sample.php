<?php

/*
 * This demonstrates how to do some magic trick in PHP OOP.
 * @author jozadaquebatista
 */

class A {
	private $only_to_this_class_attr;   // encapsulates attr in this class.
	protected $attr_name;               // encapsulates the attr, but other classes can inherit it.
    protected $_NO_ENCAPSULATION;       // no encapsulation, not recommended for OOP purposes.
	
	public function __construct() {
		$this->attr_name = "Jozadaque";
		echo 'Hi There from A class!<br>';	
	}
}

class B extends A {
	
	public static $static_attr;
	
	public function __construct() {
		echo 'Hi There from B class!<br>';
		parent::__construct();          // calls the parent constructor from A class
	}
	
	public function setAttr(string $attr) {
		$this->attr_name = $attr;
		return $this;
	}
	
	public function getAttr() {
		echo $this->attr_name . '<br>';
		return $this->attr_name;
	}
	
	public static function doSomething($option = 'n') {
		echo '<br/><b>I\'m the B class!</b><br/>';
		var_dump( (isset($static_attr) && !empty($static_attr)) );
		if($option == 'y' && isset($static_attr))
			echo "<br/><b>In me it's the $static_attr is value of { $static_attr }<br/><b>";
	}
}

var_dump(
	
	(new B)         /* creates a new object */
	
	->setAttr(
		'LOLOLOL'   /* set the Attr */
	)
	
	->getAttr()     /* catch the value of Attr */
	
);

B::$static_attr = 'ok'; /* I still don't understand why this doesn't work. xD hahahahahaha */
B::doSomething('y');
