<?php

#Start Session:
session_start();

#Database Connection:
include('config/setup.php');

if ($_POST) {
  $q = "SELECT * FROM log_ngal WHERE result = '$_POST[result]'";
  $r = mysqli_query($db, $q);

  if(mysqli_num_rows($r) == 0) {
    header('Location: thank_you_log.php');
  } else {header('Location: log_exists.php');}

}

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
    <div class="container" style="padding-bottom:15px;">
      <div class="jumbotron">
        <h1>Hello, my friend!</h1>
        <p>Let's add a new project entry</p>
      </div>
      <form action="log_ngal.php" name="addEntry" id="portForm" method="post" role="form">
      <?php

      if($_POST['submitted'] == 1) {

        $q = "INSERT INTO log_ngal (date, description, result, screenshot, author) VALUES ($current_time, '$_POST[description]', '$_POST[result]', '$_POST[screenshot]', '$_POST[author]')";
        $r = mysqli_query($db, $q);

        if($r) {
          echo '<p>Entry is added!</p>';
        } else {echo '<p>Script is not launched because: '.mysqli_error($db).'</p>';
          echo '<p>'.$q.'</p>';
          print_r($_POST);}

      }

       ?>

      <div class="row">
      <div class="col-md-6">

          <div class="form-group">
            <label for="InputDescription">Description</label>
            <input type="text" class="form-control" name="description" id="InputDescription" placeholder="What is Done?" required>
          </div>
          <div class="form-group">
            <label for="InputResult">Result Link</label>
            <input type="text" class="form-control" name="result" id="InputResult" placeholder="Paste a link with today's redults" required>
          </div>
          <div class="form-group">
            <label for="InputScreenshot">Screenshot</label>
            <input type="link" class="form-control" name="screenshot" id="InputScreenshot" placeholder="What is your greatest achievement today? Show us with a screenshot" required>
          </div>
      </div>
      <div class="col-md-6">
          <div class="form-group">
            <label for="InputSkill">Author</label>
            <input type="text" class="form-control" name="author" id="InputAuthor" placeholder="Your Name" required>
          </div>
          <!-- attach file
          <div class="form-group">
            <label for="exampleInputFile">File input</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Example block-level help text here.</p>
          </div>
          -->
          <!-- Checkbox
          <div class="checkbox">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
        -->
      </div>
    </div>
      <!--<div class="row">
        <div class="col-md-12">
              <fieldset data-role="controlgroup">
                  <input type="checkbox" name="agreed_projects" id="checkbox-v-2a">
                  <label for="checkbox-v-2a">I agree to receive emails with new projects</label>
                  <input type="checkbox" name="agreed_show" id="checkbox-v-2b">
                  <label for="checkbox-v-2b">I agree to publish my work on this website as a demonstration of my skills</label>
              </fieldset>
        </div>
      </div> -->
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-default">Submit</button>
          <input type="hidden" name="submitted" value="1">
        </div>
      </form>
      </div>
    </div>

  </body>
</html>
