<?php

use Rundeck\RundeckClient;

require __DIR__.'/vendor/autoload.php';

$rd = new RundeckClient('http://localhost:4400', 'admin', 'admin');

foreach ($rd->getProjects() as $project) {
	print($project->getName()."\n");
}
