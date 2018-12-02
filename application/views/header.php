<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Vote System</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="/assets/js/jquery.js"></script>





<!-- Bootstrap core CSS -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="/assets/css/mdb.min.css" rel="stylesheet">
	  <link href="/assets/css/animate.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>
<header>
<?php if($avoid_header!=true){ ?>
  <nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#"><strong>Vote System</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/create">Create a Selection</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/result">Results</a>
        </li>
        
      </ul>
      
    </div>
  </nav>
<?php } ?>
</header>