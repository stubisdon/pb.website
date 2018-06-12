<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
   $title = "Subscribe";

   //inject params below this line from DB
   $pageMode = "blog"; //permanent
   $url = "https://paradisebird.co/playbook/";
   $type = "article"; //permanent
   $title = "Get a Scriptwriting Playbook";
   $description = "A Framework that'll help you out with writing a great script. Even if you have no experience at it.";
   $image = "https://cdn.dribbble.com/users/3460/screenshots/1080362/mcfly_gear_85.png";

   include_once($path);

?>

<!-- (3) Copy layout based on Slide #38  -->
<section class="slide">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-5-12">
          <div class="ae-3">
            <p class="hero">Download Scriptwriting Playbook</p>
            <p class="micro">A shortcut to a great script</p>
          </div>
          <div>
            <!-- Be sure you keep this form layout as it is. You can change the rest -->
            <form id="subscribe4" data-name="freebie-download" class="ae-4">
              <input type="email" value="" name="subscribe-email" id="subscribe-email" placeholder="Your e-mail" class="wide rectangular"/>
              <input type="submit" value="Submit" name="subscribe-submit" class="button white stroke wide rectangular"/>
              <label for="subscribe-email" class="subscribe-message2"></label>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>
