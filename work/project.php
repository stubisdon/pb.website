<?php
  //CONNECT DB
  include($_SERVER['DOCUMENT_ROOT'].'/config/setup.php');
  include($_SERVER['DOCUMENT_ROOT'].'/config/data.php');

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  } else {
    $id = 10;
  }

  $q = "SELECT * FROM portfolio WHERE id = $id";
  $r = mysqli_query($db,$q);
  $project = mysqli_fetch_assoc($r);

  //inject params below this line from DB
  $pageMode = "blog"; //???
  $url = "https://paradisebird.co/work/project.php?id=" . $project['id'];
  $type = "article"; //???
  $title = "Paradise Bird | " . $project['title'];
  $description = $project['description'];
  $image = "https://paradisebird.co/assets/img/projects/" . $project['preview_static'];

  // ADD HEADER
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/header.php";
  include_once($path);
?>

<!-- Default approach -->
<section class="slide video autoHeight showcase">
  <div class="content">
    <div class="container grayGradient">
      <div class="wrap bottom left">

        <div class="fix-custom">

          <div class="fix-12-12 toLeft">
            <a href="http://paradisebird.co/work" class="button stroke white rectangular margin-bottom-6 ae-1"><i class="material-icons">arrow_back</i>Back to Catalogue</a>
            <h1 class="ae-2 ae-1"><?php echo $project['brand']; ?> / <?php echo $project['title'] ?></h1>

            <div class="embedVideo noShadow box-90 gaplayvideo" data-popup-id="90">
              <?php echo $project['video']; ?>
            </div>

            <div class="ae-2 margin-top-2"><p><?php echo $project['description']; ?></p></div>

            <ul class="grid left">
              <li class="col-6-12 ae-6">
                <?php if ($project['stillframes']) { ?>
                <h2>Stillframes</h2>
                <ul class="flex noSpaces ae-1 popupTrigger cursorZoomIn margin-bottom-5" data-popup-id="gallery" style="font-size: 0">
                  <?php  for($i = 1; $i <= $project['stillframes_count']; $i++) { ?>
                    <li class="col-4-12 col-dekstop-1-3 col-tablet-1-3">
                      <img src="/assets/img/projects/<?php echo $project['stillframes']; ?>/<?php echo $i; ?>.jpg" class="wide" alt="<?php echo $project['brand']; ?>"/>
                    </li>
                  <?php } ?>
                </ul>
                <?php } ?>

                <!-- <p class="micro">Crew Management <br> Accounting <br> Creative Supervision <br> Location Scouting <br> Risk Management</p> -->
                <!-- <a href="http://paradisebird.co/work" class="button stroke white rectangular">Browse More Work</a> -->
                <!-- <a href="http://paradisebird.co/request" class="button stroke white rectangular">Contact Us</a> -->
                <div class="left margin-top-1 ae-7">
                  <a href="/contact/" class="button stroke white rectangular shiny">Discuss The Project</a>
                  <a href="/work/" class="button stroke white rectangular shiny">Back to Catalogue</a>
                 </div>
              </li>
              <li class="col-6-12 ae-5 equalElement">
                <h2>Credits</h2>
                <p class="micro"><?php echo $project['credits']; ?>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<?php if ($project['stillframes']) { ?>
<!-- Popup Gallery -->
<div class="popup animated" data-popup-id="gallery">
  <div class="close"><svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#close"></use></svg></div>
  <div class="content">
    <div class="container">
      <div class="wrap padding-2">
        <div class="fix-6-12">
          <?php  for($i = 1; $i < $project['stillframes_count']; $i++) { ?>
            <img src="/assets/img/projects/<?php echo $project['stillframes']; ?>/<?php echo $i; ?>.jpg" class="wide" alt="<?php echo $project['brand']; ?>"/>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>

<hr class="hr">

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/footer.php";
   include_once($path);
?>
