<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
   $title = "Subscribe";
?>

<!-- (3) Copy layout based on Slide #38  -->
<section class="slide">
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-5-12">
          <div class="ae-3">
            <p class="hero">Subscribe to our Newsletter</p>
            <p class="micro">To Get Behind The Scenes and Free Lessons</p>
          </div>
          <div>
            <!-- Be sure you keep this form layout as it is. You can change the rest -->
            <form id="subscribe2" class="ae-4">
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