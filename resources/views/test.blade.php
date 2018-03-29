
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <script>document.location.href=”http://chiuworking.com”;</script> -->

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- <?php
    header('Location: http://chiuworking.com');
    exit;
    ?> -->

  <?php
  GoogleSafeBrowsing::lookup('https://www.github.com');

  if (GoogleSafeBrowsing::isSecure()) {
      echo '安全的！';
  }


   ?>
<a href="/">jclkjcldjlcs</a>
  </body>
</html>
