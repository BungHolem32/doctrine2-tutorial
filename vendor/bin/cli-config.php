<?php
/**
 * Created by PhpStorm.
 * User: ilanv
 * Date: 20/06/2016
 * Time: 10:54
 */

require_once "bootstrap.php";
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);