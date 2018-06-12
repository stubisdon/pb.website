<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
   $title = "Works";
?>

<section class="slide kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
        <div class="fix-12-12">
          <h1 class="title ae-1">Contact us</h1>
          <div class="ae-2"><p>It's easy!</p></div>

          <ul class="flex fixedSpaces margin-top-5">
            <li class="col-4-12 padding-bottom-3 ae-3">
              <p>Give us a call</br> <a style="font-size: 16px; font-weight: 600;" href="tel:+1-510-838-1346"><i class="material-icons" style="font-size: 16px; position: relative; top: 2px;">phone</i> 510.838.1346</a></p>
              <a href="http://calendly.com/paradisebird/" target="_blank" class="button stroke white rectangular crop"><i class="material-icons hideForPhone">watch_later</i>Schedule a call</a>
            </li>
            <li class="col-4-12 padding-bottom-3 ae-4">
              <p>If you want to estimate your project with us</p>
              <a href="/request" class="button stroke white rectangular crop estimateButton"><i class="material-icons hideForPhone">live_help</i>Get a Free Estimate</a>
            </li>
            <li class="col-4-12 padding-bottom-3 ae-5">
              <p>Keep in touch. No spam, we promise</p>
              <a href="/subscribe" class="button stroke white rectangular crop"><i class="material-icons hideForPhone">mail</i>Get Our Updates</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- <section class="slide kenBurns">
  <div class="content">
    <div class="container">
      <div class="wrap spaces">
        <div class="fix-6-12 box-55">
          <h1 class="title ae-1">It's pretty easy</h1>
          <div class="ae-2"><p>and depends on your goal</p></div>
          <div class="left margin-top-5 ae-7">
            <p>For an immediate response, give us a call</p>
            <a href="tel:+1-510-838-1346">510.838.1346</a>
            <p>Or request a call from us</p>
            <a href="http://calendly.com/paradisebird/" target="_blank" class="button stroke white rectangular shiny">Request a call</a>
            <p>If you want to estimate your project with us</p>
            <a href="/request" class="button stroke white rectangular shiny">Welcome to Our Project Quiz</a>
            <p>Or just keep in touch for the future</p>
            <a href="/subscribe" class="button stroke white rectangular shiny">Get Our Updates</a>
          </div>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section> -->


<!-- Preloader -->
<div class="loadingIcon"><svg class="loading-icon" id="loading-circle" viewBox="0 0 18 18"><circle class="circle" opacity=".1" stroke="#fff" stroke-width="2" stroke-miterlimit="10" cx="9" cy="9" r="8" fill="none"></circle><circle class="dash" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="1,100" cx="9" cy="9" r="8" fill="none"></circle></svg></div>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>