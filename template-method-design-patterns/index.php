<?php

use App\TurkeySub;
use App\VeggieSub;

// Grab autoload for all the classes
require 'vendor/autoload.php';


(new TurkeySub)->make();
(new VeggieSub)->make();