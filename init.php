<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Init</title>
  </head>
  <body>
    <?php
      $db = new mysqli('localhost', 'root', '', 'FirstDataBase');
      if($db->connect_error):
        die ("Could not connect to db: " . $db->connect_error);
      endif;

      $db->query("drop table userinfo");
      $db->query("drop table requests");
      $result = $db->query("create table requests (`price` char(100) not null, `username` char(100) not null, `email` char(100) not null, `type` char(100) not null, `description` char(200) not null, `destination` char(100) not null, `status` char(15) not null, `priority` char(30) not null)");
      $result = $db->query("create table userinfo (`firstname` char(20) NOT NULL, `lastname` char(20) NOT NULL, `username` char(20) NOT NULL, `password` char(20) NOT NULL, `email` char(30) NOT NULL, `address` char(40) NOT NULL, `city` char(15) NOT NULL, `state` char(2) NOT NULL, `zipcode` int(5) NOT NULL)");
     ?>
  </body>
</html>