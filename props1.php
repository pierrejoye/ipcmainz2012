<?php

class TimePeriod {
	public $Seconds {
		get;
		set;
	}
}

$o = new TimePeriod();

echo "get Seconds :".$o->Seconds."<br />\n";
echo "Setting Seconds to 3600\n";
$o->Seconds = 3600;
echo "get Seconds :".$o->Seconds."<br />\n";