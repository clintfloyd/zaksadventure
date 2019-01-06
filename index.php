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
        <img src="images/zak-updated-white.svg" class="logo" />
      </div>
      <video autoplay muted loop id="myVideo">
        <source src="videos/video-bg.mp4" type="video/mp4">
      </video>

      <div class="logo-container"></div>
    </header>

    <div class="container pic-collage">
      <h1>Hi, I'm Zak!</h1>
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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
