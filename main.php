<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo($site_title) ?></title>
  <meta name="description" content="<?php echo($site_description); ?>">
  <meta name="keywords" content="<?php echo($site_keywords); ?>">
  <?php include($meta_top) ?>
  <link href="http://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
  <?php include ($header) ?>

  <div class="ban_1">

    <div class="row">
      <div class="col_12">

        <?php include('logic.php') ?>

        
        <!-- <h1>Is my code working today?</h1>

        <div id="yes" class="mood-txt"><i class="em em-smile"></i></br>Yes!</div>
        
        <div id="no" class="mood-txt"><i class="em em-angry"></i></br>No!</div> -->
      </div>
    </div>

  </div>

<?php include ($footer) ?>
</div>


<?php include( $meta_bot); ?>
</body>
</html>
