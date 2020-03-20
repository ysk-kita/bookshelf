<?php
$mysql = new PDO('mysql:host=localhost; dbname=kitabooks; charset=utf8', 'root', '',
  array(
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_EMULATE_PREPARES => false,
  )
);

  ?>
