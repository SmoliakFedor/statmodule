<?php

require_once "country.php";
require_once "event.php";
require_once "mission.php";
require_once "sortie.php";
require_once "unit.php";
require_once "user.php";
require_once "main.php";




    $dbh = new mysqli("localhost", "work", "work", "statmodule");



$sql="select u.* from user as u";
$res = $dbh->query($sql);
$users = [];


while($row = $res->fetch_assoc())
{
    $u = new \Entity\User();


    $u->id = $row['id'];
    $u->nameUser = $row['name'];
    $u->password = $row['password'];
    $u->registrationTime=$row['registrationTime'];
    $u->flyingHours=$row['flyingHours'];
    $u->sortieCount=$row['sortieCount'];

    $sql = "select sortie.*, unit.id, unit.name from sortie join unit on sortie.id_unit = unit.id where sortie.id_user=".$u->id;
    $res1 = $dbh->query($sql);

    $u->sortie = [];
    while($row1 = $res1->fetch_assoc()) {
        $sortie = new \Entity\Sortie();
        $sortie->id = $row1['id'];
        $sortie->mission=$row1['mission'];
        $sortie->country=$row1['country'];

        $unit = new \Entity\Unit();
    $unit->idUnit = $row1['id'];
    $unit->nameUnit = $row1['nameUnit'];
        $unit->type = $row1['type'];
        $unit->subtype= $row1['subtype'];


        $sortie->unit = $unit;

    $sql = "select event.* from event where event.sortie=".$sortie->id;
    $res2 = $dbh->query($sql);

    $sortie->event = [];
    while($row2 = $res2->fetch_assoc()) {
      $e = new \Entity\Event();
      $e->idEvent = $row2['id'];
      $sortie->event[] = $e;
    }

    $u->sortie[] = $sortie;
  }

  $users[] = $u;
}

print_r($users);




