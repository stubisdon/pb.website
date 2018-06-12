<?php

#Start Session:
session_start();

#Database Connection:
include('config/setup.php');

#Log Data Pull
include('config/log_data.php');


$date = new DateTime();
$current_time = "'". $date->format('U = Y-m-d H:i:s') . "'";

?>
<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta property="fb:app_id" content="123"/>
    <meta property="og:title" content="Project Log" />
<!--    <meta property="og:url" content="http://dmitrykotov.com/freelance" />
    <meta property="og:image" content="http://dmitrykotov.com/img/wurk_thumb2.jpg" />
    <meta property="og:description" content="We are helping creative freelancers get projects" /> -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-formhelpers.css">

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/bootstrap-formhelpers.js"></script>

    <title>Project Log</title>

  </head>
  <body>

    <div>
      <h1><?php print_r ($record[1]); ?></h1>
      <p><?php echo $row_data; ?></p>
    </div>

  </body>
</html>
