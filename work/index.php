<?php
  //CONNECT DB
  include($_SERVER['DOCUMENT_ROOT'].'/config/setup.php');
  include($_SERVER['DOCUMENT_ROOT'].'/config/data.php');
  
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/header.php";
  include_once($path);
  $title = "Works";
?>

<!-- Default approach -->
<section class="slide video autoHeight showcase">
  <div class="content">
    <div class="container grayGradient">
      <div class="wrap bottom padding-top-12 left">

        <div class="fix-custom margin-top-10">
          <h1 class="ae-3 fromBottom">Works</h1>
          <p class="ae-4">This is what we do. Commercials, Film, Animation, and everything in between.</p>

          <ul class="flex left controller fromBottom margin-top-6 left">

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=25">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project25['preview_static']; ?>"/></div><strong><?php echo $project25['brand']; ?></strong><span><?php echo $project25['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=10">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project10['preview_static']; ?>"/></div><strong><?php echo $project10['brand']; ?></strong><span><?php echo $project10['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=13">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project13['preview_static']; ?>"/></div><strong><?php echo $project13['brand']; ?></strong><span><?php echo $project13['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=15">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project15['preview_static']; ?>"/></div><strong><?php echo $project15['brand']; ?></strong><span><?php echo $project15['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=12">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project12['preview_static']; ?>"/></div><strong><?php echo $project12['brand']; ?></strong><span><?php echo $project12['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=22">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project22['preview_static']; ?>"/></div><strong><?php echo $project22['brand']; ?></strong><span><?php echo $project22['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=23">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project23['preview_static']; ?>"/></div><strong><?php echo $project23['brand']; ?></strong><span><?php echo $project23['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=7">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project7['preview_static']; ?>"/></div><strong><?php echo $project7['brand']; ?></strong><span><?php echo $project7['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=1">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project1['preview_static']; ?>"/></div><strong><?php echo $project1['brand']; ?></strong><span><?php echo $project1['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=8">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project8['preview_static']; ?>"/></div><strong><?php echo $project8['brand']; ?></strong><span><?php echo $project8['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=11">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project11['preview_static']; ?>"/></div><strong><?php echo $project11['brand']; ?></strong><span><?php echo $project11['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=18">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project18['preview_static']; ?>"/></div><strong><?php echo $project18['brand']; ?></strong><span><?php echo $project18['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=24">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project24['preview_static']; ?>"/></div><strong><?php echo $project24['brand']; ?></strong><span><?php echo $project24['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=5">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project5['preview_static']; ?>"/></div><strong><?php echo $project5['brand']; ?></strong><span><?php echo $project5['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=6">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project6['preview_static']; ?>"/></div><strong><?php echo $project6['brand']; ?></strong><span><?php echo $project6['title']; ?></span></div>
              </a>
            </li>
            <!-- <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=16">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project16['preview_static']; ?>"/></div><strong><?php echo $project16['brand']; ?></strong><span><?php echo $project16['title']; ?></span></div>
              </a>
            </li>
            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3">
              <a href="project.php?id=19">
                <div class="sc" data-hover-text="Watch the video"><div class=""><img src="/assets/img/projects/<?php echo $project19['preview_static']; ?>"/></div><strong><?php echo $project19['brand']; ?></strong><span><?php echo $project19['title']; ?></span></div>
              </a>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-2 popupTrigger" data-popup-id="kasp">
              <div class="sc" data-hover-text="Watch the Video"><div class=""><img alt="Awareness Driver" src="/assets/img/projects/kasp.jpg"/></div><strong>Awareness Drivers</strong><span>Content that will reach as broad of an audience as possible</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="aq">
              <div class="sc" data-hover-text="Watch the video"><div class=""><img alt="Conversion Boosters" src="/assets/img/projects/aq.jpg"/></div><strong>Conversion Boosters</strong><span>Ramp up conversion rates for landing pages, posts, or emails</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="qrk">
              <div class="sc" data-hover-text="Watch the video"><div class=""><img alt="Video Announcements" src="/assets/img/projects/qrk.jpg"/></div><strong>Video Announcements</strong><span>Videos to promote a new feature or product</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-1 popupTrigger" data-popup-id="qdb">
              <div class="sc" data-hover-text="View the project"><div class=""><img alt="Promo Videos" src="/assets/img/projects/qdb.jpg"/></div><strong>Promo Videos</strong><span>Create a powerful video to engage your clients and customers</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-2 popupTrigger" data-popup-id="spg">
              <div class="sc" data-hover-text="Watch the Video"><div class=""><img alt="Case Studies" src="/assets/img/projects/spg.jpg"/></div><strong>Case Studies</strong><span>Tell about your achievements in an entertaining way</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="lfj">
              <div class="sc" data-hover-text="Watch the video"><div class=""><img alt="Animated Stories" src="/assets/img/projects/lfj.jpg"/></div><strong>Animated Stories</strong><span>Bring value to your audience through beautiful animation</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="dbs">
              <div class="sc" data-hover-text="Watch the video"><div class=""><img alt="Visual IDs" src="/assets/img/projects/dbs.jpg"/></div><strong>Visual IDs</strong><span>Make your video content unique with a powerful intro</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-1 popupTrigger" data-popup-id="rlf">
              <div class="sc" data-hover-text="Watch the Video"><div class=""><img alt="Business Explainer" src="/assets/img/projects/rlf.jpg"/></div><strong>Business Explainers</strong><span>A quick video that will explain what your business is all about</span></div>
            </li>

            <li class="col-6-12 col-tablet-1-2 col-phablet-1-1 ae-3 popupTrigger" data-popup-id="pic">
              <div class="sc" data-hover-text="Watch the Gallery"><div class=""><img alt="Marketing Content" src="/assets/img/projects/girl.gif"/></div><strong>Marketing Content</strong><span>Spice up your blog posts with gifs, photos, or illustrations</span></div>
            </li> -->
          </ul>

        </div>
      </div>
    </div>
  </div>
</section>



<!-- Popup Video #1 -->
<div class="popup autoplay" data-popup-id="aq">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/123399887?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #2 -->
<div class="popup autoplay" data-popup-id="kasp">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/110571939?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #3 -->
<div class="popup autoplay" data-popup-id="rlf">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/112584852?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #4 -->
<div class="popup autoplay" data-popup-id="lfj">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/93364842?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #5 -->
<div class="popup autoplay" data-popup-id="spg">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/203060483?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #6 -->
<div class="popup autoplay" data-popup-id="dbs">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/69009270?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #7 -->
<div class="popup autoplay" data-popup-id="qrk">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/32226679?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup Video #8 -->
<div class="popup autoplay" data-popup-id="qdb">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="">
          <div class="embedVideo popupContent">
            <iframe src="https://player.vimeo.com/video/227835167?color=ff0179&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Gallery Pop-up -->
<div class="popup autoplay animated" data-popup-id="pic">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap">
        <div class="fix-7-12 popupContent">
          <ul class="slider clickable autoHeight ae-1" data-slider-id="gallery">
            <li class="selected"><img src="/assets/img/gallery/1.jpg" class="wide" alt="Content Marketing Illustration"/></li>
            <li><img src="/assets/img/gallery/2.jpg" width="1200" class="wide" alt="Content Marketing Illustration"/></li>
            <li><img src="/assets/img/gallery/3.jpg" width="700" class="high" alt="Content Marketing Poster"/></li>
            <li><img src="/assets/img/gallery/4.jpg" width="1200" class="wide" alt="Content Marketing Picture"/></li>
            <li><img src="/assets/img/gallery/5.jpg" width="700" class="wide" alt="Content Marketing Map"/></li>
            <li><img src="/assets/img/projects/girl.gif" width="1200" class="wide" alt="Girl with a burning letter GIF"/></li>
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

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>
