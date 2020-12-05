<?php

$direct=$this->getProperty("direct");
$cnt=$this->getProperty("cnt");
if ($direct <>0) {
 $this->setProperty('direct',0);
 getURL("http://192.168.10.100/sec/?pt=13&pwm=0&cnt=$cnt", 0);
} else {
 $this->setProperty('direct',1);
 getURL("http://192.168.10.100/sec/?pt=13&pwm=255&cnt=$cnt", 0);
}
