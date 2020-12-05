<?php

$direct=$this->getProperty("direct");
$gradient=$this->getProperty("gradient");
if ($direct <>0) {
 $this->setProperty('direct',0);
 getURL("http://192.168.10.100/sec/?cmd=12:v$gradient", 0);
} else {
 $this->setProperty('direct',1);
 getURL("http://192.168.10.100/sec/?cmd=12:^$gradient", 0);
}
