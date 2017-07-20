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

      </div>
    </div>

  </div>

<?php include ($footer) ?>
</div>


<?php include( $meta_bot); ?>
</body>
</html>
