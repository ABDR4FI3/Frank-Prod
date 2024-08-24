<?php

@$task = $_GET['task'];
switch ($task) {
  case 'commercial':
    $page = getComponent("com_frank&task=commercial");
    include_once("components/com_frank/views/commercial.php");
    break;
  case 'PassiveInvesting':
    $page = getComponent("com_frank&task=PassiveInvesting");
    include_once("components/com_frank/views/PassiveInvesting.php");
    break;
  case 'PropertyFlipping':
    $page = getComponent("com_frank&task=PropertyFlipping");
    include_once("components/com_frank/views/PropertyFlipping.php");
    break;
  case 'LuxuryHomes':
    $page = getComponent("com_frank&task=LuxuryHomes");
    include_once("components/com_frank/views/LuxuryHomes.php");
    break;
  default:
    $page = getComponent("com_contact");
    include_once("components/com_frank/views/contact/contact.php");
    break;
}


