<?php
class TimePeriod {
	public $Hours {
		get {
			echo "get::\$Hours called.<br/>\n";
			return 45; 
		}
	}
}

$o = new TimePeriod();

echo "\$o->Hours: ".$o->Hours."<br />\n";
