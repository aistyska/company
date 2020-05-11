<?php
require 'vendor/autoload.php';

use Company\Model\Manager;
use Company\Model\Programmer;
use Company\Model\Tester;


$manager = new Manager("Tomas", "Tomkus", "tt@nana.lt", 2015, "HR manager", 867899098, "HR");
echo $manager->getSignature();

$programmer = new Programmer("Jonas", "Kubas", "jk@nana.lt", 2019, "software developer", "Find Home", "Search Experience", "7 years");
echo $programmer->getSignature();

echo Programmer::getProgrammerJoke();

$tester = new Tester("Marija", "Peter", "mp@nana.lt", 2019, "QA Engineer", "TravelAround", "Tomas Augintas", "5 years");
echo $tester->getSignature();