<?php

$direct=$this->getProperty("direct");
if ($direct) {
 $this->callMethod('memoryOff');
} else {
 $this->callMethod('memoryOn');
}
