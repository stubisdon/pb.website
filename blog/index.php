<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/header.php";
   include_once($path);
   $title = "About Us";
?>

<!-- Default approach -->
<section class="slide video autoHeight">
  <div class="content">
    <div class="container grayGradient">
      <div class="wrap bottom padding-top-12 padding-bottom-4 left">

        <div class="fix-custom margin-top-10">
          <h1 class="ae-1 bold pb-title fromBottom">Paradise Blog</h1>
          <p class="hero ae-2 fix-8-12 toLeft">Articles about Video Production as a Craft</p>

          <div class="fix-12-12 toLeft">
            <ul class="flex">
              <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                <div class="ae-8"><a class="underline" href="/blog/how-to-make-a-commercial-video/"><img class="ae-3 fromCenter margin-bottom-3 margin-top-5" src="https://cdn.dribbble.com/users/3460/screenshots/1080362/mcfly_gear_85.png" height="200" alt="Dmitry Kotov">
                <h3 class="ae-4">How to make a successful commercial video (live action)</h3></a></div>
                <p class="micro ae-5">Feb 22, 2018</p>
                <p class="ae-6">In this 9 min read you'll learn about the main stages of Video Production.</p>
                <div class="ae-8"><a class="underline" href="/blog/how-to-make-a-commercial-video/">Read Full Article</a></div>
              </li>
              <!--<li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                <img class="ae-3 fromCenter margin-bottom-3 margin-top-5 circle" src="https://pbs.twimg.com/profile_images/460565537752236032/zTibH_8B_400x400.jpeg" height="200" alt="Sergey Shmidt">
                <h3 class="ae-4">Post No.2</h3>
                <p class="micro ae-5">Nov 16, 2017</p>
                <p class="ae-6">Does Expensive Gear Matter? This 3 min read is about Getting Pro Footage for Cheap.</p>
                <div class="ae-8"><a class="underline" href="#">Read a Full Article</a></div>
              </li>
              <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                <img class="ae-3 fromCenter margin-bottom-3 margin-top-5 circle" src="https://pbs.twimg.com/profile_images/460565537752236032/zTibH_8B_400x400.jpeg" height="200" alt="Sergey Shmidt">
                <h3 class="ae-4">Sergey Shmidt</h3>
                <p class="micro ae-5">Art Director</p>
                <p class="ae-6">Co-founder of designmodo.com, Graphic Designer and CTO of all of their products. 7 years of Web Development experience.</p>
                <div class="margin-bottom-2 ae-7">
                  <a class="socialIcon" href="http://www.shmidt.co/" target="_blank"><i class="material-icons">language</i></a>
                  <a class="socialIcon" href="https://twitter.com/monstercritic" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
                </div>
                <div class="ae-8"><a class="underline" href="#">Say hi to Sergey</a></div>
              </li>
              <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                <img class="ae-3 fromCenter margin-bottom-3 margin-top-5 circle" src="https://d3vv6lp55qjaqc.cloudfront.net/items/3K313B2D3u1H152Z3D3T/Image%202017-11-02%20at%205.13.10%20PM.jpg?X-CloudApp-Visitor-Id=636497&v=9235d330" height="200" alt="Dmitry Kotov">
                <h3 class="ae-4">Dmitry Kotov</h3>
                <p class="micro ae-5">Executive Producer</p>
                <p class="ae-6">Completed over 50 projects in fields of Video Production, Web and Game Development as an Executive Manager.</p>
                <div class="margin-bottom-2 ae-7">
                  <a class="socialIcon" href="http://dmitrykotov.com/" target="_blank"><i class="material-icons">language</i></a>
                  <a class="socialIcon" href="https://www.linkedin.com/in/kotovdmitry" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use></svg></a>
                </div>
                <div class="ae-8"><a class="underline" href="#">Say hi to Dmitry</a></div>
              </li>
              <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                <img class="ae-3 fromCenter margin-bottom-3 margin-top-5 circle" src="https://pbs.twimg.com/profile_images/460565537752236032/zTibH_8B_400x400.jpeg" height="200" alt="Sergey Shmidt">
                <h3 class="ae-4">Sergey Shmidt</h3>
                <p class="micro ae-5">Art Director</p>
                <p class="ae-6">Co-founder of designmodo.com, Graphic Designer and CTO of all of their products. 7 years of Web Development experience.</p>
                <div class="margin-bottom-2 ae-7">
                  <a class="socialIcon" href="http://www.shmidt.co/" target="_blank"><i class="material-icons">language</i></a>
                  <a class="socialIcon" href="https://twitter.com/monstercritic" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
                </div>
                <div class="ae-8"><a class="underline" href="#">Say hi to Sergey</a></div>
              </li>
              <li class="col-4-12 col-tablet-1-2 col-phablet-1-1">
                <img class="ae-3 fromCenter margin-bottom-3 margin-top-5 circle" src="https://pbs.twimg.com/profile_images/460565537752236032/zTibH_8B_400x400.jpeg" height="200" alt="Sergey Shmidt">
                <h3 class="ae-4">Sergey Shmidt</h3>
                <p class="micro ae-5">Art Director</p>
                <p class="ae-6">Co-founder of designmodo.com, Graphic Designer and CTO of all of their products. 7 years of Web Development experience.</p>
                <div class="margin-bottom-2 ae-7">
                  <a class="socialIcon" href="http://www.shmidt.co/" target="_blank"><i class="material-icons">language</i></a>
                  <a class="socialIcon" href="https://twitter.com/monstercritic" target="_blank"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use></svg></a>
                </div>
                <div class="ae-8"><a class="underline" href="#">Say hi to Sergey</a></div>
              </li>-->
            </ul>
          </div>


          <h2 class="ae-9 bold fromBottom margin-top-10">Contact Us</h2>
          <p class="ae-10 fix-8-12 toLeft">
            800 H Avenue,<br>
            San Francisco, CA, 94130 510.838.1346<br>
            General Inquiries <a class="underline" href="mailto:ask@paradisebird.co">ask@paradisebird.co</a>
          </p>


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
