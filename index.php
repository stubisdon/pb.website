<?php
  //CONNECT DB
  include($_SERVER['DOCUMENT_ROOT'].'/config/setup.php');
  include($_SERVER['DOCUMENT_ROOT'].'/config/data.php');
  
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/header.php";
  include_once($path);
?>

<!-- Default approach -->
<section class="slide video autoHeight first-slide">
  <div class="content">
    <div class="container grayGradient">
      <div class="wrap bottom padding-top-12 padding-bottom-12 left">

				<div class="fix-custom">
          <!-- <svg class="ae-5 fly" style="width:100px;"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logo"></use></svg> -->
          <h1 class="ae-6 bold pb-title fromBottom">Paradise Bird 🕊</h1>
          <div class="ae-7 margin-bottom-2"><p class="hero fix-6-12 toLeft">We tell stories <br>with beautiful imagery.</p></div>
          <!-- <a href="contact" class="button stroke white rectangular shiny ae-8">Get in Touch <i class="material-icons margin-left-0 right">trending_up</i></a><a class="button stroke white rectangular shiny ae-9 toSlide-2">Browse Work</a> -->
          <div class="fix-6-12 toLeft">
            <form id="subscribe2" class="ae-4" data-name="top-form">
              <input type="email" value="" name="subscribe-email" id="subscribe-email" placeholder="Your e-mail" class="rectangular"/>
              <button type="submit" name="subscribe-submit" class="button white stroke rectangular">Get Your Story</button>
              <label for="subscribe-email" class="subscribe-message2"></label>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="background ae-6 fadeIn" style="background-image:url('http://paradisebird.co/assets/vid/bckg_static.jpg');">
    <video poster="http://paradisebird.co/assets/vid/bckg_static.jpg" autoplay loop muted webkit-playsinline>
      <source src="http://paradisebird.co/assets/vid/bckg_reel.mp4" type="video/mp4"/>
      <source src="http://paradisebird.co/assets/vid/bckg_reel.webm" type="video/webm"/>
    </video>
  </div>
</section>


<!-- copy the custom code -->
<section class="slide showcase">
  <div class="content">
    <div class="container">
      <div class="wrap left">
        
        <div class="fix-custom">

          <h1 class="ae-1">What We Do</h1>
          <div class="ae-2"><p>Commercials, Film, Animation and Visual Experiments</p></div>


          <ul class="flex showcase-container popupTrigger controller fromBottom margin-top-4 left" data-popup-id="showcase">

