<?php

@$task = $_GET['task'];
switch ($task) {
  default:
    $page = getComponent("com_contact");
    include_once("components/com_frank/views/contact/contact.php");
    break;
}
