<?php
class Shape {
	private static $_a = 5;
	
	public static $Area {
		get {	
				echo "Static Shape::getArea()<br/ >\r\n";
				return self::$_a;
		}
		set { 
			echo "Static Shape::setArea($value)<br/ >\r\n"; self::$_a = $value;
		}
	}
}

class Shape2 extends Shape {
	public static $Area {
		get {
			echo "Static Shape2::getArea()<br/ >\r\n"; return parent::$Area;
		}
		set {
			echo "Static Shape2::setArea($value)<br/ >\r\n"; parent::$Area = $value;
		}
	}
}

echo Shape2::$Area."<br/ >\r\n";
Shape2::$Area = 25;
echo Shape2::$Area."<br/ >\r\n";