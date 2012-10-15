<?php

class TimePeriod {
	public static $h {
		get;
		set;
		isset {
			echo "static isset TimePeriod::\$h Called.\n"; 
			return self::$h != NULL;
		}
	}
}	

echo "isset(TimePeriod::\$h) = ".(int)isset(TimePeriod::$h)."\n";
TimePeriod::$h = 10;
echo "TimePeriod::\$h = 10;\n";
echo "isset(TimePeriod::\$h) = ".(int)isset(TimePeriod::$h)."\n";
TimePeriod::$h = NULL;
echo "TimePeriod::\$h = NULL;\n";
echo "isset(TimePeriod::\$h) = ".(int)isset(TimePeriod::$h)."\n";
echo "Done";