<?php

//requiring namespace
//use Toucantech\Model\addMember as addMember;

require_once'../app/start.php';

//$member = new addMember();

$member = new AddMember();

$member ->addMember('John', 'Admans', 'ja@yahoo.com');