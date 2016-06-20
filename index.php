<?php
require_once __DIR__ . "/vendor/bin/bootstrap.php";

//var_dump($entityManager);

$em = $entityManager;

$book = new Book();
$book->setTitle('Lord of the rings');
$book->setCreatedAt(new \DateTime("now"));
$em->persist($book);
$em->flush();