<!--        <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-2 popupTrigger" data-popup-id="kasp">
              <div class="sc" data-hover-text="Watch the Video">
                <div class="previewHolder">
                  <img class="selected" alt="Awareness Driver" src="assets/img/projects/kasp/1.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/2.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/3.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/4.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/5.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/6.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/7.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/8.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/9.jpg"/>
                  <img alt="Awareness Driver" src="assets/img/projects/kasp/10.jpg"/>
                </div>
                <strong>Future Ad</strong><span>Kaspersky Lab</span>
              </div>
            </li> -->

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="/work/project.php?id=10">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project10['preview_static']; ?>"/></div><strong><?php echo $project10['brand']; ?></strong><span><?php echo $project10['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="/work/project.php?id=13">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project13['preview_static']; ?>"/></div><strong><?php echo $project13['brand']; ?></strong><span><?php echo $project13['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="/work/project.php?id=15">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project15['preview_static']; ?>"/></div><strong><?php echo $project15['brand']; ?></strong><span><?php echo $project15['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="/work/project.php?id=12">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project12['preview_static']; ?>"/></div><strong><?php echo $project12['brand']; ?></strong><span><?php echo $project12['title']; ?></span></div>
              </a>
            </li>

            <!-- <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-2 popupTrigger" data-popup-id="spg">
              <div class="sc" data-hover-text="Watch the Video"><div class="sc-img"><img alt="Case Studies" src="assets/img/projects/spg.jpg"/></div><strong>Case Studies</strong><span>Tell about your achievements in an entertaining way</span></div>
            </li>

            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="lfj">
              <div class="sc" data-hover-text="Watch the video"><div class="sc-img"><img alt="Animated Stories" src="assets/img/projects/lfj.jpg"/></div><strong>Animated Stories</strong><span>Bring value to your audience through beautiful animation</span></div>
            </li>

            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="dbs">
              <div class="sc" data-hover-text="Watch the video"><div class="sc-img"><img alt="Visual IDs" src="assets/img/projects/dbs.jpg"/></div><strong>Visual IDs</strong><span>Make your video content unique with a powerful intro</span></div>
            </li>

            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-1 popupTrigger" data-popup-id="rlf">
              <div class="sc" data-hover-text="Watch the Video"><div class="sc-img"><img alt="Business Explainer" src="assets/img/projects/rlf.jpg"/></div><strong>Business Explainers</strong><span>A quick video that will explain what your business is all about</span></div>
            </li>

            <li class="col-4-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="pic">
              <div class="sc" data-hover-text="Watch the Gallery"><div class="sc-img"><img alt="Marketing Content" src="assets/img/projects/girl.gif"/></div><strong>Marketing Content</strong><span>Spice up your blog posts with gifs, photos, or illustrations</span></div>
            </li> -->
          </ul>
          <div class="center">
            <a href="/work/" class="button stroke white shiny rectangular ae-4">Browse More Work</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<hr class="hr">

<!-- Gallery Pop-up -->
<div class="popup autoplay animated" data-popup-id="pic">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-7-12 popupContent">
					<ul class="slider clickable autoHeight ae-1" data-slider-id="gallery">
            <li class="selected"><img src="assets/img/gallery/1.jpg" class="wide" alt="Content Marketing Illustration"/></li>
            <li><img src="assets/img/gallery/2.jpg" width="1200" class="wide" alt="Content Marketing Illustration"/></li>
            <li><img src="assets/img/gallery/3.jpg" width="700" class="high" alt="Content Marketing Poster"/></li>
						<li><img src="assets/img/gallery/4.jpg" width="1200" class="wide" alt="Content Marketing Picture"/></li>
            <li><img src="assets/img/gallery/5.jpg" width="700" class="wide" alt="Content Marketing Map"/></li>
						<li><img src="assets/img/projects/girl.gif" width="1200" class="wide" alt="Girl with a burning letter GIF"/></li>
        	</ul>
          <ul class="controller dots margin-top-2 ae-2" data-slider-id="gallery">
            <li class="dot selected"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="hr">

<section class="slide autoHeight">
  <div class="content">
    <div class="container">
      <div class="wrap padding-top-12 padding-bottom-12">

        <div class="fix-10-12 toCenter">
          <h1 class="ae-1">Our clients</h1>
          <!--<div class="ae-2"><p>Big or small – doesn't matter. We work with everybody!</p></div>-->
        </div>
        <div class="fix-12-12">
          <!-- remove class tintLogos to disable color change of logo images -->
          <ul class="flex grid-68 tintLogos equal equalMobile">
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-3">
                <div class="cell">
                  <img width="60" src="assets/img/unilever.png" alt="Unilever"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-4">
                <div class="cell">
                  <img width="115" src="assets/img/loreal.png" alt="L'Oreal"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-5">
                <div class="cell">
                  <img width="100" src="assets/img/infiniti.png" alt="Infiniti"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-6">
                <div class="cell">
                  <img width="124" src="assets/img/heineken.png" alt="Heineken"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-7">
                <div class="cell">
                  <img width="120" src="assets/img/kaspersky.png" alt="Kaspesky Lab"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-8">
                <div class="cell">
                  <img width="120" src="assets/img/cp.png" alt="Central Partnership"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-3">
                <div class="cell">
                 <img width="90" src="assets/img/pizzahut.png" alt="Pizza Hut"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-4">
                <div class="cell">
                  <img width="110" src="assets/img/zephyr.png" alt="Zephyr"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-5">
                <div class="cell">
                  <img width="90" src="assets/img/punchd.png" alt="Punch'd Energy"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-6">
                <div class="cell">
                  <img width="155" src="assets/img/paratype.png" alt="Paratype"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-7">
                <div class="cell">
                  <img width="116" src="assets/img/quasardb.png" alt="QuasarDB"/>
                </div>
              </div>
            </li>
            <li class="col-2-12 col-tablet-1-4 col-phablet-1-3 col-phone-1-2">
              <div class="table wide equalElement ae-8">
                <div class="cell">
                  <img width="133" src="assets/img/amstel.png" alt="Amstel"/>
                </div>
              </div>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<hr class="hr">

<section class="slide autoHeight">
  <div class="content">
    <div class="container">
      <div class="wrap padding-top-8 padding-bottom-12">

        <div class="fix-10-12">
          <h1 class="ae-1">Want to learn more?</h1>
          <div class="ae-2"><p>Subscribe for Behind The Scenes and Lessons from Pros.</p></div>


          <div class="fix-6-12">
            <form id="subscribe3" class="ae-4" data-name="bottom-form">
              <input type="email" value="" name="subscribe-email" id="subscribe-email" placeholder="Your e-mail" class="rectangular"/>
              <button type="submit" name="subscribe-submit" class="button white stroke rectangular">Get Your Story</button>
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