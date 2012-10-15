<?php

class TimePeriod {
	public $Seconds = 3600;
	
	public read-only $Hours {
		get { return $this->Seconds / 3600; }
	}
}

$o = new TimePeriod();

$o->Hours = 4;