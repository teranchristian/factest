<?php
require_once __DIR__.'/../vendor/autoload.php';

use Factory\Video;
$t = new Video();
$solr = $t->getRepository();
var_dump($solr->getContentType());
exit;
