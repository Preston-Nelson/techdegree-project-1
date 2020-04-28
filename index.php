<!DOCTYPE php>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
  <!-- This includes the php file from it's folder -->
  <?php include 'inc/functions.php';?>
  <!-- 
    This refeshes the webpage after a given amount of time.
    Got this \/ from stackoverflow @ https://stackoverflow.com/a/4644098
   -->
  <meta http-equiv="refresh" content="30" >
</head>
<?php bodyStart(); ?>
  <div class="container">
    <div id="quote-box">
      <!-- Calls print quote function to print the quote -->
      <?php printQuote() ?>
    </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>