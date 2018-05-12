<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Iglesia</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="views/assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
      <nav class="menu--top">
      <?php
      // requerir los scopes de  profile y menu 
      require_once("views/include/admin/scope.profile.php");
      require_once("views/include/admin/scope.menu.php");
      ?>
      </nav>
      <div class="wrap--content">
        <section class="content">
