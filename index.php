<?php include_once("variables.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Zak's Adventure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Gaegu:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/css/bootstrap-reboot.min.css" />
    <link rel="stylesheet" href="css/css/bootstrap-grid.min.css" />
    <link rel="stylesheet" href="css/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/css/styles.css" />
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-12">
            <img src="images/zak-updated-white.svg" class="logo" />
          </div>
          <div class="col-md-8 col-12 text-right weather-info">
            <span>Currently it's <span><?php echo $temp_in_c; ?></span>&deg;C in <?php echo $CURRENTLY_IN; ?>.</span>
          </div>
        </div>
      </div>

      <div class="container head-message-container">
        <h1>Hi, I'm Zak!</h1>
        <p>A super naughty 2-year-old kid<br /> who lives in Dubai.</p>
      </div>
      <video autoplay muted loop id="myVideo">
        <source src="videos/video-bg.mp4" type="video/mp4">
      </video>

      <div class="logo-container"></div>
    </header>

    <div class="container pic-collage">
      <h2>Woook!</h2>
      <div class="row">
        <?php
        $data = $insta_photos['data'];
        foreach($data as $d){
          $image = $d->images->standard_resolution->url;
          $caption = @$d->caption->text;
          $type = @$d->type;

          if($type == "carousel"){
            $media = stripslashes(json_encode($d->carousel_media));
          }else if($type == "video"){
            $media = ($d->videos->standard_resolution->url);
          }else{
            $media = "";
          }
        ?>
          <div class="col-6 col-md-3 photoContainer <?php echo $type; ?>" id="<?php echo $d->id; ?>">
            <div>
              <a href="javascript:;" class="openImage" data-type="<?php echo $type; ?>"  data-toggle="modal" data-target="#enlargePic" data-media='<?php echo $media; ?>' data-caption="<?php echo $caption; ?>">
                <span style="background-image: url(<?php echo $image; ?>);"></span>
                <p>
                  <?php echo $caption; ?>
                </p>
              </a>
            </div>
          </div>
        <?
        }
        ?>
      </div>
    </div>


    <footer>
      <div class="container">
        <strong>Copyright &copy; <?php echo date("Y"); ?>, Zaks Adventure</strong> <br />No part of this site, zaksadventure.com, may be reproduced in whole or in part in any manner without the permission of the copyright owner.
      </div>
    </footer>

    <div class="popup-container hidden">
      <div class="popup-container--pop">
        <div class="row">
          <div class="col-md-6"
        <img src="https://scontent.cdninstagram.com/vp/e20f2492fef7b68db157674b349257e4/5CCE1E5C/t51.2885-15/sh0.08/e35/s640x640/47317841_375789222994883_5602856239675313345_n.jpg?_nc_ht=scontent.cdninstagram.com" />
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
