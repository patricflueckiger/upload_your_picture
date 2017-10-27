<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <div class="container">
        <a class="btn btn-primary" href="/Bilder/create" role="button">Upload</a>
        <a class="navbar-brand" href="/Homecontent" style="color:rgb(53, 117, 181);">Upload Your Picture</a>
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link active" href="/Homecontent">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Bilder">Meine Bilder</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Bilder/Favoriten">Meine Favoriten</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
